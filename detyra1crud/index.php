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

$result = $conn->query("SELECT * FROM winners ORDER BY viti DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Simple CRUD</title>
    <style>
        /* ===== GLOBAL STYLE ===== */
body {
    font-family: "Poppins", sans-serif;

    /* FOTO E PRAPAVIJËS */
    background-image: url("https://img.asmedia.epimg.net/resizer/v2/PD5IKANFOZEX3KGCBXBRWPDBZ4.jpg?auth=9f467498ba4522a8aefeae26b8214055a6e795e7a22b54bfdea107ebffc10297&width=644&height=362&focal=698%2C315");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;

    margin: 0;
    padding: 30px;
    color: #fff;
}

/* Overlay i zi transparent për kontrast */
body::before {
    content: "";
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.45);
    backdrop-filter: blur(3px);
    z-index: -1;
}

h2, h3 {
    text-align: center;
    font-weight: 600;
    color: #ffffff;
    letter-spacing: 1px;
    text-shadow: 0 3px 10px rgba(0,0,0,0.4);
}

/* ===== TABLE WRAPPER ===== */
table {
    width: 85%;
    margin: 25px auto;
    border-collapse: collapse;

    /* efekt xhami */
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(15px);

    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    animation: fadeIn 0.7s ease;
}

/* TABLE HEADER */
table th {
    background: linear-gradient(135deg, #42a5f580, #7e57c280);
    color: #fff;
    padding: 14px;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 1px;
}

/* TABLE BODY */
table td {
    padding: 14px;
    font-size: 15px;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    color: #fff;
}

table tr:hover {
    background: rgba(255,255,255,0.15);
    transition: 0.3s;
}

/* ===== LINKS ===== */
a {
    font-weight: 600;
    padding: 6px 10px;
    border-radius: 6px;
    color: #90caf9;
    transition: 0.3s;
}

a:hover {
    color: white;
    background: #2196f3;
}

/* ===== FORM ===== */
form {
    width: 85%;
    margin: 30px auto;
    padding: 25px;

    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(15px);

    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);

    display: flex;
    justify-content: center;
    gap: 15px;
    animation: fadeIn 0.8s ease;
}

form input {
    width: 230px;
    padding: 12px;
    border: 2px solid rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.15);
    color: #fff;
    border-radius: 8px;
    font-size: 15px;
    transition: 0.3s;
}

form input::placeholder {
    color: #eee;
}

form input:focus {
    border-color: #90caf9;
    box-shadow: 0 0 10px #90caf970;
    outline: none;
}

/* BUTTON */
button {
    background: linear-gradient(135deg, #42a5f5, #7e57c2);
    color: white;
    border: none;
    padding: 12px 22px;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
    letter-spacing: 0.5px;
    transition: 0.3s;
}

button:hover {
    opacity: 0.9;
    transform: scale(1.05);
}

/* ===== ANIMATIONS ===== */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to   { opacity: 1; transform: translateY(0); }
}


    </style>
</head>
<body>
    <h2>Fituesit</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>Viti</th>
            <th>Fituesi</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($result as $row): ?>
            <tr>
                <td><?= $row['viti'] ?></td>
                <td><?= htmlspecialchars($row['fituesi']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                    |
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <h3>Add New Item</h3>
    <form method="POST" action="insert.php">
        <input type="text" name="viti" placeholder="Enter year" required>
        <input type="text" name="fituesi" placeholder="Enter name" required>
        <button type="submit" name="btn1">Save</button>
    </form>
</body>
</html>