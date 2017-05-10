<?php
  $mysqli = new mysqli("79.148.236.236","dam42","0260flm4448glj","dam42_incidencias");
    
    if(mysqli_connect_error()) {
        echo 'Conexion fallida: ' ,mysqli_connect_error();
    }else {
      // echo 'Conexion realizada con exito'; 
    }
   ?>