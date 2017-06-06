<!DOCTYPE html>
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
        <!--Nav Bar-->
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

                    <ul class="hide-on-med-and-down cabecera">
                        <li><a href="../indexAdmin.php">Planning</a></li>
                        <li><a href="../usuarios.php">Usuarios</a></li>
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
        <!--Side Nav-->
        <ul class="side-nav yellow accent-2 fondosidenav" id="mobile-demo">
            <li><a href="../indexAdmin.php">Planning</a></li>
            <li><a href="../usuarios.php">Usuarios</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="../miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
            <li><a href="../login.html"><i class="material-icons">power_settings_new</i></a></li>
        </ul>

        <!--Contenedor principal-->
        <div class="container incidencias">

            <h2>Editar vehiculo</h2>
            <div class="row">
                <div id="contForm">
                    <div class="container" id="contenedorForm">
                        <div class="row">
                            <!--Rellenar formulario con php-->
                            <?php
                                    $idVehi = $_REQUEST['idVehi'];
                                    $link = mysql_connect("localhost", "root");
                                    mysql_select_db("incidencias", $link);
                                    $result = mysql_query("SELECT * FROM vehiculo where matricula = '$idVehi'", $link);
                                    $row = mysql_fetch_row($result);
                            ?>
                                <!--Formulario-->
                                <form class="col s12" method="post" action="../updateVehiculo.php" enctype="multipart/form-data">
                                    <div class="row espacio">
                                        <!--Matricula-->
                                        <div class="input-field col s3">
                                            <input  id="labelId" name="matricula" type="text" class="validate" value="<?php echo $row[0]; ?>">
                                            <label for="labelId">Matricula</label>
                                        </div>
                                        
                                        <!--idProfesion-->
                                        <div class="input-field col s9">
                                            <input id="labelProf" name="idProf" type="text" class="validate" value="<?php echo $row[1]; ?>">
                                            <label for="labelProf">Id Profesion</label>
                                        </div>

                                    </div>
                                    
                                    <div class="row ">
                                    <!--Marca-->
                                        <div class="input-field col s9">
                                            <input id="labelMarca" name="marca" type="text" class="validate" value="<?php echo $row[2]; ?>">
                                            <label for="labelMarca">Marca</label>
                                        </div>

                                    </div>

                                    <div class="row ">
                                        <!--Modelo-->
                                        <div class="input-field col s9">
                                            <input id="labelModelo" name="modelo" type="text" class="validate" value="<?php echo $row[3]; ?>">
                                            <label for="labelModelo">Modelo</label>
                                        </div>

                                    </div>
                        
                                    
                                    <div class="row ">
                                        <!--Cantidad-->
                                        <div class="input-field col s12">
                                            <input id="lblCantidad" name="cantVehi" type="text" class="validate" value="<?php echo $row[4]; ?>">
                                            <label for="lblCantidad">Cantidad</label>
                                        </div>
                                    </div>
                                       
                                    <div class="row ">
                                        <!--Foto-->
                                        <div class="file-field input-field col s12">
                                            <div class="btn">
                                                <span>Foto</span>
                                                <input type="file" name="foto" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="<?php echo $row[5]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="modal-footer">
                                            <!--<a href="#!" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Añadir</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>-->
                                            <button class="waves-effect waves-light btn right" type="submit" name="action"><i class="material-icons right">send</i>confirmar</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
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
    <script type="text/javascript" src="../js/miPerfil.js"></script>

</body>

</html>