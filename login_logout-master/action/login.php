<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    // lien ket du lieu tra ve voi data base;
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');//tạo 1 đối tượng mới là PDO cú pháp
        // := new pdo(link của database,ten tk database,pasword của tk database
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit(); // cú pháp cố định try catch(PDOException $exception) {$exception->getMessage(), exit()}.
    }
    //prepare(): tạo đối tượng stmt cố định sử dụng prepare để thực hiện câu lênh mySQL
    $stmt = $pdo->prepare('SELECT name, email from users WHERE  name = :name AND  password = :password');

    $stmt->bindParam(':name', $name);
    // gán ':email' = $email
    $stmt->bindParam(':password', $password);
    $stmt->execute();// thực thi prepare ( cố định có)
    $resultSet = $stmt->fetch();// fetch or fetchAll là hiển thị 1 hoặc tất cả các hàng thỏa mãn;
    if (!$resultSet) {
        $_SESSION['error-auth'] = 'Tai khoan pass k dung';
        header('Location:../auth/login.php');// chuyển đến 1 trang khác dùng header(), sử dụng dữ liệu từ trang khác dùng include.
    } else {
        $_SESSION['isAuth'] = true;
        header('Location:../index1.php');
    }

}