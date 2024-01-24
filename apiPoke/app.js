const express = require("express");
const body = require('body-parser');
const multer = require('multer');
//const jwt = require('jsonwebtoken');
const app = express();

app.use(body.json());

app.use(express.json());
app.use(express.urlencoded({ extended: true}));

const almacenamiento = multer.memoryStorage(); // Puedes cambiar esto según tus necesidades
const subida = multer({ storage: almacenamiento });

app.post('/subirImagen', subida.single('imagen'), (req, res) => {
    // Accede a la imagen cargada en req.file.buffer
    // Puedes procesar la imagen o almacenarla según tus necesidades
  
    // Ejemplo: Imprimir la información de la imagen cargada
    console.log('Nombre del archivo:', req.file.originalname);
    console.log('Tipo de archivo:', req.file.mimetype);
    console.log('Tamaño del archivo:', req.file.size);
  
    // Responde con un mensaje de éxito
    res.json({ mensaje: 'Imagen cargada exitosamente' });
  });

// CARGAR RUTAS
const pokemonRoutes = require("./routes/pokemonRoutes");
//const authRoutes = require("./routes/authRoutes");

// RUTAS BASE
app.use("/api", pokemonRoutes);
//app.use("/auth", authRoutes);

module.exports = app;