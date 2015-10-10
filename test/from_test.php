<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/Uint8.php';
    require_once 'Array/Sint8.php';
    require_once 'Array/Uint16.php';
    require_once 'Array/Sint16.php';
}

$a = array_pad([], 100, 0);
$a[99] = 99;
$a[98] = -98;

$arr = Array_Uint8::fromArray($a);
var_dump($arr[99]);

$arr = Array_Sint8::fromArray($a);
var_dump($arr[98]);

$arr = Array_Uint16::fromArray($a);
var_dump($arr[99]);

$arr = Array_Sint16::fromArray($a);
var_dump($arr[98]);
