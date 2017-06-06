<?php

include("conexion.php");


$matricula = $_POST["matricula"];
$idProfesion = $_POST["idProf"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$cant = $_POST["cantVehi"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = '/../fotos/'.$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$modificar = "UPDATE vehiculo SET matricula='$matricula', idProfesion='$idProfesion', marca='$marca', modelo='$modelo', cantidad='$cant', foto='$destino' where matricula='$matricula'";

if ($mysqli->query($modificar)) {
    echo '<script language="javascript"> alert("Se ha modificado el vehiculo correctamente"); window.location = "php/administracion.php"; </script>';
    //header('location: indexAdmin.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $modificar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>