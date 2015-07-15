<?php
$server     = 'localhost'; 
$username   = 'root'; 
$password   = ''; 
$database   = 'angeldelaguarda'; 

$conexion = mysql_connect($server, $username, $password)
or die("No se pudo conectar con el servidor");
mysql_select_db($database, $conexion);
?>