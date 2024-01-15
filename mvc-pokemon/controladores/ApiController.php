<?php

    namespace Pokemon\controladores;

    use Pokemon\models\Pokemon;

    use Pokemon\vistas\VistaInicio;
    use Pokemon\vistas\VistaAñadirPokemon;


    class ApiController {

        public static function mostrarInicio() {

            //$uri = "http://127.0.0.1:3000/api/pokemon";       
            //$reqPrefs['http']['method'] = 'GET';
            //$reqPrefs['http']['header'] = 'X-Auth-Token: ';
            //$stream_context = stream_context_create($reqPrefs);
            //$resultado = file_get_contents($uri, false, $stream_context);

            //$apiUrl = 'http://localhost:3000/api/pokemon';
            //$response = file_get_contents($apiUrl);
            //$datos = json_decode($apiUrl, true);
            vistaInicio::render();
        }

        public static function visualizarAddPokemon() {

            VistaAñadirPokemon::render();
        }

        public static function realizarRegistroPokemon($nombre, $especie, $preevolucion,$evolucion,$tipo, $imagen, $altura, $peso, $vida, $puntosSalud, $nombreHabilidad1, $danioHabilidad1, $nombreHabilidad2, $danioHabilidad2, $nombreHabilidad3, $danioHabilidad3, $nombreHabilidad4, $danioHabilidad4) {

            $apiUrl = "http://localhost:3000/api/pokemon";
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

            if ($resPHP === FALSE) {
                echo "Error al realizar la solicitud al servidor";
            } else {
                echo "Solicitud exitosa. Respuesta del servidor: " . $resPHP;
            }

        }  





    }



?>