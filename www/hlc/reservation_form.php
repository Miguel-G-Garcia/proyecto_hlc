<?php 
require_once("funcionesBD.php");
$conexion = obtenerConexion();

$sql = "SELECT * FROM clients;";

$result = mysqli_query($conexion, $sql);
$option = "";
while($row = mysqli_fetch_assoc($result)){
  $option .= "<option value='" . $row['client_id']. "'>" . $row['client_id'] . "</option>";
}

  include_once 'menu.php'
?>
  <div class="container mx-auto mt-5 p-2">
    <form class="form-horizontal" name="frmNewReservation" id="frmNewReservation" action="process_make_reservation.php" method="post">
      <div class="form-group">
        <label for="txtClientId">ID Cliente</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
          <select name="txtClientId" id="txtClientId" class="form-select" aria-label="Default select example">
			<option value=""></option>
		  	<?php echo $option;?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="txtCheckIn">Check In</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-calendar-plus-o"></i>
            </div>
          </div>
          <input id="txtCheckIn" name="txtCheckIn" type="date" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="txtCheckOut">Check Out</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-calendar-minus-o"></i>
            </div>
          </div>
          <input id="txtCheckOut" name="txtCheckOut" type="date" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="txtRoomNmb">Room Nº</label>
        <input id="txtRoomNmb" name="txtRoomNmb" type="text" class="form-control">
      </div>
      <div class="form-group">
        <input name="btnMakeReservation" id="btnMakeReservation" type="submit" class="btn btn-success"
          value="Aceptar" />
      </div>
    </form>
  </div>



</body>

</html>