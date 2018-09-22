<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 22.09.2018
 * Time: 22:38
 */

header("Content-type:text/html; charset=utf-8");

include "../config/main.php";
function uploadsFiles()
{
    foreach ($_FILES as $file) {
        $fileType = explode("/", $file['type'])[0];
        if ($file['error'] != 0) {
            $message = "Произошла ошибка: " . $file['error'] . "!";
        } elseif ($fileType != "image") {
            $message = "Неверный тип файла: " . $file['name'] . "!";
        } elseif ($file['size'] > 1048576) {
            $message = "Слишком большой размер файла: " . $file['size'] . "! Не более 1Мб!";
        } else {
            move_uploaded_file($file['tmp_name'], IMAGES_DIR . $file['name']);
            $message = "Загрузка файла: " . $file['name'] . " успешно выполнена!";
        }
        print '<h4>' . $message . '</h4>';
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
    uploadsFiles();
}
function scanDirectory()
{

    $dir = opendir(IMAGES_DIR);
    while ($filename = readdir($dir)) {
        if (!is_dir($filename)) {
            $files[] = $filename;
        }
    }
    closedir($dir);
    return $files;
}
function renderGallery()
{

    print '<h3>Содержимое каталога: "' . IMAGES_DIR . '"</h3>';

    $files = scanDirectory();
    if(count($files) > 0) {
        print '<ul>';
        foreach ($files as $fileName) {
            $fileNameFull = IMAGES_DIR . $fileName;

            print '<li><a href="' . $fileNameFull . '" target="_blank">';
            print '<img src="' . $fileNameFull . '"/></a></li>';
        }
        print '</ul>';
    } else {
        print '<h4>Каталог пуст</h4>';
    }
}
renderGallery();
?>
<style>
    ul {
list-style-type: none;
        display: flex;

    }
    img {
        width: 200px;
    }
</style>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit" value="Отправить">
</form>
