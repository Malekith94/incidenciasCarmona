<?php

include("conexion.php");

$cif = $_POST["cif"];
$nom = $_POST["nom"];
$dir = $_POST["dir"];
$img = $_FILES["img"]["name"];
$ruta = $_FILES["img"]["tmp_name"];
$destino = "fotos/".$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$insertar = "INSERT INTO empresa (cif, nombre, direccion, logo) VALUES ('$cif', '$nom', '$dir', '$img')";

if ($mysqli->query($insertar)) {
    echo "New record created successfully";
    echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $insertar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>