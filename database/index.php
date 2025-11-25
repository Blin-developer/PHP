<?php
$host = "localhost";
$dbname = "shddd";
$user = "root";
$pass = "";

try{
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $conn = new PDO($dsn,$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    die("Lidhja deshtoi: ".$e->getMessage());   
}
$msg= "";

if (isset($_POST['ruaj'])){

    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($name != "" && $age != ""){

        $sql = "INSERT INTO students (name,age) VALUES (:name,:age)";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            ':name' => $name,
            ':age' => $age
        ]);

        $msg = "Te dhenat u ruajten me sukses ne tabele";
    }
    else{
        $msg = "Ju lutem plotesoni te gjitha fushat.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Forma + Tabela</title>
    <style>
        body { font-family: Arial; margin:20px; }
        label { display: block; margin-top: 10px; }
        input { padding: 5px; width: 200px; }
        button { margin-top: 10px; padding: 6px 12px; cursor: pointer; }
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 300px;
        }
        table,th,td { border: 1px solid black; }
        th,td { padding: 6px; }
        .msg { color: green; font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Shembull me PDO:Ruajtja dhe Shfaqja e te Dhenave</h2>

    <form method="POST">
        <label>Emri:</label>
        <input type="text" name="name" placeholder="Shkruaj emrin">

        <label>Mosha:</label>
        <input type="number" name="age" placeholder="Shkruaj moshen">

        <br>
        <button type="submit" name="ruaj">Ruaj</button>
        <button type="submit" name="shfaq">Shfaq</button>
    </form>
</body>
</html>