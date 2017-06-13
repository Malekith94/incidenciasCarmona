<!DOCTYPE html>
<?php

error_reporting(0);
ini_set('display_errors', 0);

    $link = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");

    
    $incidenciaId = $_SESSION['incidenciaId2']=$_REQUEST['idIncidencia'];

    $prof=$_SESSION['prof2']=$_REQUEST['profesiones'];
    $emple=$_SESSION['emple2']=$_REQUEST['empleados'];

    //Query combo 1
    $queryProf = "SELECT * FROM profesion";
    $resProf = mysqli_query($queryProf);

    //Query combo 2
    $queryEmple = "SELECT * FROM usuario WHERE idProfesion=$prof ";
    $resEmple = mysqli_query($queryEmple);

?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Incidencias Carmona</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="../css/materialize.min.css">

        <link rel="stylesheet" href="../css/miPerfil.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body class="black">
        <div class="contenido">

            <!--Menu navbar-->
            <div class="navbar-fixed">

                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="administracion.php">Administracion</a></li>
                    <li class="divider"></li>
                    <li><a href="../graficos.php">Gráficos</a></li>
                </ul>

                <ul id="dropdown2" class="dropdown-content">
                    <li><a href="administracion.php">Administracion</a></li>
                    <li><a href="../graficos.php">Gráficos</a></li>
                </ul>

                <nav>
                    <div class="nav-wrapper z-depth-5 yellow accent-2">
                        <a href="#!" class="brand-logo"><img class="logo" src="../imagenes/logo.png"></a>

                        <a href="#" data-activates="mobile-demo" class="button-collapse btn btn-floating pulse"><i class="material-icons black-text">menu</i></a>

                        <ul class="left hide-on-med-and-down cabecera">

                            <?php
                                $link = mysqli_connect("79.148.236.236", "dam42", "0260flm4448glj", "dam42_incidencias");
                                $badge= "select count(*) as suma from incidencia where estado=0";
                                $resultado =mysqli_query($link, $badge);
                                $row = mysqli_fetch_row($resultado);
                            ?>

                                <li><a href="../indexAdmin.php">Planning <span class="new badge red"> <?php echo $row[0] ?> </span></a></li>
                                <li><a href="../usuarios.php">Usuarios</a></li>
                                <li><a href="prestamoAdmin.php">En prestamo</a></li>
                                <!-- Dropdown Trigger -->
                                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Empresa<i class="material-icons right">arrow_drop_down</i></a>

                                </li>

                        </ul>

                        <ul class="right hide-on-med-and-down">
                            <li><a href="../miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
                            <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
                        </ul>

                    </div>
                </nav>
            </div>

            <ul class="side-nav yellow accent-2 fondosidenav" id="mobile-demo">
                <li><a href="../indexAdmin.php">Planning</a></li>
                <li><a href="../usuarios.php">Usuarios</a></li>
                <li><a href="prestamoAdmin.php">En prestamo</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="../miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
                <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
            </ul>

            <!-- div incidencias (acaba justo despues del footer) -->
            <div class="container incidencias">

                <div class="row">

                    <h2>Incidencias sin resolver</h2>

                </div>
                <!-- colecciones --

                <!--Formulario registrar incidencia-->
                <div id="contForm">
                    <div class="container" id="contenedorForm">
                        <div id="nuevaIncidencia" class="row">
                            <form name="formularioProf">

                                <!--Profesiones-->
                                <div class="row">

                                    <!--IdIncidencia-->
                                    <div class="input-field col s12">
                                        <input id="labelId" name="idIncidencia" type="text" class="validate" value="<?php echo $incidenciaId; ?>">
                                        <label for="labelId">Id incidencia</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <select id="comboProfesion" name="profesiones" placeholder="seleccione una profesion" onchange="this.form.submit()">
                                    <option></option>
                                        <?php 
                                            while($row1 = mysqli_fetch_array($resProf))
                                            {
                                            echo'<OPTION VALUE="'.$row1['idProfesion'].'">'.$row1['idProfesion'].' - '.$row1['nombre'].'</OPTION>';
                                                //echo $row1['idProfesion'];
                                                // - '.$row1['nombre'].'
                                            }
                                        ?>
                                    </select>
                                    </div>


                                    <!--Empleados -->
                                    <div class="input-field col s6">
                                        <select id="comboEmpleado" name="empleados" onchange="this.form.submit()">
                                        <option>Seleccione un empleado...</option>
                                        <?php 
                                            while($row2 = mysqli_fetch_array($resEmple))
                                            {
                                            echo'<OPTION VALUE="'.$row2['dni'].'">'.$row2['dni'].' - '.$row2['nombre'].' '.$row2['apellidos'].' </OPTION>';
                                                echo $row2['dni'];
                                            }
                                        ?>
                                    </select>

                                    </div>


                                </div>
                                <!--</form>-->

                            </form>

                            <div class="row">

                                <?php echo "<a href='asignarIncidenciaEmpleado.php?idInci=$incidenciaId&dniEmpleado=$emple'><i class='material-icons right'>send</i></a>"; ?>

                            </div>
                        </div>

                    </div>

                </div>

            </div>




        </div>

        <br>
        <br>
        <br>


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
        <script type="text/javascript" src="../js/indexAdmin.js"></script>

    </body>

    </html>