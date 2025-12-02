<?php
function lidhja(){
$host = "localhost";
$user = "root";
$pass = "";

try{
    $dsn = "mysql:host=$host;charset=utf8mb4";
    $conn = new PDO($dsn,$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    return $conn;
}
catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());   
}
}
?>