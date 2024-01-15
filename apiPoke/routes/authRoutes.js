/**
 * const express = require("express");
const authControllers = require("../controllers/authControllers");
const authMiddleware = require("../middleware/authenticationMiddleware");
const usuario = express.Router();

usuario.post("register", authControllers.RegisterUser);
usuario.post("/login", authControllers.LogInUser);

usuario.get("/protected", authMiddleware, (req,res) => {
    res.status(201).send("msg", "aceso permitido");
})

module.exports = usuario;
 */