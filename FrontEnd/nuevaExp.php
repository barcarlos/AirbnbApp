<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
//variables de sesion 
session_start();
$descripcion=$_POST['descripcion'];
$direccion=$_POST['direccion'];
$estado=$_POST['estado'];
$duracion=$_POST['duracion'];
$personas=$_POST['personas'];
$idioma=$_POST['idioma'];
$precio=$_POST['precio'];
$url = $apiurl2 . "experiencia/"; //concat the api url with the uri of the service
$data = array(
  'descripcion' => $descripcion,
  'direccion' => $direccion,
  'precio' => $precio,
  'estado' => $estado,
  'idioma' => $idioma,
  'duracion' => $duracion,
  'personas' => $personas,
  'id_anfitrion' => $_SESSION["id"]
);
$res=postapi($data,$url);
$id_experiencia=$res[0]['id']; 
$_SESSION["id_experiencia"]=$id_experiencia;
header("location:panelExperiencia.php");
?>