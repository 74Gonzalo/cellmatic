<?php
$informacion = $_POST;
function dbConnect($informacion){

  $dsn = 'mysql:host=localhost;dbname=yabin_cities;charset=utf8mb4;port:3306';
  $db_user='root';
  $db_pass='';
  try{
        $db=new PDO($dsn,$db_user,$db_pass);
      }
      catch(PDOException $Exception){
        echo $Exception->getMessage();
      }


  return $db;
}
$dbConnect = dbConnect($informacion);
 ?>
