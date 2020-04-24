<?php

$email = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,5}$/";

function checkInvalidEmail($str)
{
    $email = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,5}$/";
    if (preg_match($email, $str)) {
        echo "This email is invalid";
    } else {
        echo "This email is wrong";
    }
}

checkInvalidEmail("duylive92@gmail.com");
echo "<br/>";
checkInvalidEmail("@gmail.com");
