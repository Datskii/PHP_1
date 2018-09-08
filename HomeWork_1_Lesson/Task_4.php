<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 09.09.2018
 * Time: 0:27
 */

$h1 = '<h1>PHP is awesome!!!</h1>';
$title = '<title>Task_4 PHP</title>';
$year = date('D*M*Y');

if ($_POST['user']) {
    print "Hello, ";
    // вывести на экран значение параметра 'user' из
// переданной на обработку формы
    print $_POST['user'];
    print "!<br>";

    print $year;
// иначе - вывести на экран саму форму
} else {
    print  $title;
    print  $h1;
    print <<<_HTML_
    
<form method="post" action="$_SERVER[PHP_SELF]">
Please, enter your name: <input type="text" name="user">
<br>
<button type="submit">Say hello</button>
</form>
_HTML_;
}