<?php
include 'lib/config.php';
include 'lib/socialnetwork-lib.php';
$postulaciones = mysqli_query($connect, "SELECT title,start,inicio_normal FROM eventos order by id desc limit 3");
  while ($post=mysqli_fetch_array($postulaciones)) {
  $dia = substr($post['inicio_normal'],0 ,2);
  $mes = substr($post['inicio_normal'],3 ,2);;
  echo $dia;
  $mes2 = 'null';
  if ($mes== 1) {
    $mes2 = 'ene';
  }
  if ($mes== 2) {
    $mes2= 'feb';
      }
      if ($mes== 3) {
        $mes2= 'mar';
          }
          if ($mes== 4) {
            $mes2= 'abr';
              }
              if ($mes== 5) {
                $mes2= 'may';
                  }
                  if ($mes== 6) {
                    $mes2= 'jun';
                      }
                      if ($mes== 7) {
                        $mes2= 'jul';
                          }
                          if ($mes== 8) {
                            $mes2= 'ago';
                              }
                              if ($mes== 9) {
                                $mes2= 'sep';
                                  }
                                  if ($mes== 10) {
                                    $mes2= 'oct';
                                      }
                                      if ($mes== 11) {
                                        $mes2= 'nov';
                                          }
                                          if ($mes== 12) {
                                            $mes2= 'dic';
                                              }

  echo $mes2;
}
?>
