<?php

$link = mysql_connect("localhost", "root");
mysql_select_db("incidencias", $link);

//$dni = $_REQUEST['dniEmp'];
//$idHerramienta = $_REQUEST['idHerra'];
$idHerramienta = 5;
$cantidad = $_POST['cantidadH'];
$fecha = date("Y-m-d");

$select = (int)mysql_query("SELECT count(*) from usuarioinventario where idHerramienta = $idHerramienta and dni='00000000b'");
echo $select;
$insertar = "INSERT INTO usuarioinventario (idHerramienta, dni, fecha, cantidad) VALUES ('$idHerramienta', '00000000b', '$fecha', $cantidad)";

$updateInv = "UPDATE usuarioinventario set cantidad=cantidad+$cantidad where idHerramienta=$idHerramienta and dni='00000000b'";

if($select==0){
    
    if (mysql_query($insertar)) {
        echo '<html><body><script language="javascript"> alert("Se ha asignado la herramienta correctamente"); window.location="asignaciones.php"; </script></body></html>';


        } else {
        echo "Error: " . $insertar . "<br>" . $link->error;
    }
    
}else if($select>0){
    
    if (mysql_query($updateInv)) {
        //echo '<html><body><script language="javascript"> alert("Se ha actualizado la herramienta correctamente"); window.location="asignaciones.php"; </script></body></html>';

        //echo $select;
        } else {
        echo "Error: " . $updateInv . "<br>" . $link->error;
    }
    
}else{
    echo "tuputamadre";
}


?>