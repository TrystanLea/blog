<?php

function server($index)
{
    $val = null;
    if (isset($_SERVER[$index])) $val = $_SERVER[$index];
    return $val;
}

function get_application_path()
{
    // Default to http protocol
    $proto = "http";

    // Detect if we are running HTTPS or proxied HTTPS
    if (server('HTTPS') == 'on') {
        // Web server is running native HTTPS
        $proto = "https";
    } elseif (server('HTTP_X_FORWARDED_PROTO') == "https") {
        // Web server is running behind a proxy which is running HTTPS
        $proto = "https";
    }

    if( isset( $_SERVER['HTTP_X_FORWARDED_SERVER'] ))
        $path = dirname("$proto://" . server('HTTP_X_FORWARDED_SERVER') . server('SCRIPT_NAME')) . "/";
    else
        $path = dirname("$proto://" . server('HTTP_HOST') . server('SCRIPT_NAME')) . "/";

    return $path;
}

function view($filepath, array $args)
{
    extract($args);
    ob_start();
    include "$filepath";
    $content = ob_get_clean();
    return $content;
}

// Escape a string for safe output in html
function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Url to a local asset with a cache busting version based on modification time
function asset($file)
{
    global $path;
    return $path.$file."?v=".filemtime($file);
}
