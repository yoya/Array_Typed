<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/Sint8.php';
}

echo 'Array_Sint8(0)'.PHP_EOL;
$arr = new Array_Sint8(0);
foreach ($arr as $e) {
    var_dump($e);
}
echo 'Array_Sint8(7)'.PHP_EOL;
$arr = new Array_Sint8(7);
foreach ($arr as $e) {
    var_dump($e);
}

$a = array_pad([], 10, 0);
$a[0] = -1;
$a[8] = -8;
$a[9] = 9;
echo 'Array_Sint8::fromArray'.PHP_EOL;
$arr = Array_Sint8::fromArray($a);
foreach ($arr as $e) {
    var_dump($e);
}
foreach ($arr as $e) {
    var_dump($e);
}
