<?php
session_start();
    //Credenciales de conexion
    $Host = '192.168.43.176';
    $Username = 'carlos';
    $Password = 'qwerty1';
    $dbName = 'airbnb';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $id=array_shift($_SESSION['imagenes']);
    $result = $db->query("SELECT imagen FROM departamento WHERE id = '$id' ");
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagen']; 
    }else{
        echo 'Imagen no existe...';
    }
?>