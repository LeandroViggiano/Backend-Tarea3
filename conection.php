<?php
$enlace =  mysqli_connect("localhost", "root", "root","tienda_online");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Conectado satisfactoriamente" . PHP_EOL;
echo "Información del host: ". mysqli_get_host_info($enlace) . PHP_EOL;
mysqli_close($enlace);

