<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$numberList = [
    [1,-3,12,-30,5,19,50,-42,23,-10],
    [11,-20,16,7,3,92,-27,-16,48,25],
    [10,-14,82,54,-28,-72,56,91,-52,64]
];

$max = $numberList[0][0];
$index1 = 0;
$index2 = 0;

for ($i = 0; $i < count($numberList); $i++) {
    for ($j = 0; $j < count($numberList[$i]); $j++ ) {
        if ($max < $numberList[$i][$j]) {
            $max = $numberList[$i][$j];
            $index1 = $i;
            $index2 = $j;
        }
    }
}
echo "Giá trị lớn nhất trong mảng là $max, nằm tại vị trí cột $index1, dòng $index2 ";
?>
</body>
</html>


