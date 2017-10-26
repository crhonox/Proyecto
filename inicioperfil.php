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
        <img src="<?php  if($_SESSION['avatar']!==''){echo $_SESSION['avatar'];}else{echo "avatar/perfildefault.jpg";}  ?>" alt="avatar"><br>
      <nav class="sdb_holder">
        <ul>
          <li><a href="preguntasInsti.php">Responder Preguntas</a>
          <li><a href="formularioDnD.php">Crear Postulacion</a></li>
          <li><a href="calendario.php">Crear Evento en Caledario</a>
          </li>
          <li><a href="perfilInstitucion.php">Configurar Perfil</a>
      </nav>
      <div class="sdb_holder">
        <h6>Mis Datos</h6>
        <address>
        <?php echo $_SESSION['nombre_institucion']; ?><br>
      <?php  if($_SESSION['direccion_insti']!==''){ echo $_SESSION['direccion_insti'];}else{echo 'No se ha Ingresado Dirección';} ?><br>
      <?php echo $_SESSION['pais_institucion']; ?>  <br>
    <!--    Town/City<br>
        Postcode/Zip<br>
        <br>-->
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#"><?php echo $_SESSION['user']; ?></a>
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
      <div id="comments">
        <div class="block clear">
          <h2>Publicar Noticias</h2>
          <form action="subirpublicacion.php" method="post" enctype="multipart/form-data">
            <div class="one_third first">
              <label for="name">Nombre de la Noticia <span></span></label>
              <input type="text" name="nombre_noticia" id="nombre_noticia" value="" size="22" required>
            </div>
            <label for="comment"></label>
            <textarea name="publicacion" id="publicacion" cols="25" rows="10"></textarea>
          </div>
            <h4 class="foto">Subir foto</h4>
            <input type="file" name="foto" id="foto" class="btn btn-primary">
          <div>
            <button class="btn btn-primary"  type="submit" name="publicar" value="Publicar">Publicar</button>
            &nbsp;
            <button class="btn btn-primary"  type="reset" name="reset" value="Limpiar Publicacion">Limpiar Publicacion</button>
          </div>
          </form>


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
</body>
</html><?php
}else {
  header("location:login.php");
}
?>
