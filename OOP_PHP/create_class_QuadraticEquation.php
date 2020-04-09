<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    Nhập a :<input type="number" name ="a" >
    Nhập b :<input type="number" name ="b" >
    Nhập c :<input type="number" name ="c" >
    <input type="submit" value = "Tính">
</form>
</body>
</html>
<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    private $delta;
    private $r1;
    private $r2;

    function __construct($a, $b, $c) {
        $this -> a = $a;
        $this -> b = $b;
        $this -> c = $c;
    }

    function get_a() {
        echo $this -> a;
    }

    function get_b() {
        echo $this -> b;
    }

    function get_c() {
        echo $this -> c;
    }



    function getDiscriminant() {
        $this -> delta = ($this -> b) * ($this -> b) - 4 * $this -> a * $this -> c ;
        if ($this -> delta > 0) {
            echo "Phương trình có 2 nghiệm";
            $this -> getRoot1();
            $this -> getRoot2();
        } else if ($this -> delta = 0) {
            echo "Phương trình có 1 nghiệm là -1";
        } else {
            echo "Phương trình vô nghiệm";
        }
    }

    function getRoot1() {
        $this -> r1 = (-($this -> b) + sqrt(($this -> b)*($this -> b) - 4 * $this ->a * $this -> c)) / (2* $this -> a);
        echo $this -> r1;
    }

    function getRoot2() {
        $this -> r2 = (-($this -> b) - sqrt(($this -> b)*($this -> b) - 4 * $this ->a * $this -> c)) / (2* $this -> a);
        echo $this -> r2;
    }

    function display() {
        echo "a:" .$this -> get_a();
        echo "b:" .$this -> get_b();
        echo "c:" .$this -> get_c();
        $this -> getDiscriminant();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];
    $result = new QuadraticEquation($a,$b,$c);
    $result -> __construct($a, $b, $c);
    $result -> display();
}