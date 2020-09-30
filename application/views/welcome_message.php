<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Contactos</title>

	<meta name="description" content="Ejemplo de venta de adhesiones usando servicios en la nube">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="assests/demo.css" crossorigin="anonymous">
</head>

<body>

	<div id="container">
		<h1>Bienvenido </h41>
			<div class="float-right m-2"><img style="height:90px" src="assests/fruta.jpg"></div>
			<h3>FRUTERIA <b style="font-weight:900;color:#cc0000">DEMO</b><span style="color:#000">Pay</span></h3>
			<span>Favor completar los datos necesarios para que asi podamos contactarnos con usted</span>

			<div class="card bg-light shadow mt-5">
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="form-group col-lg-4">
								<p for="Nombre"> Nombre *</p>
								<input type="text" class="form-control " id="nombre" placeholder="Favor ingresar su">
								<small id="precioHelp" class="form-text text-muted">Favor ingrese su nombre</small>
							</div>

							<div class="form-group col-lg-4">
								<p for="Apellido"> Apellido *</p>
								<input type="text" class="form-control " id="apellido" placeholder="Favor ingresar su">
								<small id="precioHelp" class="form-text text-muted">Favor Ingrese su apellido</small>
							</div>

							<div class="form-group col-lg-4">
								<p for="Email"> Email *</p>
								<input type="email" class="form-control " id="email" placeholder="Favor ingresar su">
								<small id="precioHelp" class="form-text text-muted">Favor ingrese su email </small>
							</div>

							<div class="form-group col-lg-4">
								<p for="comentarios"> Comentarios</p>
								<textarea type="text" class="form-control " id="comentarios" required placeholder="Favor ingrese su " rows="3"> </textarea>
								<small id="precioHelp" class="form-text text-muted">Favor ingrese su algun comentario</small>
							</div>

						</div>
						<a href="?" class="btn btn-secondary mr-2">Cerrar</a>
						<button class="btn btn-primary" type="submit" name="" id="submit">Enviar</button>
						<div id='notificacion'></div>
					</div>


				</div>

			</div>
	</div>
	<script type="text/javascript" src="assests/demo.js"></script>

</body>

</html>