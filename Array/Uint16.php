<?php

/*
  (c) 2015/10/10 yoya@awm.jp
*/

require_once __DIR__.'/Typed.php';

class Array_Uint16 extends Array_Typed {
    protected $typeSize = 2; // int16
    function __construct($n) {
        parent::__construct($n);
    }
    public function _offsetGet($offset) {
        $o = $this->containerSize($offset);
        $value = ord($this->container[$o++]);
        $value = ($value << 8) + ord($this->container[$o]);
        return $value;
    }
    public function _offsetSet($offset, $value) {
        $o = $this->containerSize($offset);
        $this->container[$o++] = chr(($value >> 8) & 0xff);
        $this->container[$o]   = chr( $value       & 0xff);
    }
}
