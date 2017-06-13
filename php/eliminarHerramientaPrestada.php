<?php
    
    
    $mysqli = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");

    $dni = $_REQUEST['id'];
    $idHerramienta = $_REQUEST['idHerra'];

    $cantidad = mysqli_query("select * from usuarioinventario where idHerramienta = '$idHerramienta' and dni='$dni'");
    $cant = mysqli_fetch_row($cantidad);
    $row= $cant[3];
    $borrar="DELETE FROM usuarioinventario WHERE dni = '$dni' and idHerramienta='$idHerramienta'";
    $sumarInv = "UPDATE inventario set cantidad=cantidad+$row where idHerramienta='$idHerramienta'";
    
  
    

    if(mysqli_query($borrar)){
        if(mysqli_query($sumarInv)){
             echo "<html><body><script language='javascript'>alert('Se ha eliminado la herramienta del inventario del usuario'); window.location='prestadoUsuario.php'</script></body></html>";
        }else{
           echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
        }
        
    }else{
        echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
    }

?>