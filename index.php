<?php

$q = "heatpump2021";
if (isset($_GET['q']) && trim($_GET['q'],"/")!="") $q = trim($_GET['q'],"/");

$lang = "en";

include "lib/core.php";
$path = get_application_path();

include "lib/Parsedown.php";
$Parsedown = new Parsedown();

// load menu & convert to assoc array by href=>group
include "menu.php";
$href_group = array();
foreach ($menu as $group=>$items) { foreach ($items as $href=>$val) $href_group[$href] = $group; }
if (isset($href_group[$q])) $active_group = $href_group[$q]; else $active_group = false;

$posts = load_pages($lang);

$content = false;
if (preg_replace('/[^\p{N}\p{L}_\/-]/u','',$q) != $q) {
    // invalid characters, fall through to 404
}

else if (file_exists("pages/$lang/$q.md")) {
    $content = file_get_contents("pages/$lang/$q.md");
    $content = preg_replace('/^.+\n/', '', $content);
    $content = preg_replace('/^.+\n/', '', $content);
    $content = $Parsedown->text($content);  
}

else if (file_exists("pages/$lang/$q.html")) {
    $content = file_get_contents("pages/$lang/$q.html");
}

else if (file_exists("pages/$lang/$q.php")) {
    $content = view("pages/$lang/$q.php",array());
}

$title = isset($posts[$q]) ? $posts[$q]["title"] : "";
$published = isset($posts[$q]) ? $posts[$q]["published"] : "";

if ($content === false) {
    http_response_code(404);
    $title = "Page not found";
    $content = "<p>Sorry, there is no page at this address. Try one of the latest posts:</p><ul>";
    foreach (array_slice($posts, 0, 5) as $post) {
        $content .= "<li><a href='".$path.$post["link"]."'>".$post["title"]."</a></li>";
    }
    $content .= "</ul>";
}

print view("theme.php",array("q"=>$q, "menu"=>$menu, "active_group"=>$active_group, "posts"=>$posts, "title"=>$title, "published"=>$published, "content"=>$content));

// -----------------------------------------------------------------------------------------------------------

function load_pages($lang)
{
    $scan = scandir("pages/$lang");
    $posts = array();
    $postdates = array();
    foreach ($scan as $file) {
        $parts = explode(".md",$file);
        if (count($parts)==2) {
            $page = $parts[0];
        
            // Read in title and published date
            $fh = fopen("pages/$lang/".$page.".md","r");
            
            $tmp = explode("## title:",fgets($fh));
            if (count($tmp)==2) $title = trim($tmp[1]); else $title = $parts[0];
            
            $tmp = explode("### published:",fgets($fh));
            if (count($tmp)==2) {
                $tmp = explode(",",$tmp[1]);
                $published = trim($tmp[0]);
                if (count($tmp)==2) {
                    $published = "";
                    $time = false;
                } else {
                    $time = strtotime($published);
                    $published = date("jS F, Y",$time);
                }
            } else { 
                $published = "";
                $time = false;
            }
            fclose($fh);
            
            $posts[$page] = array("link"=>$page, "title"=>$title, "time"=>$time, "published"=>$published);
            $postdates[$page] = $time;
        }
    }
    
    arsort($postdates);
    
    $postsbydate = array();
    foreach ($postdates as $key=>$val) {
        $postsbydate[$key] = $posts[$key];
    }
    
    return $postsbydate;
}
