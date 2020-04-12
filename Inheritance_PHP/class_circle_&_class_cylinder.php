<?php
class Circle {
    public $radius;

    public function __construct($radius) {
        $this -> radius = $radius;
    }

    public function calArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calPerimeter() {
        return pi() * $this -> radius * 2;
    }

    public function __toString() {
        return "Circle radius: " . $this -> radius;
    }
}

class Cylinder extends Circle {
    public $height;

    public function __construct($radius, $height) {
        parent::__construct($radius);
        $this -> height = $height;
    }

    public function calArea() {
        return parent::calArea() *2 + parent::calPerimeter() * $this -> height;
    }

    public function calPerimeter() {
        return parent::calArea() * $this -> height;
    }

    public function __toString() {
        return "Cylinder radius & height: " . "Radius = " . $this -> radius . " " . "Height = " . $this -> height;
    }
}

$circle = new Circle(3);
echo $circle . "<br/>";
echo "Area circle: " . $circle -> calArea() . "<br/>";
echo "Perimater circle: " . $circle -> calPerimeter(). "<br/>";

$cylinder = new Cylinder(3,4);
echo $cylinder . "<br/>";
echo "Area cylinder: " . $cylinder -> calArea() . "<br/>";
echo "Perimeter cylinder: " . $cylinder -> calPerimeter() . "<br/>";
