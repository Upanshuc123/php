<?php
echo"Upanshu<br/>";
$x=10;
function myfun()
{
    $y=20;
    echo"$y <br/>";
    echo $GLOBALS['x']."<br>";
}
myfun();
echo"$x<br/>";
?>