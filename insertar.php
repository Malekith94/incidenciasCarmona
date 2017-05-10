<?php

include("conexion.php");

$nom= $_POST("nombre");
$desc= $_POST("descripcion");
$dir= $_POST("direccion");
$foto= addslashes(file_get_contents($_FILES))

$insertar = "INSERT INTO incidencia (nombre, descripcion, direccion, foto) VALUES ($nom, $desc, $dir, $foto)";
$resultado = mysql_query($insertar);

if(resultado==false){
	echo '<p>Error al insertar los campos en la tabla.</p>';
}else{
	echo '<p>Los datos se han insertado correctamente.</p>';
}

?>