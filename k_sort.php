<?php
echo"Upanshu";
$Marks=array("Odin"=>"100","Hela"=>"50","Surtur"=>"48");
asort($Marks);

foreach($Marks as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>