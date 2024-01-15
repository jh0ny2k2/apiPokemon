const express = require("express");
const body = require('body-parser');
//const jwt = require('jsonwebtoken');
const app = express();

app.use(body.json());

app.use(express.json());
app.use(express.urlencoded({ extended: true}));

// CARGAR RUTAS
const pokemonRoutes = require("./routes/pokemonRoutes");
//const authRoutes = require("./routes/authRoutes");

// RUTAS BASE
app.use("/api", pokemonRoutes);
//app.use("/auth", authRoutes);

module.exports = app;