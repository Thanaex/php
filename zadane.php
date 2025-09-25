<?php
$dataPoczatkowa = strtotime("2008-05-03");
$dataObecna = time();
$roznica = $dataObecna - $dataPoczatkowa;
$dniMinelo = floor($roznica / (60 * 60 * 24));
echo "Od 03.05.2007 minęło: $dniMinelo dni.";
?>
