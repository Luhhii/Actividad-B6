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
				<h3>Problema 1 de Luhi Hernandez</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/switchD.png" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "p6_hernandez_24_php/switchDyN.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<p>
					
						Le damos un valor a la variable dia el cual, en este
						 caso es 3 y ejecutará miercoles, y asi pasará en cualquier valor 
						 que sea del 1 al 7 (1=lunes, 2=martes, etc). En caso de que el 
						 valor asignado sea cualquier otro que no esté en el switch, la ejecución 
						 dará como resultado que es un valor no válido
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>