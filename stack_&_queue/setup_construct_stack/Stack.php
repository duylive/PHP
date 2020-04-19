<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 20)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    function push($item)
    {
        if (!$this->isFull()) {
            array_push($this->stack, $item);
        } else {
            echo "Stack full";
        }
    }

    function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            echo "stack empty";
        }
    }

    function isEmpty()
    {
        return empty($this->stack);
    }

    function top()
    {
        if (!$this->isEmpty()) {
            return end($this->stack);
        } else {
            echo "stack empty";
        }
    }

    function isFull()
    {
        return count($this->stack) == $this->limit;
    }

    function getStack() {
        return $this->stack;
    }
}