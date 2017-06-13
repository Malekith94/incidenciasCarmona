<?php

include("conexion.php");

 error_reporting(0);
ini_set('display_errors', 0);

$dni = $_POST["dni"];
$fec = $_POST["fecha"];
$profesion = $_POST["profesiones"];
$tipo = $_POST["tipos"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$nom = $_POST["nombre"];
$ape = $_POST["apellidos"];
$dir = $_POST["direccion"];
$sexo = $_POST["sexo"];
$tel = $_POST["telefono"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = 'fotos/'.$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$insertar = "INSERT INTO usuario (dni, idProfesion, tipo, pass, correo, nombre, apellidos, logo, telefono, direccion, fecNac, sexo) VALUES ('$dni', '$profesion', '$tipo', '$pass', '$email', '$nom', '$ape', '$destino', '$tel', '$dir', '$fec', '$sexo')";

if ($mysqli->query($insertar)) {
    echo '<html><body><script language="javascript"> alert("Se ha insertado el usuario correctamente"); window.location="indexSuperAdmin.php"; </script> </body></html>';
    //header('Location: usuarios.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    /*echo "Error: " . $insertar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';*/
}

$mysqli->close();
?>