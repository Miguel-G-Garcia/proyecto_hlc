<?php 
require_once("funcionesBD.php");
$conexion = obtenerConexion();


$table = "<table class='table table-striped'>";
$table .= "<thead><tr><th>ID CLIENTE</th><th>NOMBRE</th><th>DIRECCION</th><th>NUMERO TELEFONO</th><th>CORREO ELECTRONICO</th><th>OPCIONES</th></tr></thead>";
$table .= "<tbody>";



    
$sql = "SELECT * FROM clients;";

$result = mysqli_query($conexion, $sql);

while ($row = mysqli_fetch_assoc($result)){

    $table .= "<tr><td>" . $row['client_id'] . "</td>";
    $table .= "<td>" . $row['client_name'] . "</td>";
    $table .= "<td>" . $row['address'] . "</td>";
    $table .= "<td>" . $row['phone_number'] . "</td>";
    $table .= "<td>" . $row['gmail'] . "</td>";

    $table .= "<td><form class='d-inline' action='process_remove_client.php' method='post'>";
    $table .= "<input type='hidden' name='client_id' value='" . $row['client_id']  . "'/>";
    $table .= "<button name='Borrar' class='btn btn-danger'><i class='bi bi-trash'></i></button></form>";
    $table .= "</td></tr>";

}

$table .= "</tbody></table>";

include_once("menu.php");

echo $table;

?>