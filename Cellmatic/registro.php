<?php
require_once 'partials/header.php';
require_once 'funciones/registracion.php';
// if ($_POST) {
//   var_dump($a);
// }

?>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

</div>

<div class="col-sm-6 col-md-6 col-lg-6">


  <?php
// var_dump
if($_POST){
  // para mostrar errores
if(count($a)>0)
    foreach ($a as $key => $value) {
   echo "*".$value."<br>";
  }


}?>
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
require_once 'partials/footer.php';
 ?>
