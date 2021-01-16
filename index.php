<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stiloindex.css"><!--llamada del archivo stiloindex.css.  -->
	<script type="text/javascript">
		function quitar () {//función que nos permite controlar el estado de la ventana emergente con el mesaje de "contaseña incorrecta"
			document.getElementById('negro').style.display="none";  
			document.getElementById('dialogo').style.display="none";
		}
	</script>
</head>
<body>
	<header>
		<center><img src="descarga.png"></center>
		<a id="re" href="resgistro.php"><button>Registrate</button></a>
	</header>
	<section>

		<form action="ingresar.php" mathod="post" name"form"> <!-- formulario de inicio de sesión. que va dirigido al script ingresar.php y con el metodo de envío post. -->
			<center><label>Iniciar sesión</label></center><br><!--Titulo del formulario -->
			<img id="ima" src="descarga.jpg"><br>			<!--Imagen que contiene el formulario -->
			<input type="number" name="usuarios" placeholder="Matrícula" required/><!--Campo de texto para que el usuario ingrese su información.  -->
			<input type="password" name="con" placeholder="Contraseña" required/><!--Campo de password para que el usuario ingrese su conraseña.  -->
			<input id="entrar" type="submit" value="Iniciar"/><!--Botón de tipo submit, que nos permite enviar los datos a un archivo php. -->
			<p>				
				
			</p>						
		</form>
		
	</section>

	<?php

	if (isset($_GET["id"]) && !empty($_GET["id"])) {//script que nos evalúa una variable de tipo GET y hace la activación de la función.   

		if ($_GET["id"]=="noexite") {
			echo "<div onclick='quitar()' id='negro'>	    			
	      	</div>
	      	<div id='dialogo'>	      	
		    <p>Matrícula o contraseña incorrecta</p>         	 		    		 		    	
	       	 </div>";
			
		}
	}

	?>
	
</body>
</html>