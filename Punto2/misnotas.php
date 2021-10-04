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
			echo "Hola, ".$nombre.". Bienvenido al Sistema. <br>";  /* .$apellido."<br>";*/
			//echo "Esta es la contraeña".$contr;
			
		    ?>

            <br>
            <a href="./"><button> Salir</button></a> <!--volvemos a la pagina de inicio-->
		</div>
		<div style="background-color:#219ebc; margin:20px 0px; text-align:center;">
		<table style="margin:0 auto; padding:5px">
			<thead style="padding:5px 20px">
				<th>Mis Documentos</th>   
				<th>Mis Notas</th>   
				<th>Mis Inscripciones</th>   
				<th>Mi Cuenta </th>   
			</thead>
		</table>
		</div>
        <h2>Mis notas</h2>

        <!-- Aqui trabajamos para mostrar los resultados de la base de datos -->

        <?php
        include "conexion.inc.php";
        $consulta="select* from usuario where usuario='$nombre'  and password='$contr' "; //where usuario='.$nombre.' and contraseña='.$contr.'  ";
        $resultado2= mysqli_query($conn, $consulta);
       
        //echo "este es el carnet primer intento";
        //print_r($resultado2["ci"]);
        $fila=mysqli_fetch_array($resultado2);
        //echo "este es el el resultado 2 en array";
        //print_r($resultado2);
        $carnet=$fila['ci'];
        echo "Carnet:".$carnet;
        
       // print_r($datocarnet);
       //while($fila=mysqli_fetch_array($resultado2)){
        //echo "resultado 2=:".$fila['ci'];
      // }
        echo "<br>";

        $sql="select* from persona where ci=$carnet";
        $resultado3=mysqli_query($conn, $sql);
        $fila=mysqli_fetch_array($resultado3);
        echo "Nombre:".$fila['nombre']." ".$fila['paterno']." ".$fila['materno'] ;
        //echo "Ap. Paterno:".$fila['paterno'];
        //echo "Ap Materno:".$fila['materno'];


        $sql="select* from nota where ci=$carnet"; /**where usuario='.$nombre.' and contraseña='.$contr.' */
        $resultado=mysqli_query($conn, $sql);

        //print_r($resultado);


        ?>
        <table style="border:2; margin:0 auto;">
		<thead class="tablanotas">
		<tr>
			<th>Ci</th>
            
		<!--<th>Nombre</th> <!--corresponde a la tabla persona -->
		<!--	<th>Apellido Paterno</th> <!--corresponde a la tabla persona -->
		<!--	<th>Apellido Materno</th> <!--corresponde a la tabla persona --> 

        
			<th>Sigla</th>
			<th>Nota1</th>
			<th>Nota2</th>
			<th>Nota3</th>
			<th>Nota Final</th>
		</tr>
		</thead>
        <tbody>
		<?php
			//$fila=mysqli_fetch_array($resultado)
            if ($carnet==null){
                echo "No existen datos para la consulta";
            }
            else 
            {
                while($fila=mysqli_fetch_array($resultado)) {
                    //print_r($fila);
                    //echo $fila["nombre"]."<br/>";

                    echo "<tr>";
                    echo "<td>".$fila["ci"]."</td>";
                    //echo "<td>$fila[nombre]</td>";
                    //echo "<td>".$fila['paterno']."</td>";
                    //echo "<td>".$fila['materno']."</td>";
                    echo "<td>".$fila['sigla']."</td>";
                    echo "<td>".$fila['nota1']."</td>";
                    echo "<td>".$fila['nota2']."</td>";
                    echo "<td>".$fila['nota3']."</td>";
                    echo "<td>".$fila['notafinal']."</td>";
                    /* 
                    echo "<td>";
                    echo "<a href='editar.php?tipo=editar&ci=$fila[ci]'>Editar</a>";
                    echo " - ";
                    echo "<a href='eliminar.php?ci=$fila[ci]'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                    */
                }
			}
		?>
		</tbody>
	</table>
    <!--
	<form action="editar.php" method="GET">
		<input type="hidden" name="tipo" value="nuevo"/>
		<input type="submit" value="Adicionar"/>
	</form>
        
        -->
        
	</body>
</html>