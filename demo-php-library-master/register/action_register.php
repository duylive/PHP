<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['name'];
    $_SESSION['acountname']= $name;
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    try {
        $pdo = new PDO('mysql:host = localhost;dbname = library', root, "");
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO users(name, email, password) VALUES ('$name','$email','$password')");
    $stmt->execute();
    if ($stmt) {
        $_SESSION['userLogin'] = true;
        header('Location: ../auth/login.php');
    }
}
