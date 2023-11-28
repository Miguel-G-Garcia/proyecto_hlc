<?php
require_once("funcionesBD.php");
$conexion = obtenerConexion();

// Recoger datos de entrada
$client_id = $_POST['client_id'];

// SQL
$sql = "DELETE FROM clients WHERE client_id = $client_id;";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    $message="<h2>Se ha producido un error número $numerror que corresponde a: $descrerror </h2>";

} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    $message="<h2>Datos del cliente eliminados</h2>";
}

header( "refresh:5;url=list_Clients.php" );

include_once("index.php");

echo $message;

?>