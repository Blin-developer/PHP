<?php
$host = "localhost";
$dbname = "simpledbb";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    die("Lidhja deshtoi: ".$e->getMessage());   
}

$result = $conn->query("SELECT * FROM items ORDER BY ID");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Simple CRUD</title>
</head>
<body>
    <h2>Items List</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($result as $row): ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= htmlspecialchars($row['Name']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['ID'] ?>">Edit</a>
                    |
                    <a href="delete.php?id=<?= $row['ID'] ?>" onclick="return confirm('Delete this?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <h3>Add New Item</h3>
    <form method="POST" action="insert.php">
        <input type="text" name="name" placeholder="Enter name" required>
        <button type="submit" name="btn1">Save</button>
    </form>
</body>
</html>