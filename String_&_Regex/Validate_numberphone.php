<?php

$phone = "/^[0-9]+[0-9]\-[0-9]{10,})$/";

function checkNumberPhone($str)
{
    $phone = "/^[0-9]+[0-9]\-[0-9]{10,}$/";
    if (preg_match($phone, $str)) {
        echo "This numberphone is invalid";
    } else {
        echo "This numberphone is not invalid";
    }
}

checkNumberPhone("84-0984945948");
echo "<br/>";
checkNumberPhone("00-1234567");