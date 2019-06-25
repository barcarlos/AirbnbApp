<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
$data = array(
  'nombre' => $nombre,
  'descripcion' => $descripcion

);
if(!empty($_GET['id_exp'])){
  $url = $apiurl2 . "experiencia/" . $_GET['id_exp'] ; //concat the api url with the uri of the service
    $res=deleteapi($data,$url);
    header("location:panelExperiencia.php");

}
?>