<?php

/*
  (c) 2015/10/10 yoya@awm.jp
*/

require_once __DIR__.'/Typed.php';

class Array_Uint8 extends Array_Typed
{
    protected $typeSize = 1; // int8
    public function __construct($count)
    {
        parent::__construct($count);
    }
    public function _offsetGet($offset)
    {
        return ord($this->container[$offset]);
    }
    public function _offsetSet($offset, $value)
    {
        $this->container[$offset] = chr($value);
    }
}
