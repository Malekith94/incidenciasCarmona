<?php
include 'conexion.php';	
?>

<html>
     
    <head>
        <meta charset="utf-8">
        <title>Incidencias Carmona</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        
        <style>

        html {
        font-family: sans-serif;
        min-height: 100%;
        }

        .logo {
        width: 45px;
        height: 45px;
        margin-top: 10px;
        margin-left: 10px;
        }

        nav ul li a {
        color: black;
        font-weight: bold;
        font-size: 18px;
        }

        #dropdown1 li a {
        background-color: yellow;
        color: black;
        }

        .fondosidenav li a {
        font-weight: bold;
        color: black;
        }

        #dropdown2 li a {
        background-color: yellow;
        color: black;
        }

        .cabecera {
        margin-left: 60px;
        }


        h2 {
        text-align: center;
        color: yellow;
        font-weight: bold;
        font-size: 32px;
        font-family: fantasy;
        }

        body {
        background-color: black;
        margin: 0;
        height: 100%;
        overflow-y: auto;

        }

        div.incidencias{

        margin:0 auto;
        position: relative; 
        min-height: 525px;
        }

        </style>

        
        <script>
$(function () {
    $('#container2').highcharts({
        chart: {
          backgroundColor: 'transparent'  
        },
        title: {
            text: 'Resumen de incidencias del ultimo mes',
            style: {
                color: 'yellow'
            },
            x: -20 //center
        },
        subtitle: {
            text: 'Incidencias Carmona',
            style: {
                color: 'yellow'
            },
            x: -20
        },
        xAxis: {
                 <?php
            $tipos= "select distinct(nombre) from profesion order by nombre asc";
            $res = $mysqli->query($tipos);
            $categorias = array();
            while($resTipos=mysqli_fetch_array($res)){
                array_push($categorias, $resTipos["nombre"]);
      }
            echo 'categories: ["'.implode('","',$categorias).'"]'; 
            ?>
    
        },
        yAxis: {
            title: {
                text: 'Incidencias (%)',
                style: {
                color: 'yellow'
            }
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '%'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Incidencias',
            <?php
            $suma = "SELECT COUNT(i.nombre) AS suma FROM incidencia i, usuario u, profesion p WHERE i.dni=u.dni AND u.idProfesion=p.idProfesion AND  DAYOFYEAR(i.fechaSuceso) >= DAYOFYEAR(CURDATE()) -30 AND i.fechaSuceso <= CURDATE() GROUP BY p.nombre ORDER BY p.nombre";
            $resSuma = $mysqli->query($suma);
            $arraysumas = array();
            while($sumares=mysqli_fetch_array($resSuma)){
                array_push($arraysumas, $sumares["suma"]);
            }
            echo 'data: ['.implode(',', $arraysumas).']';
            ?>
        }
                ]
    });
});
            $(document).ready(function () {

    // Build the chart
    Highcharts.chart('container', {
        chart: {
            backgroundColor: 'transparent',
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Incidencias de Carmona en el último mes',
            style: {
                color: 'yellow'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Incidencias',
            colorByPoint: true,
            data: [
                <?php
                $suma = "SELECT COUNT(i.nombre) AS suma, p.nombre as nombreProf FROM incidencia i, usuario u, profesion p WHERE i.dni=u.dni AND u.idProfesion=p.idProfesion AND  DAYOFYEAR(i.fechaSuceso) >= DAYOFYEAR(CURDATE()) -30 AND i.fechaSuceso <= CURDATE() GROUP BY p.nombre ORDER BY p.nombre";
            
                $res = $mysqli->query($suma);
                $filas = mysqli_num_rows($res);
                $cont = 1;
            
              $arraycategorias = array();
            while($resTipos=mysqli_fetch_array($res)){
                     echo "{ name: '".$resTipos['nombreProf']."', y: ".intval($resTipos['suma'])."}";
                 if($cont != $filas){
                     echo ",";
                }
                
                $cont++;
                }
                
                ?>
        ]
    }]
});
            });
</script>
    
    </head>
     <div class="contenido">

        <div class="navbar-fixed">

            <ul id="dropdown1" class="dropdown-content">
                <li><a href="administracion.php">Administración</a></li>
                <li class="divider"></li>
                <li><a href="graficos.php">Gráficos</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content">
                <li><a href="herramientas.php">Herramientas</a></li>
                <li><a href="vehiculos.php">Vehiculos</a></li>
                <li><a href="profesiones.php">Profesión</a></li>
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

            <div>

                <h2>Estadísticas de las incidencias del último mes</h2>

            </div>

    
            <div class="col s12" id="container2">
                

            </div>

            <div class="col s12" id="container">
                

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
        <!-- jQuery -->
     
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/graficos.js"></script>
    </body>
</html>