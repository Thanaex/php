<?php
$wyrazenie = '/być';
$tekst = "być albo nie być";
if(preg_match($wyrazenie, $tekst) )
    echo("Znaleziono podany wzorzec.");
else
    echo("Nie znaleziono podanego wzorca.");
?>