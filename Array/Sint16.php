<?php

require_once __DIR__.'/Uint16.php';

/**
 * @author    yoya <yoya@awm.jp>
 * @copyright 2015 yoya
 * @license   MIT
 */
class Array_Sint16 extends Array_Uint16
{
    public function _offsetGet($offset)
    {
        $value = parent::_offsetGet($offset);
        if ($value < 0x8000) {
            return $value;
        }

        return $value - 0x10000;
    }
    public function _offsetSet($offset, $value)
    {
        if ($value < 0) {
            $value += 0x10000;
        }
        parent::_offsetSet($offset, $value);
    }
}
