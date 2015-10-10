<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/UINT8.php';
    require_once 'Array/SINT8.php';
    require_once 'Array/UINT16.php';
    require_once 'Array/SINT16.php';
}

$a = array_pad([], 100, 0);
$a[99] = 99;
$a[98] = -98;

$arr = Array_UINT8::fromArray($a);
var_dump($arr[99]);

$arr = Array_SINT8::fromArray($a);
var_dump($arr[98]);

$arr = Array_UINT16::fromArray($a);
var_dump($arr[99]);

$arr = Array_SINT16::fromArray($a);
var_dump($arr[98]);
