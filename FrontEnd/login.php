<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$url = $apiurl . "login/"; //concat the api url with the uri of the service
/*$data = array(
  'correo' => 'cabrizi@gmail.com',
  'nombre' => 'Carlos Briano',
  'edad' => '23',
  'telefono' => '4492555531',
  'sexo' => 'M',
  'direccion' => 'Jesus Consuelo 1505',
  'fecha_nacimiento' => '1995/12/15',
  'estado' => 'Aguascalientes',
  'contrasena' => '123'
);*/
$url=$url . $correo . "&" . $contrasena;
$res=getDataapi($url);
echo json_encode($res);
if(count($res)==0){
  echo "Nombre de usuario o contraseña incorrectos, intentalo de nuevo";
}  
else{
  header("location:registrarse.html");
}  
?>