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
	table,td{
		border: 2px solid blue;
		border-collapse:collapse;
		padding: 10px;
		padding-right: 50px;
		

	}

	</style>
</head>
<body>

<div>
	<h1>Bienvenidos a mi primera vista de lectura de datos</h1>
	<h2> GERMAN GUTIERREZ MACHICADO</h2>
	<?php 
		echo "BIENVENIDO ".$nnn." ".$aaa;
		echo "<BR>";
		echo "AQUI ABAJO MOSTRAMOS LA BASE DE DATOS";
		echo "<BR>";

	?>
</div>
<h1>Mostrando la Base de Datos</h1>
	Primer ejemplo Docente 
	<table >
		<tr style="font-weight:bold; font-size: 20px;">
			<td>CI</td>
			<td>Nombre</td>
			<td>Paterno</td>
			<td>Materno</td>
			<td>Fecha Nac.</td>
			<td>Departamento</td>
			<td>Opciones</td>
		</tr>
	<?php
		//echo $nombre." ".$apellido;
		echo '<br>';
		foreach($alumnos as $alumno)
		{
			//print_r( $alumno); //muestra la tabla alumnos de forma primitiva
			//<br>
			echo '<tr>';
			echo '<td>'.$alumno->ci.'</td>';
			echo '<td>'.$alumno->nombre.'</td>';
			echo '<td>'.$alumno->paterno.'</td>';
			echo '<td>'.$alumno->materno.'</td>';
			echo '<td>'.$alumno->fecha_nac.'</td>';
			echo '<td>'.$alumno->departamento.'</td>';
			echo '<td> <input type="submit" name="botonmodificar" value="MODIFICAR"> <input type="submit" name="botoneliminar" value="ELIMINAR"></td>';
			echo '</tr>';
		}
	?>
	</table>
	<br>
	<input type="submit" name="botonañadir" value="AÑADIR">


</body>
</html>