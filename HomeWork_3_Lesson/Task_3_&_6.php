<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 15.09.2018
 * Time: 0:15
 */
header("Content-type:text/html; charset=utf-8");

$arr = [
    "Московская область" => ["москва", "Зеленоград", "Клин", "Королёв"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволжск", "Павловск", "Кронштадт"],
    "Ростовская область" => ["Ростов-на-Дону", "Батайск", "Каменск-Шахтинский", "Таганрог"],
    "Республика Крым" => ["Симферополь", "Керчь", "Ялта", "Евпатория"],
];

foreach ($arr as $state => $towns) {
    print "<ul>$state: </ul>";
    foreach ($towns as $key => $value) {
        $list = ($key < count($towns) - 1) ? " " : "";
        print "<li>$value.$list</li>";
    }
    print "<br>";
}