<?php
if ($_FILES) {

function guardarImagen(){
  if ($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK) {
    echo "Isabelle  be carefull to Victoria";
    $name = $_FILES["imgPerfil"]["name"];
    $file = $_FILES["imgPerfil"]["tmp_name"];
    // con esto le ponemos la extensión
    // $ext = pathinfo($name,PATHINFO_EXTENSION);
    // $myFile = dirname (__FILE__);
    // $myFile = $myFile."/img/";
    // $myFile = $myFile."newImage.".$ext;
    // // move_uploaded_file($file,$myFile);
    move_uploaded_file($file,"img/".$name);

  }

}
$name_foto = $_FILES["imgPerfil"]["name"];

guardarImagen();
}
?>
