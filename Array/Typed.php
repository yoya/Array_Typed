<?php

/*
  (c) 2015/10/10 yoya@awm.jp
  Array_Typed version 1.0.0
*/

abstract class Array_Typed implements ArrayAccess {
    protected $container;
    protected $arraySize;
    // protected $typeSize;
    function __construct($n) {
        $this->arraySize = $n;
        $this->container = str_repeat("\0",  $n * $this->typeSize);
    }
    //
    function toArray() {
        $arr = array();
        $arraySize = $this->arraySize;
        for ($i = 0 ; $i < $arraySize ; $i++) {
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
    public function getSize() {
        return $this->arraySize;
    }
    //
    public function offsetExists($offset) {
        if (($offset < 0) || ($this->arraySize <= $offset)) {
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
    protected function containerSize($arraySize) {
        return $arraySize * $this->typeSize;
    }
    // utility method
    public function slice($offset, $size) {
        $arr = $this->toArray();
        $arr = array_slice($arr, $offset, $size);
        return self::fromArray($arr);
    }
    public function join($glue) {
        $arr = $this->toArray();
        return implode($glue, $arr);
    }
    public function shuffle($glue) {
        $count = $this->arraySize;
        $arr = $this->toArray();
        shuffle($arr);
        for ($i = 0 ; $i < $count ; $i++) {
            $this->offsetSet($i, $arr[$i]);
        }
    }
}
