<?php
function lidhja(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    try{
    #Lidhja fillestare pa databaze
    $conn = new PDO("mysql:host=$host",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    #Krijimi i databazes nese nuk ekziston
    $conn->exec("CREATE DATABASE IF NOT EXISTS blin");#Krijimi i databazes

    #Lidhja me databazen
    $conn = new PDO("mysql:host=$host;dbname=blin;charset=utf8mb4",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    #Ndertimi i tabeles signup
    $sql = "
    CREATE TABLE IF NOT EXISTS singup (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
    )
    ";
    $conn->exec($sql);
    return $conn;
    }

    catch (PDOException $e){
        die("GABIM: " . $e->getMessage());
    }
    
}
?>