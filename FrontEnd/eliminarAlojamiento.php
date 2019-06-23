<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$url = $apiurl . "departamento/" . ; //concat the api url with the uri of the service
  $res=postapi($data,$url);
echo json_encode($res);
if(count($res)==0){
  echo "Nombre de usuario o contraseña incorrectos, intentalo de nuevo";
}  
else{
  header("location:iniciarSesion.html");
}  
?>