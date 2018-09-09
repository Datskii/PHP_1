<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 09.09.2018
 * Time: 23:27
 */

$first = rand(1,10);
$second = rand(1,10);
print "Первое число: ".$first."<br>";
print "Второе число: ".$second."<br><br>";

function total($first, $second){
    return $first + $second;
}

function subtract($first, $second){
    return $first - $second;
}

function division($first, $second){
    return $first / $second;
}

function multiplication($first, $second){
    return $first * $second;
}

print total($first, $second)."<br>";
print subtract($first, $second)."<br>";
print division($first, $second)."<br>";
print multiplication($first, $second)."<br>";
