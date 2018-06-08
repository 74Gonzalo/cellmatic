<?php
require_once 'funciones/auth.php';
session_start();
if ($_SESSION) {
$usuario = $_SESSION['name'];
$foto = "img/".$_SESSION['foto'];
echo $foto;
var_dump($_SESSION);
}
else {
  header("Location:index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cellmatic</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet">
  </head>
  <body>
    <section class"container-fluid">
      <header>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
            <h1>Cellmatic</h1>
            <p>Unite y mirá al mundo</p>
          </div>

          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Pais, ciudad">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">

              <ul class="nav navbar-nav text center">
                <li class="dropdown"> <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" Dropdown <span class="caret">Fotos</span></a>
                <ul class="dropdown-menu">
                  <li> <a class="btn btn-default" href="foto.php">Subir</a> </li>
                  <li> <a class="btn btn-default" href="ver.php">Ver</a> </li>
                </ul></li>
                <li> <a class="btn btn-default"href="amigos.php">Amigos</a></li>
                <li> <a class="btn btn-primary"href="perfil.php"><?=$usuario?></a></li>
                <li> <a class="btn btn-danger"href="logout.php">Salir</a></li>
              </ul>
              <img src="<?=$foto?>" alt="perfil"
              width="100px">
            </div>

        </div>
      </header>
