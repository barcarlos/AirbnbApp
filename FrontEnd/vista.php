<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL

    //Credenciales de conexion
    $url = $apiurl . "departamento/10" ; // . $id_departamento; //concat the api url with the uri of the service
    $res=getDataapi($url);
    $imagen="";
    $string = implode(array_map("chr", $res[0]['imagen']['data']));
    $imagen1=base64_decode($string);
        //Mostrar Imagen
        //header("Content-type: image/jpg"); 
        echo $imagen1; 
?>