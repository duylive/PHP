<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <h3>Future value calculator</h3>
    <h5>Inventment Amount: <input type="text" name="invest"> </h5><br>
    <h5>Yearly Interest Rate: <input type="text" name="interest"> </h5><br>
    <h5>Number of Years: <input type="text" name="year"> </h5><br>
    <input type="submit" value = "Future value"><br>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $invest = $_POST["invest"];
    $interest = $_POST["interest"];
    $year = $_POST["year"];
    $futurevalue = ($invest+($invest*$interest))*$year;
    echo $futurevalue;
}
?>
