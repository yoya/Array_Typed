# Array_Typed

# Usage

```
<?php
require 'vendor/autoload.php';
$arr = new Array_Uint8(1024);
$arr[100] = 0x7F;
var_dump($arr[100]);
$arr = new Array_Sint8(1024);
$arr[100] = -0x80;
var_dump($arr[100]);
```
