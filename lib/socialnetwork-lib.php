<?php

function Headerb ()

{
?>
<!-- START HEADER -->
  <header>
    <div align="center">
    <input class="button" placeholder="Search..." />
    <script src='https://use.edgefonts.net/amaranth.js'></script>
    </div>
  </header>
<!-- END HEADER -->
<?php
}
?>

<?php
function Side ()

{
?>
<!-- START LEFT SIDE -->
<!-- Left side column. contains the logo and sidebar -->
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
  <body>
    <div id="mostrar-nav">

    </div>
    <nav class="mostrar-nav">
    <ul class="menu">
      <li><a href="formularioDnD.php">Crear Postulacion</a></li>
      <li><a href="calendario.php">Crear Evento en Caledario</a></li>
      <li><a href="perfilInstitucion.php">Configuraciones</a></li>
      <li><a href="#">Preferencias</a></li>
      <li><a href="#">Terminos y Condiciones</a></li>
      <li><a href="#">Ayuda</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
    </ul>
    </nav>
    <script src="mostrar-nav.js"></script>
  </body>
</html>
<?php
}
?>
