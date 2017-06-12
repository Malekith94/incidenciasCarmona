<?php
    
    
    $mysqli = mysql_connect("localhost", "root");
    mysql_select_db("incidencias", $mysqli);

    $dni = $_REQUEST['id'];
    $idHerramienta = $_REQUEST['idHerra'];

    $cantidad = mysql_query("select * from usuarioinventario where idHerramienta = '$idHerramienta' and dni='$dni'") or die("Error en: $busqueda: " . mysql_error());
    $cant = mysql_fetch_row($cantidad);
    $row= $cant[3];
    $borrar="DELETE FROM usuarioinventario WHERE dni = '$dni' and idHerramienta='$idHerramienta'";
    $sumarInv = "UPDATE inventario set cantidad=cantidad+$row where idHerramienta='$idHerramienta'";
    
  
    

    if(mysql_query($borrar)){
        if(mysql_query($sumarInv)){
             echo "<html><body><script language='javascript'>alert('Se ha eliminado la herramienta del inventario del usuario'); window.location='prestadoUsuario.php'</script></body></html>";
        }else{
           echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
        }
        
    }else{
        echo "<html><body><script language='javascript'>alert('Ha ocurrido un error'); window.location='prestadoUsuario.php'</script></body></html>"; 
    }

?>