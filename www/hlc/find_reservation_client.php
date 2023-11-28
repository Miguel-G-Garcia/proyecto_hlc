<?php
require_once('funcionesBD.php');
$conexion = obtenerConexion();

$sql = "SELECT * FROM clients;";

$result = mysqli_query($conexion, $sql);
$option = "";
while($row = mysqli_fetch_assoc($result)){
  $option .= "<option value='" . $row['client_id']. "'>" . $row['client_id'] . "</option>";
}

  include_once 'menu.php'
?>

	<!-- FORMULARIO BUSCAR RESERVA POR ID -->
	<form class="form-horizontal  mx-5 mt-5 p-2" name="frmFindReservationClient" id="frmFindReservationClient"
     method="get" action="process_find_reservation_client.php">
		<fieldset>
			<legend>Buscar Reserva por Cliente</legend>
			<div class="form-group">
				<label for="slcClientId">Id Cliente</label>
				<select name="slcClientId" id="slcClientId" class="form-select" aria-label="Default select example">
					<option value=""></option>
		  			<?php echo $option;?>
          		</select>
			</div>
			<div class="form-group">
				<input name="btnFindReservation" id="btnFindReservation" type="submit" class="btn btn-success"
					value="Aceptar" />
			</div>
		</fieldset>
	</form>
 
</body>
</html>