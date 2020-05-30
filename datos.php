<!DOCTYPE html> 
<html>
<head>
	<title>Formulario</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo5.css">
	<link rel="stylesheet" type="text/css" href="fonts5.css">
	<link rel="stylesheet" type="text/css" href="estilo(2).css">
	    <link rel="shortcut icon" href="favicon (2).ico" type="image/x-icon">
</head>
<body>
	<!--Menu-->
	<header class="header2">
		<div class="wrapper">
		<div class="logo">Arbela
		<nav>
			<ul>
				 <li><a href="index.html"><span class="primero"><i class="icon icon-nextdoor"></i></span>Inicio</a></li>
                <li><a href="#"><span class="segundo"><i class="icon icon-addthis"></i></span>Categorias</a>
                    <ul>
                        <li><a href="covid.html">¿Que es el covid-19?</a></li>
                        <li><a href="Contagio.html">¿Como se transmite?</a></li>
                        <li><a href="prevenir.html">¿Como prevenir el contagio?</a></li>
                         <li><a href="Mexico.html">Casos en México</a></li>
                        <li><a href="http://localhost/img/datos.php">Formulario</a></li>
                    </ul>
				</li>
				<li><a href="#"><span class="tercero"><i class="icon icon-instagram"></i></span>Instagram</a>
					<ul>
						<li><a href="https://instagram.com/araceliyep?r=nametag">Yeyetzin Yep</a></li>
						<li><a href="https://www.instagram.com/ale.gar28?r=nametag">Alejandra Garces</a></li>
						<li><a href="https://instagram.com/belkys.rebeca?igshid=1c3jl8ii2t02l">Belkys Martinez</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="cuarto"><i class="icon icon-facebook"></i></span>Facebook</a>
					<ul>
						<li><a href="https://www.facebook.com/belkys.rebeca">Belkys Martinez</a></li>
						<li><a href="https://www.facebook.com/yeyetzinaraceli.yepvelazquez">Yeyetzin Yep</a></li>
						<li><a href="https://www.facebook.com/alejandra.garces.3133">Alejandra Garces</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="quinto"><i class="icon icon-viber"></i></span>Contacto</a>
					<ul>
						<li><a href="mailto:alejagarces2803@gmail.com">Alejandra Garces</a></li>
						<li><a href="mailto:Belkys_1915@outlook.com">Belkys Martinez</a></li>
						<li><a href="mailto:yeyetziin12345@gmail.com">Yeyetzin Yep</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
	</header>

<!--------------------------------------------------------------------------------------------------
-----------------------------------------Formulario--------------------------------------------------
--------------------------------------------------------------------------------------------------->
	<br><br><br><br><br>  <form method="post">
		<h1>¡Llena los datos para mejor atención!</h1>
		<input type="text" name="clave" placeholder="Escriba su clave">
		<input type="text" name="nombre" placeholder="Escriba su nombre">
		<input type="text" name="apellido" placeholder="Escriba su apellido">
		<input type="int" name="estado" placeholder="Escriba su estado">
		<br><label style="color: black">Califique nuestro sitio:
			<select type="int" name="calificacion">
				<option selected>10</option>
				<option>9</option>
				<option>8</option>
				<option>7</option>
				<option>6</option>
				<option>5</option>
				<option>4</option>
				<option>3</option>
				<option>2</option>
				<option>1</option>
			</select>
		</label>
		<input type="text" name="comentario" placeholder="Escriba su comentario">
		<input type="submit" name="Enviar">
	</form>
	<?php
	include("registrar(1).php");
	?>
</body>
</html>