<?php
if ($_POST["play"]==1) {

//$numeros = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,34,35,36,37,38];

$numeros =range(0,38);
shuffle($numeros);
$randKey = array_rand($numeros,6);
$bola1 = $numeros[$randKey[0]];
$bola2 = $numeros[$randKey[1]];
$bola3 = $numeros[$randKey[2]];
$bola4 = $numeros[$randKey[3]];
$bola5 = $numeros[$randKey[4]];
$bola6 = $numeros[$randKey[5]];

$orden = rand(1,6);

echo $bola1;
echo "<br>";
echo $numeros[$randKey[0]];
echo "<br>";
echo $numeros[$randKey[1]];
echo "<br>";
echo $numeros[$randKey[2]];
echo "<br>";
echo $numeros[$randKey[3]];
echo "<br>";
echo $numeros[$randKey[4]];
echo "<br>";
echo $numeros[$randKey[5]];

}


 ?>
