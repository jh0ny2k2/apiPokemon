<?php

    namespace Pokemon\vistas;

    class VistaAñadirPokemon {

        public static function render() {

            // INCLUIMOS LA CABECERA 
            include "Cabecera.php";

?>
        <div class="container">
        <h3 class="text-danger mt-5 mb-4">AÑADIR POKEMON</h3>
        <form action="index.php" method="post" class="mt-2">
                <div>
                    <label for="nombre">NOMBRE:</label><br>
                    <input class="col-6 mt-3" type="text" name="nombre" id="nombre" required />
                </div>
                <br/>
                <div>
                    <label for="especie">ESPECIE:</label><br>
                    <input class="col-6 mt-3" type="text" name="especie" id="especie" required />
                </div>
                <br/>
                <div>
                    <label for="preevolucion">PRE-EVOLUCIÓN:</label><br>
                    <input class="col-6 mt-3" type="text" name="preevolucion" id="preevolucion"/>
                </div>
                <br>
                <div>
                    <label for="evolucion">EVOLUCIÓN:</label><br>
                    <input class="col-6 mt-3" type="text" name="evolucion" id="evolucion"/>
                </div>
                <br/>
                <div>
                    <label for="tipo">TIPO:</label> <br>
                    <select class="col-6 text-center mt-3" name="tipo" id="tipo" multiple aria-label="Multiple select example" required >
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
                </div>
                <br/>
                <div>
                    <label for="imagen">IMAGEN:</label><br>
                    <input class="col-6 mt-3" type="file" name="imagen" id="imagen" required/>
                </div>
                <br>
                <div>
                    <label for="altura">ALTURA:</label><br>
                    <input class="col-6 mt-3" type="number" name="altura" id="altura" required/>
                </div>
                <br>
                <div>
                    <label for="peso">PESO:</label><br>
                    <input class="col-6 mt-3" type="number" name="peso" id="peso" required/>
                </div>
                <br>
                <div>
                    <label for="vida">VIDA:</label><br>
                    <input class="col-6 mt-3" type="number" name="vida" id="vida" required/>
                </div>
                <br>
                <div>
                    <label for="puntos">PUNTOS SALUD JUEGO:</label><br>
                    <input class="col-6 mt-3" type="number" name="puntos" id="puntos" required/>
                </div>
                <br>
                <div>
                    <label for="imagen">HABILIDADES:</label><br><hr class="col-6">
                    <label for="habilidad1">Habilidad 1:</label> <br>
                    <div class="ms-5">
                        Nombre: <br> <input class="col-6 mt-3" type="text" name="nombreHabilidad1" id="nombreHabilidad1" required/> <br>
                        Daño: <br> <input class="col-6 mt-3" type="number" name="danioHabilidad1" id="danioHabilidad1" required/>
                    </div><hr class="col-6">
                    <label for="habilidad1">Habilidad 2:</label> <br>
                    <div class="ms-5">
                        Nombre: <br> <input class="col-6 mt-3" type="text" name="nombreHabilidad2" id="nombreHabilidad2" required/> <br>
                        Daño: <br> <input class="col-6 mt-3" type="number" name="danioHabilidad2" id="danioHabilidad2" required/>
                    </div><hr class="col-6">
                    <label for="habilidad1">Habilidad 3:</label> <br>
                    <div class="ms-5">
                        Nombre: <br> <input class="col-6 mt-3" type="text" name="nombreHabilidad3" id="nombreHabilidad3" required/> <br>
                        Daño: <br> <input class="col-6 mt-3" type="number" name="danioHabilidad3" id="danioHabilidad3" required/>
                    </div><hr class="col-6">
                    <label for="habilidad1">Habilidad 4:</label> <br>
                    <div class="ms-5">
                        Nombre: <br> <input class="col-6 mt-3" type="text" name="nombreHabilidad4" id="nombreHabilidad4" required/> <br>
                        Daño: <br> <input class="col-6 mt-3" type="number" name="danioHabilidad4" id="danioHabilidad4" required/>
                    </div>
                </div>
                <br/>
                <div class="col-6 text-end mt-3">
                    <button type="reset" class="btn btn-danger">Resetear Formularios</button>
                    <button type="submit" class="btn btn-danger" name="accion" value="enviarRegistroPokemon">Enviar</button>
                </div> 
                
            </form>
        </div>
<?php
        }
    }
?>