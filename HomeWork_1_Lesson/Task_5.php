<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 09.09.2018
 * Time: 0:52
 */

$a = rand(10,99); // 1;
$b = rand(10,99); // 2;
print "Исходные значения: a = $a, b = $b";
$a = $a + $b; // (3)
$b = $a - $b; // (3 - 2) = 1
$a = $a - $b; // (3 - 1) = 2
print "<br>Меняем местами: a = $a, b = $b";