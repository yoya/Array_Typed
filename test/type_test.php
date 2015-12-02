<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/Uint8.php';
    require_once 'Array/Sint8.php';
    require_once 'Array/Uint16.php';
    require_once 'Array/Sint16.php';
}

$arr = new Array_Uint8(100);
$arr[99] = 99;
var_dump($arr[99]);

$arr = new Array_Sint8(100);
$arr[99] = -99;
var_dump($arr[99]);

$arr = new Array_Uint16(100);
$arr[99] = 999;
var_dump($arr[99]);

$arr = new Array_Sint16(100);
$arr[99] = -999;
var_dump($arr[99]);
