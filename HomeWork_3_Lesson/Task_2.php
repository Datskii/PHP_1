<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 15.09.2018
 * Time: 0:15
 */
header("Content-type:text/html; charset=utf-8");

$i = 0;

do {
    if ($i == 0) {
        $num = "Ноль";
    } else if (($i % 2) == 0) {
        $num = "Четное число";
    } else {
        $num = "Нечетное число";
    }
    print "Цифра $i это " . $num . "<br>";
} while ($i++ < 10);
