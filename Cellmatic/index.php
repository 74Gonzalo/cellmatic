<?php
require_once 'funciones/auth.php';
session_start();
// Si hay una sesion activa se deriva directo al perfil;
if ($_SESSION) {
header("Location:perfil.php");
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
    <section class="container">
      <div class="row" id="first">
        <header>
          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <h1>Cellmatic</h1>
            <!-- <br> -->
            <p>Unite y mirá al mundo</p>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
            <nav class="navbar navbar-default" role="navigation" >
              <ul class="nav nav-tabs nav-justified">
                <li><a href="registro2.php">Unite</a></li>
                <li> <a href="nosotros.php">Nosotros</a> </li>
                <form class="" action="index.php" method="post">
                  <input type="text" name="user" value="" placeholder="Usuario">
                  <input type="password" name="password" value="" placeholder="Contraseña">
                  <button type="submit" name="enter">Iniciar sesión</button>
                </form>
              </ul>
            </nav>
          </div>
        </header>
      </div>

      <div class="row" id="second">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
          <h2>Viendo la ciudad con otros ojos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum./p>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <img src="imagenes/pza_mayo.jpg" alt="plaza_de_mayo" class="img-responsive"
        width="100%">
        </div>
      </div>
      <br>
      <footer class="footer">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <p class="text-center">Otro desarrollo de Yabin Web</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <p class="text-center">Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
    </div>
  </footer>
    </section>
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
