<?php
session_start();
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$personas=$_POST['personas'];
$diai=$_POST['diai'];
$mesi=$_POST['mesi'];
$anioi=$_POST['anioi'];
$diao=$_POST['diao'];
$meso=$_POST['meso'];
$anioo=$_POST['anioo'];
$id_usuario=$_SESSION['id'] ;
$id_departamento=$_SESSION['id_d']; 
$checkin=  "" . $anioi . "/" .  $mesi ."/". $diai;
$checkout="" . $anioo . "/" . $meso . "/" . $diao;
$url = $apiurl . "reservacion/"; //concat the api url with the uri of the service
$data = array(
  'checkin' => $checkin,
  'checkout' => $checkout,
  'numero_personas' => $personas,
  'fecha' => "1995/07/07",
  'id_usuario' => $id_usuario,
  'id_departamento' => $id_departamento
);
  $res=postapi($data,$url);
if(count($res)==0){
  echo "Nombre de usuario o contraseña incorrectos, intentalo de nuevo";
}  
else{
  header("location:misReservaciones.php");
}  
?>