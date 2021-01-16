<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Envio de actividades</title>
	<link rel="stylesheet" type="text/css" href="stiloenvio.css"><!--llamada del arcivo de estilo stiloenvio.css-->
	

</head>
<body>

<?php
 session_start();//método que permite el inicio de sesíon
if (!isset($_SESSION['u'])) {//condicional if que avalúa que la sesión no inicie vacía.
	header("location:index.php");//método que redirige a la pagina del index.php.
}


?>

<header>
	<span id="titulo">BUZÓN ELETRÓNICO DE SEGUIMIENTO DE ACTIVIDADES LABORALES DE MEGACABLE GRO.</span><!-- titulo de la pagina-->		

	<img id="imagenu" src="imagen_usa.jpg"/><!--imagen del usuario -->
	<img id="engrane" src="descarga.png"><!--imagen del logo de la empresa-->
	
		<?php
		
		//echo "<div>" . $_SESSION['u'] . "</div>";

		echo "<div>".$_GET["no"]."</div>";//variable que resibe el nombre del usuaario en formar de GET.
			//formulario que nos permite madar nustrestro seguiminto de actividad.
		echo "<form action='emal.php' method='post'>
		<input type='text' name='nombre' value='$_GET[no]' readonly='readonly'/>
		<input type='text' name='asunto' placeholder='Asunto' required/><br>
		<input list='areas' name='desde' placeholder='Elige tu área de trabajo' required/><br>
		<datalist id='areas' >
			<option value='CTC'></option>
			<option VALUE='IPC'></option>
			<option VALUE='TÉCNICO INSTALADOR'></option>
			<option VALUE='TÉCNICO CONECTOR RECUPERADOR'></option>
			<option VALUE='ALMACÉN'></option>
			<option VALUE='ENERGÍAS Y REDES'></option>
			<option VALUE='MATENIMIENTO'></option>
			<option VALUE='MEGACNAL'></option>
			<option VALUE='VENTAS'></option>
			<option VALUE='CIS'></option>
			<option VALUE='SUPERVISOR DE TÉCNICOS'></option>
			<option VALUE='AUDITOR'></option>
			<option VALUE='RECURSOS UMANOS'></option>
			<option VALUE='ADMINISTRACION'></option>
		</datalist>
		<textarea name='mensaje' placeholder='Mensaje' required></textarea><br>
		<input id='correo' type='submit' value='Enviar'>
		<p>Sus mensajes serán atendidos por la gerencia. Eperamos que sean con un fin de mejora para la empresa Megacable Comunicaciones de Zihutanejo gro.</p>

	</form>";
	echo "<span>Estado de envío</span>";//titulo del estado de envío.

	if (isset($_GET["mensaje"]) && !empty("mensaje")) {//sentecia if que evalúa el estado del envío.
		echo "<div id='estado'>".$_GET["mensaje"]."</div>";
	}else{
		echo "<div id='estado'>
			En espera
		</div>";
	}
?>
</header>


<ul class="nav">
	<li> <a href="">Opciones</a><!-- titulo del menú de opciones -->
	<ul>
		<li><a href="cerrar.php">Cerrar sesión</li></a><!-- opción de cerrar sesión-->
		<?php
	echo "<li><a href='actualizar.php?identifica=$_SESSION[u]'>actualizar</a></li>";//opción de actaulizar información y madando la variable super global $_SESSION[u] con el parametro del usaurio. 		


		?>
	</ul>
	</li>
</ul>




	
</body>
</html>