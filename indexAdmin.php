<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Incidencias Carmona</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

    <link rel="stylesheet" href="css/indexAdmin.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="contenido">

        <div class="navbar-fixed">

            <ul id="dropdown1" class="dropdown-content">
                <li><a href="administracion.html">Administracion</a></li>
                <li class="divider"></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content">
                <li><a href="administracion.html">Administracion</a></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <nav>
                <div class="nav-wrapper z-depth-5 yellow accent-2">
                    <a href="#!" class="brand-logo"><img class="logo" src="imagenes/logo.png"></a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse btn btn-floating pulse"><i class="material-icons black-text">menu</i></a>

                    <ul class="left hide-on-med-and-down cabecera">

                        <li><a href="indexAdmin.html">Planning <span class="new badge red">4</span></a></li>
                        <li><a href="usuarios.html">Usuarios</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Empresa<i class="material-icons right">arrow_drop_down</i></a>

                        </li>

                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="#"><i class="material-icons">perm_identity</i></a></li>
                        <li><a href="login.html"><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                </div>
            </nav>
        </div>

        <ul class="side-nav yellow accent-2 fondosidenav" id="mobile-demo">
            <li><a href="indexAdmin.html">Planning</a></li>
            <li><a href="usuarios.html">Usuarios</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#"><i class="material-icons">perm_identity</i></a></li>
            <li><a href="login.html"><i class="material-icons">power_settings_new</i></a></li>
        </ul>

        <div class="container incidencias">

            <div class="row">

                <h2>Incidencias</h2>

            </div>
            <!-- colecciones -->            
            
            <?php
                $link = mysql_connect("localhost", "root");
            mysql_select_db("incidencias", $link);
            $result = mysql_query("SELECT * FROM incidencia", $link);
            
            echo '<ul class="collection">';
            
            while ($row = mysql_fetch_row($result)){
                echo '<li class="collection-item avatar">';
                echo '<i class="material-icons circle green">insert_chart</i>';
                echo "<span class='title'>$row[2]</span>";
                echo "<p>$row[3]</p>";
                echo '<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>';
            }
            echo '</ul>';
            ?>

        </div>


        <div id="floating" class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light red" href="#modal1"><i class="material-icons">add</i></a>


        </div>

        <!--Ventana modal float button rellenar incidencia-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="container row center-align">
                    <i class="large material-icons">report_problem</i>
                    <h4 align="center">Registrar Incidencia</h4>
                </div>
                <!--Formulario registrar incidencia-->
                <div id="nuevaIncidencia" class="row">
                    <form class="col s12" action="insertar.php" method="POST">
                        <div class="row">
                            <!--Nombre-->
                            <div class="input-field col s12">
                                <input id="labelNombre" name="nombre" type="text" class="validate">
                                <label for="labelNombre">Incidencia</label>
                            </div>
                            <!--Descripcion-->
                            <div class="input-field col s12">
                                <textarea id="txtAreaDescripcion" name="descripcion" class="materialize-textarea"></textarea>
                                <label for="txtAreaDescripcion">Descripcion de la Incidencia</label>
                            </div>
                            <!--Direccion -->
                            <div class="input-field col s12">
                                <input id="labelDireccion" name="direccion" type="text" class="validate">
                                <label for="labelDireccion">Direccion</label>
                            </div>
                            <!--Imagen-->
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>Foto</span>
                                    <input type="file" name="foto" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Seleccione la imagen">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!--<a href="#!" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Añadir</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>-->
                            <button class="btn waves-effect waves-light right submit" type="submit" name="action">Añadir <i class="tiny material-icons">send</i></button>
                        </div>
                    </form>
                </div>

            </div>

        </div>


        <!--Footer-->
        <footer class="page-footer yellow accent-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="black-text">Sobre nosotros</h5>
                        <p class="grey-text black-text">
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

    </div>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/indexAdmin.js"></script>

</body>

</html>