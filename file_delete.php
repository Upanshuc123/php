<?php
// echo readfile("DHH.txt");
$file="DHH.txt";
if(file_exists($file))
{
    // echo readfile("DHH.txt");
    unlink("DHH.txt");
}
    else{
    echo "file does not exist";
}
?>