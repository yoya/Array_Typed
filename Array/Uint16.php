<?php

require_once __DIR__.'/Typed.php';

/**
 * @author    yoya <yoya@awm.jp>
 * @copyright 2015 yoya
 * @license   MIT
 */
class Array_Uint16 extends Array_Typed
{
    protected $typeSize = 2; // int16
    public function __construct($count)
    {
        parent::__construct($count);
    }
    public function _offsetGet($offset)
    {
        $o = $this->containerSize($offset);
        $value = ord($this->container[$o++]);
        $value = ($value << 8) + ord($this->container[$o]);

        return $value;
    }
    public function _offsetSet($offset, $value)
    {
        $o = $this->containerSize($offset);
        $this->container[$o++] = chr(($value >> 8) & 0xff);
        $this->container[$o] = chr($value       & 0xff);
    }
}
