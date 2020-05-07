<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameacount = $_REQUEST['currentacount'];
    $newemail = $_REQUEST['newemail'];
    $comfirmemail = $_REQUEST['comfirmemail'];
    try {
        $change = new  PDO('mysql:host=localhost;dbname=test', 'root', '');
        $change->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
    if ($newemail== $comfirmemail) {
        $changeemail = $change->prepare("UPDATE users SET email='$newemail' WHERE name ='$nameacount'");
        // vẫn thiếu điều kiện chuẩn để tìm chỗ thay thế trong database vì mk trong db trùng nhau sẽ bị thay hết;
        $changeemail->execute();
    } else {
        // cần có 1 thông báo lỗi nên mk chưa được thay đổi
        header('Location:index.php');
    }
    if ($changeemail) {
        $_SESSION['isAuth'] = true;
        header('Location:../index.php');
    }
}
