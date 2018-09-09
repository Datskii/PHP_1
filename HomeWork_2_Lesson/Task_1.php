<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 09.09.2018
 * Time: 22:46
 */

$first = rand(-10, 10);
$second = rand(-10, 10);
print "Первое число: ".$first."<br>";
print "Второе число: ".$second."<br><br>";
if ($first >= 0 && $second >= 0) {
    print "Разность равна: " . ($first - $second);
} else if ($first < 0 && $second < 0) {
    print "Произведение равно: " . ($first * $second);
} else {
    print "Cумма равна: " . ($first + $second);
};