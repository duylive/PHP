<?php

include ("guess_numbers.php");

$numbers = new Numbers($numbers = [], 100);

for ($i = 1; $i <= 100; $i++) {
    $numbers -> push($i);
}
$numbers->searchNumber(31,1,100);
