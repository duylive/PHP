<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$nums = [];
for ($i = 0; $i < 100; ++$i) {
    $nums[$i] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br/>";
$minValue = findMin($nums);
echo "<br/>";
$maxValue = findMax($nums);
echo "Min value is: " . $minValue;
echo "<br/>";
echo "Max value is: " . $maxValue;
