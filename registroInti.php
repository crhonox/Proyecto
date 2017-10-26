<?php
include 'lib/config.php';
// Almacenar  Datos
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];
$tipo_Institucion = $_POST["tipo_Institucion"];
$pais_insti = $_POST["pais_insti"];

// Consulta SQL
$insertar = "INSERT INTO institucion(nombre_institucion, mail_institucion, pass_institucion, tipo_institucion, pais_institucion,perfil_insti) VALUES ('$nombre', '$mail', '$pass', '$tipo_Institucion', '$pais_insti', '1')";

 $verificar_correo = mysqli_query($connect, "SELECT * FROM institucion WHERE mail_institucion = '$mail'");
 if(mysqli_num_rows($verificar_correo) > 0)
 {
  echo '<SCRIPT> alert("El E-Mail ya esta Registrado"); window.history.go(-1);</SCRIPT>';
  exit;
 }

//Ejecutar Consulta

$resultado = mysqli_query($connect, $insertar);
if (!$resultado) {
  echo 'Error Al Registrar';
}
else {
  header("Location: login.php");
}

// Cerrar $connect

mysqli_close($connect);


 ?>
