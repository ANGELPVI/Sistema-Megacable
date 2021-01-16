<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="stiloregistro.css"><!--llamada del archivo stiloregistro.css  -->
	
	<script type="text/javascript">
	function quitar () {//función que nos permite controlar el estado de la ventana emergente con el mesaje de "contaseña incorrecta".
		document.getElementById('negro').style.display="none";
		document.getElementById('dialogo').style.display="none";		
	}	

	</script>
</head>
<body>
	<header>
		<center><img src="descarga.png"></center><!--imagen de titulo de encabezado -->
		
	</header>
	<section>
		
		<form action="insertar.php" mathod="post" name"form"><!-- formulario de inicio de sesión. que va dirigido al script insertar.php y con el metodo de envío post. -->
		<h1>Registrarse</h1>
		<input type="number" name="matricula" placeholder="Matrícula" required /><!--Campo de texto para que el usuario ingrese su información.  -->		
		<input type="text"  name="usuario" placeholder="usuario" required/><!--Campo de texto para que el usuario ingrese su información.  -->
		<input type="password"  name="contra" placeholder="Contraseña" required/ ><!--Campo de texto para que el usuario ingrese su información.  -->
		<input list="areas" name="area" placeholder="Elige tu área de trabajo" required/><br><!--Campo de texto que contiene una lista para elegir su área de trabajo  -->
		<datalist id="areas" >
			<option value="CTC"></option>
			<option VALUE="IPC"></option>
			<option VALUE="TÉCNICO INSTALADOR"></option>
			<option VALUE="TÉCNICO CONECTOR RECUPERADOR"></option>
			<option VALUE="ALMACÉN"></option>
			<option VALUE="ENERGÍAS Y REDES"></option>
			<option VALUE="MATENIMIENTO"></option>
			<option VALUE="MEGACNAL"></option>
			<option VALUE="VENTAS"></option>
			<option VALUE="CIS"></option>
			<option VALUE="SUPERVISOR DE TÉCNICOS"></option>
			<option VALUE="AUDITOR"></option>
			<option VALUE="RECURSOS UMANOS"></option>
			<option VALUE="ADMINISTRACION"></option>
		</datalist>
		<input id="en" type="submit" value="Registrar"/> <!--Botón de tipo submit, que nos permite enviar los datos a un archivo php. -->
		<p id="parrafo">Al registrarse tendra la oportunidad de poder mandar 
		su segimiento de actividades, sugerencias o propuestas para la mejora del área de trabajo a la que pertenece.</p><!--parrafo que apares en la página. -->
	</form>

	</section>

	<?php
	if (isset($_GET["id"]) && !empty($_GET["id"])) {//script que evalúa el los mesajes reguistro exito o no exitoso. 

	if ($_GET["id"]=="correcto") {
	    echo "<div onclick='quitar()' id='negro'>	    			
	      	</div>
	      	<div id='dialogo'>	      	
		    <p>Registro exitoso, dirigete al login para iniciar sesión</p>
		    <div>
	       	 	<a href='index.php'><button>Login</button></a>
	       	 	</div>		    		 		    	
	       	 </div>";     	 

		}elseif ($_GET["id"]=="repetido") {
			echo "<div onclick='quitar()' id='negro'>		
	      		</div>
	      	<div id='dialogo'>
		     <p>Su matrícula se está repitiendo, favor de verificarla</p>		     		     		
	       	 	</div>";			
		}
	}

	?>	
	
</body>
</html>