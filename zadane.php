<?php
$cookie_name = "uczen";
$cookie_value = "Michał Głąb";
$cookie_expire = time() + (7*24*60*60); //7day
setcookie ($cookie_name, $cookie_value, $cookie_expire);
?>
