<?php
include_once('db.php');

/*Aquí recibo todos los datos del formulario */
$nombre= $_POST['nombre'];
$mensaje= $_POST['dedicatoria'];

echo "Los datos son los siguientes <br>";
echo "$nombre, $mensaje";

$conectar=conectar();
$sql = "INSERT INTO dedicatoria (nombre, mensaje)
VALUES ( '$nombre', '$mensaje')";
$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL -Error: ".mysqli_error($conectar),
E_USER_ERROR);

echo "$sql";
/*Código para enviar la respuesta al cliente */
header('Content-type: application/json');
$response_array['status'] = 'success';
$response_array['from'] = $nombre;
$response_array['message'] = $mensaje;
echo json_encode($response_array);
?>
