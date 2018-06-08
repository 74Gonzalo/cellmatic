<?php

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <script type="text/javascript">
     function validar(){
      var name = document.getElementById("nombre").value;

      console.log("name");
      if (name == ""){
        alert("Por favor ingresá tu nombre");
        return false;
      }
      else{
        return true;
      }

}

     </script>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <header>
       <h1>PRONOSTICOS DE LA GITANA</h1>

     <section class="container">
       <form class="form" action="usuario.php" method="post">
         <label>Usuario</label> <input type="text" name="usuario" value="">
         <label>Clave</label><input type="text" name="pass" value="">
       </form>
     <br>
     <a href="formularios.php">REGISTRATE</a>
     </header>

     <form class="formulario" id="form-js" onsubmit="return validar()"action="formularios.php" method="post">
       <label for="">NOMBRE</label><input type="text" id="nombre" name="nombre" value="">
       <label for="">APELLIDO</label><input type="text" id="apellido" name="apellido" value="">
       <label for="">MAIL</label><input type="email" name="mail" id="mail" value="">
       <label for="">CELULAR</label><input type="number" name="celu" id="celu" value="">
       <br>
        <button type="submit" name="send">ENVIAR</button>
     </form>
   </body>
 </html>
