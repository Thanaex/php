<?php
$myfile = fopen('C:\xampp\htdocs',"r")
                or die("Unable to open file");
echo fread ($mfile,filesize('C:\xampp\htdocs'));
fclose($myfile);
?>