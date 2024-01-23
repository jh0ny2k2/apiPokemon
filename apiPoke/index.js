const mongoose = require("mongoose");
const app = require("./app");

const port = 3000;
const ip = '3.232.243.1';

const urlMongo = "mongodb+srv://root:toor@apipokemon.at78ea7.mongodb.net/?retryWrites=true&w=majority";

// Función para conectar a la base de datos
mongoose.connect(urlMongo);

app.listen(port, ip,  () => {
    console.log(`API Pokémon corriendo en http://${ip}:${port}`);
})