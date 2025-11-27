<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

$sql = "UPDATE items SET name =:name WHERE id =:id";
$stmt = $conn->prepare($sql);
$stmt->execute([
    'name' => $_POST['name'],
    'id' => $_POST['id']
]);

header("Location: index.php");
exit;
?>
