<?php
$data = $_POST;
/*Comparacion de contraseans para asegura que el usuario halla registrado bien su contrasena */
if($data['contrasena'] != $data['contrasena2']){
    echo "<h1>Las contraseñas no coinciden</h1>";
    /*header("refresh:5;url=registro.php");*//*Mantiene el mensaje de error por 5 segundos y después vuelve a la página anterior*/
}else {
    $data['contrasena'] = password_hash($data['contrasena'], PASSWORD_DEFAULT);
}
unset($data['contrasena2']);
$data['habilitado'] = 1;
/*Conexion con base de datos */
$enlace =  mysqli_connect("localhost", "root", "root","tienda_online");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "INSERT INTO usuario (dni, nombre, apellido, email, telefono, calle, ciudad, contrasena, habilitado, cod_postal)
VALUES('".$data["dni"]."','".$data['nombre']."','".$data['apellido']."','".$data['email']."','".$data['telefono']."','".$data['calle']."','".$data['ciudad']."','".$data['contrasena']."','".$data['habilitado']."','".$data['cod_postal']."')";

if (mysqli_query($enlace, $sql)){
    echo "New record created succesfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

?>
