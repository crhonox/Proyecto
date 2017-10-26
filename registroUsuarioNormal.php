<?php
include 'lib/config.php';
  $n=$_POST["nombre"];
  $a=$_POST["apellido"];
  $e=$_POST["edad"];
  $c=$_POST["upass"];
  $cc=$_POST["cpass"];
  $cr=$_POST["umail"];
  $r=$_POST["rut"];
  $s=$_POST["sexo"];

  $insertar="INSERT INTO usuario(nombre,apellido,edad,upass,correo,rut,sexo,perfil)values('$n','$a','$e','$c','$cr','$r','$s','2')";

  $verificar_mail = mysqli_query($connect, "SELECT * FROM usuario WHERE correo = '$cr'");
  if( mysqli_num_rows($verificar_mail) > 0)
  {
    echo '<SCRIPT> alert("El correo ya esta Registrado");
                        window.history.go(-1);
          </SCRIPT>';
    exit;
  }

  $verificar_rut = mysqli_query($connect, "SELECT * FROM usuario WHERE rut = '$r'");
  if( mysqli_num_rows($verificar_rut) > 0)
  {
    echo '<SCRIPT> alert("El Rut ya esta Registrado");
                        window.history.go(-1);
          </SCRIPT>';
    exit;
  }

  $resultado = mysqli_query($connect,$insertar);
  if (!$resultado) {
    echo "error al registrar";
  }else {
    header("Location: registroUsuario.php");
  }

mysqli_close($connect);

?>
