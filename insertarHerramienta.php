<?php

include("conexion.php");

$nom = $_POST["nombre"];
$cant = $_POST["cantidad"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = 'fotos/'.$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$insertar = "INSERT INTO inventario (nombre, cantidad, foto) VALUES ('$nom', '$cant', '$destino')";

if ($mysqli->query($insertar)) {
    echo '<html><body><script language="javascript"> alert("Se ha insertado la herramienta correctamente"); window.location="php/administracion.php"; </script> </body></html>';
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $insertar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>