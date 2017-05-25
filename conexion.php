<?php
  $mysqli = new mysqli("localhost","root","","incidencias");
    
    if(mysqli_connect_error()) {
        echo 'Conexion fallida:' ,mysqli_connect_error();
    }else {
      // echo 'Conexion realizada con exito'; 
    }
   ?>