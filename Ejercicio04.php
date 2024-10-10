<?php
// Definir las variables
$nombre = "Juan";  // Puedes cambiar el valor aquí, por ejemplo: $nombre = "Juan";
$edad = "35";    // Puedes cambiar el valor aquí, por ejemplo: $edad = 25;

// Lógica para mostrar el mensaje adecuado
if (is_null($nombre)) {
    echo "Hola desconocido";
} elseif (!is_null($nombre) && is_null($edad)) {
    echo "Hola $nombre, no sé tu edad";
} else {
    echo "Hola $nombre, tienes $edad años";
}
?>
