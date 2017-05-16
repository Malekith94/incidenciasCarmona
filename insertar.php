<?php

include("conexion.php");


$nom = $_POST["nombre"];
$desc = $_POST["descripcion"];
$dir = $_POST["direccion"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = "fotos/".$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$insertar = "INSERT INTO incidencia (nombre, descripcion, direccion, logo) VALUES ('$nom', $desc, '$dir', '$img')";

if ($mysqli->query($insertar)) {
    echo "New record created successfully";
    echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $insertar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>