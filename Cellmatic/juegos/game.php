<?php
$choice=$_POST;
var_dump($choice);
if(empty($choice)){
  $resultado = "";
}
for ($i=0; $i <1 ; $i++) {
$v = $choice["juego"];
}
echo "$v";
echo "<br>";
$machine = rand(0,2);
switch ($machine) {
  case '0':
    $a = "piedra";
    break;

    case '1':
      $a = "papel";
      break;

      case '2':
        $a = "tijera";
        break;
  default:
    $a = "error";
    break;
}

echo "$a";
if ($a=="tijera"&&$v=="piedra"){
// &&$choice=="piedra") {
$x = "ganaste";
}
elseif ($a=="piedra"&&$v=="papel") {
$x = "ganaste";
}
else{
  $x = "perdiste";
}
echo $x;
 ?>
