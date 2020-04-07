<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$array = [
    0,11,4,7,9,2,6,8,-34,3,19,5,1,-27,25,37,23,-2,-18,
];

$min = null;
$index = null;

for ($i = 0; $i < count($array); $i++) {
    if ($min == null) {
        $min = $array[$i];
        $index = $i;
    } else {
        if ($array[$i] < $min) {
            $min = $array[$i];
            $index = $i;
        }
    }
}

echo "Giá trị nhỏ nhất là $min, nằm tại vị trí $index";
?>
</body>
</html>