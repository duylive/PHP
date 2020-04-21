<?php

include ("Count_implement.php");

$numbers = new CountImplement($arr = [], 100);
$numbers -> push(1);
$numbers -> push(99);
$numbers -> push(10);
$numbers -> push(20);
$numbers -> push(20);
$numbers -> push(15);
$numbers -> push(2);
$numbers -> push(15);
$numbers -> push(50);
$numbers -> push(50);
$numbers -> push(20);
$numbers -> push(15);
$numbers -> push(1);
$numbers -> push(2);
$numbers -> push(100);

echo $numbers->searchValue(20);
