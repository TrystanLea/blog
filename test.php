<?php


$scan = scandir("pages");
$posts = array();
foreach ($scan as $page) {
    $parts = explode(".md",$page);
    if (count($parts)==2) {
    
        // Read in title
        $fh = fopen("pages/".$page,"r");
        $tmp = explode("## title:",fgets($fh));
        if (count($tmp)==2) $title = $tmp[1]; else $title = $parts[0];
        $tmp = explode("### published:",fgets($fh));
        if (count($tmp)==2) $published = $tmp[1]; else $published = "";
        fclose($fh);
        
        $posts[] = array("link"=>$parts[0], "title"=>$title, "published"=>$published);
    }
}
