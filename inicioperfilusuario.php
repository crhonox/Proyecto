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
          <li><a href="calendarioUsu.php">Ver Calendario</a></li>
          <li><a href="BuscarInsti.php">Buscar Instituciones</a>
          </li>
          <li><a href="perfilUsu.php">Editar Perfil</a>
      </nav>
      <div class="sdb_holder">
        <h6>Mis Datos</h6>
        <address>
      Nombre:  <?php echo $_SESSION['nombre']; ?><br>
    Apellido: <?php  echo $_SESSION['apellido'];?><br>
    Edad:  <?php echo $_SESSION['edad']; ?>  <br>
      <!--  Town/City<br>
        Postcode/Zip<br>
        <br> -->
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
        <h2>Noticias de Instituciones</h2>
        <?php  $noticias = mysqli_query($connect, "SELECT nombre_noti,contenido_noti,fecha_noti,imagen_noti FROM noticias order by id_noti desc limit 3");
        $nombreInsti = mysqli_query($connect, "SELECT nombre_institucion FROM institucion INNER JOIN noticias ON institucion.id_institucion = noticias.id_insti_noti;");
        $imgPerfil = mysqli_query($connect, "SELECT avatar FROM institucion INNER JOIN noticias ON institucion.id_institucion = noticias.id_insti_noti;");
          while ($post=mysqli_fetch_array($noticias)) {

        ?>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><?php $img = mysqli_fetch_array($imgPerfil);

                 ?>
                   <img src="<?php echo $img['avatar']; ?>" alt="" >


               </figure>
                <address>
                 <a href="perfilPublicoInsti.php"><?php $name = mysqli_fetch_array($nombreInsti);
                echo $name['nombre_institucion'];
                  ?>

                </a>
                </address>
                  <time datetime="2045-04-06T08:15+00:00">Publicado el: <?php echo $post['fecha_noti']; ?></time>
              </header>
              <div class="comcont">
                <p><?php echo $post['contenido_noti'];?></p>
                <img src="noticias/<?php if($post['imagen_noti']==''){echo '';}else{echo $post['imagen_noti'];} ?>" alt="">
              </div>
            </article>
          </li>
        </ul>

        <?php } ?>
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
