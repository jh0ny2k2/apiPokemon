const Pokemon = require("../models/pokemon");
const multer = require("multer");
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, "images/");
  },
  filename: (req, file, cb) => {
    cb(null, file.originalname);
  },
});

const upload = multer({ storage: storage });


async function createPokemon(req, res) {
    const pokemon = new Pokemon();
    const params = req.body;

    pokemon.nombre = params.nombre;
    pokemon.especie = params.especie;
    pokemon.preevolucion = params.preevolucion;
    pokemon.evolucion = params.evolucion;
    pokemon.tipo = params.tipo;
    pokemon.imagen = params.imagen;
    pokemon.altura = params.altura;
    pokemon.peso = params.peso;
    pokemon.vida = params.vida;
    pokemon.puntosSaludJuego = params.puntosSaludJuego;
    pokemon.habilidades = params.habilidades;

    try {
        const guardadoPokemon = await pokemon.save();

        if(!guardadoPokemon) {
            res.status(400).send({ "msg": "no se ha guardado el pokemon"});
        } else {
            res.status(200).send({ "pokemon": guardadoPokemon});

        }
    } catch (error) {
        res.status(500).send(error)
    }
}

async function getPokedex(req,res){
    try {
        const pokemons = await Pokemon.find().sort('nombre');

        if(!pokemons) {
            res.status(400).send({ "msg": "Error al obtener los pokemon"});
        } else {
            res.status(200).send(pokemons);    
        }
    } catch (error) {
        res.status(500).send(error)
    }
}

async function getPokemonNombre (req, res) {
    const nombrePokemon = req.params.nombre

    try {
        const pokemons = await Pokemon.find({'nombre': nombrePokemon});

        if(!pokemons) {
            res.status(400).send({ "msg": "Error al obtener el pokemon"});
        } else {
            res.status(200).send(pokemons);    
        }
    } catch (error) {
        res.status(500).send(error)
    }
}

async function getPokemonId (req, res) {
    const pokemonId = req.params.id;

    try {
        const pokemons = await Pokemon.find({'_id': pokemonId});

        if(!pokemons) {
            res.status(400).send({ "msg": "Error al obtener el pokemon"});
        } else {
            res.status(200).send(pokemons);    
        }
    } catch (error) {
        res.status(500).send(error)
    }
}

async function getPokemonTipo (req, res) {
    const pokemonTipo = req.params.tipo;

    try {
        const pokemons = await Pokemon.find({'tipo': pokemonTipo});

        if(!pokemons) {
            res.status(400).send({ "msg": "Error al obtener el pokemon"});
        } else {
            res.status(200).send(pokemons);    
        }
    } catch (error) {
        res.status(500).send(error)
    }
}

async function deletePokemon (req, res) {
    const idPokemon = req.params.id;

    try {
        const pokemons = await Pokemon.findByIdAndDelete(idPokemon)
        
        if(!pokemons) {
            res.status(400).send({ "msg": "No existe ningún pokemon con este id"});
        } else {
            res.status(200).send(pokemons);    
        }
    } catch (error) {
        res.status(500).send(error)
    }
}

async function actualizarPokemon (req, res) {
    const idPokemon = req.params.id;
    const params = req.body;

    try {
        const pokemon = await Pokemon.findById(idPokemon);
        const poke = await Pokemon.findByIdAndUpdate(idPokemon, pokemon.vida - params);
        
        if(!poke) {
            res.status(400).send({ "msg": "No se ha podido actualizar la vida del pokemon"});
        } else {
            res.status(200).send({ "msg": "Vida actualizada"});    
        }
    } catch (error) {
        res.status(500).send(error)
    }
}


module.exports = {
    createPokemon,
    getPokedex,
    getPokemonNombre,
    getPokemonId,
    getPokemonTipo,
    deletePokemon,
    actualizarPokemon
}