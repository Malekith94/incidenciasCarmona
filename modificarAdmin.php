<?php
    
    
    include("conexion.php");

    $dniAdmin = $_REQUEST['id'];   
    session_start();   
    $_SESSION['dniAd'] = $dniAdmin;

    

?>
