<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Arrays - Indeksuar

    $a = [17,22,18,4];
    $b = array_sum(array: $a);
    $c = count(value:$a);
    $mesatarja = $b / $c;
    echo("Mesatarja e elementeve te matrices eshte $mesatarja");
    echo("<br>Numri i elementeve te matrices eshte $c");
    echo("<br>Shuma e elementeve te matrices eshte $b");
    echo("<hr>");

    $max = max(value: $a);
    echo("Numri me i madhe ne elementet e matrices eshte: $max <hr>");

    $min = min(value: $a);
    echo("Numri me i vogel ne elementet e matrices eshte: $min <hr>");

    $notat=[5,5,3,4,2,2,5,5];
    $d = array_sum(array: $notat);
    $f = count(value:$notat);
    $mesatarjaa = $d / $f;
    echo("Mesatrja e elementeve te matrices eshte $mesatarjaa");
    echo("<hr>");

    $maxx = max(value: $notat);
    echo("Numri me i madhe ne elementet e matrices eshte: $maxx <hr>");

    $minn = min(value: $notat);
    echo("Numri me i vogel ne elementet e matrices eshte: $minn <hr>");

    if($mesatarjaa < 3.49){
        echo("Suksesi juaj eshte i mire,nota me e vogel eshte $minn dhe me e madhe $maxx");
    }
    else if($mesatarjaa >= 3.5 && $mesatarjaa <4.49){
        echo("Suksesi juaj eshte shume i mire,nota me e vogel eshte $minn dhe me e madhe $maxx");
    }
    else{
        echo("Suksesi juaj eshte i shkelqyeshem,nota me e vogel eshte $minn dhe me e madhe $maxx");
    }
    echo("<hr>");

    $numrat=[100,200,300,400,500];
    array_pop($numrat);# array_pop() perdoret per te larguar elementin e fundit te matrices
    foreach($numrat as $x){
        echo("$x ");
    }
    echo("<hr>");
    array_push($numrat,600);# array_push() perdoret per te shtuar nje element ne fund te matrices
    foreach($numrat as $x){
        echo("$x ");
    }
    echo("<hr>");
    array_shift($numrat);#arry_shift() perdoret per te larguar elementin e pare te matrices
    foreach($numrat as $x){
        echo("$x ");
    }
    echo("<hr>");
    array_unshift($numrat,1000);#arry_shift() perdoret per te shtuar nje element ne fillim
    foreach($numrat as $x){
        echo("$x ");
    }
    echo("<hr>");

    $aa = [1,2,3,4,5];
    array_splice($aa,3,0,6);#arry_splice() perdoret per te shtuar nje element ne fillim
    foreach($aa as $x){
        echo("$x ");
    }
    echo("<hr>");

    array_splice($aa,2,3,7);#arry_splice() perdoret per te shtuar nje element ne fillim,mes ose ne fund
    foreach($aa as $x){
        echo("$x ");
    }
    echo("<hr>");

    $find = in_array(4,$aa);
    if($find){
        echo("Ne matric gjendet numri 4");
    }
    else{
        echo("Ne matric nuk gjendet numri 4");
    }
    echo("<hr>");

    $sh = ["A","B","D","E"];
    $findd = in_array("C",$sh);
    if($findd == true){
        echo("Ne matric gjendet shkronja C:<br>");
        foreach($sh as $x){
            echo("$x");
        }
    }
    else{
        echo("Ne matric nuk gjendet shkronja C, mirepo e shkruam ne<br>");
        array_splice($sh,2,0,"C");
        foreach($sh as $x){
            echo("$x");
        }
    }
    echo("<hr>");
    ?>
</body>
</html>