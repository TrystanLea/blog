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

// Render a page's body to html
function render_page($page)
{
    if ($page["type"] == "php") {
        $text = view($page["file"], array());
    } else {
        $text = file_get_contents($page["file"]);
    }
    list($meta, $body) = parse_front_matter($text);

    if ($page["type"] == "md") {
        $Parsedown = new Parsedown();
        $body = $Parsedown->text($body);
    }
    return $body;
}
