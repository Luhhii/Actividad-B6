<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Luhi Hernandez</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/array.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p6_hernandez_24_php/arrayR.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						Se crea una variable donde habrá un array
						en el que las cadenas de texto que se pongan en el array 
						se mostrarán al revés en la ejecución 
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>