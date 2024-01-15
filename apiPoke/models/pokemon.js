const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const PokemonSchema = Schema({
    nombre: {
        type: String,
        required: true
    },
    especie: {
        type: String,
        required: true
    },
    preevolucion: {
        type: String,
        default: null
    },
    evolucion: {
        type: String,
        default: null
    },
    tipo: [
        {
            type: String
        }
    ],
    imagen: {
        type: String,
    },
    altura: {
        type: Number,
        required: true
    },
    peso: {
        type: Number,
        required: true
    },
    vida: {
        type: Number,
        required: true
    },
    puntosSaludJuego: {
        type: Number,
        required: false
    },
    habilidades: [
        {
            nombre: {
                type: String,
                required: true
            },
            danio: {
                type: Number,
                required: true
            }
        }
    ]
});


module.exports = mongoose.model("pokemon", PokemonSchema);