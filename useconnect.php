<?php
include_once "connect.php"; #perfshirja e kodit te file connect.php

function main(){
    $conn=lidhja();#thirrja e funksionit lidhja qe gjendet ne file connect.php

    echo "Lidhja u kry me sukses!";

    $conn->exec("CREATE DATABASE IF NOT EXISTS users");#Krijimi i databazes
    $conn->exec("USE users");

    $conn->exec("CREATE TABLE IF NOT EXISTS login (#Krijimi i tabeles
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (30),
    age INT (3)
    )");
    echo ("<br> Tabela login u ndertua me sukses!");
}

main();
?>