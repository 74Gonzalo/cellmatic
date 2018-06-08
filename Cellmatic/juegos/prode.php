<script type="text/javascript">
window.onload=function(){

var a = document.getElementsByClassName("juego");
for (var i = 0; i < a.length; i++) {
  var c = document.getElementById(i);

  console.log(c);

  function prode() {

  var partido = Math.floor((Math.random())*3);
    switch (partido) {
      case 0:
        var resultado = "local";
          break;
      case 1:
          var resultado = "empate";
            break;
      case 2:
          var resultado = "visitante";
        break;
      default:
      console.log("no puede ser");
    }
    return resultado;
    // return console.log(resultado);
    //  return document.getElementById("partido");
  }
  console.log(prode());
  function match(){

  var y = document.getElementById(prode());
  y.value= "x";
  console.log(y);
  }
  match();
  // var b = document.getElementById("local");
  // console.log(b);
// var c = document.getElementById(i)
//   function prode() {
//   var c = document.getElementById(i);
//   console.log(c);
//
//   var partido = Math.floor((Math.random())*3);
//     switch (partido) {
//       case 0:
//         var resultado = "local";
//           break;
//       case 1:
//           var resultado = "empate";
//             break;
//       case 2:
//           var resultado = "visitante";
//         break;
//       default:
//       console.log("no puede ser");
//     }
//     return resultado;
//     // return console.log(resultado);
//     //  return document.getElementById("partido");
//   }
//   function match(){
//
//   var y = document.getElementById(prode());
//   y.value= "x";
//   }
//   match();
// //
// // // console.log(c);
// // // console.log(a[i]);
// // }
// // var partido = document.getElementById("partido");
// // console.log(partido);
//
//
// // function prode() {
// // var partido = Math.floor((Math.random())*3);
// //   switch (partido) {
// //     case 0:
// //       var resultado = "local";
// //         break;
// //     case 1:
//         var resultado = "empate";
//           break;
//     case 2:
//         var resultado = "visitante";
//       break;
//     default:
//     console.log("no puede ser");
//   }
//   return resultado;
//   // return console.log(resultado);
//   //  return document.getElementById("partido");
// }
// function match(){
//
// var y = document.getElementById(prode());
// y.value= "x";
// }
// match();

}
}
</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
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

<section class="Prode">
  <article class="Partido" id="partido">

    <form class="" action="prode.php" onclick="prode()"method="post">
      <fieldset class="juego" id="0">
        <label for="">Local</label><input id="local"type="text" name="" value="">
        <label for="">Empate</label><input id="empate"type="text" name="" value="">
        <label for="">Visitante</label><input id="visitante" type="text" name="" value="">
      </fieldset>
      <br>
      <fieldset class="juego" id="1">
        <label for="">Local</label><input id="local"type="text" name="" value="">
        <label for="">Empate</label><input id="empate"type="text" name="" value="">
        <label for="">Visitante</label><input id="visitante" type="text" name="" value="">
      </fieldset>
      <br>
      <fieldset class="juego" id="2">
        <label for="">Local</label><input id="local"type="text" name="" value="">
        <label for="">Empate</label><input id="empate"type="text" name="" value="">
        <label for="">Visitante</label><input id="visitante" type="text" name="" value="">
      </fieldset>
      <button type="submit" name="boton" id="button1">JUGAR</button>
    </form>
  </article>
</section>

  </body>
</html>
