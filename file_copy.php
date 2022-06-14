<?php
// echo readfile("DHH.txt");
$file="DHH.txt";
if(file_exists($file))
{
    echo readfile("DHH.txt");
    copy($file,"EB.txt");
}
    else{
    echo "file does not exist";
}
?>