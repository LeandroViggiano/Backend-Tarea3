<?php


$enlace =  mysqli_connect("localhost", "root", "root","tienda_online");
$data = $_POST;
$id_producto = $data['id'];
$boton = $data['boton'];
$id_usuario = $data['id_usuario'];
$precio = $data['precio'];
$nombre = $data['nombre'];
$imagen = $data['imagen'];

$sql = "INSERT INTO carritos (id_usuario, id_producto, precio, nombre, imagen)
VALUES('$id_usuario', '$id_producto', '$precio', '$nombre','$imagen')";

if ($enlace ->query($sql) == TRUE){
    echo "Good";
} else{
    echo "Error";
}
?>