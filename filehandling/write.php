<?php
$shkruaj = fopen("shkruaj.txt","w");
fwrite($shkruaj,"Ju keni shkruar rreshtin e pare brenda ketije file\n");
fwrite($shkruaj,"Ju keni shkruar rreshtin e dyte brenda ketije file\n");
fwrite($shkruaj,"Ju keni shkruar rreshtin e trete brenda ketije file\n");
fclose($shkruaj);
echo("U ndertua file i ri dhe u shkruajten 3 rreshta brenda tij");
?>