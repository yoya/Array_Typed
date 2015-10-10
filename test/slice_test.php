<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'Array/Uint8.php';
}

$a = Array_Uint8::fromArray(range(0, 9));
$a = $a->slice(2, 3);
var_dump($a, $a->toArray());
