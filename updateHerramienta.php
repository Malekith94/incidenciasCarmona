<?php

include("conexion.php");


$idherramienta = $_POST["idHerra"];
$nom = $_POST["nomHerra"];
$cant = $_POST["cantHerra"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = '/../fotos/'.$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$modificar = "UPDATE inventario SET idHerramienta='$idherramienta', nombre='$nom', cantidad='$cant', foto='$destino' where idHerramienta='$idherramienta'";

if ($mysqli->query($modificar)) {
    echo '<script language="javascript"> alert("Se ha modificado la herramienta correctamente"); window.location = "php/administracion.php"; </script>';
    //header('location: indexAdmin.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $modificar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>