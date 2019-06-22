<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image)); //Exste es el string que mandamos
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into imagenes (imagen) VALUES ('$imgContenido')");
		// COndicional para verificar la subida del fichero
}
?>