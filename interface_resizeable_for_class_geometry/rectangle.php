<?php
include_once "shape.php";
include_once "resizeable.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percent)
    {
        $currentValue = $this->width;
        $this->width += $percent * $currentValue + $currentValue;
        $currentValue = $this->height;
        $this->height += $percent * $currentValue + $currentValue;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}


