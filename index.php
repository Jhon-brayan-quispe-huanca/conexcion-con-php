<?php

// conexion mysql con php con mysql
$conexion = new mysqli('localhost','root','','DBEstudiente');
if($conexion->connect_error){
    die('Error : No se puede conectar el servidor '.$conexion->connect_error);
}
echo "Conectado a la base de datos <br>";

$consulta1 = $conexion->query('SELECT nombres, apellidos FROM alumnos');
echo "El numero de registro es ".$consulta1->num_rows;
$conexion->close();



