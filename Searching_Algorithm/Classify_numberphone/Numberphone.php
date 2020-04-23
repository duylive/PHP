<?php

class Viettel
{
    public $limit;
    public $numbers;

    public function __construct($arr, $limit)
    {
        if (is_array($arr)) {
            $this->numbers = $arr;
        } else {
            $this->numbers =[];
        }
        if (is_integer($limit)) {
            $this->limit = $limit;
        } else {
            $this->limit = 10;
        }
    }

    public function isEmpty(){
        return empty($this->numbers);
    }

    public function isFull(){
        return count($this->numbers) == $this->limit;
    }
}

