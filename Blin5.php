<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1; $i<=10; $i++){
        $prodhimi=6 * $i;
        echo("6 * $i = $prodhimi <br>");
    }
    echo("<hr>");

    echo("Tabela e shumezimit<br>");
     for($i=5; $i<=10; $i++){
        for($j=1;$j<=10;$j++){
            $prodhimi=$i * $j;
            echo(" $i * $j = $prodhimi <br>");
        }
    }
    echo("<hr>");

    for($j=3; $j<=12; $j+=3){
        if($j== 9){
            echo(" Numri 9");
            break;#nderpret ekzekutimin e loop
        }
        echo("$j<br>");
    }
    echo("<hr>");

    for($j=3; $j<=12; $j+=3){
        if($j<= 7){
            continue;#tejkalon vleren e percaktuar
        }
        echo("$j<br>");
    }
    echo("<hr>");

    for($j=1; $j <= 30; $j++){
        if($j >=15 && $j <= 25){
            continue;
        }
        else if($j == 28){
            break;
        }
        echo("$j<br>");
    }
    echo("<hr>");

    for($j=10; $j <= 50; $j++){
        if($j %2 == 0){
            continue;
        }
        echo("$j <br>");
    }
    echo("<hr>");

    #Matricat - Arrays
    $matrica = [1,2,3,4];
    echo($matrica[2]);//3
    echo("<hr>");

    foreach($matrica as $x){// loop perdoret per te shfaq elementet e matrices
        echo ("$x ");
    }
    echo("<hr>");

    $elementet = count(value: $matrica);//perdoret per te gjetur numrin e elementeve te matrices
    echo("Numri i elementeve te matrices eshte: $elementet");
    echo("<hr>");

    $shuma = array_sum(array: $matrica);//perdoret per te gjetur shumen e elementeve te matrices
    echo("Shuma e elementeve te matrices eshte $shuma");
    echo("<hr>");

    $numrat = [2,4,6,8,10];
    for($i = 0; $i <= count(value: $numrat)-1; $i++){
        echo($numrat[$i]." ");
    }
    echo("<hr>");

    ?>
</body>
</html>