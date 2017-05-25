<?php

include("conexion.php");

    $dni = $_REQUEST['id'];
    
    $query="DELETE FROM usuario WHERE dni = '$dni'";
    $resultado = $mysqli->query($query);

    if($resultado){
        header("Location:usuarios.php");
    }else{
        echo "Insercion fallida";
    }

?>