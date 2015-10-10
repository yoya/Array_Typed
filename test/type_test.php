<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/UINT8.php';
    require_once 'Array/SINT8.php';
    require_once 'Array/UINT16.php';
    require_once 'Array/SINT16.php';
}


$arr = new Array_UINT8(100);
$arr[99] = 99;
var_dump($arr[99]);

$arr = new Array_SINT8(100);
$arr[99] = -99;
var_dump($arr[99]);

$arr = new Array_UINT16(100);
$arr[99] = 999;
var_dump($arr[99]);


$arr = new Array_SINT16(100);
$arr[99] = -999;
var_dump($arr[99]);
