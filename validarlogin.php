<?php
session_start();

include 'lib/config.php';

if(isset($_POST['login'])){
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $log = mysqli_query($connect,"SELECT * FROM institucion WHERE mail_institucion = '$mail' and pass_institucion = '$pass'");
  if(mysqli_num_rows($log)==1) {
    $row = mysqli_fetch_array($log);
    $_SESSION["user"] = $row['mail_institucion'];
    $_SESSION['id_institucion'] = $row['id_institucion'];
    $_SESSION["nombre_institucion"] = $row['nombre_institucion'];
    $_SESSION["pass_institucion"] = $row['pass_institucion'];
    $_SESSION["avatar"] = $row['avatar'];
    $_SESSION["direccion_insti"] = $row['direccion_insti'];
    $_SESSION["rut_institucion"] = $row['rut_institucion'];
    $_SESSION["tipo_institucion"] = $row['tipo_institucion'];
    $_SESSION["pais_institucion"] = $row['pais_institucion'];
    //direccion_insti 	rut_institucion tipo_institucion pais_institucion
      header("Location:inicioperfil.php");
  }else {
    header("Location:login.php");

  }

}
 ?>
