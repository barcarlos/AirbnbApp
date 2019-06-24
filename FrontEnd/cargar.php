<?php
session_start();
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql}
        $Host = '192.168.43.176';
        $Username = 'root';
        $Password = 'qwerty1';
        $dbName = 'airbnb';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $id=$_SESSION["id_departamento"];
        //Insertar imagen en la base de datos
        $insertar = $db->query("UPDATE departamento set imagen='$imgContenido' where id='$id' ");
		// COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
            header("location:valojamiento.php");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
		// Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>