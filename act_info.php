<?php
$host='localhost';// varible que contiene la dirección.
$usu_base='root';// variable que contiene el usuario de la base de datos.
$contraseña_base='';// variable que contiene la contraseña de la base de datos.
$nom_bd='Buzon_Megacable';// varible que contiene el nombre de la base de datos.

$acnombre=!empty($_REQUEST['acnombre'])?$_REQUEST['acnombre']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.
$accon=!empty($_REQUEST['accon'])?$_REQUEST['accon']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.
$acare=!empty($_REQUEST['acare'])?$_REQUEST['acare']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.
$id=!empty($_REQUEST['id'])?$_REQUEST['id']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.

$con = new PDO("mysql:dbname=$nom_bd; host=$host", $usu_base, $contraseña_base);//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.

if ($acnombre&&$id) {//condicinal if que nos evalúa que las variable no vengan sin ninguna información.
	$act="update usuario set nombre='$acnombre' where id='$id'";//creación de una variable que guarda la consulta de una sintaxi mysql.
	$res=$con->exec($act);//ejecución del método exec para hacer la consulta asia la base de datos.

	if ($res>0) {//condicional if que evalúa que el resultado no venga vacío.
		header("location:actualizar.php?identifica=$id && error=ex");//método que te redirige a la pagina actualizar.php pasando variables de tipo GET.
	}else{
		header("location:actualizar.php?identifica=$id && error=fallo");//método que te redirige a la pagina actualizar.php pasando variables de tipo GET.
}

}


if ($accon&&$id) {//condicinal if que nos evalúa que las variable no vengan sin ninguna información.
	$act="update usuario set contra='$accon' where id='$id'";//creación de una variable que guarda la consulta de una sintaxi mysql.
	$res=$con->exec($act);//ejecución del método exec para hacer la consulta asia la base de datos.

	if ($res>0) {//condicional if que evalúa que el resultado no venga vacío.
		header("location:actualizar.php?identifica=$id && error=ex");//método que te redirige a la pagina actualizar.php pasando variables de tipo GET.
	}else{
		header("location:actualizar.php?identifica=$id && error=fallo");}//método que te redirige a la pagina actualizar.php pasando variables de tipo GET.

}

if ($acare&&$id) {//condicinal if que nos evalúa que las variable no vengan sin ninguna información.
	$act="update usuario set area='$acare' where id='$id'";
	$res=$con->exec($act);//creación de una variable que guarda la consulta de una sintaxi mysql.

	if ($res>0) {//condicional if que evalúa que el resultado no venga vacío.
		header("location:actualizar.php?identifica=$id && error=ex");//método que te redirige a la pagina actualizar.php pasando variables de tipo GET.
	}else{
		header("location:actualizar.php?identifica=$id && error=fallo");}//método que te redirige a la pagina actualizar.php pasando variables de tipo GET.

}

?>