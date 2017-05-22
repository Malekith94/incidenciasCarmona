<?php

include("conexion.php");


$dni = $_POST["dni"];
$fechaN = $_POST["fecha"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$nom = $_POST["nombre"];
$apell $_POST["apellidos"];
$tel = $_POST["telefono"];
$dir = $_POST["direccion"];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$modificar = "UPDATE usuario SET dni='$dni', pass='$pass', correo='$correo', nombre='$nom', apellidos='$apell', telefono='$tel', direccion='$dir', fecNac='$fechaN' Where correo='user@gmail.com'";

if ($mysqli->query($modificar)) {
    echo '<script language="javascript"> alert("Se ha modificado la incidencia correctamente"); window.location="indexAdmin.php"; </script>';
    //header('location: indexAdmin.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $modificar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>