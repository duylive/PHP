<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $_SESSION['acountname']= $name;
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    // lien ket du lieu tra ve voi data base;
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');//tạo 1 đối tượng mới là PDO cú pháp
        // := new pdo(link của database,ten tk database,pasword của tk database
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit(); // cú pháp cố định try catch(PDOException $exception) {$exception->getMessage(), exit()}.
    }
    $stmt = $pdo->prepare("INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')");
    $stmt->execute();// thực thi prepare ( cố định có)
    if ($stmt) {
        $_SESSION['isAuth'] = true;
        header('Location:../index.php');
    }
}