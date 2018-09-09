<?php
/**
 * Created by PhpStorm.
 * User: Datskii
 * Date: 09.09.2018
 * Time: 23:48
 */

$first = rand(1,10);
$second = rand(1,10);
$operations = array("+", "-", "*", "/");
$operation = $operations[rand(0,3)];

print "Первое число: ".$first."<br>";
print "Второе число: ".$second."<br>";
print "Математическая операция: ".$operation."<br><br>";

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

function mathOperation ($first, $second, $operation){
    switch ($operation){
        case"+":
            return total($first, $second);
        case"-":
            return subtract($first, $second);
        case"/":
            return division($first, $second);
        case"*":
            return multiplication($first, $second);
    }
}

print "$first $operation $second = ".mathOperation($first, $second, $operation);