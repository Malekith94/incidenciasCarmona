<?php

include("conexion.php");

$mat = $_POST["matricula"];
$profesion = $_POST["profesiones"];
$mar = $_POST["marca"];
$mod = $_POST["modelo"];
$cant = $_POST["cantidad"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = 'fotos/'.$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$insertar = "INSERT INTO vehiculo (matricula, idProfesion, marca, modelo, cantidad, foto) VALUES ('$mat', '$profesion', '$mar', '$mod', '$cant', '$destino')";

if ($mysqli->query($insertar)) {
    echo '<html><body><script language="javascript"> alert("Se ha insertado el vehiculo correctamente"); window.location="php/administracion.php"; </script> </body></html>';
    //header('Location: usuarios.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    
echo "Error: " . $insertar . "<br>" . $mysqli->error;
echo '<p>La matricula es: '.$mat.'</p>';
}

$mysqli->close();
?>