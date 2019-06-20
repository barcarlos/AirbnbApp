<?php
include("apifunctions.php");
$=$_POST['usuario'];
$pass=$_POST['clave'];
$url = 'http://localhost:3000/usuario';
$data = array(
  'correo' => 'cabrizi@gmail.com',
  'nombre' => 'Carlos Briano',
  'edad' => '23',
  'telefono' => '4492555531',
  'sexo' => 'M',
  'direccion' => 'Jesus Consuelo 1505',
  'fecha_nacimiento' => '1995/12/15',
  'estado' => 'Aguascalientes',
  'contrasena' => '123'
);
postapi($data, $url);
?>