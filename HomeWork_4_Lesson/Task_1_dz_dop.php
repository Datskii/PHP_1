<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 20.09.2018
 * Time: 12:32
 */

header("Content-type:text/html; charset=utf-8");

define("PUBLIC_DIR", ".");
$dir = $_GET['dir'];
if (!$dir) {
    $dir = PUBLIC_DIR;
}

function spaces($path) {
    $count = substr_count($path, "/") - 1;
    $space = str_repeat("&nbsp; &nbsp; ", $count);
    return $space;
}

function render($directory, $filename) {
    if ($filename == "." || $filename == "..") {
        return;
    }
    $path = $directory . "/" . $filename;
    if (is_dir($path)) {
        $type = ['DIR'];
    } else {
        $type = "<small>";
        $fileInfo = " [" . date("d.m.Y H:i", filemtime($path)) . "] 
        [" . filesize($path) . " байт]
         [" . substr(sprintf('%o', fileperms($path)), -4) . "]</small>";
    }
    if (stristr(getenv('OS'), "win")) {
        $filename = iconv("WINDOWS-1251", "UTF-8", $filename);
    }
    echo spaces($path) . "{$type}{$filename}{$fileInfo}<br>";

}

function viewDir($directory = PUBLIC_DIR)
{
    $dir = scandir($directory, 0);
    foreach ($dir as $filename) {
        $path = $directory . "/" . $filename;
        render($directory, $filename);
        if (is_dir($path) && $filename != "." && $filename != "..") {
            viewDir($path);
        }
    }
}

viewDir($dir);