<?php

$usu_base='root';// variable que contiene el usuario de la base de datos.
$contraseña_base='';// variable que contiene la contraseña de la base de datos.
$nom_bd='buzon_megacable';// varible que contiene el nombre de la base de datos.

$usuarios=!empty($_REQUEST['usuarios'])?$_REQUEST['usuarios']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.
$con=!empty($_REQUEST['con'])?$_REQUEST['con']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.

$cone = new mysqli('localhost', $usu_base, $contraseña_base, $nom_bd);//conexión asia la base de datos con el método mysqli, y recibiendo como parametro las variables mencionadas anteriormente. 

if ($usuarios&&$con) {//condicinal if que nos evalúa que las variables no vengan sin ninguna información.  
	$consulta="select * from usuario where id='$usuarios' and contra='$con'";//creación de una variable que guarda la consulta de una sintaxi mysql.
	$resul=$cone->query($consulta);//ejecución del método query para hacer la consulta asia la base de datos.  

	$row=$resul->fetch_assoc();//creción de variable que guarda el resultado de la consulta en un array asociativo. 


	if (!$row=="") {//condicinal if que nos evalúa que la consulta no venga vacía.
		session_start();//método que nos permite abrir una sesión.
		$_SESSION['u']=$row['id'];//creción de una variable super global. que nos guarda el id del usuario que inicio sesión. 
		$n=$row['nombre'];//creacion de una varible global que nos guarda el nombre del usuario que inicio sesión.
		
		header("location: envio.php?no=$n");//método que nos dirige a la página envio.php y enviando variables de tipo GET.		
		

	}else{
		
		header("location: index.php?id=noexite");//método que nos dirige a la página index.php y enviando variables de tipo GET.
	}

}


?>