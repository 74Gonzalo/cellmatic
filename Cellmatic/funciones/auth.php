<?php
require_once 'funciones/db.php';
if ($_POST) {

  $infoAuth = $_POST;
  var_dump($infoAuth);

  $userName = $_POST["user"];
  $dbConnect;
  $query = $dbConnect->prepare("SELECT * FROM user where name = '$userName' ");
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_ASSOC);
  $user = $results;

  for ($i=0; $i <1 ; $i++) {
  foreach ($user as $key => $value) {
  $idNombre = $value["id_user"];
  $foto = $value["user_photo"];
  }
  }

function validarUsuario($user,$infoAuth){


$nombre = "";
$name = "";
$userName = "";
$contrasena = "";

for ($i=0; $i <1 ; $i++) {
foreach ($user as $key => $value) {
$nombre = $value["name"];
$contrasena = $value["password"];
$foto = $value["user_photo"];
}
}
$nombreUsuario = $infoAuth["user"];
$contrasenaUsuario = $infoAuth["password"];


$errorAuth = [];
if($nombre == ""){
  $errorAuth['user'] = "El usuario no está registrado";
}

$userPass = trim($infoAuth['password']);
    if(password_verify($userPass,$contrasena)==false){
      $errorAuth['pass'] = "La clave ingresada es errónea";
  }


return $errorAuth;
}
$y = validarUsuario($user,$infoAuth);

if(count($y)==0){
session_start();
$_SESSION['id']= $idNombre;
$_SESSION['name'] = $_POST["user"];
$_SESSION['foto'] = $foto;

$caducidad = time()+60*60;

  setcookie('CELLMATIC_ID',$id,$idNombre);
  setcookie('CELLMATIC_USER',$_POST["user"],$caducidad);
  setcookie('CELLMATIC_FOTO',$foto,$caducidad);



header("Location:perfil.php");
}
var_dump($foto);
echo "la función es ";
var_dump($y);
}

 ?>
