/**
 * const jwt = require("jsonwebtoken");
const secretKey = process.env.JWT_SECRET || 'clave';

async function authenticatedToken (res, req, next) {
    const token = req.header('Authorization');

    if(!token) {
        return res.status(401).send({ "msg" : "No se ha encontrado el token"});
    }

    jwt.verify(token, secretKey, (err, user) => {
        if (err) {
            return res.status(403).send({"msg": "token invalido"});
        }

        req.user = user;
        next();
    });
};

module.exports = {
    authenticatedToken,
}

 */