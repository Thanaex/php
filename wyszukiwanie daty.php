<?php
$wzorzec_daty='/[0123]?\d[-\ \/\.][01]?\d[=\\/\.]\d{4}/';
$tekst="Sucha Beskidzka, 21.11.2024";
if(preg_match($wzorzec_daty,$tekst))
    echo("znaleziono datę");
else
    echo("nie znaleziono daty");
?>