<?php
include 'lib/config.php';
session_start();
if (isset($_POST['publicar'])) {
$publicacion = mysqli_real_escape_string($connect, $_POST['publicacion']);
$nombre_noti = mysqli_real_escape_string($connect, $_POST['nombre_noticia']);

$result = mysqli_query($connect,"SHOW TABLE STATUS WHERE `Name` = 'noticias'");
$data = mysqli_fetch_assoc($result);
$next_increment = $data['Auto_increment'];

$alea = substr(strtoupper(md5(microtime(true))), 0,12);
$code = $next_increment.$alea;

$type = 'jpg';
$rfoto = $_FILES['foto']['tmp_name'];
$name = $code.".".$type;

if(is_uploaded_file($rfoto))
{
  $destino = "noticias/".$name;
  $nombre = $name;
  copy($rfoto, $destino);
}  else
  {
    $nombre = '';
  }

$subir = mysqli_query($connect,"INSERT INTO noticias (id_insti_noti,nombre_noti,fecha_noti,contenido_noti,comentario_not,imagen_noti) values('".$_SESSION['id_institucion']."','$nombre_noti',now(),'$publicacion','1','$nombre')");

    if($subir)
    {
        echo '<script> window.location="inicioperfil.php" </script>';
    }
}
?>
