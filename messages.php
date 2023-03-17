<?php
include_once('db.php');
/*Aquí recibo todos los datos del formulario */
$nombre= $_POST['nombre'];
$mensaje= $_POST['dedicatoria'];

echo "Los datos son los siguientes <br>";
echo "$nombre, $mensaje";

$con=conectar();
$sql = "INSERT INTO dedicatoria (nombre, mensaje)
VALUES ( '$nombre', '$mensaje')";
$resul = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL -Error: ".mysqli_error($conectar),
E_USER_ERROR);

echo "$sql";
?>