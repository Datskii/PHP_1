<?php
header("Content-type: text/html; charset=utf-8");
include_once  __DIR__ . '/../config/main.php';
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "render.php";
session_start();
if (!$userId = $_SESSION['user_id']) {
    redirect('login.php');
}
$user = getUserById($userId);
render('account', ['user' => $user]);