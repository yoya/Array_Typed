<?php

require_once __DIR__.'/Typed.php';

/**
 * @author    yoya <yoya@awm.jp>
 * @copyright 2015 yoya
 * @license   MIT
 */
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
