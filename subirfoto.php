<?php
session_start();

include 'lib/config.php';
$nombrefoto = $_FILES['foto']['name'];
$foto = $_FILES['foto']['tmp_name'];
$ruta = "avatar";
$id = $_SESSION['id_institucion'];
$ruta= $ruta."/".$nombrefoto;

move_uploaded_file($foto, $ruta);

$query = mysqli_query($connect,"UPDATE institucion SET avatar=('$ruta') WHERE id_institucion ='$id' ");
if($query){
header("location:perfilInstitucion.php");

}else {
    echo alert("Hubieron problemas al subir la imagen");
}
