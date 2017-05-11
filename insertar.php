<?php


$nom= $_POST["nombre"];
$desc= $_POST["descripcion"];
$foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$dir= $_POST["direccion"];
$fecha = date("Y/m/d");

$conexion = mysqli_connect("localhost","root","","incidencias");
$insertar = "INSERT INTO incidencia (nombre, descripcion, foto, localizacion, fechaSuceso) VALUES ($nom, $desc, $foto, $dir, $fecha)";
$resultado = mysqli_query($conexion, $insertar);

if(resultado){
	echo "<script language='javascript'>"; 
	echo "alert('Se ha insertado correctamente.')";
	echo 'alert("El nombre es '.$nom.'")';
	echo 'alert("La descripcion es '.$desc.'")';
	echo 'alert("La direccion es '.$dir.'")';
	echo 'alert("La foto es '.$foto.'")';
	echo 'alert("La fecha es '.$fecha.'")';
	echo "</script>";  
}else{
	echo "<script language='javascript'>"; 
	echo "alert('Ocurrio un error al insertar.')"; 
	echo "</script>";  
}

?>