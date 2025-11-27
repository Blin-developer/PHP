<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

if (isset($_POST['btn1'])) {
    $fruti = $_POST['name'];
    $sql = "INSERT INTO items (name) VALUES (:name)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $fruti]);
}

header("Location: index.php");
exit;
?>