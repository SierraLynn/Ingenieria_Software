<!DOCTYPE html>
<?php
include('session.php'); 
 ?>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("css/fontello.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("css/estilos.css");?>">
</head>
<body>
<header>
	<div class="contenedor">
		<h1 scr= "img/Logo.png">Tequis-Caseta</h1>
		
		<nav class="menu">
				<a href="#" class="item-options">Casetas</a>
		<a href="#" class="item-options">Alimento</a>
		<a href="#" class="item-options">Pollos</a>
		<a href="#" class="item-options">Cerrar sesion</a>
		</nav>
	</div>
</header>

<main>
	<section id="banner">
		<img src="<?php echo base_url("img/banner.jpg");?>">
		<div class="contenedor">
		<h2>El arte de pollo</h2>
		<p>tu tambien puedes tener un pollo como el mio.</p>
	
		</div>
	</section>

<section id="Bienvenido">
	<h2>BIENVENIDO</h2>
	
</section>

<section id="blog">
	<h3>Lo ultimo agregado</h3>
	<div class="contenedor">
		<article>
			<img src="<?php echo base_url("img/blog1.png");?>">
			<h4> 50 centímetros ni a superar los 2 kilogramos</h4>
		</article>
		<article>
			<img src="<?php echo base_url("img/comida.png");?>">
			<h4>Los animales necesitan cari;no</h4>
		</article>
		<article>
			<img src="<?php echo base_url("img/engorde1.png");?>">
			<h4>Camina con tu mascota</h4>
		</article>
	</div>
</section>

<section id="info">
	<h3>Pollo perfeccion en su maxima expresion, Categoria:</h3>
	<div class="contenedor">
	<div class="info-pet">
		<img src="<?php echo base_url("img/pollo1.jpg");?>">
			<h4>Gallinas</h4>
		</div>
		<div class="info-pet">
			<img src="<?php echo base_url("img/huevos.jpg");?>">
		
			<h4>Huevos</h4>
		</div>
		<div class="info-pet">
			<img src="<?php echo base_url("img/pollo.2.png");?>">
			<h4>Pollitos</h4>
		</div>
		<div class="info-pet">
			<img src="<?php echo base_url("img/pollos.5.jpg");?>">
			<h4>Casetas</h4>
		</div>
	</div>
</section>
</main>

<footer>
	<div class="contenedor">
		<p class="copy" align="center">Tequis-Caseta &copy; 2019</p>
		
			
	</div>
</footer>
</body>
</html>