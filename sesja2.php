<?php
session_start();

echo 'Welcome to page #2<br>';

echo 'Ulubiony kolor:'.$_SESSION['favcolor'];
echo 'Ulubione zwierzę:'.$_SESSION['animal'].'<br>';
echo date( 'y m d h:i:s',$_SESSION['time']). '<br>';

echo $_SESSION['bzdura'];
?>