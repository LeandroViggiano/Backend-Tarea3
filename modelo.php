<?
function get_carrito_db(){

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tienda_online";

$conn = mysqli_connect("$servername,$username,$password,$dbname");

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM carritos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)) {
        $carrito[] = $row;
    }
}else{
    echo"Error en funciones";
}
    return $carrito;

    mysqli_close($conn);
}

