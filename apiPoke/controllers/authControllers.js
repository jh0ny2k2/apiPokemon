/**
 * const usuario = require("../models/Usuario");
const jwt = require('jsonwebtoken');
const bcrypt = require('bcrypt');

async function LogInUser(req,res){
    try {
        const { username, password } = req.body;
        const user = await usuario.findOne({ username });
    
        if (!user || !await bcrypt.compare(password, user.password)) {
            return res.status(401).send({ 
                "msg": 'Inicio de sesión incorrecto' 
            });
        }
        
        const token = jwt.sign({ userId: user._id }, 'clave', { expiresIn: '48h' });
        res.status(201).send({ token });
    } catch (error) {
        res.status(500).json({ error: 'Error al autenticar el usuario' });
    }
}

async function RegisterUser(req,res){
    try {
        const { username, password } = req.body;
        const cifrarPassword = await bcrypt.hash(password, 10);
        const user = new User({ 
            username, 
            password: cifrarPassword 
        });
        await user.save();

        res.status(201).send({ "msg": 'Nuevo usuario registrado' });
    } catch (error) {
        res.status(500).send(error);
    }
}

module.exports = {
    LogInUser,
    RegisterUser,
}
 */