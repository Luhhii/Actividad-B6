<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				
				<p>
				¿Para que me sirve el Switch? 
				  El switch sirve para que, 
				  segun una opción que escojas, 
				  ésta se realice o sea mostrada
				</p>
				<h4>Conclusiones </h4>
				<p>
				En conclusión, switch es muy bueno para 
				realizar listas o cosas ordenadas, de manera 
				que pueda seleccionar una opcionentre otras 
				y mostrar sus resultados y, acompañarla con break,
				permite que los resultados no cambie por la opcion elegida
				</p>
				<figure>
					<img src="imagenes/switchN.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>¿Para qué sirve el arrayReverse?
				 Sirve para mostrar lo que está dentro de una rray pero de forma inversa
				 (si se introcuve 1 y 2, el array mostrará 2 y1)
				</p>
				<h4>Conclusiones </h4>
				<p>
				En conclusión el array Reverse es muy util de ciertaas formas, 
				por ejemplo para acomodar datos desde otra perspectiva o encontrar 
				algo por alfabeto mas facil de la Z a la A 
				</p>
				<figure>
					<img src="imagenes/Areverse.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				¿Cómo funciona Reemplazar cadenas?
				  reemplazar cadenas es podible gracias a la funcion str_replace 
				  donde un cadena de texto en especifico será cambiada por otro texto
				</p>
				<h4>Conclusiones </h4>
				<p>
				En conclusión, la funcion str_replace nos permite usar de mejor forma
				nuestro texto y permitir modificarlo de una forma mas sencilla para que puedas realizar
				una mejor y rapida lectura
				</p>
				<figure>
					<img src="imagenes/strReplace.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>