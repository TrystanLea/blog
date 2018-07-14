<?php

$q = "about";
if (isset($_GET['q'])) $q = $_GET['q'];

$lang = "en";
if (isset($_GET['cy'])) $lang = "cy";

include "lib/core.php";
$path = get_application_path();

include "lib/Parsedown.php";
$Parsedown = new Parsedown();

$posts = load_pages($lang);

$content = file_get_contents("pages/$lang/$q.md");
$content = preg_replace('/^.+\n/', '', $content);
$content = preg_replace('/^.+\n/', '', $content);
$content = $Parsedown->text($content);

print view("theme.php",array("posts"=>$posts, "title"=>$posts[$q]["title"], "published"=>$posts[$q]["published"], "content"=>$content));

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
                $published = trim($tmp[1]);
                $time = strtotime($published);
                $published = date("jS F, Y",$time);
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
