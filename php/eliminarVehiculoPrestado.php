<?php
    
    
    $mysqli = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");

    $dni = $_REQUEST['id'];
    $matricula = $_REQUEST['mat'];

    $cantidad = mysqli_query("select * from usuariovehiculo where matricula = '$matricula' and dni='$dni'");
    $cant = mysqli_fetch_row($cantidad);
    $row= $cant[3];
    $borrar="DELETE FROM usuarioVehiculo WHERE dni = '$dni' and matricula='$matricula'";
    $sumarInv = "UPDATE vehiculo set cantidad=cantidad+$row where matricula='$matricula'";
    
  
    

    if(mysqli_query($borrar)){
        if(mysqli_query($sumarInv)){
             echo "<html><body><script language='javascript'>alert('Se ha eliminado el vehiculo del inventario del usuario'); window.location='prestadoUsuario.php'</script></body></html>";
        }else{
           echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
        }
        
    }else{
        echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
    }

?>