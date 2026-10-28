<?php

// Split a page into its front matter and body. Front matter is a block of
// "key: value" lines between two --- markers at the very top of the file:
//
// ---
// title: My post
// published: 2024-01-02
// ---
function parse_front_matter($text)
{
    $meta = array();
    if (preg_match('/^---\r?\n(.*?)\r?\n---[ \t]*(\r?\n|$)/s', $text, $match)) {
        foreach (preg_split('/\r?\n/', $match[1]) as $line) {
            if (preg_match('/^([a-zA-Z_]+):\s*(.*)$/', $line, $kv)) {
                $val = trim($kv[2]);
                // strip optional surrounding quotes
                if (preg_match('/^(["\'])(.*)\1$/', $val, $quoted)) $val = $quoted[2];
                $meta[strtolower($kv[1])] = $val;
            }
        }
        $text = substr($text, strlen($match[0]));
    }
    return array($meta, $text);
}

// Scan pages/$lang (including sub folders) for .md, .html and .php pages and
// read their front matter. Returns pages keyed by url, newest first.
function load_pages($lang)
{
    $dir = "pages/$lang";
    $pages = array();

    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS));
    foreach ($files as $file) {
        $ext = $file->getExtension();
        if (!in_array($ext, array("md", "html", "php"))) continue;

        $filepath = $file->getPathname();
        $link = substr($filepath, strlen($dir) + 1, -(strlen($ext) + 1));

        // Front matter is at the top of the file, so only read the first few lines
        $head = "";
        $fh = fopen($filepath, "r");
        for ($i = 0; $i < 20 && ($line = fgets($fh)) !== false; $i++) $head .= $line;
        fclose($fh);
        list($meta) = parse_front_matter($head);

        $time = false;
        $published = "";
        if (!empty($meta["published"])) {
            $time = strtotime($meta["published"]);
            if ($time) $published = date("jS F, Y", $time);
        }

        $pages[$link] = array(
            "link" => $link,
            "file" => $filepath,
            "type" => $ext,
            "title" => isset($meta["title"]) ? $meta["title"] : $link,
            "description" => isset($meta["description"]) ? $meta["description"] : "",
            "time" => $time,
            "published" => $published,
            "draft" => isset($meta["draft"]) && $meta["draft"] == "true"
        );
    }

    uasort($pages, function ($a, $b) { return $b["time"] <=> $a["time"]; });
    return $pages;
}

// Pages to show in post listings: everything except drafts
function listed_pages($pages)
{
    return array_filter($pages, function ($page) { return !$page["draft"]; });
}

// Render a page's body to html, returns the html and a table of contents
function render_page($page)
{
    if ($page["type"] == "php") {
        // php pages are interactive, output them untouched
        list($meta, $body) = parse_front_matter(view($page["file"], array()));
        return array($body, array());
    }

    list($meta, $body) = parse_front_matter(file_get_contents($page["file"]));

    if ($page["type"] == "md") {
        $Parsedown = new Parsedown();
        $body = $Parsedown->text($body);
    }

    // Lazy load images and let wide tables scroll on small screens
    $body = preg_replace('/<img (?![^>]*loading=)/i', '<img loading="lazy" ', $body);
    $body = str_replace(array("<table", "</table>"), array("<div class=\"table-wrap\"><table", "</table></div>"), $body);

    return add_heading_anchors($body);
}

// Give h2-h4 headings an id and anchor link so sections can be linked to.
// Returns the html and a table of contents of the h2 and h3 headings.
function add_heading_anchors($html)
{
    $toc = array();
    $used = array();

    $html = preg_replace_callback('/<h([2-4])>(.*?)<\/h\1>/s', function ($match) use (&$toc, &$used) {
        $level = (int) $match[1];
        $text = trim(html_entity_decode(strip_tags($match[2]), ENT_QUOTES, 'UTF-8'));

        $id = trim(preg_replace('/[^\p{L}\p{N}]+/u', '-', mb_strtolower($text)), "-");
        if ($id == "") $id = "section";
        $base = $id;
        for ($n = 2; isset($used[$id]); $n++) $id = "$base-$n";
        $used[$id] = true;

        if ($level <= 3) $toc[] = array("id" => $id, "text" => $text, "level" => $level);

        return "<h$level id=\"$id\">".$match[2]." <a class=\"anchor\" href=\"#$id\" aria-label=\"Link to this section\">#</a></h$level>";
    }, $html);

    return array($html, $toc);
}

// Previous and next pages within the menu group (series) of the current page
function series_nav($menu, $group, $q)
{
    if (!$group) return false;
    $links = array_keys($menu[$group]);
    $pos = array_search($q, $links);

    $nav = array("prev" => false, "next" => false);
    if ($pos > 0) $nav["prev"] = array("href" => $links[$pos - 1], "label" => $menu[$group][$links[$pos - 1]]);
    if ($pos < count($links) - 1) $nav["next"] = array("href" => $links[$pos + 1], "label" => $menu[$group][$links[$pos + 1]]);
    return $nav;
}

// Plain text summary for meta descriptions: the first paragraph of the page
function page_summary($html, $length = 160)
{
    if (!preg_match_all('/<p>(.*?)<\/p>/s', $html, $matches)) return "";
    foreach ($matches[1] as $paragraph) {
        $text = trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($paragraph), ENT_QUOTES, 'UTF-8')));
        // skip short lines such as "Early draft, work in progress"
        if (strlen($text) < 60) continue;
        if (mb_strlen($text) > $length) {
            $text = mb_substr($text, 0, $length);
            $text = preg_replace('/\s+\S*$/', '', $text)."…";
        }
        return $text;
    }
    return "";
}

// Absolute url of the first image in the page, used for link previews
function first_image($html)
{
    global $path;
    if (!preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $match)) return "";
    $src = $match[1];
    if (!preg_match('/^https?:\/\//', $src)) $src = $path.ltrim($src, "/");
    return $src;
}
