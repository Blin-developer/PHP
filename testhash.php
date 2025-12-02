<?php
$pass = "Programminginphp123";
$passhash = password_hash($pass,PASSWORD_DEFAULT);

echo($passhash);

if(password_verify($pass,$passhash)){
    echo ("<br>Passwordi eshte i sakte");
}
else{
    echo("<br>Passwordi  eshte i pasakte");
}
?>