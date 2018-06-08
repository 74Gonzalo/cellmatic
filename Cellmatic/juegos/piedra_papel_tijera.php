<?php
var_dump($_POST);
require_once 'game.php';
 ?>
 <!-- javascript -->
<!-- <script type="text/javascript">
  window.onload = function () {
    var a = Math.floor(Math.random()*3)

    function play(){
      switch (a) {
        case 0:
          var resultado = "piedra";
          break;
        case 1:
          var resultado = "papel";
            break;
        case 2:
          var resultado = "tijera";
          break;
        default:
         var resultado = "no puede ser";

      }
      return resultado;
    }

    document.getElementById("machine").value = play();

    var b = document.getElementsByClassName("juego");
    // console.log(b);
    for (var i = 0; i < b.length; i++) {
      console.log(b[i]);
    }



  }
</script> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <!-- <body> -->
    <form onclick="jugar()"class="" action="piedra_papel_tijera.php" method="post">
      <input id="machine" type="text" name="" value="">

      <button type="submit" name="juego" value="piedra"class="juego" id="piedra1">Piedra</button>
      <button type="submit" name="juego" value="papel" class="juego" id="papel1">Papel</button>
      <button type="submit" name="juego" value="tijera" class="juego" id="tijera1">Tijera</button>


    </form>

    <input id="machine_play" type="text" name="" value="<?=$a?>">

    <input id="machine" type="text" name="" value="<?=$x?>">


  </body>
  <script type="text/javascript">
        function jugar(){
          if (!empty(document.getElementById("piedra1"))) {
            alert("Victoria")
            var r = true;
                      }
          return r;
        }
  </script>
</html>
