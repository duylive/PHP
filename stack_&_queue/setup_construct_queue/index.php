<?php

include ("Queue.php");
include ("Node.php");

$queue = new Queue();
$node = new Node();

if ($queue->isEmpty()){
    echo "This is Empty!<br>";
}else{
    echo "This is not Empty!<br>";
}

$queue -> enqueue(1);
$queue -> enqueue(2);
$queue -> enqueue(3);
$queue -> enqueue(4);
$queue -> enqueue(5);

if ($queue->isEmpty()){
    echo "This is Empty!<br>";
}else{
    echo "This is not Empty!<br>";
}









