<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 15.09.2018
 * Time: 0:15
 */
header("Content-type:text/html; charset=utf-8");

$string = "<p>1. Нейросеть научили создавать видеоигры.</p>
<p>2. Искусственный интеллект создал несколько рецептов пиццы.</p>
<p>3. Искусственный интеллект научился манипулировать объектами, увиденными впервые.</p>";

function underline($string)
{
    $dictionary = [
        " " => "_"
    ];

    $stringToArray = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($stringToArray as $key => $char) {
        foreach ($dictionary as $symbol => $item) {
            if ($char == $symbol) {
                $stringToArray[$key] = $item;
                break;
            }
        }
    }
    return implode($stringToArray);
}

print "<b>Исходная строка: </b>" . $string . "<br>";
print "<b>Преобразованная строка: </b>" . underline($string);