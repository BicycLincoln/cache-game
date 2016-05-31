<?php

/**
 * overridden `asset` helper function that adds cachebuster to assets
 * @param $path
 * @param null $secure
 * @return string
 */
function asset($path, $secure = null)
{
    $p = public_path($path);
    $ext = pathinfo($p, PATHINFO_EXTENSION);
    $running = substr($path, 0, -strlen($ext));
    if (file_exists($p)) {
        $running .= filemtime($p) . '.';
    }
    return URL::asset($running . $ext, $secure);
}