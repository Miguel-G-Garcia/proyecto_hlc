<?php
require_once("funcionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetros
$reservation_id = $_POST['txtReservationId'];

$client_id = $_POST['txtClientId'];
$check_in_date = $_POST['txtCheckIn'];
$check_out_date = $_POST['txtCheckOut'];
$room_number = $_POST['txtRoomNmb'];

// No validamos, suponemos que la entrada de datos es correcta

// Definir update
$sql = "UPDATE reservations SET client_id =  $client_id , check_in_date = '" . $check_in_date . "' , check_out_date = '" .$check_out_date . "' , room_number = $room_number WHERE reservation_id = $reservation_id ;";

// Ejecutar consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay error y almacenar mensaje
if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje =  "<h2 class='text-center mt-5'>Se ha producido un error numero $numerror que corresponde a: $descrerror </h2>";
} else {
    $mensaje =  "<h2 class='text-center mt-5'>Reserva actualizada</h2>"; 
}

header( "refresh:4;url=list_Reservs.php" );

// Aquí empieza la página
include_once("menu.php");

// Mostrar mensaje calculado antes
echo $mensaje;

?>