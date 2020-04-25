<?php

$class = "/^[^@#$%&*?]*[A]|[C]|[P]+[0-9]+[0-9]+[0-9]+[0-9]+[G-M]$/";

function checkNameClass($str)
{
    $class = "/^[^@#$%&*?]*[A]|[C]|[P]+[0-9]+[0-9]+[0-9]+[0-9]+[G-M]$/";
    if (preg_match($class, $str)) {
        echo "This class name is invalid";
    } else {
        echo "This class name is not invalid";
    }
}

checkNameClass("C0220H");
echo "<br/>";
checkNameClass("P0220H");
echo "<br/>";
