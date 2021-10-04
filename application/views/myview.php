<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	</style>
</head>
<body>

<div>

	<h1>Bienvenidos a mi primera pagina. Mi primera vista!</h1>
	<h2> GERMAN GUTIERREZ MACHICADO</h2>
	<h3>Ingrese para modificar la Base de Datos</h3>
	<form method="get" action="<?php echo site_url('controladorlectura');?>">
	 	<input type="text" size="50" name="nombre" placeholder="Ingrese su nombre" value="" /><br>
	 	<input type="text" size="50" name="apellido" placeholder="Ingrese su apellido" value="" /><br>
	 	<input type="submit" name="ingresar" value="Ingresar" style="color:blue"/><br>
	</form>
	<p> Esta vista (la página que se verá en el FRONTEND) <br>
		se hace correr desde el CONTROLLER.<br>
		Modificamos el archivo ".php" de la carpeta view<br> 
		y ponemos el nombre de ese archivo en el CONTROLLER<br>
		(En el archivo ".php" que está en el controller)<br>
		Ya que el CONTROLLER llamará al VIEW.<br>
	</p>
	Probamos con variables, parametros hechos en el controlador<br>
	<?php 
		echo "esta es mi universidad: ".$universidad."<br>" ;
		echo "esta es mi facultad: ".$facultad."<br>";
		echo "esta es mi carrera: ".$carrera."<br>";
		echo "<br>";
		echo"Hola, mi nombre es: ".$nombre." ".$apellido;
		echo "<br>";
		echo $sitio1."<br>";
		echo $sitio2."<br>";
		echo $sitio3."<br>";
		echo site_url('welcome'); //tambien funciona aquí
		echo"<br>";
		echo site_url('vistalectura.php'); //tambien funciona aquí
		echo"<br>";
		echo site_url('controladorlectura.php'); //tambien funciona aquí

	?>

</div>

</body>
</html>