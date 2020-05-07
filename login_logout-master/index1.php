<?php
session_start();
?>
<br>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/css1.css">
</head>
<body>
<h2 style="color: #eeeeee">Chúc mừng bạn đăng nhập thành công</h2>
<div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
       <h5>Setting</h5>
<!--       --><?php //printf($_SESSION['acountname']) ?>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="changemail/index.php">Change-Email</a>
        <a class="dropdown-item" href="changepassword/index.php">Change-Password</a>
        <a class="dropdown-item" href="index.php">Log out</a>
    </div>
</div>
</body>
</html>
