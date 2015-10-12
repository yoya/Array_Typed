<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/Uint8.php';
}

$arr = new Array_Uint8(0);
var_dump(count($arr));
$arr = new Array_Uint8(7);
var_dump(count($arr));

$a = array_pad([], 100, 0);
$a[99] = 99;
$a[98] = -98;

$arr = Array_Uint8::fromArray($a);
var_dump(count($arr));
