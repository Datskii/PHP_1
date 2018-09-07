<?php
/**
 * Created by PhpStorm.
 * Date: 05.09.2018
 * Time: 23:42
 */
// вывести на экран приветствие, если форма
// передана на обработку
if ($_POST['user']) {
print "Hello, ";
    // вывести на экран значение параметра 'user' из
// переданной на обработку формы
print $_POST['user'];
print "!";
// иначе - вывести на экран саму форму
} else {
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="user">
<br>
<button type="submit">Say hello</button>
</form>
_HTML_;
}
