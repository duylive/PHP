<?php

class CountImplement
{
    public $numbers;
    public $count;
    public $limit;
    public $value;

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
            $this->limit = 100;
        }
        $this->count = -1;
        $this->value = 0;
    }

    public function isEmpty(){
        return empty($this->numbers);
    }

    public function push($value) {
        if ($this->isEmpty() || count($this->numbers) <= $this->limit) {
            array_push($this->numbers, $value);
            $this->count++;
        } else {
            $this->pop();
            array_push($this->numbers, $value);
            $this->count++;
        }
    }

    public function pop() {
        if (!$this->numbers = $this->isEmpty()) {
            array_pop($this->numbers);
            $this->count--;
        }
    }

    public function searchValue($value) {
        for ($i = 0; $i < $this->limit; $i++) {
            if ($this->numbers[$i] == $value) {
                $this->value++;
            } else {
                continue;
            }
        }
        return $this->value;
    }
}
