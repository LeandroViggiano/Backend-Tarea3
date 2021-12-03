<?php



error_reporting(E_ALL);
ini_set('display_errors', 1);


$data = $_POST;
$enlace =  mysqli_connect("localhost", "root", "root","tienda_online");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$sql ="SELECT * FROM usuarios WHERE dni= '".$data["dni"]."'";

$result = mysqli_query($enlace, $sql);

if (mysqli_num_rows($result) > 0){
    while($usuarios = mysqli_fetch_assoc($result)){
        echo "dni: " . $usuarios["dni"]. " - Nombre: " . $usuarios["nombre"]. " " . $usuarios["apellido"]. "<br>";
        $hash = $usuarios['contrasena'];
        
        if ($data['contrasena']==$usuarios['contrasena']){
            echo 'La contrasena es valida';
            
        }else{
            echo'La contrasena NO es valida';
        }
    }
}else{
    echo "Usuario no encontrado";
}

?>
