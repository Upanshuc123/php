<?php 
$myfile = fopen("DHH.txt", "w") or die("Unable to open file!"); 
$txt = "Upanshu\n"; 
fwrite($myfile, $txt); 
$txt = "Hello World!!!\n"; 
fwrite($myfile, $txt); fclose($myfile); 
?>
