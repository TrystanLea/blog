<?php

$q = "heatpump2021";
if (isset($_GET['q']) && trim($_GET['q'],"/")!="") $q = trim($_GET['q'],"/");

$lang = "en";

include "lib/core.php";
include "lib/blog.php";
include "lib/Parsedown.php";
$path = get_application_path();

// load menu & convert to assoc array by href=>group
include "menu.php";
$href_group = array();
foreach ($menu as $group=>$items) { foreach ($items as $href=>$val) $href_group[$href] = $group; }
if (isset($href_group[$q])) $active_group = $href_group[$q]; else $active_group = false;

// Only pages found by scanning the pages folder can be served
$pages = load_pages($lang);
$posts = listed_pages($pages);

if (isset($pages[$q])) {
    $page = $pages[$q];
    $title = $page["title"];
    $published = $page["published"];
    $content = render_page($page);
} else {
    http_response_code(404);
    $title = "Page not found";
    $published = "";
    $content = "<p>Sorry, there is no page at this address. Try one of the latest posts:</p><ul>";
    foreach (array_slice($posts, 0, 5) as $post) {
        $content .= "<li><a href='".$path.$post["link"]."'>".$post["title"]."</a></li>";
    }
    $content .= "</ul>";
}

print view("theme.php",array("q"=>$q, "menu"=>$menu, "active_group"=>$active_group, "posts"=>$posts, "title"=>$title, "published"=>$published, "content"=>$content));
