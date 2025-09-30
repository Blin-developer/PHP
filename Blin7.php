<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Funksionet-Functions

    function a(){
        echo("Hello World");
    }
    a();//funksion pa parametra me echo
    echo("<hr>");

    function b(){
        return("Hello PHP");
    }
    echo(b());//funksion pa parametra me return
    echo("<hr>");

    function c($a){
        echo("Hello $a");
    }
    c("Bora");//funksion me parameter me echo
    echo("<hr>");

    function d($x,$y){
        return($x * $y);
    }
    echo(d(6,12));//funksion me dy parametra me return
    echo("<hr>");

    function e(){
        $teksti = "programimi ne backend me php";
        $b = strtoupper($teksti);
        return $b;
    }
    echo(e());
    echo("<hr>");

    function f($a){
        $b = strtoupper($a);
        return $b;
    }
    echo(f("programimi ne backend me php"));
    echo("<hr>");

    function g($h,$r){
        if($h > $r){
            echo("Numri $h eshte me i madh se $r");
        }
        else if($r > $h){
            echo("Numri $r eshte me i madh se $h");
        }
        else{
            echo("Numri $h eshte i barabar me numrin $r");
        }
    }
    echo(g(34,78));
    echo("<hr>");

    function y($a,$b,$c,$d,$f){
        $shuma =$a+$b+$c+$d+$f;
        $notat = 5;
        $mesatarja=$shuma / $notat;
        if($mesatarja < 2.5){
            echo("Nota mesatare e juaj eshte $mesatarja dhe suksesi eshte mjaftueshem");
        }
        elseif($mesatarja >=2.5 && $mesatarja < 3.5){
            echo("Nota mesatare e juaj eshte $mesatarja dhe suksesi eshte shume  i mire");
        }
        elseif($mesatarja >=3.5 && $mesatarja < 4.5){
            echo("Nota mesatare e juaj eshte $mesatarja dhe suksesi eshte shume  i mire");
        }
        elseif($mesatarja >=4.5 && $mesatarja < 5){
            echo("Nota mesatare e juaj eshte $mesatarja dhe suksesi eshte shume  i shkelqyeshem");
        }
    }
    echo(y(5,5,4,3,5));
    echo("<hr>");

    // funksionet me parametra default

    function i($a = "Zani"){
        echo("Hello $a");
    }
    i();//funksioni qe vleren e parametrit e ka default
    echo("<hr>");
    i("Niti");
    echo("<hr>");

    function j($k){
        if($k %2 == 0){
            echo("Numri $k eshte qift");
        }
        else{
            echo("Numri $k eshte tek");
        }
    }
    j(24);
    echo("<hr>");

    function k($j){
        if($j == "Molla"){
            echo("Qmimi i mollave eshte 1.70cent");
        }
        elseif($j == "Dardha"){
            echo("Qmimi i dardhave eshte 1.95cent");
        }
        elseif($j == "rrush"){
            echo("Qmimi i rrushit eshte 2.60cent");
        }
        elseif($j == "banane"){
            echo("Qmimi i bananeve eshte 1.19cent");
        }
        elseif($j == "pjeshka"){
            echo("Qmimi i pjeshkave eshte 2.20cent");
        }
        else{
            echo("Shenoni njerin nga frutat: molla,dardha,rrushi,banane,pjeshka");
        }
    }
    k("banane");
    echo("<hr>");

    function t($q){
        for($u = 1; $u <= $q; $u++){
            echo("PHP<br>");
        }
    }
    t("4");
    echo("<hr>");

    ?>
</body>
</html>