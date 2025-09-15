<?php
$cars = array (
   array("Volvo",22,"black"),
   array("BMW",15,"blue"),
   array("Toyota",10,"red")
);
echo "<table>\n";
echo "<tr><td>Car</td><td>In stock</td><td>Colour</td></tr>\n";
echo "<tr><td>". $cars[0][0]."</td><td>".$cars[0][1]."</td><td>".$cars[0][1][1]."</td></tr>\n";
echo "<tr><td>". $cars[1][0]."</td><td>".$cars[0][1]."</td><td>".$cars[0][1][1]."</td></tr>\n";
echo "<tr><td>". $cars[1][0]."</td><td>".$cars[1][1]."</td><td>".$cars[1][1][1]."</td></tr>\n"; echo "</tabel>"

?>
