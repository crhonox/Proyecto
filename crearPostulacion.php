<?php
session_start();
include 'lib/config.php';
include 'lib/socialnetwork-lib.php';
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html>

<html>
<head>
<title>FastBecas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/tether.min.css"/>
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.css">

<!-- CSS -->
<link href="style.css" rel="stylesheet" type="text/css" />

<!-- Jquery JS -->
<script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery v1 should also work fine -->
<script src="js/jquery-ui.min.js" type="text/javascript" ></script> <!-- for sortable -->

<!-- SJFB JS -->
<script src="js/sjfb-builder.js" type="text/javascript" ></script> <!-- form builder -->
<script src="js/sjfb-html-generator.js" type="text/javascript" ></script> <!-- form generator -->

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="logout.php">Cerrar Sesion</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">FastBecas</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a class="drop" href="#">Cursos</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Instituciones Asociadas</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#"></a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first">
      <!-- ################################################################################################ -->
      <h6>Menu</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="preguntasInsti.php">Responder Preguntas</a>
          <li><a href="formularioDnD.php">Crear Postulacion</a></li>
          <li><a href="calendario.php">Crear Evento en Caledario</a>
          </li>
          <li><a href="perfilInstitucion.php">Configurar Perfil</a>
      </nav>
      <div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#">contact@domain.com</a>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <h6>Lorem ipsum dolor</h6>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li>Etiam vel sapien et</li>
            <li><a href="#">Etiam vel sapien et</a></li>
          </ul>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <!-- ################################################################################################ -->
      <h1>Agrega las bases de tu Postulación</h1>
      <input type="file" name="base" value="Agregar Bases">
      <div id="sjfb-wrap">

          <div id="back">&larr; <a href="http://bhoover.com/simple-jquery-form-builder/">Back to blog post</a></div>

          <h1>Simple Jquery Form Builder - Demo</h1>

          <p>El formulario crado ahora esta publicado y listo para responder<br>
              <a href="formularioDnD.php">Ver Formulario Creado</a>.
          </p>

         <div class="alert hide">
              <h2>Success! Form saved.</h2>
              <p>Here is what your saved form will look like in your database:</p>
              <textarea></textarea>
          </div>

          <div class="add-wrap">
              <h3>Añadir Campos</h3>
              <ul id="add-field">
                  <li><a id="add-text" data-type="text" href="#">Single Line Text</a></li>
                  <li><a id="add-textarea" data-type="textarea" href="#">Multi Line Text</a></li>
                  <li><a id="add-select" data-type="select" href="#">Select Box (Drop down list)</a></li>
                  <li><a id="add-radio" data-type="radio" href="#">Radio Buttons</a></li>
                  <li><a id="add-checkbox" data-type="checkbox" href="#">Checkboxes</a></li>
                  <li><a id="add-agree" data-type="agree" href="#">Agree Box</a></li>
              </ul>
          </div>

          <form id="sjfb" novalidate>
              <div id="form-fields">
              </div>
              <button type="submit" class="submit">Guardar Formulario</button>
          </form>

      </div>

      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/form_builder.js"></script>
// Form builder

</body>
</html>
<?php
}else {
  header("location:login.php");
}
?>
