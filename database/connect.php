<?php
//Lidhja me databazen
$host = "localhost";//xampp
$dbname = "phhp";//emri i databazes
$username = "root";
$password = "";

try{
    //Krijo lidhjen me PDO(PHP DATA OBJECT)
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Lidhja me databazen u realizua me sukses!<br>";

    // CRUD-Create,Read,Update,Delete
    // $sql = "INSERT INTO students (name,age) VALUES ('Blin',15), 
    // ('Florian',35),('Beni',24),('Vesa',14)";
    // $conn->exec($sql);
    // echo "Te dhenat u shtuan me sukses";

    // $sql = "SELECT * FROM students";
    // $result = $conn->query($sql);

    // foreach($result as $row){
    //     echo $row['Name']. " - " .$row['Age'] . "<br>";
    // }

    // $sql = "UPDATE students SET age = 19 WHERE name = 'Beni'";
    // $conn->exec($sql);
    // echo "Te dhenat u perditsuan me sukses!";

    $sql = "DELETE FROM students WHERE age > 20";
    $conn->exec($sql);
    echo "Te dhenat u fshine me sukses!";
}
catch(PDOException $e){
    echo "<b>GABIM " . $e->getMessage(). "<br>";
}

?>