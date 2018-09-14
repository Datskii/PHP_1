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
function translit($string)
{
    $dictionary = [
        "а" => "a",
        "А" => "A",
        "б" => "b",
        "Б" => "B",
        "в" => "v",
        "В" => "V",
        "г" => "g",
        "Г" => "G",
        "д" => "d",
        "Д" => "D",
        "е" => "e",
        "Е" => "E",
        "ё" => "e",
        "Ё" => "E",
        "ж" => "zh",
        "Ж" => "Zh",
        "з" => "z",
        "З" => "Z",
        "и" => "i",
        "И" => "I",
        "й" => "y",
        "Й" => "Y",
        "к" => "k",
        "К" => "K",
        "л" => "l",
        "Л" => "L",
        "м" => "m",
        "М" => "M",
        "н" => "n",
        "Н" => "N",
        "о" => "o",
        "О" => "O",
        "п" => "p",
        "П" => "P",
        "р" => "r",
        "Р" => "R",
        "с" => "s",
        "С" => "S",
        "т" => "t",
        "Т" => "T",
        "у" => "u",
        "У" => "U",
        "ф" => "f",
        "Ф" => "F",
        "х" => "h",
        "Х" => "H",
        "ц" => "c",
        "Ц" => "C",
        "ч" => "ch",
        "Ч" => "Ch",
        "ш" => "sh",
        "Ш" => "Sh",
        "щ" => "sch",
        "Щ" => "Sch",
        "ь" => "'",
        "ы" => "y",
        "ъ" => "''",
        "э" => "e",
        "Э" => "E",
        "ю" => "yu",
        "Ю" => "Yu",
        "я" => "ya",
        "Я" => "Ya"
    ];

    $stringToArray = preg_split("//u", $string, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($stringToArray as $key => $char) {
        foreach ($dictionary as $rus => $trans) {
            if ($char == $rus) {
                $stringToArray[$key] = $trans;
                break;
            }
        }

    }
    return implode($stringToArray);
}

print "<b>Исходная строка: </b>" . $string . "<br>";
print "<b>Преобразованная строка: </b>" . translit($string);