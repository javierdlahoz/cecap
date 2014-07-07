<?php

  $cinicial = $_POST['cinicial'];
  $interes = $_POST['interes'];
  $meses = $_POST['meses'];

  for($i=0; $i<$meses; $i++){
    $cinicial = $cinicial + $cinicial*$interes/100;
  }

  echo $cinicial;