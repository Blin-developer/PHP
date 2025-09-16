<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="Blin3.php" method="post">
        <input type="number" name="txt2" placeholder="Shenoni nje numer">
    </form>
    <?php
    $number= $_POST['txt2'];
    if($number >= 0 && $number <=100){
        echo("Numri eshte ndermjet 0 dhe 100");
    }
    elseif($number >100 && $number <=10000){
        echo("Numri eshte ndermjet 100 dhe 10000");
    }
    else if($number >10000){
        echo("Numri eshte me i madh se 10000");
    }
    else{
        echo("Numri eshte negativ");
    }
    ?>


    <form action="Blin3.php" method="post">
        <input type="number" name="txt3" placeholder="Number">
    </form>
    <?php
    $passi= $_POST['txt3'];
    $gjatesia = strlen($passi);
    if($gjatesia >= 8){
        echo("Passwordi pranohet si i sakte: $passi");
    }
    else{
        echo("Passwordi duhet te kete 8 ose me shume  karaktere sepse: $gjatesia");
    }
    ?>


    <form action="Blin3.php" method="post">
        <input type="text" name="txt4" placeholder="Numrimi">
    </form>
    <?php
    $fjalia= $_POST['txt4'];
    $numrimi = str_word_count($fjalia);
    if($numrimi > 5){
        echo("Keni kaluar limitin e fjaleve,keni shenuar $numrimi fjale");
    }
    else{
        echo("Mund te shenoni edhe ".(5-$numrimi)."fjale");
    }
    ?>


    <form action="Blin3.php" method="post">
        <input type="text" name="txt5" placeholder="Shenoni nje fjale">
    </form>
    <?php
    $fjala= $_POST['txt5'];
    $big = strtoupper($fjala[0]);
    if($big == "A" || $big == "K"){
        echo(strtoupper($fjala));
    }
    else{
        echo(strtolower($fjala));
    }
    ?>

    <form action="Blin3.php" method="post">
        <input type="text" name="txt6" placeholder="Shenoni emrin tuaj">
    </form>
    <?php
    $marrja= $_POST['txt6'];
    if($big = "A" || $big == "K"){
        echo("WELCOME TO OUR WEBSITE $marrja");
    }
    ?>


    <form action="Blin3.php" method="post">
        <input type="number" name="txt" placeholder="Shenoni viti aktual">
    </form>
    <?php
    $viti= $_POST['txt'];
    if($viti < 2000){
        echo("Jemi duke jetuar ne shekullin 20");
    }
    else{
        echo("Jemi duke jetuar ne shekullin 21");
    }
    ?>

    
    <?php
    $viti = 2025;
    if($viti < 2000){
        echo("Jemi duke jetuar ne shekullin 20");
    }
    else{
        echo("Jemi duke jetuar ne shekullin 21");
    }
    ?>

    
</body>
</html>