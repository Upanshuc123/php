<?php
echo"Upanshu";
$a1=array("a"=>"hi","b"=>"hello","c"=>"bye","d"=>"hllow");
$a2=array("a"=>"hey","b"=>"grow");
array_splice($a1,0,2,$a2);
print_r($a1);
?>