<?php
session_start();
include 'lib/config.php';
if(isset($_SESSION['user']))
{
  echo '<script> window.location="inicioperfil.php" </script>';
}
?>
<!DOCTYPE html>

<html>
<head>
<title>FastBecas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <SCRIPT Language=Javascript SRC="validar.js"></SCRIPT>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-user"></i> <a href="#footer">Ingreso Usuarios</a></li>
        <li><i class="fa fa-user"></i> <a href="login.php">Ingreso Instituciones</a></li>
        <li><i class="fa fa-sign-in"></i> <a href="registrarInstitucion.php">Registro Instituciones</a></li>
        <li><i class="fa fa-sign-in"></i> <a href="registroUsuario.php">Registro Usuario</a></li>
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
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png')">
  <div id="pagetitle" class="hoc clear">
    <!-- ################################################################################################ -->
    <h2>Registro Institucional</h2>
    <!-- ################################################################################################ -->
  </div>
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="registrarInstitucion.php">Registro Institucional</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <form action="validarlogin.php" method="post" class="form-register">
      <h2 class="form_titulo"> Formulario Login</h2>
      <div id="comments">
        <div class="one_third first">
            <input type="text" name="mail" placeholder="&#128231; E-Mail" >
        </div>
        <div class="one_third">
            <input type="password" name="pass" placeholder=" &#128273; Contraseña">
        </div>
        <div class="one_third first">
          <button type="submit" name="login" class="btn btn-primary" svalue="Ingresar">Ingresar</button>
        </div>

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
<div class="wrapper row1">
  <div id="quicklinks" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="accordion">
      <!-- ################################################################################################ -->
      <a href="javascript:void(0);" class="accordiontoggle heading">Student &amp; Staff Links</a>
      <div class="linkblock group">
        <div class="one_quarter first">
          <!-- ################################################################################################ -->
          <ul>
            <li><a href="#">Academic Advisory</a></li>
            <li><a href="#">Academic Assistance</a></li>
            <li><a href="#">Academic Calendars</a></li>
            <li><a href="#">Academics Office</a></li>
            <li><a href="#">Administration</a></li>
            <li><a href="#">Adult Learners</a></li>
            <li><a href="#">Alumni Chapters</a></li>
            <li><a href="#">Alumni Events</a></li>
            <li><a href="#">Athletics</a></li>
            <li><a href="#">Campus Life At a Glance</a></li>
            <li><a href="#">Campus Recreation</a></li>
            <li><a href="#">Campus Safety &amp; Security</a></li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <div class="one_quarter">
          <!-- ################################################################################################ -->
          <ul>
            <li><a href="#">Class Schedules</a></li>
            <li><a href="#">Counselling Center</a></li>
            <li><a href="#">Course Catalogue</a></li>
            <li><a href="#">Department Directory</a></li>
            <li><a href="#">Departments &amp; Programs</a></li>
            <li><a href="#">Fellowships</a></li>
            <li><a href="#">Finals Schedules</a></li>
            <li><a href="#">Financial Aid</a></li>
            <li><a href="#">Fitness and Recreation Facilities</a></li>
            <li><a href="#">Global Learning</a></li>
            <li><a href="#">Graduate</a></li>
            <li><a href="#">Graduate Admissions</a></li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <div class="one_quarter">
          <!-- ################################################################################################ -->
          <ul>
            <li><a href="#">Graduate Health Services</a></li>
            <li><a href="#">Graduate Housing</a></li>
            <li><a href="#">Graduate Programs</a></li>
            <li><a href="#">Graduate Student Association</a></li>
            <li><a href="#">Graduate Studies</a></li>
            <li><a href="#">Honours Program</a></li>
            <li><a href="#">Interactive Schedule</a></li>
            <li><a href="#">International Programs</a></li>
            <li><a href="#">International Students</a></li>
            <li><a href="#">Intramural Sports</a></li>
            <li><a href="#">Language Resources</a></li>
            <li><a href="#">Maps and Directions</a></li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <div class="one_quarter">
          <!-- ################################################################################################ -->
          <ul>
            <li><a href="#">Office of the Registrar</a></li>
            <li><a href="#">Online Learning</a></li>
            <li><a href="#">Parent Information</a></li>
            <li><a href="#">Residence Life</a></li>
            <li><a href="#">Residential Colleges</a></li>
            <li><a href="#">Schools and Colleges</a></li>
            <li><a href="#">Student Activities</a></li>
            <li><a href="#">Student Affairs</a></li>
            <li><a href="#">Student Development</a></li>
            <li><a href="#">Student Financial Services</a></li>
            <li><a href="#">Student Group Directory</a></li>
            <li><a href="#">Student Life</a></li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc topspace-0 clear">
    <!-- ################################################################################################ -->
    <div id="newsletter" class="clear">
      <div class="one_quarter first">
        <h6 class="nospace topspace-5"><i class="fa fa-newspaper-o"></i> Ingresa para más Noticias</h6>
      </div>
      <form class="three_quarter" method="post" action="validarloginUsu.php">
        <div class="clear">
          <input class="one_third first" name="mail"  type="email" value="" placeholder="E-mail" required>
          <input class="one_third" name="pass" type="password" value="" placeholder="password" required>
          <button class="one_third" type="submit" name="login"title="Sign Up">Sign Up</button>
        </div>
      </form>
    </div>
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_half first">
        <h6 class="title">Ultrices vestibulum quam</h6>
        <p class="btmspace-30">Libero congue maximus orci eu convallis orci fusce nunc lacus dignissim ac gravida id ultricies id mi nulla eget vulputate sem id placerat velit aliquam arcu justo tristique sed neque vitae aliquet mattis libero proin consequat metus sit amet.</p>
        <ul class="nospace inline pushright">
          <li><a href="#">Contact</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Copyright</a></li>
          <li><a href="#">Security</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Augue molestie</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Velit est at quam</a></h2>
          <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos integer volutpat.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">erat eu dapibus</h6>
        <ul class="nospace linklist">
          <li><a href="#">Scelerisque tortor ac mollis</a></li>
          <li><a href="#">Lectus nisl semper sit amet</a></li>
          <li><a href="#">Quis dictum vestibulum arcu</a></li>
          <li><a href="#">Curabitur dignissim nulla</a></li>
          <li><a href="#">Pulvinar integer dapibus</a></li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">FastBecas</a></p>
    <p class="fl_right"> <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery-ui.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
