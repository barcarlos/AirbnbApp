<?php
//if(!empty($_GET['id'])){
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '151295';
    $dbName = 'airbnb';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT imagen FROM departamento WHERE id = '15'");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagen']; 
    }else{
        echo 'Imagen no existe...';
    }
//}
?>