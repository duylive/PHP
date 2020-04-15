<?php

include_once ('Rectangle.php');

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function resize($squareOther)
    {
        $squareOtherArea = $squareOther->getArea;
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
