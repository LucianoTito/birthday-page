<?php
  $datos = json_decode(file_get_contents('php://input'), true);
  $archivo = 'datos.json';
  $contenido = json_decode(file_get_contents($archivo), true);
  $contenido[] = $datos;
  file_put_contents($archivo, json_encode($contenido));
?>