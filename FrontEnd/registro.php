<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$estado=$_POST['estado'];
$url = $apiurl . "usuario/"; //concat the api url with the uri of the service
$data = array(
  'correo' => $correo,
  'nombre' => $nombre,
  'edad' => $edad,
  'telefono' => $telefono,
  'sexo' => 'M',
  'direccion' => $direccion,
  'fecha_nacimiento' => $fecha,
  'estado' => $estado,
  'contrasena' => $contrasena
);
  $res=postapi($data,$url);
echo json_encode($res);
if(count($res)==0){
  echo "Nombre de usuario o contraseña incorrectos, intentalo de nuevo";
}  
else{
  header("location:nuevoAlojamiento.html");
}  
?>