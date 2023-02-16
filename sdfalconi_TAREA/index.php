<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="form-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
					<div class="form-container">

						<?php
						include("include/class.figura.php");
						include("include/Interface.formulas.php");
						include("figuras/class.cuadrado.php");
						include("figuras/class.rectangulo.php");
						include("figuras/class.triangulo.php");

						$objCuadrado = new cuadrado();
						$objRectangulo = new rectangulo();
						$objTriangulo = new triangulo();

						echo figura::get_form();


						?>
						<script src="js/funciones.js"></script>
					</div>
				</div>
			</div>
		</div>
</body>

</html>