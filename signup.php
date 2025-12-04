<?php
include_once "connection.php";

$message = "";

if(isset($_POST['submit'])) {
    $name  = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $password = $_POST['password'];


if ($name === "" || $email === "" || $password === ""){
    $message = "Ju lutem plotesoni te gjitha fushat.";
}
else{
    $conn = lidhja();
    #kontrollon nese email ekzsiton ne tabelen e databazes
    $stmt = $conn->prepare("SELECT id FROM singup WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $mail = $stmt->fetch();

    if($mail) {
        $message = "Ky email eshte tashme i regjistruar.";
    }
    else{
        #bene passwordin hash- te palexueshem
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

        #Shton userin e ri
        $insert = $conn->prepare("
        INSERT INTO singup (name,email,password)
        VALUES (:name,:email,:password)
        ");

        $insert->execute([
            'name' => $name,
            'email' => $email,
            'password' =>$hashedPassword
        ]);

        $message = "Regjistrimi u kry me sukses! Tani mund te hyni ne llogari";
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup 2025</title>

    <style>
        /* === GLOBAL PAGE STYLE === */
body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    background: linear-gradient(135deg, #0a0217, #190842, #0f0b33);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

/* === GLOWING ORBS === */
.orb {
    position: fixed;
    width: 420px;
    height: 420px;
    border-radius: 50%;
    filter: blur(130px);
    opacity: 0.55;
    animation: float 9s infinite ease-in-out alternate;
    pointer-events: none;
}

.orb1 {
    background: #7b2ff7;
    top: -120px;
    left: -100px;
}

.orb2 {
    background: #00eaff;
    bottom: -150px;
    right: -120px;
}

@keyframes float {
    from { transform: translateY(0px) scale(1); }
    to { transform: translateY(40px) scale(1.05); }
}

/* === CONTAINER === */
.container {
    width: 390px;
    background: rgba(255, 255, 255, 0.07);
    padding: 45px 40px;
    border-radius: 22px;
    backdrop-filter: blur(25px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 0 55px rgba(0, 0, 0, 0.45);
    animation: fadeUp 0.6s ease-out;
    text-align: center;
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
}

/* === TITLES === */
h2 {
    color: #fff;
    font-size: 32px;
    margin-bottom: 8px;
}

.subtitle {
    color: #bbbbff;
    font-size: 14px;
    margin-bottom: 30px;
}

/* === FORM INPUTS === */
.input-group {
    text-align: left;
    margin-bottom: 22px;
}

.input-group label {
    display: block;
    margin-bottom: 6px;
    font-size: 14px;
    color: #e0e0ff;
    opacity: 0.8;
}

.input-group input {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: none;
    outline: none;
    font-size: 15px;
    color: #fff;
    background: rgba(255, 255, 255, 0.15);
    transition: 0.25s ease;
}

.input-group input:focus {
    background: rgba(255, 255, 255, 0.28);
    box-shadow: 0 0 14px #8752ff;
}

/* === BUTTON === */
button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg, #7b2ff7, #5a3efc);
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s ease;
    margin-top: 10px;
}

button:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 18px #8d5aff;
}

/* === BOTTOM TEXT === */
.bottom-text {
    margin-top: 20px;
    color: #ccccff;
    font-size: 14px;
}

.bottom-text a {
    color: #00eaff;
    text-decoration: none;
    font-weight: 500;
}

.bottom-text a:hover {
    text-decoration: underline;
}

/* === SUCCESS / ERROR MESSAGE === */
.msg {
    font-size: 15px;
    margin-bottom: 15px;
    color: #72ffbf;
}

    </style>
</head>

<body>

    <div class="orb orb1"></div>
    <div class="orb orb2"></div>

    <div class="container">
        <h2>Regjistrohu</h2>
        <p class="subtitle">Krijo llogarinë tënde dhe fillo menjëherë.</p>

        <?php if ($message): ?>
            <p class="msg"><?= $message; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            
            <div class="input-group">
                <label>Emri</label>
                <input type="text" name="name">
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div class="input-group">
                <label>Fjalëkalimi</label>
                <input type="password" name="password">
            </div>

            <button type="submit" name="submit">Regjistrohu</button>
        </form>

        <p class="bottom-text">Ke llogari? <a href="login.php">Kyqu</a></p>
    </div>

</body>

</html>

