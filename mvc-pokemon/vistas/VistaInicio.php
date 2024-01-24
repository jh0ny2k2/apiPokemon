<?php

    namespace Pokemon\vistas;
    
    class VistaInicio  {

        public static function render($pokemons) {

            include("cabecera.php");

            echo '<div class="container ">';
            echo '<a href=index.php?accion=visualizarAddPokemon><button class="btn btn-danger">Añadir Pokemon</button></a>';

            $api = json_decode($pokemons);
            echo '  <div class="row ms-5">';
                foreach ($api as $pokemon) {
                    echo '<div class="card m-3 text-center" style="width: 18rem;">';
                    echo '<img class="card-img-top" src="'.$pokemon -> imagen.'" alt="Imagen Pokemon">';
                    echo '  <div class="card-body">';
                    echo '      <h5 class="card-text text-uppercase">' . $pokemon->nombre . '</h5>'; 
                    if (!isset($pokemon -> tipo[1])) {
                        echo '      <p class="card-text">'. $pokemon -> tipo[0].'</p>';
                    } else {
                        echo '      <p class="card-text">'. $pokemon -> tipo[0].' | '. $pokemon -> tipo[1].'</p>';
                    }  
                    echo '      <a href="index.php?accion=verPokemon&nombre='.$pokemon -> nombre.'" class="btn btn-danger">Ver Más</a>';
                    echo '  </div>';
                    echo '</div>';
                }
            echo '  </div>';
            echo '</div>';
        }

    }


?>