<?php

include "circle_comparable.php";

$circleOne = new CircleComparable("circleOne", 5);
$circleTwo = new CircleComparable("circleTwo", 3 );
var_dump($circleOne -> compareTo($circleTwo));
