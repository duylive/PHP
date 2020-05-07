<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=library','root','');
}catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}