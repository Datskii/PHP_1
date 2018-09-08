<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 08.09.2018
 * Time: 23:42
 */
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true? --> сравнение без приведения типов
var_dump((int)'012345'); // Почему 12345? --> int целое число

var_dump((float)123.0 === (int)123.0); // Почему false? сравнение типов и значений
// значения равны, а типы нет

var_dump((int)0 === (int)'hello, world'); // Почему true? При преобразовании строки в число,
// значение определяется по начальной части строки. Если строка начинается с верного числового
// значения, будет использовано это значение. Иначе значением будет 0 (ноль). Верное числовое
// значение - это одна или более цифр (могущих содержать десятичную точку), по желанию предваренных
// знаком, с последующим необязательным показателем степени. Показатель степени - это 'e' или 'E'
// с последующими одной или более цифрами. В итоге, оба значения равны 0 = 0 + одинаковые типы
// данных, следовательно 'true'.
