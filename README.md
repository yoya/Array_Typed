# Array_Typed

PHP の Array はメモリを使いすぎるとお嘆きの貴方へ。
遅くなっても良いのでメモリをとにかく節約したい貴方へ。

Uint8, Sint16 等、型を限定して保存する TypedArray クラスを提供します。

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
