<?php
class Point2d {
    public $x = 0.0;
    public $y = 0.0;
    public $xy = [0.0 , 0.0];

    public function __construct($x, $y, $xy) {
        $this -> x = $x;
        $this -> y = $y;
        $this -> xy = $xy;
    }
    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function setX(float $x) {
        $this->x = $x;
    }

    public function setY(float $y) {
        $this->y = $y;
    }

    public function getXY(): array {
        return $this -> xy;
    }

    public function setXY(array $xy){
        $this->xy = $xy;
    }

    public function __toString() {
        return "Coordinates to point 2d: " . "x = ". $this -> x . " " . "y = ". $this -> y . " " . "(x,y) = ". $this -> xy;

    }
}

class Point3d {
    public $x = 0.0;
    public $y = 0.0;
    public $z = 0.0;
    public $xyz = [0.0 , 0.0 , 0.0];

    public function __construct($x, $y, $z, $xyz) {
        $this -> x = $x;
        $this -> y = $y;
        $this -> z = $z;
        $this -> xyz = $xyz;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function setX(float $x) {
        $this->x = $x;
    }

    public function setY(float $y) {
        $this->y = $y;
    }

    public function getZ():float {
        return $this -> z;
    }

    public function setZ(float $z) {
        $this -> z = $z;
    }

    public function getXYZ():array {
        return $this -> xyz;
    }

    public function setXYZ(array $xyz) {
        $this -> xyz = $xyz;
    }

    public function __toString()
    {
        return "Coordinates to point 3d: " . "x = ". $this -> x . " " . "y = ". $this -> y . " " . "z = ". $this -> z . " " . "(x,y,z) = ". $this -> xyz;
    }
}

$point2d = new Point2d(1.0,2.0,12);
echo $point2d;
echo "<br/>";
$point3d = new Point3d(1.0,2.0,3.0,123);
echo $point3d;
