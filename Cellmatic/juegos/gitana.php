<?php

require_once("funciones.php");
//prueba de si llega el $_POST
var_dump($_POST);
  echo"la bola es";
  echo $_POST["play"];
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="gitana.php" method="post">

       <button type="submit" name="play"value=1>JUGAR</button>
     </form>

   </body>
 </html>
<?php

//así saco las bolas


echo "<br>";
echo "<br>";
echo "<pre>";

if ($_POST["play"]==1) {
$bola1 = rand(1,46);
echo " La bola 1 es ";
echo "$bola1";
}
echo "<br>";
$bola2=rand(1,46);
if($_POST["play"]==1&&$bola1!=$bola2){
  echo "La bola 2 es ";
  echo $bola2;
}
echo "<br>";
echo $bola2;
echo "<br>";
$bola3=rand(1,46);
if($_POST["play"]==1&&($bola1!=$bola3)&&($bola2!=$bola3)){
  echo "La bola 3 es ";
  echo $bola3;
}
echo "<br>";
echo $bola3;
;


//pruebas
echo "<br>";
echo "<br>";
echo rand(1,46);
echo "<br>";
var_dump($_POST);
echo "<br>";
echo "<br>";
echo "Por qué hay veces que no aparece la bola 3?";
//como aparecieron fallas, cuando se repetía el número, finalizaba el programa
echo "funciones";
echo "<br>";
echo "<br>";

//haciendo con while
echo "haciendolo con do-while";
echo "<br>";
echo "<br>";
//Primero la bola 1 con

if ($_POST["play"]==1) {
$bola1 = rand(1,46);
echo " La bola 1 es ";
echo "$bola1";
}
echo "<br>";
echo "<br>";
//Bola 2 con la información que viene de post (la jugada ) y
// la condición que bola1 y bola2 deben ser diferentes
$bola2=rand(1,46);
if($_POST["play"]==1&&$bola1!=$bola2){
  echo "La bola 2 es ";
  echo $bola2;
}

echo "<br>";
echo "<br>";
// a partir de la bola 3 uso do - while
$bola3=rand(1,46);
do {
  echo "La bola 3 es ";
  echo $bola3;
    }
   while ($_POST["play"]==1&&($bola3==$bola1)&&($bola3==$bola2));
echo "<br>";
echo "<br>";
$bola4=rand(1,46);
 do {
   echo "La bola 4 es ";
   echo $bola4;
 }
 while ($_POST["play"]==1&&($bola4==$bola1)&&($bola4==$bola2)&&($bola4==$bola3));
  echo "<br>";
  echo "<br>";
$bola5=rand(1,46);
do{
    echo "La bola 5 es ";
    echo $bola5;
}
while ($_POST["play"]==1&&($bola5==$bola1)&&($bola5==$bola2)&&($bola5==$bola3)&&($bola5==$bola4));

///uso array rand

echo "<br>";
echo "uso de array_rand";
echo "<br>";

 ?>
