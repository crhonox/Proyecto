<?php
$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "bd_tesis1";

$connect = mysqli_connect($host, $dbuser, $dbpwd);
	if(!$connect)
		echo ("No se ha conectado a la base de datos");
	else
		$select = mysqli_select_db ($connect, $db);

		// Url donde estara el proyecto, debe terminar con un "/" al final
		$base_url="http://127.0.0.1/Limpio2/";


?>
