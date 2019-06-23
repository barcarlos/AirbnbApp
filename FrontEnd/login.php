<?php
session_start();
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$url = $apiurl . "login/"; //concat the api url with the uri of the service
$url=$url . $correo . "&" . $contrasena;
$res=getDataapi($url);
$array=$res;
if(count($res)==0){
  echo "Nombre de usuario o contraseña incorrectos, intentalo de nuevo";
}  
else{
  $_SESSION['nombre'] = $array[0]['nombre'];
  $_SESSION['correo'] = $array[0]['correo'];
  $_SESSION['estado'] = $array[0]['estado'];
  $_SESSION['tipo'] = $array[0]['tipo'];
  $_SESSION['direccion'] = $array[0]['direccion'];
  $_SESSION['telefono'] = $array[0]['telefono'];
  if($_SESSION['tipo']=='1'){
    header("location:nuevoAlojamiento.php");
  }else{
    header("location:valojamiento.php");
  }
  
}  
?>