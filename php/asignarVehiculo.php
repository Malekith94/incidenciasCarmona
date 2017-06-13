<?php

$link = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");

$dni = $_REQUEST['dniEmp'];
$matricula = $_REQUEST['mat'];
$cantidad = $_POST['cantVehi'];
$fecha = date("Y-m-d");

$cantComp = $cantidad;

$select ="SELECT count(*) from usuariovehiculo where matricula = '$matricula' and dni='$dni'";
$o=mysqli_fetch_row(mysqli_query($select))[0];

//echo $o;
//echo $select;
//print_r($select); 
$insertar = "INSERT INTO usuariovehiculo (dni, matricula, fecha, cantidad) VALUES ('$dni', '$matricula', '$fecha', $cantidad)";

$updateInv = "UPDATE usuariovehiculo set cantidad=cantidad+$cantidad where matricula='$matricula' and dni='$dni'";
$updateInvNeg = "UPDATE vehiculo set cantidad=cantidad-$cantidad where matricula='$matricula'";

$selectCantidad = "SELECT * FROM vehiculo WHERE matricula = '$matricula'";
$r = mysqli_fetch_row(mysqli_query($selectCantidad))[4];
echo $r;


if(mysqli_fetch_row(mysqli_query($selectCantidad))[4]>=$cantidad){
    
    if($o==0){

        if (mysqli_query($insertar)) {
                if (mysqli_query($updateInvNeg)) {

                    echo '<html><body><script language="javascript"> alert("Se ha asignado el vehiculo correctamente"); window.location="asignaciones.php"; </script></body></html>';

                }
            } else {
            echo "Error: " . $insertar . "<br>" . $link->error;
        }

    }
    
    if($o>0){

        if (mysqli_query($updateInv)) {
            if (mysqli_query($updateInvNeg)) {
                echo '<html><body><script language="javascript"> alert("Se ha actualizado el vehiculo correctamente"); window.location="asignaciones.php"; </script></body></html>';

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