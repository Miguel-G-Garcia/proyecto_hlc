<?php
require_once('funcionesBD.php');

include_once("menu.php");
?>

	<!-- FORMULARIO BUSCAR RESERVA POR ID -->
	<form class="form-horizontal  mx-5 mt-5 p-2" name="frmFindReservation" id="frmFindReservation"
     method="get" action="process_find_reservation_id.php">
		<fieldset>
			<legend>Buscar Reserva por Id</legend>
			<div class="form-group">
				<label for="txtReservationId">Id Reserva</label>
                <select name="txtClientId" id="txtClientId" class="form-select" aria-label="Default select example">
			</div>
			<div class="form-group">
				<input name="btnFindReservation" id="btnFindReservation" type="submit" class="btn btn-success"
					value="Aceptar" />
			</div>
		</fieldset>
	</form>
 
</body>
</html>