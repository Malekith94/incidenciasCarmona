<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "incidencias";

$cif = $_POST["cif"];
$nom = $_POST["nom"];
$dir = $_POST["dir"];
$img = $_FILES["img"]["name"];
$ruta = $_FILES["img"]["tmp_name"];
$destino = "fotos/".$img;
copy($ruta, $destino);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$insertar = "INSERT INTO empresa (cif, nombre, direccion, logo) VALUES ('$cif', '$nom', '$dir', '$img')";

if ($conn->query($insertar)) {
    echo "New record created successfully";
    echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $insertar . "<br>" . $conn->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$conn->close();
?>