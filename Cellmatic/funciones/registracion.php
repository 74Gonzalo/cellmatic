<?php
require_once 'funciones_img.php';
require_once 'funciones/db.php';

$a = "[]";
$z = "";

if ($_POST) {
  // var_dump($_POST);
  $informacion = $_POST;


  if ($_POST) {
      $userName = $_POST["name"];
      $userMail = $_POST["mail"];
      $userPass = $_POST["password"];
      $userConf = $_POST["conf_pass"];


  function validarInformacion($informacion){
    $errores = [];
      $userName = (trim($informacion['name']));
        if (strlen($userName)<6) {
          $errores['name'] = "Ingresá un nombre válido, 6 caracteres como mínimo";
        }
      $userMail = (trim($informacion['mail']));
        if(!filter_var($userMail,FILTER_VALIDATE_EMAIL)&&strlen($userMail<6)){
          $errores['mail'] = "Ingresá un mail válido";
        }

      $userPass = (trim($informacion['password']));
          if (strlen($userPass)<6||strlen($userPass)>12) {
           $errores['pass'] = "Ingresá una clave entre 6 y 12 caracteres";
          }
      $userConf = (trim($informacion['conf_pass']));
          if (strlen($userConf)==0||$userConf!==$userPass) {
            $errores['conf_pass'] = "Ambas claves deben ser iguales";
          }


    return $errores;
  }



  $a = validarInformacion($informacion);


  if (count($a)==0) {
    $name = $informacion["name"];
    $mail = $informacion["mail"];
    $pass = password_hash($informacion["password"],PASSWORD_DEFAULT);
    $foto = $name_foto;
    $dbConnect;
    $query = $dbConnect->prepare("INSERT into user (name,mail,password,user_photo) VALUES('$name','$mail','$pass','$foto')");
    $query->execute();

    // Creo carpeta para fotos de usuario

    $dbConnect;
    $query1 = $dbConnect->PREPARE("SELECT id_user FROM user WHERE name ='$name'");
    $query1->execute();
    $results1 = $query1->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($results1);

    for ($i=0; $i <1 ; $i++) {
    foreach ($results1 as $key => $value) {
    $idUser = $value["id_user"];

    }
    }


        $estructura = "foto/".$idUser;
        if(!mkdir($estructura, 0777, true)) {
            die('Fallo al crear las carpetas...');
          }

    header("Location:succes.php");

  }




}
}
 ?>
