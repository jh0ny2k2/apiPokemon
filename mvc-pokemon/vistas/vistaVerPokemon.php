<?php

    namespace Pokemon\vistas;
    
    class VistaVerPokemon  {

        public static function render($pokemons) {

            include("cabecera.php");

            echo '<div class="container ">';
            
            $api = json_decode($pokemons);
            
            echo '  <div class="row ">';
                foreach ($api as $pokemon) {
                    echo '<a href=index.php?accion=borrarPokemon&id='.$pokemon -> _id.'><button class="btn btn-danger mb-3">Eliminar Pokemon</button></a>';
                    echo '<img class="" src="'.$pokemon -> imagen.'" alt="Imagen Pokemon">';
                    echo '      <p class="card-text text-uppercase">Nombre: ' . $pokemon->nombre . '</p>'; 
                    echo '      <p class="card-text text-uppercase">Evolucion: ' . $pokemon->evolucion . '</p>'; 
                    echo '      <p class="card-text text-uppercase">preevolucion: ' . $pokemon->preevolucion . '</p>'; 
                    echo '      <p class="card-text text-uppercase">especie: ' . $pokemon->especie . '</p>'; 
                    echo '      <p class="card-text text-uppercase">altura: ' . $pokemon->altura . '</p>'; 
                    echo '      <p class="card-text text-uppercase">peso: ' . $pokemon->peso . '</p>'; 
                    echo '      <p class="card-text text-uppercase">vida: ' . $pokemon->vida . '</p>'; 
                    if (!isset($pokemon -> tipo[1])) {
                        echo '      <p class="card-text">TIPO: '. $pokemon -> tipo[0].'</p>';
                    } else {
                        echo '      <p class="card-text">TIPO: '. $pokemon -> tipo[0].' | '. $pokemon -> tipo[1].'</p>';
                    }
                    
                    

                }
            echo '  </div>';
            echo '<br><br><a href=index.php?accion=inicio><button class="btn btn-danger">Volver Atrás</button></a>';
            echo '</div>';
        }

    }


?>