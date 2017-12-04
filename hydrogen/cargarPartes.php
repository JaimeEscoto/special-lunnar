
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
    <title>Ejemplo con JQUERY WAYPOINTS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="noframework.waypoints.min.js"></script>
</head>
<body>
    <h1>EJEMPLO CON JQUERY WAYPOINTS</h1>
    <div id="resultados">


    </div>
    <p id="fin">
        CARGANDO...
    </p>
    <div id="leerMas">
        <ul>
            <li><b>Leer m&aacute;s:</b></li>
            <li><a href="http://www.adictosaltrabajo.com/tutoriales/tutoriales.php?pagina=galeriaImagesVideosPrettyPhoto" target="_blank">JQuery: Galer&iacute;a de im&aacute;genes y videos con Pretty Photo</a></li>
            <li><a href="http://www.adictosaltrabajo.com/tutoriales/tutoriales.php?pagina=paginadorJSTL" target="_blank">Crear un paginador utilizando JSTL Core</a></li>
            <li><a href="http://www.adictosaltrabajo.com/tutoriales/tutoriales.php?pagina=crossDomainJquery" target="_blank">Realizando peticiones Cross-Domain con JQuery</a></li>
            <li><a href="http://www.adictosaltrabajo.com/tutoriales/tutoriales.php?pagina=VideojuegoHTML5Javascript" target="_blank">Creando un videojuego con HTML5 y Javascript</a></li>
        </ul>
    </div>

    <script type="text/javascript">

        var i = 0;
        var hayMasCiudades = true;

        $(document).ready(function () {
            // cargamos las primeras 10 ciudades
            cargarPrimerasCiudades();
            // opciones del waypoint
            var opts = {
                offset: '100%'
            };

            // definimos el elemento con id="fin" como waypoint
            $('#fin').waypoint(function(event, direction) {
                if (hayMasCiudades) {
                    if (direction == 'down') {
                        var fin = $(this);
                        fin.css({'visibility' : 'visible'}); // mostramos "cargando..."
                        fin.waypoint('remove'); // eliminamos el waypoint mientras mostramos datos
                        // el settimeout "simula" la carga de datos (se debe quitar)

                            // pintamos siguientes ciudades
                            for (var j=0; j<10; j++) {
                                i++;
                                if (i >= ciudades.length) {
                                    hayMasCiudades = false;
                                    break;
                                }
                                var ciudad = new Ciudad(ciudades[i]);
                                anadirCiudad(ciudad);
                            }
                            // una vez pintadas las nuevas ciudades escondemos "cargando..."
                            fin.css({'visibility' : 'hidden'});
                            // reestablecemos el waypoint
                            fin.waypoint(opts);

                    }
                } else {
                    if (direction == 'down') {
                        // si no hay mas ciudades y el scroll va hacia abajo mostramos links
                        mostrarLeerMas();
                    } else {
                        // si va hacia arriba lo ocultamos
                        ocultarLeerMas();
                    }
                }
            }, opts);
        });

        var ciudades = ['ALCALA_DE_HENARES','AMSTERDAM','ARANJUEZ','ATENAS','BARCELONA','BERLIN','BOGOTA',
            'BRUJAS','BRUSELAS','BUCAREST','BUENOS_AIRES','COPENHAGUEN','CASABLANCA','DUBLIN','DUBROVNIK',
            'EL_CAIRO','ESTAMBUL','LONDRES','MALAGA','MOSCU','NUEVA_DELHI','NUEVA_YORK','OPORTO','OSLO',
            'PALMA_DE_MALLORCA','PARIS','PEKIN','RIO_DE_JANEIRO','ROMA','TOKIO','TORONTO','VIENA'];

        function Ciudad(nombre) {
            this.nombre = nombre.replace(/_/g, ' ');
            this.imagen = 'colors.png';
            this.texto = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet consectetur sapien non faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Aliquam erat volutpat. In ultrices ante nec arcu egestas placerat. Cras aliquet orci in massa rutrum sit amet posuere augue imperdiet. Fusce ut posuere arcu. In a tortor sit amet nisl blandit consectetur eget ac ante. Vestibulum ac ligula metus. Suspendisse ornare arcu sit amet augue condimentum congue. Pellentesque pulvinar sollicitudin nisl at aliquam. Nullam eu tellus purus. Maecenas fermentum vulputate massa ut laoreet. In hac habitasse platea dictumst.';
        }

        function anadirCiudad(ciudad) {
            $('#resultados').append($('<p class=\"ciudad\"><img src=\'' + ciudad.imagen + '\' alt=\'\' /><span>' + ciudad.nombre + '</span>' + ciudad.texto + '</p>'));
        }

        function cargarPrimerasCiudades() {
            do {
                var ciudad = new Ciudad(ciudades[i++]);
                anadirCiudad(ciudad);
            } while (i<10);
            i--;
        }

        function mostrarLeerMas() {
            var leerMas = $('#leerMas');
            leerMas.animate({
                width: 400
            }, 1000, function () {
                var links = $('#leerMas ul');
                links.css({display : 'block'});
                links.animate({opacity : 1.0}, 1500);
            });
        }

        function ocultarLeerMas() {
            var links = $('#leerMas ul');
            links.animate({opacity : 0}, 500, function () {
                links.css({display : 'none'});
                var leerMas = $('#leerMas');
                leerMas.animate({
                    width: 0
                }, 500);
            });
        }

    </script>

</body>
</html>
