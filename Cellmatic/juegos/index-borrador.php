<?php
// declaración variables $bolax
$bola1="";
$bola2="";
$bola3="";
$bola4="";
$bola5="";
$bola6="";


$jugada = $_POST;

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
     <link rel="stylesheet" href="css/estilos.css">


     <title>GITANA</title>
   </head>
   <body>
<header>
  <h1>PRONOSTICOS DE LA GITANA</h1>

<section class="container">
  <form class="" action="usuario.php" method="post">
    <label>Usuario</label> <input type="text" name="usuario" value="">
    <label>Clave</label><input type="text" name="pass" value="">
  </form>
<br>
<a href="formularios.php">REGISTRATE</a>
</header>



        <form class="" action="index.php" method="post">

         <button type="submit" name="play"value=1>JUGAR</button>
        </form>


        <section class="bolas">

         <div class="bola">
           <p>BOLA 1</p>
           <h2><?php echo $bola1; ?></h2>
         </div>
         <div class="bola">
           <p>BOLA 2</p>
           <h2><?php echo $bola2; ?></h2>
         </div>
         <div class="bola">
           <p>BOLA 3</p>
           <h2><?php echo $bola3; ?></h2>
         </div>
         <div class="bola">
           <p>BOLA 4</p>
           <h2><?php echo $bola4; ?></h2>
         </div>
         <div class="bola">
           <p>BOLA 5</p>
           <h2><?php echo $bola5; ?></h2>
         </div>
         <div class="bola">
           <p>BOLA 6</p>
           <h2><?php echo $bola6; ?></h2>
         </div>
</section>
<footer>
<p>Diseñado por Yabin web</p>
<br>
<p>todos los derechos reservados 2017</p>
 </footer>
</section>
</body>
 </html>
<!--
