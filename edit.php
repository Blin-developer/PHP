<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM items WHERE ID = :ID");
$stmt->execute(['ID' => $id]);
$item = $stmt->fetch();
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $item['ID'] ?>">
    <input type="text" name="name" value="<?= htmlspecialchars($item['Name']) ?>" required>
    <button type="submit">Update</button>
</form>
