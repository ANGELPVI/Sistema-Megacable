<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
	<link rel="stylesheet" type="text/css" href="stiloactualizar.css"><!--llamada del arcivo de estilo stiloenvio.css-->
	<script type="text/javascript">
		function abir( _valor) {//script que permite el surguiminto de los formulario de actualizacion.
		document.getElementById('actual').style.visibility=_valor;
		
		}

		function abrirc( _valor) {
		document.getElementById('actualc').style.visibility=_valor;
		}
		function abrira( _valor) {
		document.getElementById('actuala').style.visibility=_valor;
						
		}
		function quitar() {
			document.getElementById('pa').style.display="none";
		}


	</script>
</head>
<body>
	<?php
$usu_base='root';// variable que contiene el usuario de la base de datos.
$contraseña_base='';// variable que contiene la contraseña de la base de datos.
$nom_bd='buzon_megacable';// varible que contiene el nombre de la base de datos.

$identifica=!empty($_REQUEST['identifica'])?$_REQUEST['identifica']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.

$cone = new mysqli('localhost', $usu_base, $contraseña_base, $nom_bd);//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.


		if ($identifica) {//condicinal if que nos evalúa que las variable no vengan sin ninguna información.
			$consulta="select * from usuario where id='$identifica'";//creación de una variable que guarda la consulta de una sintaxi mysql.
			$rs=$cone->query($consulta);//ejecución del método query para hacer la consulta asia la base de datos.

			while ($usua=$rs->fetch_assoc()) {//siclo while que nos nos recorre toda la base de datos en busca del usuario seleccionado.
				//tabla con la informacion del usuario seleccionado.
				echo "<div id='principal'>
						<center><span>Datos Generales de tu cuenta</span><center>
						 
						<table >

						<tr>

						<td><img src='imagen_usa.jpg'></td>
						<td>Usuario</td>
						<td>$usua[nombre]</td>

						</tr>


						<tr>

						<td><img src='password.png'></td>
						<td>Contraseña</td>
						<td>$usua[contra]</td>
						
						</tr>

						<tr>

						<td><img src='arealaboral.png'></td>
						<td>Área laboral</td>
						<td>$usua[area]</td>

						</tr>

						</table>
			
				</div>";

				echo "<a href='envio.php?no=$usua[nombre]'><button>Inicio</button></a>";//botón de regero al incio del sistema.


			}
		}

	?>

	<!--vetana con formulario para la actaulizacion de la informacion correspondite-->
	<div id="actual">
	<div id="se">	
		<form action="act_info.php" method="post">
			<input type="text" name="acnombre" placeholder="Nuevo nombre de Usuario" required/>
			<input type="number" name="id" placeholder="Matrícula" required/>
			<input type="submit" name="btnnombre" value="Guardar cambios"/>

		</form>
	<a id="cerrarnom"href='javascript:abir("hidden");'>cerrar</a>
	</div>
	</div>
	<!--vetana con formulario para la actaulizacion de la informacion correspondite-->
	<div id="actualc">
	<div id="sec">
	<form action="act_info.php" method="post">
			<input type="password" name="accon" placeholder="Nueva Contraseña" required/>
			<input type="number" name="id" placeholder="Matrícula" required/>
			<input type="submit" name="btnnombre" value="Guardar cambios"/>

		</form>	
	<a id="cerrarcon"  href='javascript:abrirc("hidden");'>cerrar</a>
	</div>
	</div>
	<!--vetana con formulario para la actaulizacion de la informacion correspondite-->
	<div id="actuala">
	<div id="sea">
	<form action="act_info.php" method="post">
			<input list="areas" name="acare" placeholder="Elige tu área de trabajo" required/><br>
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
			<input type="number" name="id" placeholder="Matrícula" required/>
			<input type="submit" name="btnnombre" value="Guardar cambios"/>

		</form>				
	<a id="cerrararea" href='javascript:abrira("hidden");'>cerrar</a><!--Botón de cerrar la ventana de actaulizacion de informaón.-->
	</div>
	</div>

	<a id="edinom"  href='javascript:abir("visible");'>Editar<a>

		<a id="edicon"  href='javascript:abrirc("visible");'>Editar<a>

			<a id="ediare"  href='javascript:abrira("visible");'>Editar<a>

	<?php
	if (isset($_GET["error"]) && !empty($_GET["error"])) {//script que evalua si la actaulizacion se realizó o no

	if ($_GET["error"]=="fallo") {
	          	 echo "<div id='mensaje'>
			<p>Error de Matrícula, favor de verifícarla</p>
			</div>";


		}elseif ($_GET["error"]=="ex") {
			 echo "<div onclick='quitar()' id='pa'>
	    		<p>Actualización realizada, de click en el cuadro de diálogo</p>
	    		</div>";
		}
	}

	?>		
	
</body>
</html>