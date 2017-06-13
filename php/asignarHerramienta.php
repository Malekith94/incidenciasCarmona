<?php

$link = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");

$dni = $_REQUEST['dniEmp'];
$idHerramienta = $_REQUEST['idHerra'];
$cantidad = $_POST['cantidadH'];
$fecha = date("Y-m-d");

$cantComp = $cantidad;

$select ="SELECT count(*) from usuarioinventario where idHerramienta = $idHerramienta and dni='$dni'";
$o=mysqli_fetch_row(mysqli_query($select))[0];

//echo $o;
//echo $select;
//print_r($select); 
$insertar = "INSERT INTO usuarioinventario (idHerramienta, dni, fecha, cantidad) VALUES ('$idHerramienta', '$dni', '$fecha', $cantidad)";

$updateInv = "UPDATE usuarioinventario set cantidad=cantidad+$cantidad where idHerramienta=$idHerramienta and dni='$dni'";
$updateInvNeg = "UPDATE inventario set cantidad=cantidad-$cantidad where idHerramienta=$idHerramienta";

$selectCantidad = "SELECT * FROM inventario WHERE idHerramienta = $idHerramienta";


if(mysqli_fetch_row(mysqli_query($selectCantidad))[2]>=$cantidad){
    
    if($o==0){

        if (mysqli_query($insertar)) {
                if (mysqli_query($updateInvNeg)) {

                    echo '<html><body><script language="javascript"> alert("Se ha asignado la herramienta correctamente"); window.location="asignaciones.php"; </script></body></html>';

                }
            } else {
            echo "Error: " . $insertar . "<br>" . $link->error;
        }

    }
    
    if($o>0){

        if (mysqli_query($updateInv)) {
            if (mysqli_query($updateInvNeg)) {
                echo '<html><body><script language="javascript"> alert("Se ha actualizado la herramienta correctamente"); window.location="asignaciones.php"; </script></body></html>';

                //echo $select;
            }
            } else {
            echo "Error: " . $updateInv . "<br>" . $link->error;
        }

    }
    
}else{
    echo '<html><body><script language="javascript"> alert("No hay suficiente stock"); window.location="asignaciones.php"; </script></body></html>';
}
    


?>