<?php
session_start();
include 'lib/config.php';
// Almacenar  Datos
$nombre = $_POST["nombre_institucion"];
#$mail = $_POST["mail_institucion"];
$direccion_insti = $_POST["direccion_insti"];

$pass = $_POST["pass_institucion"];
$cpass = $_POST["cpass"];
$tipo_Institucion = $_POST["tipo_Institucion"];
$pais_insti = $_POST["pais_insti"];
$rut_institucion = $_POST["rut_institucion"];

// Consulta SQL
// Crear Condiciones para los datos que no han cambiado if(dato != mismodato)
if($nombre != $_SESSION['nombre_institucion']){
  $insertar = "UPDATE institucion SET nombre_institucion =('$nombre') WHERE id_institucion ='".$_SESSION['id_institucion']."' ";
  //Ejecutar Consulta
  $resultado = mysqli_query($connect, $insertar);
  if (!$resultado){
    echo 'Error Al Registrar';
  }
}//elseif ($mail != $_SESSION['mail_institucion']) {
//$insertar = "UPDATE institucion SET mail_institucion = ('$mail') WHERE id_institucion ='$id'";
 //Ejecutar Consulta
 //$resultado = mysqli_query($connect, $insertar);
 //if (!$resultado) {
//   echo 'Error Al Registrar';
// }
// }
elseif($direccion_insti!= $_SESSION['direccion_insti']) {
  $insertar = "UPDATE institucion SET direccion_insti = ('')$direccion_insti WHERE id_institucion ='".$_SESSION['id_institucion']."'";
  //Ejecutar Consulta
  $resultado = mysqli_query($connect, $insertar);
  if (!$resultado) {
    echo 'Error Al Registrar';
  }
}
elseif($pass != $_SESSION['pass_institucion']){
  $insertar = "UPDATE institucion SET pass_institucion =('$pass') WHERE id_institucion ='".$_SESSION['id_institucion']."' ";
  //Ejecutar Consulta
  $resultado = mysqli_query($connect, $insertar);
  if (!$resultado){
    echo 'Error Al Registrar';
  }
}
elseif ($tipo_Institucion != $_SESSION['tipo_institucion']) {
 $insertar = "UPDATE institucion SET tipo_institucion = ('$tipo_Institucion') WHERE id_institucion ='".$_SESSION['id_institucion']."'";
 //Ejecutar Consulta
 $resultado = mysqli_query($connect, $insertar);
 if (!$resultado) {
   echo 'Error Al Registrar';
 }
}
elseif ($pais_insti != $_SESSION['pais_insti']) {
 $insertar = "UPDATE institucion SET pais_insti = ('$pais_insti') WHERE id_institucion ='".$_SESSION['id_institucion']."'";
 //Ejecutar Consulta
 $resultado = mysqli_query($connect, $insertar);
 if (!$resultado) {
   echo 'Error Al Registrar';
 }
}


// Cerrar $connect

mysqli_close($connect);


 ?>
