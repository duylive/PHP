<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1 align="center"><strong>Simple Calculator</strong></h1>
<form action="" method="post">
    <table width="80%" align="center">
        <tr>
            <th><strong>First Operand:</strong></th>
            <th><strong>Operator:</strong></th>
            <th><strong>Second Operand:</strong></th>
        </tr>
        <tr>
            <th><input type="number" name="first"></th>
            <th><select name = "calculation">
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                </select></th>
            <th><input type="number" name="second"></th>
            <th><input type="submit" name = "calculator"></th>
        </tr>
    </table>
</form>
<?php
if (isset($_POST["calculator"])) {
    $first = (int)$_POST["first"];
    $second = (int)$_POST["second"];

    switch ($_POST["calculation"]) {
        case "add":
            $add = $first + $second;
            echo $add;
            break;
        case "sub":
            $sub = $first - $second;
            echo $sub;
            break;
        case "mul":
            $mul = $first * $second;
            echo $mul;
            break;
        case "div":
            $div = $first / $second;
            echo $div;
            break;
    }
}
