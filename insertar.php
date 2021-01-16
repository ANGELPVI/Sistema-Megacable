<?php
$host='localhost';// variable que contiene la direción.
$usu_base='root';// variable que contiene la contraseña de la base de datos.
$contraseña_base='';// varible que contiene el nombre de la base de datos.
$nom_bd='Buzon_Megacable';// varible que contiene el nombre de la base de datos.


$matricula=!empty($_REQUEST['matricula'])?$_REQUEST['matricula']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.
$usuario=!empty($_REQUEST['usuario'])?$_REQUEST['usuario']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.

$contra=!empty($_REQUEST['contra'])?$_REQUEST['contra']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.
$area=!empty($_REQUEST['area'])?$_REQUEST['area']:'';//variable de tipo REQUEST que nos permite resibir datos que son enviados de un formulario.

$con = new PDO("mysql:dbname=$nom_bd; host=$host", $usu_base, $contraseña_base);//conexión asia la base de datos con el método PDO, y recibiendo como parametro las variables mencionadas anteriormente.

if ($matricula&&$usuario&&$contra&&$area) {//condicinal if que nos evalúa que las variables no vengan sin ninguna información.
$inse="insert into usuario(id, nombre, contra, area) values ('$matricula','$usuario','$contra','$area')"; //creación de una variable que guarda la consulta de una sintaxi mysql.
$re=$con->exec($inse);//ejecución del método query para hacer la consulta asia la base de datos.

if ($re>0) {//condicinal if que nos evalúa que la consulta no venga vacía.
	
		header("location: resgistro.php?id=correcto");//método que nos dirige a la página resgistro.php y enviando variables de tipo GET.

}else{
	header("location: resgistro.php?id=repetido");//método que nos dirige a la página resgistro.php y enviando variables de tipo GET.
}
	
}



?>