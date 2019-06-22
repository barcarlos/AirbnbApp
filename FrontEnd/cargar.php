<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
session_start();
$id_departamento=$_SESSION["id_departamento"];
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image)); //Exste es el string que mandamos
        //Insertar imagen en la base de datos
        $url = $apiurl . "imagen/" . $id_departamento; //concat the api url with the uri of the service
        echo $imgContenido;
        $imgContenido=base64_encode (  $imgContenido );
        $data = array(
            'imagen' => $imgContenido,
          );
        putapi($data,$url);
        echo "-------------------------------------------------------------------------------------------------------";
        echo "Insertado exitosamente compa";
        	}	// COndicional para verificar la subida del fichero
}
?>