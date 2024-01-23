<?php

    namespace Pokemon\controladores;

    use Pokemon\models\Pokemon;

    use Pokemon\vistas\VistaInicio;
    use Pokemon\vistas\VistaAñadirPokemon;
    use Pokemon\vistas\VistaCategorias;
    use Pokemon\vistas\VistaVerPokemon;

    class ApiController {

        public static function mostrarInicio() {

            $uri = "http://52.3.124.198:3000/api/pokemon";       
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: ';
            $stream_context = stream_context_create($reqPrefs);
            $resultado = file_get_contents($uri, false, $stream_context);
            vistaInicio::render($resultado);
        }

        public static function visualizarAddPokemon() {

            VistaAñadirPokemon::render();
        }

        public static function realizarRegistroPokemon($nombre, $especie, $preevolucion,$evolucion,$tipo, $imagen, $altura, $peso, $vida, $puntosSalud, $nombreHabilidad1, $danioHabilidad1, $nombreHabilidad2, $danioHabilidad2, $nombreHabilidad3, $danioHabilidad3, $nombreHabilidad4, $danioHabilidad4) {

            $apiUrl = "http://52.3.124.198:3000/api/pokemon";
            $reqPrefs['http']['method'] = 'POST';
            $reqPrefs['http']['header'] = 'X-Auth-Token: ';
            $reqPrefs['http']['header'] = 'Content-Type: application/json';
            $reqPrefs['http']['content'] = json_encode(array(
                "nombre" => $nombre,
                "especie" => $especie,
                "preevolucion" => $preevolucion,
                "evolucion" => $evolucion,
                "tipo" => [$tipo],
                "imagen" => $imagen,
                "altura" => $altura,
                "peso" => $peso,
                "vida" => $vida,
                "puntosSaludJuego" => $puntosSalud,
                "habilidades" => array(
                    array("nombre" => $nombreHabilidad1, "danio" => $danioHabilidad1),
                    array("nombre" => $nombreHabilidad2, "danio" => $danioHabilidad2),
                    array("nombre" => $nombreHabilidad3, "danio" => $danioHabilidad3),
                    array("nombre" => $nombreHabilidad4, "danio" => $danioHabilidad4),
                ),
            ));


            $context = stream_context_create($reqPrefs);
            $resPHP = file_get_contents($apiUrl, false, $context); 


            ApiController::mostrarInicio();

        }  

        public static function verPokemon ($nombre) {
            $uri = "http://52.3.124.198:3000/api/pokemon/buscar/$nombre";       
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: ';
            $stream_context = stream_context_create($reqPrefs);
            $resultado = file_get_contents($uri, false, $stream_context);
            VistaVerPokemon::render($resultado);
        }

        public static function categoria () {
            $resultado = 0;

            VistaCategorias::render($resultado);
        }

        public static function buscarTipoPokemon($tipo){
            $uri = "http://52.3.124.198:3000/api/pokemon/tipo/$tipo";       
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: ';
            $stream_context = stream_context_create($reqPrefs);
            $resultado = file_get_contents($uri, false, $stream_context);

            VistaCategorias::render($resultado);
        }

        public static function borrarPokemon($id) {
            $uri = "http://52.3.124.198:3000/api/pokemon/$id";       
            $reqPrefs['http']['method'] = 'DELETE';
            $reqPrefs['http']['header'] = 'X-Auth-Token: ';
            $stream_context = stream_context_create($reqPrefs);
            $resultado = file_get_contents($uri, false, $stream_context);

            ApiController::mostrarInicio();
        }

        public static function verModificarPokemon($nombre){
            $uri = "http://52.3.124.198:3000/api/pokemon/buscar/$nombre";       
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: ';
            $stream_context = stream_context_create($reqPrefs);
            $resultado = file_get_contents($uri, false, $stream_context);
            VistaVerPokemon::render($resultado);
        }



    }



?>