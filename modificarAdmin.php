<?php
    
    
    include("conexion.php");

    $dniAdmin = $_REQUEST['id'];   
    session_start();   
    $_SESSION['dniAd'] = $dniAdmin;

    echo "<html><body><script language='javascript'> function prueba(){ $('#modal2').modal('open');}; window.location = 'usuarios.php';</script></body></html>";

?>
