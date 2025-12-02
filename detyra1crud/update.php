<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

$sql = "UPDATE winners SET fituesi = :fituesi WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->execute([
    'fituesi' => $_POST['fituesi'],
    'id'   => $_POST['id']
]);

header("Location: index.php");
exit;
?>

