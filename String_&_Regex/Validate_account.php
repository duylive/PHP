<?php

$account = "/^[_a-z0-9]{6,}$/";

function checkAccount($str)
{
    $account = "/^[_a-z0-9]{6,}$/";
    if (preg_match($account, $str)) {
        echo "This account is invalid";
    } else {
        echo "This account is not invalid";
    }
}

checkAccount("123abc_");
echo "<br/>";
checkAccount("_12345");
