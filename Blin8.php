<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function a($x,$z){
        if($x > $z){
            echo("$x > $z");
        }
        elseif($z >$x){
            echo("$z > $x");
        }
        else{
            echo("$x = $z");
        }
    }
    a(44,87);
    echo("<hr>");

    function b(){
        $shuma = 0;   
       for($i=5; $i<=25; $i++){
        $shuma += $i;
    
        }
        echo("Shuma e numrave nga 5 deri 254 eshte $shuma");
    }
    b();
    echo("<hr>");

    function c(){
        $lista = [5,6,7,8,9,10];
        foreach($lista as $x){
            if($x % 2 == 0){
                echo("Numri $x eshte numer qift<br>");
            }
            else{
                echo("Numri $x eshte numer tek<br>");
            }
        }
    }
    c();
    echo("<br>");
    echo("<hr>");

    function d(){
        $prodhimi = 1;   
       for($i = 5; $i >= 1; $i--){
        $prodhimi *= $i;
    
        }
        echo("Faktorieli i numrit  5  eshte: $prodhimi");
    }
    d();
    echo("<hr>");

    function e(){
        $numrat = [10,5,19,64,105,12];
        $max=max($numrat);
        $min=min($numrat);
        echo("Numri me i madhe i ktyre numrave eshte: $max");
        echo("<br>");
        echo("Numri me i vogel i ktyre numrave eshte: $min");
    }
    e();
    echo("<hr>");

    function f(){
        $listaa=[5,12,76,94,38,15];
        foreach($listaa as $x){
            $prodhimi = $x * 2;
            echo("Dyfishi i numrit $x eshte :$prodhimi<br>");
        }
    }
    f();
    echo("<hr>");

    function g(){
        $listaaa=[5,12,76,94,38,15];
        $shuma =array_sum($listaaa);
        $nrelementeve=count($listaaa);
        $mesatarja = $shuma / $nrelementeve;
        echo("Mesatarja e elementeve te array eshte: $mesatarja");
    }
    g();
    echo("<hr>");

    function t(){
    echo("Tabela e shumezimit<br>");
    for($i=4; $i<=5; $i++){
        for($j=1;$j<=10;$j++){
            $prodhimi=$i * $j;
            echo(" $i * $j = $prodhimi <br>");
        }
    }
    }
    t();
    echo("<hr>");

    function i(){
        $lista1 = [20];
        foreach($lista1 as $x){
            if($x % 5 == 0){
                echo("Numri $x eshte i plotpjestueshem<br>");
            }
            else{
                echo("Numri $x nuk eshte i plotpjestueshem<br>");
            }
        }
    }
    i();
    echo("<hr>");

    function j(){
        $list = rand(20,40);
        if($list % 2 == 0){
            echo("Numri $list eshte numer qift");
        }
        else{
            echo("Numri $list eshte numer tek");
        }
    }
    j();
    echo("<hr>");
    ?>
</body>
</html>