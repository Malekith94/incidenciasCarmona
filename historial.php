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

<body class="black">
    <div class="contenido">

        <!--Menu navbar-->
        <div class="navbar-fixed">

            <ul id="dropdown1" class="dropdown-content">
                <li><a href="php/administracion.php">Administracion</a></li>
                <li class="divider"></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content">
                <li><a href="php/administracion.php">Administracion</a></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <nav>
                <div class="nav-wrapper z-depth-5 yellow accent-2">
                    <a href="#!" class="brand-logo"><img class="logo" src="imagenes/logo.png"></a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse btn btn-floating pulse"><i class="material-icons black-text">menu</i></a>

                    <ul class="left hide-on-med-and-down cabecera">

                        <?php
                        $link = mysql_connect("localhost", "root");
                        mysql_select_db("incidencias", $link);
                        $badge= "select count(*) as suma from incidencia where estado=0";
                        $resultado =mysql_query($badge, $link);
                        $row = mysql_fetch_row($resultado);
                        ?>

                            <li><a href="indexAdmin.php">Planning <span class="new badge red"> <?php echo $row[0] ?> </span></a></li>
                            <li><a href="usuarios.php">Usuarios</a></li>
                            <li><a href="php/prestamoAdmin.php">En prestamo</a></li>
                            <!-- Dropdown Trigger -->
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Empresa<i class="material-icons right">arrow_drop_down</i></a>

                            </li>

                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
                        <li><a href="login.html"><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                </div>
            </nav>
        </div>

        <ul class="side-nav yellow accent-2 fondosidenav" id="mobile-demo">
            <li><a href="indexAdmin.php">Planning</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="php/prestamoAdmin.php">En prestamo</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
            <li><a href="login.html"><i class="material-icons">power_settings_new</i></a></li>
        </ul>

        <!-- div incidencias (acaba justo despues del footer) -->
        <div class="container incidencias">

                <div class="row">

                    <h2>Historial de incidencias resueltas</h2>

                </div>

                <?php
            $link = mysql_connect("localhost", "root");
            mysql_select_db("incidencias", $link);
            $result = mysql_query("SELECT * FROM historial", $link);
            
            echo '<ul class="collection">';
            
            while ($row = mysql_fetch_row($result)){
                echo '<li class="collection-item avatar">';
                echo "<img src='$row[6]' alt='' class='circle'>";
                echo "<span class='title'><b>Incidencia nº:</b> $row[2]</span><br>";
                echo "<span><b>Incidencia:</b> $row[3]</span><br>";
                echo "<span><b>Empleado:</b> $row[1]</span><br>";
                echo "<span><b>Descripcion:</b> $row[4]</span><br>";
                echo "<span><b>Direccion:</b> $row[7]</span><br>";
                echo "<span><b>Fecha del suceso:</b> $row[8]</span><br>";
                echo "<span><b>Fecha en la que se resolvio:</b> $row[9]</span>";
                echo "<a href='php/terminarIncidenciaAdmin.php?id=$row[0]'></a>";
            
            }
            echo '</ul>';
            ?>

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

    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/indexAdmin.js"></script>

</body>

</html>