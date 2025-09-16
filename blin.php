<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <?php
    echo("<h1 style='color:blue;font-size:25px;'>Welcome to PHP from php</h1>");
    ?>
    <h3>Header 3 in HTML</h3>

    <?php
    echo("<h3>Header 3 in PHP</h3>");
    echo("Stringu ne php");
    echo("<br>");
    echo("Stringu 2 ne php");
    echo("<hr>");

    //single line comment
    /*
    multiple lines comment
    */

    $name="Adi";
    $surname="Gashi";
    $city="Lipjan";
    $age=16;

    echo($name."<br>");
    echo($city);
    echo("<hr>");

    //Adi Gashi jeton ne lipjan dhe eshte 16 vjeq
    echo($name." ".$surname." jeton ne ".$city." dhe eshte ".$age." vjeq.");
    echo("<hr>");

    $numri1=15;
    $numri2=3;
    $shuma = $numri1 + $numri2;
    $zbritja = $numri1 - $numri2;
    $shumezimi = $numri1 * $numri2;
    $pjestimi = $numri1 / $numri2;
    $mbetja = $numri1 % $numri2;
    $fuqizimi = $numri1 ** $numri2;


    echo("Shuma e numrave eshte: ".$shuma."<br>");
    echo("Zbritja e numrave eshte: ".$zbritja."<br>");
    echo("Shumezimi e numrave eshte: ".$shumezimi."<br>");
    echo("Pjestimi e numrave eshte: ".$pjestimi."<br>");
    echo("Mbetja e numrave eshte: ".$mbetja."<br>");
    echo("Fuqizimi e numrave eshte: ".$fuqizimi."<br>");
    ?>
</body>
</html>