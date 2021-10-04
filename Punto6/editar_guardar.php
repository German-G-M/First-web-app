<?php
	$ci=$_GET["ci"];
	$usuario=$_GET["usuario"];
	$nombre=$_GET["nombre"];
	$paterno=$_GET["paterno"];
	$materno=$_GET["materno"];
	$fn=$_GET["fn"];
	$dpto=$_GET["departamento"];
	$contr=$_GET["contraseña"];
	$rol=$_GET["rol"];


	include "conexion.inc.php";
	
	$sql ="insert into persona(ci,nombre, paterno,materno,fecha_nac,departamento) values ('$ci','$nombre','$paterno','$materno','$fn','$dpto')";
	//$sql.="values ('$ci','$nombre','$paterno','$materno','$fn','$dpto')";
	mysqli_query($conn, $sql);
	$sql ="insert into usuario(ci,usuario, password,rol) values ('$ci','$usuario','$contr','$rol') ";
	//$sql.="values ('$ci','$usuario','$contr','$rol')";
	
	mysqli_query($conn, $sql);
	header("Location: recepform.php"); //vuelve al mismo lugar donde se llenó
?>