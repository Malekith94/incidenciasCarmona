<?php

include("../conexion.php");

$nom = $_POST["nombre"];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$insertar = "INSERT INTO profesion (nombre) VALUES ('$nom')";

if ($mysqli->query($insertar)) {
    echo '<html><body><script language="javascript"> alert("Se ha insertado la profesión correctamente"); window.location="administracion.php"; </script> </body></html>';
    
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    echo "Error: " . $insertar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();
?>