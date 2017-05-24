<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Incidencias Carmona</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

    <link rel="stylesheet" href="css/asignaciones.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="contenido">

        <div class="navbar-fixed">

            <ul id="dropdown1" class="dropdown-content">
                <li><a href="administracion.php">Administración</a></li>
                <li class="divider"></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content">
                <li><a href="administracion.php">Administración</a></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <nav>
                <div class="nav-wrapper z-depth-5 yellow accent-2">
                    <a href="#!" class="brand-logo"><img class="logo" src="imagenes/logo.png"></a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse btn btn-floating pulse"><i class="material-icons black-text">menu</i></a>

                    <ul class="left hide-on-med-and-down cabecera">

                        <li><a href="indexAdmin.php">Planning <span class="new badge red">4</span></a></li>
                        <li><a href="usuarios.php">Usuarios</a></li>
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
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="miPerfil.php"><i class="material-icons">perm_identity</i></a></li>
            <li><a href="login.html"><i class="material-icons">power_settings_new</i></a></li>
        </ul>

        <div class="container incidencias">

         <div class="bloqueAsignacion">
                <div>
                    <h2>Herramientas</h2>
                </div>
            
                <div class="white contenedorTabla">                                    
                      <?php 
                            $link = mysql_connect("localhost", "root"); 
                            mysql_select_db("incidencias", $link); 
                            $result = mysql_query("SELECT * FROM inventario", $link); 
                            echo '<table class="centered responsive-table highlight bordered">'; 
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>idHerramienta</th>';
                            echo '<th>Nombre</th>';
                            echo '<th>Cantidad</th>';
                            echo '<th>Foto</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysql_fetch_row($result)){ 
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><img src='$row[3]' width='35px' height='35px'></img></tr> \n "; 
                            } 
                            echo "</table>"; 
                            
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
                            echo '<th>Matricula</th>';
                            echo '<th>idProfesion</th>';
                            echo '<th>Marca</th>';
                            echo '<th>Modelo</th>';
                            echo '<th>Cantidad</th>';
                            echo '<th>Foto</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysql_fetch_row($result)){ 
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><img src='$row[5]' width='35px' height='35px'></img></tr> \n "; 
                            } 
                            echo "</table>"; 
                           
                            ?> 


                </div>
            </div>

            <div class="bloqueAsignacion">
                <div>
                    <h2>Profesiones</h2>
                </div>
            
                <div class="white contenedorTabla">                                    
                      <?php 
                            $link = mysql_connect("localhost", "root"); 
                            mysql_select_db("incidencias", $link); 
                            $result = mysql_query("SELECT * FROM profesion", $link); 
                            echo '<table class="centered responsive-table highlight bordered">'; 
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>idProfesion</th>';
                            echo '<th>Nombre</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysql_fetch_row($result)){ 
                            echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n "; 
                            } 
                            echo "</table>"; 
                            
                            ?> 


                </div>
            </div>
        </div>


        <div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating yellow" href="#modal3"><img src="fotos/profesion.png" width="100%" height="100%"></a></li>
      <li><a class="btn-floating yellow darken-1" href="#modal1"><img src="fotos/herramienta.png" width="100%" height="100%"></a></li>
      <li><a class="btn-floating green" href="#modal2"><img src="fotos/coche.png" width="100%" height="100%"></a></li>
    </ul>
  </div>
        

        <!--Ventana modal float button rellenar herramientas-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="container row center-align">
                    <img src="fotos/herramienta.png" width="20%" height="20%">
                    <h4 align="center">Registrar herramienta</h4>
                </div>
                <!--Formulario registrar herramientas-->
                <div id="nuevaIncidencia" class="row">
                    <form class="col s12" action="php/insertarHerramienta.php" method="POST" enctype="multipart/form-data">
                    
                        <div class="row">

                            <!--Nombre-->
                            <div class="input-field col s12">
                                <input id="labelNombre" name="nombre" type="text" class="validate">
                                <label for="labelNombre">Nombre</label>
                            </div>

                            <!--Descripcion-->
                            <div class="input-field col s12">
                                <input id="labelCantidad" name="cantidad" type="text" class="validate"></textarea>
                                <label for="labelCantidad">Cantidad</label>
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
                    </form>
                    
                </div>

            </div>
            <div class="modal-footer">
                <button class="waves-effect waves-light btn right" type="submit" name="action"><i class="material-icons right">send</i>confirmar</button>
            </div>
        </div>

        <div id="modal2" class="modal">
            <div class="modal-content">
                <div class="container row center-align">
                    <img src="fotos/coche.png" width="25%" height="25%">
                    <h4 align="center">Registrar vehiculo</h4>
                </div>
                <!--Formulario registrar vehiculos-->
                <div id="nuevaIncidencia" class="row">
                    <form class="col s12" action="php/insertarVehiculo.php" method="POST" enctype="multipart/form-data">
                    
                        <div class="row">


                            <!--Matricula-->
                            <div class="input-field col s6">
                                <input id="labelMatricula" type="text" name="matricula" data-length="7" class="validate" placeholder="Ej: 4455GLF">
                                <label for="labelMatricula">Matricula</label>
                            </div>

                             <!--Profesion-->
                            <div class="input-field col s6">
                                <select id="combo" name="profesiones">
                                <option>Seleccione una profesión...</option>
                                <?php 
                                    $conexion=mysql_connect("localhost","root","") or
                                    die("Problemas en la conexion");
                                    mysql_select_db("incidencias",$conexion) or
                                    die("Problemas en la selección de la base de datos");  
                                    mysql_query ("SET NAMES 'utf8'");
                                    $query=mysql_query("select idProfesion, nombre from profesion", $conexion) or
                                    die("Problemas en el select:".mysql_error());
                                    while($row = mysql_fetch_array($query))
                                    {
                                    echo'<OPTION VALUE="'.$row['idProfesion'].'">'.$row['nombre'].'</OPTION>';
                                        echo $row['idProfesion'];
                                    }
                                ?>
                                </select>

                            </div>
                        </div>
                            
                        <div class="row">
                            <!--Marca-->
                            <div class="input-field col s6">
                                <input id="labelMarca" type="text" name="marca" data-length="20" class="validate"></textarea>
                                <label for="labelMarca">Marca</label>
                            </div>


                            <!--Modelo-->
                            <div class="input-field col s6">
                                <input id="labelModelo" type="text" name="modelo" data-length="50" class="validate"></textarea>
                                <label for="labelModelo">Modelo</label>
                            </div>
                        </div>

                        <div class="row">

                            <!--Cantidad-->
                            <div class="input-field col s6">
                                <input id="labelCantidad" type="text" name="cantidad" data-length="2" class="validate"></textarea>
                                <label for="labelCantidad">Cantidad</label>
                            </div>
                           
                            <!--Imagen-->
                            <div class="file-field input-field col s6">
                                <div class="btn">
                                    <span>Foto</span>
                                    <input type="file" name="foto" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Seleccione la imagen">
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button class="waves-effect waves-light btn right" type="submit" name="action"><i class="material-icons right">send</i>confirmar</button>
            </div>
        </div>

        <div id="modal3" class="modal">
            <div class="modal-content">
                <div class="container row center-align">
                    <img src="fotos/profesion.png" width="25%" height="25%">
                    <h4 align="center">Registrar profesión</h4>
                </div>
                <!--Formulario registrar profesiones-->
                <div id="nuevaIncidencia" class="row">
                    <form class="col s12" action="php/insertarProfesion.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <!--Nombre-->
                            <div class="input-field col s12">
                                <input id="labelNombre" name="nombre" type="text" class="validate">
                                <label for="labelNombre">Nombre</label>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button class="waves-effect waves-light btn right" type="submit" name="action324"><i class="material-icons right">send</i>confirmar</button>
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
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/indexAdmin.js"></script>

</body>

</html>
