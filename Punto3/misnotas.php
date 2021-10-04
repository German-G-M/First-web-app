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
            ECHO "DOCENTE <BR>";
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
				<th>Mis Notas (Media de notas por Departamento)</th>   
				<th>Mis Materias</th>   
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

        /*
        $sql="select* from nota,persona where persona.departamento = 01 and nota.ci=persona.ci"; 
        $resultado=mysqli_query($conn, $sql);

        print_r($resultado);
        $contador = 0;
        $suma=0;
        while($fila=mysqli_fetch_array($resultado)) {
            $suma=$suma + $fila['notafinal'];
            $contador=$contador+1;
        }
        echo "la suma es:<br>";
        echo $suma;
        echo "numero de notas sumadas:<br>";
        echo $contador;
        echo "el promedio  es:<br>";
        echo $suma/$contador;
        echo "<br>";
        */


        //Me funciona el codigo para sacar la media por departamento
        $promedios=array(0,0,0,0,0,0,0,0,0); //creamos un array donde almacenamos los promedios de cada departamento
        for ($i=1; $i<10;$i++)
        {
            $contador = 0;
            $suma=0;
            $sql="select* from nota,persona where persona.departamento=$i and nota.ci=persona.ci"; 
            $resultado=mysqli_query($conn, $sql);
            while($fila=mysqli_fetch_array($resultado)) {
                $suma=$suma + $fila['notafinal'];
                $contador=$contador+1;
            }
            //echo $i;
            //echo "<br>";
            if ($contador!=0){

                $promedios[$i-1]=$suma/$contador;

            } 
        }

       /* echo "mostramos resultados <br>";
        for ($i=0; $i<10;$i++)
        {
            echo $promedios[$i];
            echo "<br>";
        }*/

        ?>
        <table style="border:2; margin:0 auto;">
		<thead class="tablanotas">
		<tr>
			<th>CH</th>        
			<th>LP</th>
			<th>CB</th>
			<th>OR</th>
			<th>PT</th>
			<th>TJ</th>
			<th>SC</th>
			<th>BE</th>
			<th>PD</th>
		</tr>
		</thead>
        <tbody>
		<?php
			//$fila=mysqli_fetch_array($resultado)
            if ($carnet==null){
                echo "usted no está habilatado a esta función";
            }
            else 
            {
                    echo "<tr>";
                    echo "<td>".$promedios[0]."</td>";
                    echo "<td>".$promedios[1]."</td>";
                    echo "<td>".$promedios[2]."</td>";
                    echo "<td>".$promedios[3]."</td>";
                    echo "<td>".$promedios[4]."</td>";
                    echo "<td>".$promedios[5]."</td>";
                    echo "<td>".$promedios[6]."</td>";
                    echo "<td>".$promedios[7]."</td>";
                    echo "<td>".$promedios[8]."</td>";     
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