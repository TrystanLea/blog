<?php

function server($index)
{
    $val = null;
    if (isset($_SERVER[$index])) $val = $_SERVER[$index];
    return $val;
}

// Base url of the site. Request headers (Host, X-Forwarded-*) can be set by
// anyone, so only localhost is trusted for local development and everything
// else gets the production url.
function get_application_path()
{
    $production_url = "https://trystanlea.org.uk/";

    $host = server('HTTP_HOST');
    if ($host && preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/', $host)) {
        return "http://$host" . rtrim(dirname(server('SCRIPT_NAME')), "/") . "/";
    }
    return $production_url;
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

// Inline svg icon from the sprite in lib/icons.php
function icon($name)
{
    return '<svg class="icon" aria-hidden="true"><use href="#icon-'.h($name).'"></use></svg>';
}
