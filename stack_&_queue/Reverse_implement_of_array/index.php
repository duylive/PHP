<?php

include ("Stack.php");

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->push(7);
$stack->push(8);
$stack->push(9);
$stack->push(10);

$arr = [];
for ($i = 0; $i < 10; $i++) {
    array_push($arr,$stack->pop());
}
echo "<pre>";
print_r($arr);
echo "<pre>";


