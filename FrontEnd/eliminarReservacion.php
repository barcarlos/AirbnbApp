<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$data = array(
  'nombre' => $nombre,
  'descripcion' => $descripcion

);
if(!empty($_GET['id_res'])){
  $url = $apiurl . "reservacion/" . $_GET['id_res'] ; //concat the api url with the uri of the service
    $res=deleteapi($data,$url);
    header("location:misReservaciones.php");

}
?>