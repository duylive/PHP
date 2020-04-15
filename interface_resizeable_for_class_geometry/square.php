<?php

include_once ('rectangle.php');

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function resize($percent)
    {
        $currentValue = $this->width;
        $this->width += $percent * $currentValue + $currentValue;
    }

    public function calculateArea()
    {
        return $this->width * $this->width;
    }

    public function calculatePerimeter()
    {
        return $this->width * 4;
    }
}
