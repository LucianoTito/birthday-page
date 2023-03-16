<?php
// Lee los datos del archivo JSON
$archivo = 'datos.json';
$contenido = file_get_contents($archivo);
$datos = json_decode($contenido, true);

// Muestra los datos en una tabla HTML
echo '<table>';
echo '<thead><tr><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Asistencia</th><th>Comentarios</th></tr></thead>';
echo '<tbody>';
foreach ($datos as $dato) {
    echo '<tr>';
    echo '<td>' . $dato['nombre'] . '</td>';
    echo '<td>' . $dato['email'] . '</td>';
    echo '<td>' . $dato['telefono'] . '</td>';
    echo '<td>' . $dato['asistencia'] . '</td>';
    echo '<td>' . $dato['comentarios'] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>
