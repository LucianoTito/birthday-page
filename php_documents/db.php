<?php
function conectar() {
    $hostname = 'localhost';
    $usuariodb = 'root';
    $passworddb = '';
    $dbname = 'birthday_proyect';

    /* generando la conexión con el servidor */
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname) or die('Error al conectar a la base de datos: '.mysqli_connect_error());
    
    return $conectar;
}
?>
