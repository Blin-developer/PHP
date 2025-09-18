<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=1;
        switch($a){
            case 1; echo("$a = 1");
            break;

            case 2; echo("$a = 2");
            break;

            default: echo("Vlera e variables a nuk eshte e sakte");
            break;
        }
        echo("<hr>");

        $b = 15;
        switch(true){
            case ($b<20);echo("Vlera e variables b eshte me e vogel se 20");
            break;
            case ($b>=20);echo("Vlera e variables b eshte me e madhe ose e barabart me 20");
            break;
        }
        echo("<hr>");

        $c = 189;
        switch(true){
            case ($c < 100 && $c % 2 == 0 );echo("Numri eshte me i vogel se 100 dhe qift");
            break;
            case ($c < 100 && $c % 2 == 1 );echo("Numri eshte me i vogel se 100 dhe tek");
            break;
            case ($c > 100 && $c % 2 == 0 );echo("Numri eshte me i madh se 100 dhe qift");
            break;
            case ($c > 100 && $c % 2 == 1 );echo("Numri eshte me i madh se 100 dhe tek");
            break;
        }
        echo("<hr>");

        $gjendja = 2800;
        $terheqja = 1750;
        switch(true){
            case ($gjendja < $terheqja ):echo("Nuk keni fonde te mjaftueshme.Gjendja eshte 2800$");
            break;
            case ($gjendja > $terheqja ):echo("Ju keni terhequr $terheqja ,vlera ne llogari eshte ".$gjendja - $terheqja."Euro");
            break;
        }
        echo("<hr>");


        $piket = 89;
        switch(true){
            case ($piket <50 );echo("Nota jo kaluese");
            break;
            case ( $piket >= 51 && $piket<60);echo("Nota 2");
            break;
            case ($piket>= 60 && $piket<70 );echo("3");
            break;
            case ($piket>=70 && $piket<80 );echo("4");
            break;
            case ($piket>=80 && $piket<100 );echo("5");
            break;
            default: echo("Piket e testit mund te jene nga 0-100");
            break;
        }
        echo("<hr>");

        //Loops Perseritjet

        $ab = 2;
        while($ab <=5){
            echo("Vlera e variables a eshte: $ab <br>");
            $ab++;
        }
        echo("<hr>");
        $ac = 1;
        do{
            echo("Vlera e variables ac eshte: $ac<br>");
            $ac++;
        }
        while($ac <=10);

        echo("<hr>");

        for($i = 20; $i >= 0; $i -= 2){
            echo("Vlera e variables i eshte: $i <br>");
        }
        echo("<hr>");

        for($d = 2; $d <= 10; $d += 2){
            echo("$i.Lipjani <br>");
        }
        echo("<hr>");

        $shuma = 0;
        for($g = 100; $g <= 1000; $g += 100){
            $shuma += $g;
            echo("Shuma e vlerave te variables g eshte: $shuma<br>");
        }
        echo("<hr>");

    ?>
</body>
</html>