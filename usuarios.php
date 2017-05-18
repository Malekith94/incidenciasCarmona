<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
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
			
		<div class="espacio">

			<h3>Administradores</h3>
		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
		</ul>
		</div>

		<div class="espacio">

			<h3>Empleados</h3>
		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
		</ul>
		</div>

		<div class="espacio espacioabajo">

			<h3>Ciudadanos</h3>
		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span> <a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a>
                </div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				<div class="collapsible-body prueba"><span>Lorem ipsum dolor sit amet.</span><a href="#!" class="secondary-content"><i class="material-icons">mode edit</i><i class="material-icons">delete</i></a></div>
			</li>
		</ul>
		</div>

		<div id="floating" class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light red" href="#modal1"><i class="material-icons">add</i></a>


        </div>
			<!--Ventana modal float button registrar usuario-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="container row">
                    <i class="large material-icons iconomodal">perm_identity</i>
                    <h4 class="titulomodal">Registrar usuario</h4>
                </div>
                <!--Formulario registrar usuario-->
                <div id="nuevaIncidencia" class="row">
                    <form class="col s12" action="insertar.php" method="POST" enctype="multipart/form-data">
                       
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
						    	<select id="combo">
						      		<option value="" disabled selected>Elige la profesion</option>
								    <option value="1">Electricista</option>
								    <option value="2">Jardinero</option>
								    <option value="3">Fontanero</option>
						    	</select>
						   		<label for="combo">Profesión</label>
						 	</div>

                            <!--Tipo -->
                            <div class="input-field col s6">
							      <input name="tipos" type="radio" id="administrador" />
							      <label for="administrador">Administrador</label>
							      <input name="tipos" type="radio" id="empleado" />
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
                            <div class="input-field col s12">
                                <input id="labelNombre" name="nombre" type="text" data-length="50" class="validate">
                                <label for="labelNombre">Nombre</label>
                            </div>

                            <!--Apellidos-->
                            <div class="input-field col s12">
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
                                  <input name="sexo" type="radio" id="masculino" />
                                  <label for="masculino">Masculino</label>
                                  <input name="sexo" type="radio" id="femenino" />
                                  <label for="femenino">Femenino</label>
                            </div>
                            
                            
                            <!--Imagen-->
                            
                            <div class="file-field input-field col s7">
                                <div class="btn">
                                    <span>Foto</span>
                                    <input type="file" name="foto" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Seleccione su imagen de perfil">
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