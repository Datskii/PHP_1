<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 14.09.2018
 * Time: 23:58
 */
header("Content-type:text/html; charset=utf-8");

$i = 0;
while ($i <= 100) {
    if (($i % 3) == 0) {
        print "$i<br>";
    }
    $i++;
}