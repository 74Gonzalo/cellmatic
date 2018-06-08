
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
              <li><a href="registro.php">Unite</a></li>
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
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="row" id="formulario">
        <div class="col-sm-6 col-md-6 col-lg-6 text-center">

      </div>


            <div class="col-xs-12- col-sm-12 col-md-12 col-lg-12">
          <form class="form-horizontal" action="registro.php" method="post" enctype="multipart/form-data">
            <br>
              <div class="form-group">
                <label for="name" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 control-label">Nombre</label>
                  <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
                      <input class="form-control"type="text" name="name" value="" id="name" placeholder="Ingresá tu nombre">
              </div>
            </div>
              <div class="form-group">
                <label for="mail" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 control-label">e-Mail</label>
                  <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
                    <input class="form-control"type="text" name="mail" value="" id="mail"placeholder="Ingrasá tu e-mail" >

                  </div>
              </div>
              <div class="form-group">
                <label for="password"class="col-xs-3 col-sm-3 col-md-2 col-lg-2 control-label">Contraseña</label>
                <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
                  <input class="form-control"type="password" name="password" value="" id="password"placeholder="Ingrasá una contraseña" >
              </div>

            </div>
            <div class="form-group">
              <label for="conf_pass"class="col-xs-3 col-sm-3 col-md-2 col-lg-2 control-label">Contraseña</label>
              <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
                <input class="form-control"type="password" name="conf_pass" value="" id="conf_pass"placeholder="Confirmá la contraseña" >
            </div>

          </div>
          <!--En el campo hidden pongo el tamaño máximo del archivo que le asigno  -->

          <!-- <input type="hidden" name="MAX_FILE_SIZE" value="300000"> -->

          <div class="form-group">
              <label for="foto" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 control-label">Foto de perfil</label>
              <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
                <input class="form-control" type="file" name="imgPerfil" value="" id="foto">

              </div>

          </div>



      <div class="form-group text-center">

          <button class="text-center"type="submit" name="send">Enviar</button>
        </div>

          </div>
      </div>
      </div>

      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

      </div>
      <br>
      <br>
<?php
require_once 'partials/footer.php'; ?>
