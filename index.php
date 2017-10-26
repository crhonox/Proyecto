<?php
session_start();
include 'lib/config.php';
include 'lib/socialnetwork-lib.php';
if(!isset($_SESSION['user']))
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
      <h1><a href="index.html">FastBecas</a></h1>
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
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/residencia_estudiantes_granada.jpg')">
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading underline center">Educacion</h2>
      <p>Estamos comprometidos con mejorar cada dia la forma en la que se postula a los beneficios educacionales</p>
      <footer><a class="btn" href="#">Leer Mas</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="introblocks" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li>
        <article><a href="#"><i class="clg clg-planet-earth5"></i></a>
          <h4 class="heading underline center"><a href="#">Estudia en el Extranjero</a></h4>
          <p>Escoge una institucion extranjera en la que quieras estudiar&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-monument26"></i></a>
          <h4 class="heading underline center"><a href="#">Estudia Humanidades</a></h4>
          <p>Escoge una institucion relacionada con las Humanidades&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-microscopes2"></i></a>
          <h4 class="heading underline center"><a href="#">Estudia Ciencias</a></h4>
          <p>Escoge una institucion relacionada con el ámbito cientifico&hellip;</p>
        </article>
      </li>
      <li>
        <article><a href="#"><i class="clg clg-university23"></i></a>
          <h4 class="heading underline center"><a href="#">Estudia en una Universidad o Colegio</a></h4>
          <p>Escoge una institucion de Educacion Media o de Educacion Superior&hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="two_third first">
        <!-- ################################################################################################ -->
        <figure class="group boxed btmspace-50">
          <!-- ################################################################################################ -->
          <div class="one_half first"><img src="images/demo/320x238.png" alt=""></div>
          <figcaption class="one_half">
            <h4 class="heading underline font-x1">Ante vitae tempus</h4>
            <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
            <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
            <footer><a href="#">Read More &raquo;</a></footer>
            <!-- ################################################################################################ -->
          </figcaption>
        </figure>
        <!-- ################################################################################################ -->
        <div class="group">
          <div class="one_half first">
            <div class="boxed">
              <!-- ################################################################################################ -->
              <h4 class="heading underline font-x1 btmspace-30">Noticias</h4>
              <ul class="infolist">
                <?php  $noticias = mysqli_query($connect, "SELECT nombre_noti,contenido_noti,fecha_noti,imagen_noti FROM noticias order by id_noti desc limit 3");
                  while ($post=mysqli_fetch_array($noticias)) {
                  $fecha = substr($post['fecha_noti'],0 ,11);
                ?>
                <li>
                  <div><a href="#"><img src="noticias/<?php if($post['imagen_noti']==''){echo 'no-imagen.jpg';}else{echo $post['imagen_noti'];} ?>" alt=""></a></div>
                  <div><a href="#"><?php echo $post['nombre_noti'];?></a>

                    <ul>
                      <li>
                        <time datetime="2045-04-18"><i class="fa fa-calendar-o"></i><?php echo $fecha ?></time>
                      </li>
                      <li><i class="fa fa-comments"></i> <a href="#">12</a></li>
                    </ul>
                  </div>
                <?php } ?>
              <!-- ################################################################################################ -->
            </div>
          </div>
          <div class="one_half">
            <div class="boxed">
              <!-- ################################################################################################ -->

              <h4 class="heading underline font-x1 btmspace-30">Ultimas Postulaciones</h4>
              <ul class="infolist">
                <?php $postulaciones = mysqli_query($connect, "SELECT title,start,inicio_normal FROM eventos order by id desc limit 3");
                  while ($post=mysqli_fetch_array($postulaciones)) {
                  $dia = substr($post['inicio_normal'],0 ,2);
                  $mes = substr($post['inicio_normal'],3 ,2);;

                  $mes2 = 'null';
                  $title = 'null';
                  if ($mes== 1) {
                    $mes2 = 'ene';
                    $title = 'January';
                  }
                  if ($mes== 2) {
                    $mes2= 'feb';
                    $title = 'February';
                      }
                      if ($mes== 3) {
                        $mes2= 'mar';
                        $title2 = 'March';
                          }
                          if ($mes== 4) {
                            $mes2= 'abr';
                            $title = 'April';
                              }
                              if ($mes== 5) {
                                $mes2= 'may';
                                $title = 'May';
                                  }
                                  if ($mes== 6) {
                                    $mes= 'jun';
                                    $title = 'June';
                                      }
                                      if ($mes== 7) {
                                        $mes2= 'jul';
                                        $title = 'July';
                                          }
                                          if ($mes== 8) {
                                            $mes2= 'ago';
                                            $title = 'August';
                                              }
                                              if ($mes== 9) {
                                                $mes2= 'sep';
                                                $title = 'September';
                                                  }
                                                  if ($mes== 10) {
                                                    $mes2= 'oct';
                                                    $title = 'October';
                                                      }
                                                      if ($mes== 11) {
                                                        $mes2= 'nov';
                                                        $title = 'November';
                                                          }
                                                          if ($mes== 12) {
                                                            $mes2= 'dic';
                                                            $title = 'December';
                                                              }
                ?>
                <li>
                  <div>
                    <time datetime="2045-04-06T08:15+00:00" data-title="<?php echo  $title; ?>"><strong><?php echo  $mes2; ?></strong><em><?php echo $dia; ?></em></time>
                  </div>
                  <div><a href="#"><?php echo $post['title']; ?></a>
                    <ul>
                      <li><i class=""></i> </li>
                      <li><i class="fa fa-calendar-o"></i><?php echo $post['inicio_normal']; ?></li>
                    </ul>
                  </div>
                </li>
            <?php
                              }
              ?>

              <!-- ################################################################################################ -->
            </div>
          </div>
        </div>
        <!-- ################################################################################################ -->
      </div>
      <div class="one_third">
        <!-- ################################################################################################ -->
        <div id="join" class="btmspace-30">
          <!-- ################################################################################################ -->
          <article>
            <h3 class="heading font-x1 underline">Posuere cubilia curae</h3>
            <p>Ultricies pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
            <p>Egestas maecenas vitae velit ut lectus tristique cursus ut sit amet neque praesent.</p>
            <footer><a class="btn small" href="#">Read More &raquo;</a></footer>
          </article>
          <!-- ################################################################################################ -->
        </div>
        <div class="boxed">
          <!-- ################################################################################################ -->
          <h4 class="heading underline font-x1 btmspace-30">Sodales dapibus arcu</h4>
          <ul class="infolist">
            <li>
              <div><a href="#"><img src="images/demo/60x60.png" alt=""></a></div>
              <div><a href="#">Prof. Jane Doe</a>
                <p>Vitae luctus quisque viverra urna metus placerat.</p>
              </div>
            </li>
            <li>
              <div><a href="#"><img src="images/demo/60x60.png" alt=""></a></div>
              <div><a href="#">Prof. John Doe</a>
                <p>Molestie diam porttitor vivamus vehicula hendrerit.</p>
              </div>
            </li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay coloured" style="background-image:url('images/demo/backgrounds/02.png')">
  <div class="hoc spaceit-5050 clear">
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading font-x3">Sagittis quam ac ultricies</h2>
      <p class="btmspace-50">Non dolor vel pretium posuere diam vivamus eget turpis feugiat consequat ex eu consequat metus pellentesque rutrum nunc nec gravida gravida elit odio lacinia.</p>
      <footer><a class="btn medium" href="#">Odio lacus lacinia</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="featured" class="hoc container clear">
    <!-- ################################################################################################ -->
    <h2 class="heading underline btmspace-50">Auctor turpis elit at tortor</h2>
    <article class="one_quarter first"><img src="images/demo/320x238.png" alt="">
      <h4 class="heading font-x1"><a href="#">Aenean viverra non nibh a dapibus</a></h4>
      <ul class="meta cat-1">
        <li><i class="fa fa-tag"></i> <a href="#">Course Category 1</a></li>
        <li><i class="fa fa-users"></i> Availability: <strong>12</strong></li>
        <li>
          <time datetime="2045-05-08"><i class="fa fa-calendar-check-o"></i> 08/05/2045</time>
        </li>
        <li><i class="fa fa-clock-o"></i> 5 Weeks</li>
      </ul>
      <footer><a class="btn small" href="#">Read More &raquo;</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <article class="one_quarter"><img src="images/demo/320x238.png" alt="">
      <h4 class="heading font-x1"><a href="#">Orci dapibus varius dolor tempus</a></h4>
      <ul class="meta cat-2">
        <li><i class="fa fa-tag"></i> <a href="#">Course Category 2</a></li>
        <li><i class="fa fa-users"></i> Availability: <strong>6</strong></li>
        <li>
          <time datetime="2045-05-15"><i class="fa fa-calendar-check-o"></i> 15/05/2045</time>
        </li>
        <li><i class="fa fa-clock-o"></i> 7 Weeks</li>
      </ul>
      <footer><a class="btn small" href="#">Read More &raquo;</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <article class="one_quarter"><img src="images/demo/320x238.png" alt="">
      <h4 class="heading font-x1"><a href="#">Placerat vivamus et risus gravida</a></h4>
      <ul class="meta cat-3">
        <li><i class="fa fa-tag"></i> <a href="#">Course Category 3</a></li>
        <li><i class="fa fa-users"></i> Availability: <strong>10</strong></li>
        <li>
          <time datetime="2045-05-22"><i class="fa fa-calendar-check-o"></i> 22/05/2045</time>
        </li>
        <li><i class="fa fa-clock-o"></i> 12 Weeks</li>
      </ul>
      <footer><a class="btn small" href="#">Read More &raquo;</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <article class="one_quarter"><img src="images/demo/320x238.png" alt="">
      <h4 class="heading font-x1"><a href="#">Etiam a commodo ipsum donec</a></h4>
      <ul class="meta cat-4">
        <li><i class="fa fa-tag"></i> <a href="#">Course Category 4</a></li>
        <li><i class="fa fa-users"></i> Availability: <strong>25</strong></li>
        <li>
          <time datetime="2045-06-03"><i class="fa fa-calendar-check-o"></i> 03/06/2045</time>
        </li>
        <li><i class="fa fa-clock-o"></i> 10 Weeks</li>
      </ul>
      <footer><a class="btn small" href="#">Read More &raquo;</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
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
<?php
}else {
  header("location:login.php");
}
?>
