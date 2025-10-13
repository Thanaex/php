<?php
$wyrazenie = '/\d{2}-\d{3}/';
$tekst = "34-220 Sucha Beskidzka";
if(preg_match($wyrazenie,$tekst))
    echo("Znaleziono podany wzorzec.");
else
    echo("Nie znaleziono podanego wzorca.");
?>
