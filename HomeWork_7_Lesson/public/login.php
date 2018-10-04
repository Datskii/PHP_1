<?php
include_once  __DIR__ . '/../config/main.php';
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "render.php";
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($user = getUserByLoginPass($login, $password)) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        redirect('account.php');
    } else {
        $message = 'Неверная пара: логин и пароль';
        redirect('registration.php');
    }

}
render('login', []);