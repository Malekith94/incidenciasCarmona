<?php

$link = mysql_connect("localhost", "root");
mysql_select_db("incidencias", $link);

//$dni = $_REQUEST['dniEmp'];
//$idHerramienta = $_REQUEST['idHerra'];
$cantidad = $_REQUEST['canti'];
$fecha = date("Y-m-d");

$insertar = "INSERT INTO usuarioinventario (idHerramienta, dni, fecha, cantidad) VALUES (8, '54645645g', '$fecha', '$cantidad')";

//$restarInv = myslq_query("UPDATE inventario set cantidad=cantidad-'$cantidad' where idHerramienta='$idHerramienta'");

if (mysql_query($insertar)) {
    //echo '<html><body><script language="javascript"> alert("Se ha asignado la herramienta correctamente"); window.location="asignaciones.php"; </script></body></html>';
    

    } else {
    //echo "Error: " . $insertar . "<br>" . $link->error;
}


?>