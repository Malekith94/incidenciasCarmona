<!DOCTYPE html>
<html>
    
        <?php
            error_reporting(0);
            ini_set('display_errors', 0);

            session_start();
            $correo = $_SESSION['sesion'];
            $link = mysql_connect("localhost", "root");
            mysql_select_db("incidencias", $link);
            $result = mysql_query("SELECT * FROM usuario where correo = '$correo'", $link);
            $row = mysql_fetch_row($result);
            $result2 = mysql_query("SELECT * FROM inventario", $link); 
            $cantidadHerramienta=$_SESSION['cantidadHerra']=$_REQUEST['cantHerra'];
        ?>    

<head>
    <meta charset="utf-8">
    <title>Incidencias Carmona</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <link rel="stylesheet" href="../css/asignaciones.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
    
    <script>
        $(document).ready(function){
            var person = prompt('Introduzca una cantidad', '0'); if (person != null) {document.getElementById('can').innerHTML =  person ;};
        }
    </script>
<body>
    <div class="contenido">
       
        <!--Menu-->
        <div class="navbar-fixed">

            <nav>
                <div class="nav-wrapper z-depth-5 yellow accent-2">
                    <a href="#!" class="brand-logo"><img class="logo" src="../imagenes/logo.png"></a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse btn btn-floating pulse"><i class="material-icons black-text">menu</i></a>

                    <ul class="left hide-on-med-and-down cabecera">

                        <li><a href="../indexEmpleado.php">Planning</a></li>
                        <li><a href="asignaciones.php">Asignaciones</a></li>
                        <li><a href="prestadoUsuario.php">En prestamo</a></li>

                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="../miPerfilEmpleado.php"><i class="material-icons">perm_identity</i></a></li>
                        <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                </div>
            </nav>
        </div>
        
        <ul class="side-nav yellow accent-2 fondosidenav" id="mobile-demo">
            <li><a href="../indexAdmin.php">Planning</a></li>
            <li><a href="asignaciones.php">Asignaciones</a></li>
            <li><a href="prestadoUsuario.php">En prestamo</a></li>
            <li><a href="../miPerfilEmpleado.php"><i class="material-icons">perm_identity</i></a></li>
            <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
        </ul>

        <div class="container incidencias">

            <div class="bloqueAsignacion">
                <div>
                    <h2>Herramientas</h2>
                </div>
            
                <div class="white contenedorTabla">                                    
                      <?php 
                            /*$link2 = mysql_connect("localhost", "root"); 
                            mysql_select_db("incidencias", $link2);*/ 
                            echo '<table class="centered responsive-table highlight bordered">'; 
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>idHerramienta</th>';
                            echo '<th>Nombre</th>';
                            echo '<th>Cantidad</th>';
                            echo '<th>Foto</th>';
                            echo '<th>Cantidad a coger</th>';
                            //echo '<th>Coger</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row2 = mysql_fetch_row($result2)){
                            /*echo "<script text='javascript'> function myFunction() {var person = prompt('Introduzca una cantidad', '0'); if (person != null) {document.getElementById('can').innerHTML =  person ;}location.href='?cantH='+person} </script>";
                            $variablePHP = "<script> document.write(person) </script>";
                            $cantH=(int)$_GET["cantH"];
                            echo "<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td><img src='../$row2[3]' width='35px' height='35px'></img><td id='can'>
                            <INPUT name='cantHerra' style='width: 40px;' TYPE='NUMBER' MIN='0' MAX='100' STEP='1' VALUE='0'></td><td><a href='asignarHerramienta.php?dniEmp=$row[0]&idHerra=$row2[0]&cantH=$cantH' onclick='myFunction()'><i class='material-icons'>thumb_up</i></a></td></tr> \n "; */
                                                            
                            echo "<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td><img src='../$row2[3]' width='35px' height='35px'></img><td id='can'><form action='asignarHerramienta.php?dniEmp=$row[0]&idHerra=$row2[0]' method='post'>
                            <INPUT name='cantidadH' style='width: 40px;' TYPE='NUMBER' MIN='0' MAX='100' STEP='1' VALUE='0'><input type=submit value=enviar></form></td></tr> \n "; 
                        
                            } 
                            echo "</table> \n"; 
                            ?> 


                </div>
            </div>
            
            <div class="bloqueAsignacion">
                <div>
                    <h2>Vehiculos</h2>
                </div>
            
                <div class="white contenedorTabla">                                    
                   <?php 
                            $link = mysql_connect("localhost", "root"); 
                            mysql_select_db("incidencias", $link); 
                            $result = mysql_query("SELECT * FROM vehiculo", $link); 
                            echo '<table class="centered responsive-table highlight bordered">'; 
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Matrícula</th>';
                            echo '<th>idProfesion</th>';
                            echo '<th>Marca</th>';
                            echo '<th>Modelo</th>';
                            echo '<th>Cantidad</th>';
                            echo '<th>Foto</th>';
                            echo '<th>Cantidad</th>';
                            echo '<th>Coger</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysql_fetch_row($result)){ 
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><img src='../$row[5]' width='35px' height='35px'></img></td><td><INPUT name='cantVehi' style='width: 40px;' TYPE='NUMBER' MIN='0' MAX='100' STEP='1' VALUE='0'></td><td><a href='asignarHerramienta.php?dniEmp=$row[0]'><i class='material-icons'>thumb_up</i></a></td></tr> \n "; 
                            } 
                            echo "</table> \n"; 
                            ?> 

                </div>
            </div>
            
        </div>
        
       
        
    </div>

    <!--Footer-->
        <footer class="page-footer yellow accent-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="black-text">Sobre nosotros</h5>
                            <p class="grey-text black-text">Somos una empresa que se encarga de: <br> - Mantenimiento de infraestructuras urbanas. - Limpieza viaria. - Recogida y eliminación de Sólidos Urbanos. - Limpieza y mantenimiento de Edificios Públicos. - Mantenimiento de Parques y Jardines. - Mantenimiento del Alumbrado Público. - Puntos limpios. - Recogida selectiva (vidrio,</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="black-text">Enlaces de interes</h5>
                        <ul>
                            <li><a class="blue-text" href="http://www.carmona.org/limancar/limancar.htm">Contacto</a></li>
                            <li><a class="blue-text" href="http://www.carmona.org/limancar/limancar.htm">Twitter Limancar</a></li>
                            <li><a class="blue-text" href="http://www.carmona.org/">Ayto.Carmona</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />Este obra está bajo una</a> <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de Creative Commons Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional</a>
                </div>
            </div>
        </footer>
    <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/asignaciones.js"></script>

</body>

</html>