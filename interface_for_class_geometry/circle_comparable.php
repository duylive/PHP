<?php
include "circle.php";
include "comparable.php";

class CircleComparable extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent:: __construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if($this->getRadius() > $circleOtherRadius) {
            return 1;
        } elseif ($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
