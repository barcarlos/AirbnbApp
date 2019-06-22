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
$estado=$_POST['estado'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$url = $apiurl . "departamento/"; //concat the api url with the uri of the service
$arrayAmenidad=preg_split('[,]', $amenidad); //We make an split for getting each amenity 
$data = array(
  'nombre' => $nombre,
  'descripcion' => $descripcion,
  'ubicacion' => $direccion,
  'precio_noche' => $precio,
  'camas' => $camas,
  'habitaciones' => $cuartos,
  'banos' => $banos,
  'id_estado' => "1", //we got the state id 
  'id_anfitrion' => "1", //Chenge this for a session variable 
  'checkin' => $checkin,
  'checkout' => $checkout,

);
$res=postapi($data,$url);
$array = json_decode($res, true);
$id_departamento=$array[0]['id']; 

//Now we're gonna insert in amenities table
$url = $apiurl . "amenidad_departamento/";
for($i=0;$i<count($arrayAmenidad);$i++){
  $data2=array(
    'id_amenidad' => $arrayAmenidad[$i],
    'id_departamento' => $id_departamento,
  );
  $response=postapi($data2,$url);
}

?>