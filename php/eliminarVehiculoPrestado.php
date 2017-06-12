<?php
    
    
    $mysqli = mysql_connect("localhost", "root");
    mysql_select_db("incidencias", $mysqli);

    $dni = $_REQUEST['id'];
    $matricula = $_REQUEST['mat'];

    $cantidad = mysql_query("select * from usuariovehiculo where matricula = '$matricula' and dni='$dni'") or die("Error en: $busqueda: " . mysql_error());
    $cant = mysql_fetch_row($cantidad);
    $row= $cant[3];
    $borrar="DELETE FROM usuarioVehiculo WHERE dni = '$dni' and matricula='$matricula'";
    $sumarInv = "UPDATE vehiculo set cantidad=cantidad+$row where matricula='$matricula'";
    
  
    

    if(mysql_query($borrar)){
        if(mysql_query($sumarInv)){
             echo "<html><body><script language='javascript'>alert('Se ha eliminado el vehiculo del inventario del usuario'); window.location='prestadoUsuario.php'</script></body></html>";
        }else{
           echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
        }
        
    }else{
        echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
    }

?>