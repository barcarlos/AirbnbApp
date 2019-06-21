<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$direccion=$_POST['direccion'];
$precio=$_POST['precio'];
$camas=$_POST['camas'];
$cuartos=$_POST['cuartos'];
$banos=$_POST['banos'];
$amenidad=$_POST['amenidad'];
$url = $apiurl . "departamento/"; //concat the api url with the uri of the service
$data = array(
  'nombre' => $correo,
  'descripcion' => $nombre,
  'direccion' => $edad,
  'precio' => $telefono,
  'camas' => 'M',
  'cuartos' => $direccion,
  'banos' => $fecha,
  'id_estado' => $estado,
  'id_usuario' => "1"
);
$res=postapi($data,$url);

$
if(count($res)==0){
  //echo "Nombre de usuario o contraseña incorrectos, intentalo de nuevo";
}  
else{
  //header("location:nuevoAlojamiento.html");
}  
?>