<?php

class Numbers
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
            $this->numbers = [];
        }
        if (is_integer($limit)) {
            $this->limit = $limit;
        } else {
            $this->limit = 100;
        }
        $this->count = -1;
        $this->value = 0;
    }

    public function isEmpty()
    {
        return empty($this->numbers);
    }

    public function push($value)
    {
        if ($this->isEmpty() || count($this->numbers) <= $this->limit) {
            array_push($this->numbers, $value);
            $this->count++;
        } else {
            $this->pop();
            array_push($this->numbers, $value);
            $this->count++;
        }
    }

    public function pop()
    {
        array_pop($this->numbers);
        $this->count++;
    }

    public function show()
    {
        return implode(",", $this->numbers);
    }


    public function searchNumber($value, $low, $high)
    {
        if ($high < $low) {
            return "abc";
        }

        $mid = ($low + $high) / 2;

        if ($value == $this->numbers[$mid]) {
            echo "Found it" . $this->numbers[$mid] . "<br>";
        } else {
            echo "check" . "<br>";
            if ($value < $this->numbers[$mid]) {
                $high = $mid - 1;
                if ($value == $this->numbers[$high]) {
                    echo "Found it" . $this->numbers[$high] . "<br>";
                } else {
                    $this->searchNumber($value, $low, $high);
                }
            } else {
                $low = $mid + 1;
                if ($value == $this->numbers[$low]) {
                    echo "Found it" . $this->numbers[$low] . "<br>";
                } else {
                    $this->searchNumber($value, $low, $high);
                }
            }
        }
    }
}
