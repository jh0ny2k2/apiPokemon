<?php

    namespace Pokemon\vistas;

    class VistaCategorias
    {

        public static function render($pokemons)
        {

            include("cabecera.php");

            echo '<div class="container ">';

?>
        <form action="index.php" method="post" class="mt-2">
            <select class="form-select me-4" name="tipo" id="tipo">
                <option value="Acero">Elige Opción</option>
                <option value="Acero">Acero</option>
                <option value="Agua">Agua</option>
                <option value="Bicho">Bicho</option>
                <option value="Dragon">Dragón</option>
                <option value="Electrico">Eléctrico</option>
                <option value="Fantasma">Fantasma</option>
                <option value="Fuego">Fuego</option>
                <option value="Hada">Hada</option>
                <option value="Hielo">Hielo</option>
                <option value="Lucha">Lucha</option>
                <option value="Normal">Normal</option>
                <option value="Planta">Planta</option>
                <option value="Psiquico">Psiquico</option>
                <option value="Roca">Roca</option>
                <option value="Siniestro">Siniestro</option>
                <option value="Tierra">Tierra</option>
                <option value="Volador">Volador</option>
            </select>
            <button type="submit" name="accion" value="buscarCategoria" class="btn btn-danger mt-2">Buscar</button>
        </form>
<?php

        if (isset($pokemons)) {
                $api = json_decode($pokemons);
                echo '  <div class="row ms-5">';
                foreach ($api as $pokemon) {
                echo '<div class="card m-3 text-center" style="width: 18rem;">';
                echo '<img class="card-img-top" src="' . $pokemon->imagen . '" alt="Imagen Pokemon">';
                echo '  <div class="card-body">';
                echo '      <h5 class="card-text text-uppercase">' . $pokemon->nombre . '</h5>';
                if (!isset($pokemon->tipo[1])) {
                    echo '      <p class="card-text">' . $pokemon->tipo[0] . '</p>';
                } else {
                    echo '      <p class="card-text">' . $pokemon->tipo[0] . ' | ' . $pokemon->tipo[1] . '</p>';
                }
                echo '      <a href="index.php?accion=verPokemon&nombre=' . $pokemon->nombre . '" class="btn btn-danger">Ver Más</a>';
                echo '  </div>';
                echo '</div>';
            }
            echo '  </div>';
            echo '</div>';
        }
    }
}


?>