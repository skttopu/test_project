<?php 
$a = '1';
$b = &$a;
$b = "22$b";
echo $a.", ".$b;

$i = 016;
echo "<br>";
echo $i / 2;

?>