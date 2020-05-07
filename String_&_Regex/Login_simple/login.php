<?php
session_start();
$email = $_POST["email"] ?? '';
function checkEmail($mail)
{
    $email = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,5}$/";
    if (preg_match($email, $mail)) {
        return true;
    } else {
        return false;
    }
}

$password = $_POST["password"] ?? '';
function checkPassWord($pass)
{
    $password = "/^[^!@#$%&* ]*[a-zA-Z0-9]{8,}$/";
    if (preg_match($password, $pass)) {
        return true;
    } else {
        return false;
    }
}

$phonenumbers = $_POST["phonenumbers"] ?? '';
function checkPhoneNumbers($phone)
{
    $phonenumbers = "/^[0-9]+[0-9]\-[0-9]{10,})$/";
    if (preg_match($phonenumbers, $phone)) {
        return true;
    } else {
        return false;
    }
}
if ($email == checkEmail("duylive92@gmail.com") && $password == checkPassWord("12345678") && $phonenumbers == checkPhoneNumbers("0984945948"))  {
    $_SESSION['user'] = $email;
    header("location:mainpage.php");
} else {
    echo "incorrect email and password";
    require "login.html";
}
?>
