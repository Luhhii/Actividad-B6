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
				<h3>Problema 3 de Luhi Hernandez</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/Reemplazo.png" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p6_hernandez_24_php/ReemplazarC.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						La cadena de texto que está al inicio se copiará
						 de nuevo en otras cadenas de texto las cuales tendran 
						 palabras selectas reemplazadas por otras 
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>