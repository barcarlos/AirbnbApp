<?php
session_start();
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$personas=$_POST['personas'];
$diai=$_POST['diai'];
$mesi=$_POST['mesi'];
$anioi=$_POST['anioi'];
$checkin=$_POST['checkin'];
$id_usuario=$_SESSION['id'] ;
$id_experiencia=$_SESSION['id_e']; 
$fecha=  "" . $anioi . "/" .  $mesi ."/". $diai;
$url = $apiurl . "reservacion/"; //concat the api url with the uri of the service
$data = array(
  'checkin' => $checkin,
  'checkout' => "2019/08/08",
  'numero_personas' => $personas,
  'fecha' => $fecha,
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