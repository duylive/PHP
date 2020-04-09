<?php
class  Rectangle {
    public $width;
    public $height;

    public function construct($width, $height) {
        $this -> width = $width;
        $this -> height = $height;
    }

    public function getArea() {
        return $this -> width * $this -> height;
    }

    public function getPerimeter() {
        return ($this -> width + $this -> height) * 2;
    }

    public function render() {
        for ($i = 0; $i < $this -> width; $i++) {
            echo "<br>";
            for ($j = 0; $j < $this -> height; $j++) {
                echo "*";
            }
        }
    }
}
$rectangle = new Rectangle();
$rectangle -> construct(10,20);
echo "Diện tích là:";
echo $rectangle -> getArea();
echo "<br>";
echo "Chu vi là:";
echo $rectangle ->getPerimeter();
$rectangle -> render();
?>
