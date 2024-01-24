const express = require("express");
const pokemonControllers = require("../controllers/pokemonControllers");
const api = express.Router();
const multer = require('multer');
const upload = multer({ dest: 'images/' });

api.post("/pokemon", pokemonControllers.createPokemon); // CREAR POKEMON
api.get("/pokemon", pokemonControllers.getPokedex); // BUSCAR POKEMONS
api.get("/pokemon/buscar/:nombre", pokemonControllers.getPokemonNombre); // BUSCAR POKEMON POR NOMBRE
api.get("/pokemon/:id", pokemonControllers.getPokemonId); // BUSCAR POKEMON POR ID
api.get("/pokemon/tipo/:tipo", pokemonControllers.getPokemonTipo); // BUSCAR POKEMON POR ID
api.delete("/pokemon/:id", pokemonControllers.deletePokemon); // ELIMINAR POKEMON POR ID
api.put("/pokemon/:id/ataque/:puntosAtaque", pokemonControllers.deletePokemon); // ACTUALIZAR VIDA POKEMON POR ID



module.exports = api;