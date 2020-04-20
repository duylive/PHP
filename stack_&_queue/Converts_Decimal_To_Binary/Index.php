<?php

include("Stack.php");

$number = 1000;
function decimalTobinary($number)
{
    $stack = new Stack();
    do {
       $stack->push($number % 2);
       $number = floor($number / 2);
    } while ($number > 0);
    while (!$stack->isEmpty()){
        echo $stack->pop();
    }
}

echo decimalTobinary($number);