<?php declare(strict_types=1); 
echo"Upanshu<br>";
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "51 + 98 = " . sum(51, 98) . "<br>";
echo "45 + 56 = " . sum(45, 56) . "<br>";
echo "11 + 9 = " . sum(11, 9);
?>