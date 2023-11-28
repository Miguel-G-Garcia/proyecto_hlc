<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
	<title>Hotele Questo Rico</title>

  	<!--ENLACE A LOS ARCHIVOS JS/CSS-->
	<link rel="stylesheet" href="Css.css">
</head>

<body>

	<!-- Barra de navegación -->
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark">
		<div class="container-fluid px-5">
			<a class="navbar-brand text-light" aria-current="page" href="index.php">Home</a>
			<button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Clientes
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="client_form.php">Crear Cliente</a></li>

							<li>
								<hr class="dropdown-divider">
							</li>

							<li><a class="dropdown-item" href="list_Clients.php">Lista Clietes</a></li>
							<li><a class="dropdown-item" href="">Buscar Cliente por id</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Reservas
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="reservation_form.php">Reservar habitacion</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>

							<li><a class="dropdown-item" href="list_Reservs.php">Listado de Reservas</a></li>
							<li><a class="dropdown-item" href="#">Buscar Reserva por id</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
