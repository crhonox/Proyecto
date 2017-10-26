<?php
session_start();

include 'lib/config.php';

if(isset($_POST['login'])){
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $log = mysqli_query($connect,"SELECT * FROM usuario WHERE correo = '$mail' and upass = '$pass'");
  if(mysqli_num_rows($log)==1) {
    $row = mysqli_fetch_array($log);
    $_SESSION["user"] = $row['correo'];
    $_SESSION['id_usu'] = $row['id_usu'];
    $_SESSION["nombre"] = $row['nombre'];
    $_SESSION["apellido"] = $row['apellido'];
    $_SESSION["edad"] = $row['edad'];
    $_SESSION["sexo"] = $row['sexo'];
    $_SESSION["avatar"] = $row['avatar'];
    $_SESSION["rut"] = $row['rut'];
    //direccion_insti 	rut_institucion tipo_institucion pais_institucion
      header("Location:inicioperfilusuario.php");
  }else {
    header("Location:login.php");

  }

}
 ?>
