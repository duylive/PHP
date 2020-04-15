<?php

class Point
{
    public $x = 0.0;
    public $y = 0.0;
    public $xy = [0.0, 0.0];

    public function __construct($x, $y, $xy)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xy = $xy;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function getXY(): array
    {
        return $this->xy;
    }

    public function setXY(array $xy)
    {
        $this->xy = $xy;
    }

    public function __toString()
    {
        return "Coordinates to point: " . "x = " . $this->x . " " . "y = " . $this->y . " " . "(x,y) = " . $this->xy;

    }
}

class MoveablePoint extends Point
{
    public $xSpeed = 0.0;
    public $ySpeed = 0.0;

    public function __construct($x, $y, $xy, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y, $xy);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    public function getXY(): array
    {
        return $this->xy;
    }

    public function setXY(array $xy)
    {
        $this->xy = $xy;
    }

    public function setXSpeed(float $xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYSpeed(float $ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function __toString()
    {
        return "Move point: " . "x = " . $this->x . " " . "y = " . $this->y . " " . "(x,y) = " . $this->xy . " " . "xspeed: " . $this->xSpeed . " " . "yspeed: " . $this->ySpeed;
    }
}

$point = new Point(1,1,2);
echo $point;
echo "<br/>";
$moveablepoint = new MoveablePoint(1,1,2,10,10);
echo $moveablepoint;
