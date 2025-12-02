<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

if (isset($_POST['btn1'])) {
    $viti = $_POST['viti'];
    $fituesi = $_POST['fituesi'];
    $sql = "INSERT INTO winners (viti,fituesi) VALUES (:viti,:fituesi)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['viti' => $viti, 'fituesi' => $fituesi]);
}

header("Location: index.php");
exit;
?>