<?php
if ($_POST) {

if (count($a)==0) {
for ($i=0; $i <1 ; $i++) {
  foreach ($user as $key => $value) {
    $sessionId = $value['id'];
    $sessionName = $value['name'];
    $sessionAdmin = $value['admin'];
  }
session_start();
  $_SESSION['id'] = $sessionId;
  $_SESSION['user'] = $sessionName;
  $_SESSION['admin'] = $sessionAdmin;
echo "usuario validado";

$id = $sessionId;
$usuario = $sessionName;
$admin = $sessionAdmin;
$caducidad = time()+60*60;

setcookie('YABIN_LOGISTIC_ID',$id,$caducidad);
setcookie("YABIN_LOGISTIC_USER",$usuario,$caducidad);
setcookie('YABIN_LOGISTIC_ADMIN',$admin,$caducidad);
var_dump($_SESSION);
?>
