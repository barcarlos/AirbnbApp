<?php
session_start();
/*foreach($_SESSION as $valor)
{
echo $valor.',';
}

echo "id departamento es : ";*/
echo array_shift($_SESSION['id']);
?>