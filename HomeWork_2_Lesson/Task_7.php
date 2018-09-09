<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 10.09.2018
 * Time: 0:09
 */

function hoursTest($hour) {
    if ($hour === 1 || $hour === 21) {
        $hourString = "час";
    } else if (($hour >= 2 && $hour <= 4)||($hour >= 22 && $hour<= 24)) {
        $hourString = "часa";
    } else {
        $hourString = "часов";
    }
    return $hourString;
}

function minutesTest ($minute) {
    if (strlen($minute) < 2) {
        $minute = "0".$minute;
    }
    $min = substr($minute, 1, 1);
    if ($min === 1 && $min !== 11) {
        $minuteString = "минута";
    } else if (($minute > 1 && $minute < 5)
    || (($min > 1 && $min < 5) &&(($minute % 100) > 20))){
        $minuteString = "минуты";
    } else {
        $minuteString = "минут";
    }
    return $minuteString;
}

function timeTest($hour, $minute) {
    if ((!is_numeric($hour) || !is_numeric($minute))
        || ($hour < 0 || $hour > 24) || ($minute < 0 || $minute > 60)
    ) {
        $result = "Неверные исходные данные";
    } else {
        $result = "$hour ".hoursTest($hour)." $minute ".minutesTest($minute);
    }
    return $result;
}

for ($i = 0; $i < 6; $i++) {
    $h = rand(0, 23);
    $m = rand(0, 59);
    $randH = time() + (7 * $h * 60 * 60);
    $randM = time() + (7 * 24 * $m * 60);
    $hour = date("H", $randH);
    $minute = date("i", $randM);
    print "Исходные данные: $hour:$minute<br>";
    print "Преобразованные:  ".timeTest($hour, $minute) . "<hr>";
        }
