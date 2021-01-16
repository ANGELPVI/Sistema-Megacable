<?php
session_start();//variable gobal de inicio de sesión
if (isset($_POST['asunto']) && !empty($_POST['asunto']) && isset($_POST['mensaje']) && !empty($_POST['mensaje']) && //centeancia que evalúa que los campos no vengan vacios.
	isset($_POST['desde']) && !empty($_POST['desde'])) {
	
	//variables creadas para el envío del correo
	$destino = "angel_viveros08@outlook.com";//correo asía donde se va envíar.
	$desde ="Desde el Área de:\n". $_POST['desde'];//desde donde se envia.
	$asu = $_POST['asunto'];//el asunto que se va enviar.
	$mesa = $_POST['mensaje'];//el masaje que se envia.
	$nombre=$_POST['nombre'];//el nombre que lo envá.

	mail($destino, $asu, $mesa, $desde);//méto mail que nos permite mandar correos electronicos. 
	header("location:envio.php?no=$nombre && mensaje=Mensaje enviado");//funcion que nos redirige a la pagina envio.php y enviando variables por de tipo GET.

	
}else{
	//mensaje de error de envio de correo
	echo "<div> 
		<p>error al enviar su correo, verifique su coneción a internet</p>
	</div>";
}

?>
	
