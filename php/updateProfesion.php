<?php

include("../conexion.php");


$nombre = $_POST["nombre"];
$idProfesion = $_POST["idProfesion"];


// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$modificar = "UPDATE profesion SET nombre='$nombre' where idProfesion='$idProfesion'";

if ($mysqli->query($modificar)) {
    echo '<script language="javascript"> alert("Se ha modificado la profesion correctamente"); window.location = "administracion.php"; </script>';
    //header('location: indexAdmin.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $modificar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>