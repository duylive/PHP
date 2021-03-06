<?php
class Animal {
    public $height;
    public $width;
    public $age;
    public $eat;
    public $sleep;

    public function _construct ($height, $width, $age, $eat, $sleep) {
        $this -> height = $height;
        $this -> width = $width;
        $this -> age = $age;
        $this -> eat = $eat;
        $this -> sleep = $sleep;
    }
    public function getEat() {
        return $this -> eat;
    }
    public function getSleep() {
        return $this -> sleep;
    }
    public function setEat($eat) {
        $this -> eat = $eat;
    }
    public function setSleep($sleep) {
        $this -> sleep = $sleep;
    }
}

class Tiger extends Animal {
    public function _construct($height, $width, $age, $eat, $sleep)
    {
        parent::_construct($height, $width, $age, $eat, $sleep); // TODO: Change the autogenerated stub
    }
}
class Fish extends Animal {
    public function _construct($height, $width, $age, $eat, $sleep)
    {
        parent::_construct($height, $width, $age, $eat, $sleep); // TODO: Change the autogenerated stub
    }
    private $swim;
    private function getFish() {
        return $this -> swim;
    }
    private function setFish($swim) {
        $this -> swim = $swim;
    }
}
class Bird extends Animal {
    public function _construct($height, $width, $age, $eat, $sleep)
    {
        parent::_construct($height, $width, $age, $eat, $sleep); // TODO: Change the autogenerated stub
    }
    private $fly;
    private function getBird() {
        return $this -> fly;
    }
    private function setFish($fly) {
        $this -> fly = $fly;
    }
}
