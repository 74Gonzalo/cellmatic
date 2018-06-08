<?php
require_once 'funciones/db.php';
if ($_POST) {
  $infoAuth = $_POST;
  $userName = $_POST["user"];
  $dbConnect;
  $query = $dbConnect->prepare("SELECT * FROM user where name = '$userName' ");
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i <1 ; $i++) {
foreach ($results as $key => $value) {
$idNombre = $value["id_user"];
$nombre = $value["name"];
$contrasena = $value["password"];
$foto = $value["user_photo"];
}
}
var_dump($idNombre,$nombre,$contrasena,$foto);
// var_dump($dbConnect);

function validarUsuario($infoAuth){

$nombreUsuario = $infoAuth["user"];
$contrasenaUsuario = $infoAuth["password"];
$errorAuth = [];
if($nombre ==""){
  $erroAuth['user'] = "El usuario no está registrado";
}

  return $nombre;
}
$y = validarUsuario($infoAuth);
echo "variable y";
var_dump($y);
}

 ?>
