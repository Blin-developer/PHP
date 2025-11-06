<?php
// $lexo = fopen("read.txt","r");
// $permbajtja=fread($lexo,filesize("read.txt"));
// fclose($lexo);
// print("<h1>".$permbajtja."</h1>");

// $file = fopen("read.txt","r");
// $karaktere = fread($file,10); // lexon 10 karaketeret e para
// echo $karaktere;
// fclose($file);

// $file = fopen("read.txt","r");
// $rreshti = fgets($file); // lexon rreshtin e pare
// echo $rreshti;
// fclose($file);

// $file = fopen("read.txt","r");

// for ($i = 0; $i < 6; $i++) {
//     $rreshti = fgets($file);
//     if ($rreshti === false) {
//         break;
//     }// nese ska me rreshta
//     echo $rreshti . "<br>";
// }
// fclose($file);

// $file = fopen("read.txt","r");
// $rr = 3; // numri i rreshtit qe duam

// for($nr = 1; !feof($file); $nr++){
//     $rreshti = fgets($file);
//     if($nr == $rr){
//         echo "$rreshti";
//         break;
//     }
// }
// fclose($file);

$file = fopen("read.txt","r");
$rr = 6; 

for($nr = 1; !feof($file); $nr++){
    $rreshti = fgets($file);
    if($nr == 2 || $nr == 4 || $nr == 6){
        echo "$rreshti <br>";
    }
}
fclose($file);


?>