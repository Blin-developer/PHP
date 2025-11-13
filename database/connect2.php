<?php
$host = 'localhost';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS shkollaaa");
    echo "Databaza 'shkollaaa' u krijua me sukses!<br>";

    $pdo = new PDO("mysql:host=$host;dbname=shkollaaa",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "
        CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        age INT NOT NULL,
        email VARCHAR(120)
        )
    ";
    $pdo->exec($sql);
    echo "Tabela 'students' u krijua me sukses!";

    $sql = "INSERT INTO students (name,age,email) VALUES ('Blin',15,'blinkrasniqi123@gmail.com'),('Florian',35,'florianpiraj123@gmail.com'),('Andi',24,'Andigashi123@gmail.com'),('Arton',35,'Artonrexhepi123@gmail.com')";
    $pdo->exec($sql);
    $sql = "UPDATE students SET age = 19 WHERE  name='Blin'";
    $pdo->exec($sql);
    $sql = "DELETE FROM students WHERE id IN(2,4)";
    $pdo->exec($sql);
    $sql =  "SELECT * FROM students";
    $result= $pdo->query($sql);
    echo"<br>";
    foreach ($result as $x){
        echo $x['id']." - ".$x['name']." - ".$x['age'].$x['email']."<br>";
    }
}
catch (PDOException $e){
    echo "GABIM" . $e->getMessage();
}
?>