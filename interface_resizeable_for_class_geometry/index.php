<?php

include_once ('circle.php');
include_once ('cylinder.php');
include_once ('rectangle.php');
include_once ('square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() * rand([1],[100]) . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() * rand([1],[100]) . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea(). '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter(). '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() * rand([1],[100]) . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() * rand([1],[100]) . '<br />';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Square area: ' . $square->calculateArea() * rand([1],[100]) . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() * rand([1],[100]) . '<br />';
