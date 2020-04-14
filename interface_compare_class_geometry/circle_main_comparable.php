<?php

include "circle_comparable.php";

$circleOne = new CircleComparable('circleOne', 8);
$circleTwo = new CircleComparable('circleTwo', 2);
$circleThree = new CircleComparable('circleThree', 4);

$test1 = $circleOne->compareTo($circleTwo);
$test2 = $circleTwo->compareTo($circleThree);
echo('Comparable: <br>');
echo $test1;
echo "<br/>";
echo $test2;
