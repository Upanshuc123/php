<?php
echo "Upanshu<br>";
$cars = array("BMW", "Audi", "Toyota");
sort($cars);
print_r($cars);
echo "<br>";
$numbers = array(15, 10, 90, 22, 11);
rsort($numbers);
print_r($numbers);
echo "<br>";
$age = array("Upanshu" => "15", "Siddhant" => "37", "Vansh" => "13");
asort($age);
print_r($age);
echo "<br>";
$age = array("Raghav" => "25", "Aman" => "7", "Naman" => "36");
ksort($age);
print_r($age);
echo "<br>";
$age = array("Jasnoor" => "19", "Kaustav" => "18", "Aatif" => "43");
arsort($age);
print_r($age);
echo "<br>";
$age = array("Ankit" => "21", "Harshit" => "38", "Chirag" => "17");
krsort($age);
print_r($age);
echo "<br>";
?>