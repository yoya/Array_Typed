<?php

/*
  (c) 2015/10/10 yoya@awm.jp
*/

abstract class Array_Typed implements ArrayAccess {
    protected $container;
    protected $nContainer;
    // protected $typeSize;
    function __construct($n) {
        $this->nContainer = $n;
        $this->container = str_repeat("\0",  $n * $this->typeSize);
    }
    //
    function toArray() {
        $arr = array();
        $nContainer = $this->nContainer;
        for ($i = 0 ; $i < $nContainer ; $i++) {
            $arr []= $this->offsetGet($i);
        }
        return $arr;
    }
    static function fromArray($arr) {
        $n = count($arr);
        $newArr = new static($n);
        for ($i = 0 ; $i < $n ; $i++) {
            $newArr[$i] = $arr[$i];
        }
        return $newArr;
    }
    //
    public function offsetExists($offset) {
        if (($offset < 0) || ($this->nContainer <= $offset)) {
            return false;
        }
        return true;
    }
    public abstract function _offsetGet($offset);
    public function offsetGet($offset) {
        if ($this->offsetExists($offset) === false) {
            trigger_error("Undefined Index offset:$offset", E_USER_NOTICE);
            return NULL;
        }
        return $this->_offsetGet($offset);
    }
    public abstract function _offsetSet($offset, $value);
    public function offsetSet($offset, $value) {
        if ($this->offsetExists($offset) === false) {
            trigger_error("Undefined Index offset:$offset", E_USER_NOTICE);
            return NULL;
        }
        $this->_offsetSet($offset, $value);
    }
    public function offsetUnset($offset) {
        ;
    }
    protected function containerSize($nContainer) {
        return $nContainer * $this->typeSize;
    }
    // utility method
}
