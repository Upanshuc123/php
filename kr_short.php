<?php
echo"Upanshu <br>";
$arr=array("Upanshu"=>18,"Chirag"=>17,"Harshit"=>3);
krsort($arr);
foreach($arr as $x=>$x_value)
{
    echo "key=".$x.",value=".$x_value;
    echo"<br>";
}
?>