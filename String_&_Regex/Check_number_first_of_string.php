<?php

$regexp = '/^[A-Z]/';

function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo "First word of string is uppercase";
    } else {
        echo "First word of string is not uppercase";
    }
}

isFirstLetterUpperCase('Duylive');
echo "<br>/";
isFirstLetterUpperCase('handsome');
