<html>
	<head>
		<title>FCPN</title>
		<style>
			th {
				padding:5px 50px;
				color:white;

			}
			th:hover{
				color: 05196e;
				
			}
			a{
				text-decoration:none;
				color:white;
			}
			a:hover{
				color: 05196e;
			}
			</style>
	</head>
	<body>
		<div style="background-color:#05196e; margin:20px 0px">
		hola
		</div>
		<div style="text-align:right">

		<!--<h1>Lectura de datos</h1>-->
		<?php
			$nombre=$_GET["usuario"];
			$contr=$_GET["contraseña"];
			/*$apellido=$_GET["apellido"];*/
			echo"DOCENTE <BR>";
			echo "Hola, ".$nombre.". Bienvenido al Sistema. <br>";  /* .$apellido."<br>";*/
			//echo "Esta es tu contraseña ".$contr;
			

		?>
		<br>
		<a href="./"><button> Salir</button></a>
		</div>
		<div style="background-color:#219ebc; margin:20px 0px; text-align:center;">
		<table style="margin:0 auto; padding:5px">
			<thead style="padding:5px 20px">
				<th>Mis Documentos</th>   
				<th> <?php echo ' <a href="misnotas.php?var1='.$nombre.'&var2='.$contr.'"> Mis Notas (Media de notas por departamento)</a>' ?> </th>   <!--vamos a la pagina mis notas y enviamso a la vez los datos de nuestro formulario-->
				<th>Mis Materias</th>   
				<th>Mi Cuenta </th>   
			</thead>
		</table>
		</div>


	</body>
</html>