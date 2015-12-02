<?php

/*
  (c) 2015/10/10 yoya@awm.jp
*/

require_once __DIR__.'/Uint8.php';

class Array_Sint8 extends Array_Uint8
{
    public function _offsetGet($offset)
    {
        $value = parent::_offsetGet($offset);
        if ($value < 0x80) {
            return $value;
        }

        return $value - 0x100;
    }
    public function _offsetSet($offset, $value)
    {
        if ($value < 0) {
            $value += 0x100;
        }
        parent::_offsetSet($offset, $value);
    }
}
