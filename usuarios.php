<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Incidencias Carmona</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

    <link rel="stylesheet" href="css/usuarios.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="black">
    <div class="navbar-fixed">

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="administracion.php">Administracion</a></li>
            <li class="divider"></li>
            <li><a href="graficos.php">Gráficos</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="administracion.php">Administracion</a></li>
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

        <!--Collapsible administradores-->
        <div class="espacio">
            <h3>Administradores</h3>
            <?php   
                    //include('conexion.php');
                    $link=mysql_connect("localhost", "root", "");
                    mysql_select_db("incidencias", $link);
                    $result = mysql_query("SELECT * FROM usuario WHERE tipo=0", $link);

                    echo '<ul class="collapsible popout" data-collapsible="accordion">';
                    while ($row = mysql_fetch_row($result)){
                        echo '<li>';
                        $dniAdmin=$row[0];
                        echo "<div class='collapsible-header'><img src='$row[7]' width='20px' height='20px'></img> $row[5] $row[6]<a href='eliminarAdmin.php?id=$row[0]'><i class='material-icons right'>delete</i></a><a href='modificarAdmin.php?id=$row[0]'><i class='material-icons right'>mode_edit</i></a></div>";
                        echo "<div class='collapsible-body prueba'><span>DNI: $row[0]</span><br><span>Correo: $row[4]</span><br><span>Telefono: $row[8]</span><br><span>Direccion: $row[9]</span> <br><span>Fecha de nacimiento: $row[10]</span><br><br></div>";
                        echo '</li>';
                    }
                    echo '</ul>';
                ?>
        </div>
        <!--Collapsible empleados-->
        <div class="espacio">

            <h3>Empleados</h3>

            <?php
             
                    $link=mysql_connect("localhost", "root", "");
                    mysql_select_db("incidencias", $link);
                    $result = mysql_query("SELECT * FROM usuario WHERE tipo=1", $link);

                    echo '<ul class="collapsible popout" data-collapsible="accordion">';
                    while ($row = mysql_fetch_row($result)){
                        echo '<li>';
                        echo "<div class='collapsible-header'><img src='$row[7]' width='20px' height='20px'></img> $row[5] $row[6]<a href='eliminarAdmin.php?id=$row[0]'><i class='material-icons right'>delete</i></a><a onclick='prueba()'><i class='material-icons right'>mode_edit</i></a></div>";
                        echo "<div class='collapsible-body prueba'><span>DNI: $row[0]</span><br><span>Correo: $row[4]</span><br><span>Telefono: $row[8]</span><br><span>Direccion: $row[9]</span> <br><span>Fecha de nacimiento: $row[10]</span><br><br></div>";
                        echo '</li>';
                    }
                    echo '</ul>';
                ?>
        </div>
        <!--Collapsible ciudadanos-->
        <div class="espacio espacioabajo">

            <h3>Ciudadanos</h3>
            <?php
                    $link=mysql_connect("localhost", "root", "");
                    mysql_select_db("incidencias", $link);
                    $result = mysql_query("SELECT * FROM usuario WHERE tipo=2", $link);

                    echo '<ul class="collapsible popout" data-collapsible="accordion">';
                    while ($row = mysql_fetch_row($result)){
                        echo '<li>';
                        echo "<div class='collapsible-header'><img src='$row[7]' width='20px' height='20px'></img> $row[5] $row[6]<a href='eliminarAdmin.php?id=$row[0]'><i class='material-icons right'>delete</i></a><a href='#modal2'><i class='material-icons right'>mode_edit</i></a></div>";
                        echo "<div class='collapsible-body prueba'><span>DNI: $row[0]</span><br><span>Correo: $row[4]</span><br><span>Telefono: $row[8]</span><br><span>Direccion: $row[9]</span> <br><span>Fecha de nacimiento: $row[10]</span><br><br></div>";
                        echo '</li>';
                    }
                    echo '</ul>';
                ?>
        </div>
    </div>
    <div id="floating" class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light red" href="#modal1"><i class="material-icons">add</i></a>


    </div>
    <!--Ventana modal float button registrar usuario-->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="container center-align">
                <i class="large material-icons">perm_identity</i>
                <h4 align="center">Registrar usuario</h4>
            </div>
            <!--Formulario registrar usuario-->
            <div id="nuevoUsuario" class="row">
                <form class="col s12" action="insertarUsuario.php" method="POST" enctype="multipart/form-data">

                    <div class="row">

                        <!--Dni-->
                        <div class="input-field col s6">
                            <input id="labelDni" name="dni" type="text" placeholder="Ej: 12345678M" data-length="9" class="validate">
                            <label for="labelDni">Dni</label>
                        </div>

                        <!--Fecha nacimiento-->
                        <div class="input-field col s6">
                            <input id="labelFecha" name="fecha" type="date" class="datepicker">
                            <label for="labelFecha">Fecha</label>
                        </div>

                    </div>

                    <div class="row">

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

                        <!--Tipo -->
                        <div class="input-field col s6">
                            <input name="tipos" type="radio" id="administrador" value="0" />
                            <label for="administrador">Administrador</label>
                            <input name="tipos" type="radio" id="empleado" value="1" />
                            <label for="empleado">Empleado</label>
                        </div>

                    </div>

                    <!--Email-->
                    <div class="input-field col s6">
                        <input id="labelEmail" name="email" type="text" data-length="60" class="validate">
                        <label for="labelEmail">Email</label>
                    </div>

                    <!--Contraseña-->
                    <div class="input-field col s6">
                        <input id="labelPass" name="pass" type="password" data-length="25" class="validate">
                        <label for="labelPass">Contraseña</label>
                    </div>


                    <!--Nombre-->
                    <div class="input-field col s6">
                        <input id="labelNombre" name="nombre" type="text" data-length="50" class="validate">
                        <label for="labelNombre">Nombre</label>
                    </div>

                    <!--Apellidos-->
                    <div class="input-field col s6">
                        <input id="labelApellidos" name="apellidos" type="text" data-length="80" class="validate">
                        <label for="labelApellidos">Apellidos</label>
                    </div>

                    <!--Direccion-->
                    <div class="input-field col s12">
                        <input id="labelDireccion" name="direccion" type="text" data-length="100" class="validate">
                        <label for="labelDireccion">Dirección</label>
                    </div>


                    <!--Sexo-->
                    <div id="sexodiv" class="input-field col s5">
                        <input name="sexo" type="radio" id="masculino" value="masculino" />
                        <label for="masculino" name>Masculino</label>
                        <input name="sexo" type="radio" id="femenino" value="femenino" />
                        <label for="femenino">Femenino</label>
                    </div>

                    <!--Telefono-->
                    <div id="tel" class="input-field col s7">
                        <input id="labelTelefono" name="telefono" type="text" data-length="9" class="validate">
                        <label for="labelTelefono">Telefono</label>
                    </div>


                    <!--Imagen-->

                    <div class="file-field input-field col s12">
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="foto" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Seleccione su imagen de perfil">
                        </div>

                    </div>



                    <div class="modal-footer">
                        <!--<a href="#!" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Añadir</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>-->
                        <button class="waves-effect waves-light btn right" type="submit" name="action"><i class="material-icons right">send</i>confirmar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Ventana modal editar usuario-->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <div class="container center-align">
                <i class="large material-icons">perm_identity</i>
                <h4 align="center">Editar usuario</h4>
            </div>
            <!--Formulario editar usuario-->
            <div id="nuevoUsuario" class="row">
                <form class="col s12" action="modificarUsuario.php" method="POST" enctype="multipart/form-data">

                    <div class="row">

                        <?php       
                                    session_start();
                                    $dniAd = $_SESSION['dniAd'];
                                    $link=mysql_connect("localhost", "root");
                                    mysql_select_db("incidencias", $link);
                                    $resultUsu = mysql_query("SELECT * FROM usuario where dni = '$dniAd'", $link);
                                    $row = mysql_fetch_row($resultUsu);
                                    $resultProf = mysql_query("SELECT * from profesion where idProfesion=$row[1]");
                                    $row2 = mysql_fetch_row($resultProf);
                            ?>


                            <!--Dni-->
                            <div class="input-field col s6">
                                <input id="labelDni" name="dni" type="text" placeholder="Ej: 12345678M" value="<?php echo $row[0]; ?>" data-length="9" class="validate">
                                <label for="labelDni">Dni</label>
                            </div>

                            <!--Fecha nacimiento-->
                            <div class="input-field col s6">
                                <input id="labelFecha" name="fecha" type="date" value="<?php echo $row[10]; ?>" class="datepicker">
                                <label for="labelFecha">Fecha</label>
                            </div>

                    </div>

                    <div class="row">

                        <!--Profesion-->
                        <div class="input-field col s6">
                           <input disabled id="labelProfesion" name="profesion" type="text" value="<?php echo $row2[1] ?>" data-length="60" class="validate">
                            <label for="labelProfesion">Profesion</label>
                        </div>

                        <!--Tipo -->
                        
                            <div class="input-field col s6">
                            <?php
                            if($row[2] == 0){
                                echo'<input name="tipos" type="radio" id="administrador" value="0" checked="checked" />';
                                echo '<label for="administrador">Administrador</label>';
                                echo '<input name="tipos" type="radio" id="empleado" value="1"/>';
                                echo '<label for="empleado">Empleado</label>';
                            }else{
                                echo'<input name="tipos" type="radio" id="administrador" value="0" />';
                                echo '<label for="administrador">Administrador</label>';
                                echo '<input name="tipos" type="radio" id="empleado" value="1" checked="checked"/>';
                                echo '<label for="empleado">Empleado</label>';
                            }
                            
                            ?>
                            </div>
                    </div>

                    <!--Email-->
                    <div class="input-field col s6">
                        <input id="labelEmail" name="email" type="text" value="<?php echo $row[4] ?>" data-length="60" class="validate">
                        <label for="labelEmail">Email</label>
                    </div>

                    <!--Contraseña-->
                    <div class="input-field col s6">
                        <input id="labelPass" name="pass" type="password" data-length="25" class="validate" value="<?php echo $row[3]; ?>">
                        <label for="labelPass">Contraseña</label>
                    </div>


                    <!--Nombre-->
                    <div class="input-field col s6">
                        <input id="labelNombre" name="nombre" type="text" data-length="50" class="validate" value="<?php echo $row[5]; ?>">
                        <label for="labelNombre">Nombre</label>
                    </div>

                    <!--Apellidos-->
                    <div class="input-field col s6">
                        <input id="labelApellidos" name="apellidos" type="text" data-length="80" class="validate" value="<?php echo $row[6]; ?>">
                        <label for="labelApellidos">Apellidos</label>
                    </div>

                    <!--Direccion-->
                    <div class="input-field col s12">
                        <input id="labelDireccion" name="direccion" type="text" data-length="100" class="validate" value="<?php echo $row[9]; ?>">
                        <label for="labelDireccion">Dirección</label>
                    </div>


                    <!--Sexo-->
                    <div id="sexodiv" class="input-field col s5">

                        <?php
                            if($row[11] == 'femenino'){
                            echo'<input name="sexo" type="radio" id="masculino" value="masculino"/>';
                            echo'<label for="masculino" name>Masculino</label>';
                            echo'<input name="sexo" type="radio" id="femenino" value="femenino" checked="checked"/>';
                            echo '<label for="femenino">Femenino</label>';
                            }else{
                            echo'<input name="sexo" type="radio" id="masculino" value="masculino" checked="checked" />';
                            echo'<label for="masculino" name>Masculino</label>';
                            echo'<input name="sexo" type="radio" id="femenino" value="femenino" />';
                            echo '<label for="femenino">Femenino</label>';
                            }
                            ?>

                    </div>

                    <!--Telefono-->
                    <div id="tel" class="input-field col s7">
                        <input id="labelTelefono" name="telefono" type="text" data-length="9" class="validate" value="<?php echo $row[8]; ?>">
                        <label for="labelTelefono">Telefono</label>
                    </div>


                    <!--Imagen-->

                    <div class="file-field input-field col s12">
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="foto" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="<?php echo $row[7]; ?>">
                        </div>

                    </div>



                    <div class="modal-footer">
                        <!--<a href="#!" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Añadir</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>-->
                        <button class="waves-effect waves-light btn right" type="submit" name="action"><i class="material-icons right">send</i>confirmar</button>

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