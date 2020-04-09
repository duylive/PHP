<?php
define("SLOW","1");
define("MEDIUM","2");
define("FAST","3");
class Fan {
    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = blue;

    function _construct ($speed, $on, $radius, $color) {
        $this -> speed = $speed;
        $this -> on = $on;
        $this -> radius = $radius;
        $this -> color = $color;
    }

    function getSpeed() {
        return $this -> speed;
    }

    function getOn() {
        return $this -> on;
    }

    function getRadius() {
        return $this -> radius;
    }

    function getColor() {
        return $this -> color;
    }

    function setSpeed($speed) {
        $this -> speed = $speed;
    }

    function setOn($on) {
        $this -> on = $on;
    }

    function setRadius($radius) {
        $this -> radius = $radius;
    }

    function setColor($color) {
        $this -> color = $color;
    }

    function toString() {
        if ($this -> getOn()) {
            return $this ->getSpeed() . " " . $this -> getRadius() . " " . $this -> getColor() . " " . "Fan is on" ;
        } else {
            return $this ->getSpeed() . " " . $this -> getRadius() . " " . $this -> getColor() . " " . "Fan is off" ;
        }
    }
}

$fan = new Fan();
$fan -> setOn(true);
$fan ->setSpeed(SLOW);
$fan ->setRadius(5);
$fan ->setColor("red");
echo $fan -> toString();
