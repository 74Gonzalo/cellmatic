<?php
// declaración variables $bolax
$bola1="";
$bola2="";
$bola3="";
$bola4="";
$bola5="";
$bola6="";

if (!empty($_POST)) {
  $jugada["play"] = $_POST["play"];
}
else {
  $jugada["play"] = "";
}

// $jugada = $_POST;
if ($jugada["play"]==1) {
//sorteo
  $numeros =range(0,38);
    shuffle($numeros);
      $randKey = array_rand($numeros,6);
          $bola1 = $numeros[$randKey[0]];
          $bola2 = $numeros[$randKey[1]];
          $bola3 = $numeros[$randKey[2]];
          $bola4 = $numeros[$randKey[3]];
          $bola5 = $numeros[$randKey[4]];
          $bola6 = $numeros[$randKey[5]];
}
else {
  $jugada["play"]="";
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
     <link rel="stylesheet" href="css/estilos.css">
     <link  href="css/bootstrap.min.css" rel="stylesheet" media="screen">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>GITANA</title>
     <style> h1{font-family: 'Fugaz One', cursive; font-size: 5em;}
     </style>
   </head>
   <body>
<section class="container-fluid">
<header class="row">

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 text-center ">

  <h1>Yabin games</h1>
</div>


<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 text-center">

      <form class="" action="usuario.php" method="post">
        <input type="text" name="usuario" value="" placeholder="Nombre">
        <br>
        <input type="text" name="pass" value="" placeholder="contraseña">
  </form>

<br>
<a  href="formularios.php" class="btn btn-danger">REGISTRATE</a>
</div>

</header>
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
<h3 id="h3">PRONOSTICOS</h3>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
  <img src="imagenes/loto.png" alt="Loto" class="image-responsive">
</div>

</div>

<div class="row">

        <section class="bolas col-xs-12 col-sm-12-col-md-12 col-lg-12">
          <div class="bolas_contenedor">
      <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
         <div class="bola ">
           <br>
           <p>BOLA 1</p>
            <h2><?php echo $bola1; ?></h2>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">

         <div class="bola">
           <br>
           <p>BOLA 2</p>
           <h2><?php echo $bola2; ?></h2>
         </div>
       </div>

         <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">

         <div class="bola">
           <br>
           <p>BOLA 3</p>
           <h2><?php echo $bola3; ?></h2>
         </div>
       </div>

         <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">

         <div class="bola">
           <br>
           <p>BOLA 4</p>
           <h2><?php echo $bola4; ?></h2>
         </div>
       </div>

         <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">

         <div class="bola">
           <br>
           <p>BOLA 5</p>
           <h2><?php echo $bola5; ?></h2>
           <br><br>
         </div>
       </div>

         <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">

         <div class="bola">
           <br>
           <p>BOLA 6</p>
           <h2><?php echo $bola6; ?></h2>
         </div>
       </div>

       </div>
        </section>
        <form class="formulario"  action="index.php" method="post">
          <div class="text-center" id="formulario">
            <br>
              <button class="btn btn-default" type="submit" name="play"value=1>JUGAR</button>
            </div>
          </form>
        </div>
     <br>
<h2 class="text-center">JUGAR ES PERJUDICIAL PARA LA SALUD</h2>
  <br>
<footer class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<p>Diseñado por Yabin web</p>
<br>
<p>todos los derechos reservados 2017</p>
</div>

 </footer>
</section>
<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
<!--
