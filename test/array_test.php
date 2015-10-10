<?php

require_once 'Array/UINT8.php';

echo "SplFixedArray(1024)".PHP_EOL;
$prev_mem = memory_get_usage();
$arr = new SplFixedArray(1024);
foreach (range(0, 1023) as $i) { $arr[$i] = 255; }
echo memory_get_usage() - $prev_mem.PHP_EOL;
$arr = null;

echo "Array_UINT8(1024)".PHP_EOL;
$prev_mem = memory_get_usage();
$arr = new Array_UINT8(1024);
foreach (range(0, 1023) as $i) { $arr[$i] = 255; }
echo memory_get_usage() - $prev_mem.PHP_EOL;
$arr = null;
