<?php

function view($filepath, array $args)
{
    extract($args);
    ob_start();
    include "$filepath";
    $content = ob_get_clean();
    return $content;
}
