<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameacount = $_REQUEST['currentacount'];
    $newpassword = $_REQUEST['newpassword'];
    $comfirmpassword = $_REQUEST['comfirmpassword'];
    try {
        $change = new  PDO('mysql:host=localhost;dbname=test', 'root', '');
        $change->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
    if ($newpassword == $comfirmpassword) {
        $changepassword = $change->prepare("UPDATE users SET password='$newpassword' WHERE name ='$nameacount'");
        // vẫn thiếu điều kiện chuẩn để tìm chỗ thay thế trong database vì mk trong db trùng nhau sẽ bị thay hết;
        $changepassword->execute();
    } else {
        // cần có 1 thông báo lỗi nên mk chưa được thay đổi
        header('Location:index.php');
    }
    if ($changepassword) {
        $_SESSION['isAuth'] = true;
        header('Location:../index.php');
    }
}
