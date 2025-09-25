<?php
$myfile = fopen("webdicitionary.txt","r")
                or die("Unable to open file");
echo fgets ($mfile);
fclose($myfile);
?>
