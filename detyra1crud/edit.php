<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM winners WHERE id = :id");
$stmt->execute(['id' => $id]);
$item = $stmt->fetch();
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $item['id'] ?>">
    <input type="text" name="fituesi" value="<?= htmlspecialchars($item['fituesi']) ?>" required>
    <button type="submit">Update</button>
</form>
