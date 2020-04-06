<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <table width="50%" align="center">
        <tr>
            <th><strong>Product Description:</strong></th>
            <th><strong>List Price:</strong></th>
            <th><strong>Discount Percent:</strong></th>
        </tr>
        <tr>
            <th><input type="text" name="description"></th>
            <th><input type="text" name="price"></th>
            <th><input type="text" name="percent"></th>
            <th><input type="submit" value="Calculate Discount"></th>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $percent = $_POST["percent"];
    $discountprice = $price*$percent*0.1;
    echo $discountprice;
}

