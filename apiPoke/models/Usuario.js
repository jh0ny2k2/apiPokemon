/**
 * const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const usuarioSchema = new mongoose.Schema({
    nombre: { 
        type: String, required: true 
    },
    apellido: {
        type: String, required: true
    },
});

const Usuario = mongoose.model('Usuario', usuarioSchema);
 */