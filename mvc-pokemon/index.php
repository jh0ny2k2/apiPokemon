<?php
    namespace Pokemon;

    use Pokemon\controladores\ApiController;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar ----------------------------------


    if (isset($_REQUEST)) {
        //Tratamiento de botones, forms, ...
        if (isset($_REQUEST["accion"])) {

            if (strcmp($_REQUEST["accion"], "inicio") == 0) {

                ApiController::mostrarInicio();
            }

            if (strcmp($_REQUEST["accion"], "visualizarAddPokemon") == 0) {

                ApiController::visualizarAddPokemon();
            }

            if (strcmp($_REQUEST["accion"], "enviarRegistroPokemon") == 0) {
                $nombre = $_REQUEST['nombre'];
                $especie = $_REQUEST['especie'];
                $preevolucion = $_REQUEST['preevolucion'];
                $evolucion = $_REQUEST['evolucion'];
                $tipo = $_REQUEST['tipo'];
                $imagen = $_REQUEST['imagen'];
                $altura = $_REQUEST['altura'];
                $peso = $_REQUEST['peso'];
                $vida = $_REQUEST['vida'];
                $puntosSalud = $_REQUEST['puntos'];

                $nombreHabilidad1 = $_REQUEST['nombreHabilidad1'];
                $danioHabilidad1 = $_REQUEST['danioHabilidad1'];
                $nombreHabilidad2 = $_REQUEST['nombreHabilidad2'];
                $danioHabilidad2 = $_REQUEST['danioHabilidad2'];
                $nombreHabilidad3 = $_REQUEST['nombreHabilidad3'];
                $danioHabilidad3 = $_REQUEST['danioHabilidad3'];
                $nombreHabilidad4 = $_REQUEST['nombreHabilidad4'];
                $danioHabilidad4 = $_REQUEST['danioHabilidad4'];


                ApiController::realizarRegistroPokemon($nombre, $especie, $preevolucion,$evolucion,$tipo, $imagen, $altura, $peso, $vida, $puntosSalud, $nombreHabilidad1, $danioHabilidad1, $nombreHabilidad2, $danioHabilidad2, $nombreHabilidad3, $danioHabilidad3, $nombreHabilidad4, $danioHabilidad4);
            }

            if(strcmp($_REQUEST["accion"], "verPokemon") == 0) {
                $nombre =  $_REQUEST['nombre'];

                ApiController::verPokemon($nombre);
            }
            

        } else {
            //Mostrar inicio
            ApiController::mostrarInicio();
        }
    }





?>