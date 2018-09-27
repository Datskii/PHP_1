<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 27.09.2018
 * Time: 13:53
 */

/*Файлы конфигурации*/
require_once "../config/main.php";
$config = include CONFIG_DIR . 'db.php';

/*Библиотека - Генерация thumbnails*/
require_once VENDOR_DIR . "funcImgResize.php";
/*Подключение к БД*/
$conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);

include ENGINE_DIR . "render.php";
include ENGINE_DIR . "uploads.php";
include ENGINE_DIR . "counters.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
    uploadsFiles($conDB);
}
renderGallery($conDB, null);
/*Закрытие соединения с БД*/
mysqli_close($conDB);