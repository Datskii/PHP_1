<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 09.09.2018
 * Time: 1:02
 */

$name ='Игорь';
$age = 31;
$date = date('D M Y H i');

$block = "Меня зовут $name.<br>Через год мне будет "
.($age+1)." года.<br>А еще через год "
.($age+2). " года.<br>На моих часах сейчас: $date.<br>";

print $block."<br>";
print str_replace(" ", "_", $block)."<br>";

$array = explode("<br>", $block);
print $array[3]."<br>";