<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM items WHERE ID = :ID");
$stmt->execute(['ID' => $id]);

header("Location: index.php");
exit;
?>
