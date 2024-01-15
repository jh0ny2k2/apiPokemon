<?php

    namespace Pokemon\vistas;
    
    class VistaInicio  {

        public static function render() {

            include("cabecera.php");

            echo '<div class="container">';
            echo '<a href=index.php?accion=visualizarAddPokemon><button class="btn btn-danger">Añadir Pokemon</button></a>';
            echo '</div>';
        }

    }


?>