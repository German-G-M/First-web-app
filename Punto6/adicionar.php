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
            .tablanotas{
                background:gray;
                margin: 0 auto;
                border:black;
                padding:0;
    
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
			$nombre=$_GET["var1"];
			$contr=$_GET["var2"];
			/*$apellido=$_GET["apellido"];*/
            ECHO "ADMINISTRADOR <BR>";
			echo "Hola, ".$nombre.". Bienvenido al Sistema. <br>";  /* .$apellido."<br>";*/
			//echo "Esta es la contraeña".$contr;
			
		    ?>

            <br>
            <a href="./"><button> Salir</button></a> <!--volvemos a la pagina de inicio-->
		</div>
		<div style="background-color:#219ebc; margin:20px 0px; text-align:center;">
		<table style="margin:0 auto; padding:5px">
			<thead style="padding:5px 20px">
				<th>Informes</th>   
				<th>Añadir Estudiante</th>   
				<th>Añadir Docente</th>   
				<th>Mi Cuenta </th>   
			</thead>
		</table>
		</div>
        <h3>COMPLETE LOS CAMPOS DEL ESTUDIANTE</h3>



        <!-- Aqui trabajamos para adicionar a la base de datos -->

    
        <form style="text-align:center" method="GET" action="editar_guardar.php"> 
			Carnet <input type="text" size= "50" placeholder="ci solo números" name="ci" value=""> </br></br>
			Nombre <input type="text" size= "50" placeholder="Nombre" name="nombre" value=""> </br></br>
			Ap. Paterno <input type="text" size= "50" placeholder="Ap. Paterno" name="paterno" value=""> </br></br>
			Ap. Materno <input type="text" size= "50" placeholder="Ap. Materno" name="materno" value=""> </br></br>
			Fecha de nacimiento <input type="text" size= "50" placeholder="Año Mes y Día" name="fn" value=""> </br></br>
			Departamento <input type="text" size= "50" placeholder="Código INE (2 digitos)" name="departamento" value=""> </br></br>
			Usuario <input type="text" size= "50" placeholder="nombre usuario" name="usuario" value=""> </br></br>
			Contraseña<input type="password" size= "50" placeholder="Contraseña" name="contraseña"> </br></br>
			Rol <input type="text" size= "50" placeholder="1=Estudiante; 2=Docente; 3=Adminstrador" name="rol" value=""> </br></br>
			<input type="submit" value="Añadir Estudiante" style="border-radius:10px;">
		</form>


 
    <!--
	<form action="editar.php" method="GET">
		<input type="hidden" name="tipo" value="nuevo"/>
		<input type="submit" value="Adicionar"/>
	</form>
        
        -->
        
	</body>
</html>