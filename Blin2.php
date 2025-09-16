<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $teksti = "Ne Lipjan gjenden dy gjimnaze";

    $gjatesia = strlen($teksti);#metoda per numrin e shkronjave te stringut
    echo("Teksti i mesiperm ka $gjatesia shkronja <br>");

    $fjalet = str_word_count($teksti);#metoda per numrin e fjaleve te stringut
    echo("Teksti i mesiperm ka $fjalet fjale<br>");

    $big = strtoupper($teksti);#metoda per konvertimin e stringut ne shkronjat e medha
    echo($big."<br>");

    $small = strtolower($big);#metoda per konvertimin e stringut me shkronja te vogla
    echo($small."<br>");

    $ucf = ucfirst($small);#metoda per te konvertuar shkronjen e pare te stringut ne shkronje te madhe
    echo("$ucf.<br>");

    $lcf = lcfirst($big);#metoda per te konvertuar shkronjen e pare te stringut ne shkronje te vogel
    echo("$lcf <br>");

    $ucw = ucwords($small);#metoda perdoret per te konvertuar shkronjen e pare te qdo fjale ne shkronje te madhe
    echo("$ucw <br>");

    $teksti2 = str_replace("Lipjan","Prishtine",$teksti);#metoda e zevendeson nje fjale te stringut me nje fjale tjeter
    echo("$teksti2 <br>");

    $teksti3 = strrev($teksti);#metoda e kthen tekstin ne anen e kundert
    echo($teksti3);
    echo("<hr>");

    #Number Methods

    $number1 = min(57,99,180,4,15);#metoda perdoret per te gjetur numrin me te vogel te vargut 
    echo("Numri me i vogel nga lista e numrave eshte $number1<br>");

    $number2 = max(57,99,180,4,15);#metoda perdoret per te gjetur numrin me te madhe te vargut 
    echo("Numri me i madh nga lista e numrave eshte $number2<br>");

    $absolute = abs(-128);#metoda perdore per te gjetur vleren absolute te numrit
    echo("Vlera absolute e numrit -128 eshte $absolute<br>");

    $squareroot = sqrt(81);#metoda perdoret per te gjetur rrenjen katrore
    echo("Rrenja katrore e numrit 81 eshte $squareroot<br>");

    $base = 4;
    $exponent = 2;
    $power = pow($base,$exponent);#metoda perdoret per te gjetur fuqin e numrit
    echo("Fuqia e numrit me bazen $base dhe eksponentin $exponent eshte $power<br>");

    $round1 = round(4.4);#metoda perdoret per te rrumbullaksuar numrin ne mumer te plote
    echo("Rrumbullaksimi i numrit 4.4 eshte $round1<br>");

    $round2 = round(3.14327598, 2);#metoda perdoret per rrumballaksuar numrin me disa numra psa presjes dhjetore
    echo("Rrumbullaksimi i numrit me dy numra pas presjes dhjetore eshte $round2<br>");

    $ceil1 = ceil(3.000001);#metoda perdoret per te rrumbullaksuar numrin per nje meshume sesa baza e tij
    echo("Rrumbullaksimi i numrit me metoden ceil eshte $ceil1<br>");

    $floor1 = floor(3.9999);#metoda e rrumbullakson numrin ne bazen e numrit
    echo("Rrumbullaksimi i numrit me metoden floor eshte $floor1<br>");

    $intvalue = intval(1.789263);#metoda per te marre vetem bazen e numrit nga nje numer me presje
    echo("Rrumbullaksimi i numrit me metoden intval eshte $intvalue <br>");

    $random = rand();#metoda per te gjeneruar nje numer random 9 shifror
    echo("Numri random i gjeneruar me metoden rand() eshte $random<br>");

    $random1 = rand(10,100);#metoda per te gjeneruar nje numer random ndermjet dy vlerave
    echo("Numri random i gjeneruar me metoden random(10,100) eshte $random1<br>");

    $random2 = rand(1,10)*10;
    echo("Numri i gjeneruar eshte $random2<br>");

    

 ?>
</body>
</html>