<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = $_POST;
/*Conexion con base de datos */
$enlace =  mysqli_connect("localhost", "root", "root","tienda_online");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$sql ="SELECT * FROM usuario WHERE dni= '".$data["dni"]."'";

$result = mysqli_query($enlace, $sql);
if (mysqli_num_rows($result)/*mysqli_num_rows($result)*/>0){
    while($usuario = mysqli_fetch_assoc($result)){
        echo "dni: " . $usuario["dni"]. " - Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";
        
        $hash = $usuario['contrasena'];
        
        if (password_verify($data['contrasena'], $hash)){
            echo 'La contrasena es valida';
        }else{
            echo'NO';
        }
    }
}else{
    echo "Usuario no encontrado";
}

/*
$hash = '$2y$10$l8kMwMV3wzM5Fa9U3aUelOnIzJQA6t3SeCqo50Ie5RSgzRWc8zK22';


*/
?>
