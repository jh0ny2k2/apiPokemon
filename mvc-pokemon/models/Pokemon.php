<?php 

    namespace Pokemon\models;

    class Pokemon {

        private $nombre;
        private $especie;
        private $preevolucion;
        private $evolucion;
        private $tipo = array();
        private $imagen;
        private $altura;
        private $peso;
        private $vida;
        private $puntosSaludJuego;
        private $habilidades = array();

        public function __construct($nombre = "", $especie = "", $preevolucion="", $evolucion="", $tipo="", $imagen="",$altura ="", $puntosSaludJuego="", $habilidades="") {
            $this -> nombre = $nombre;
            $this -> especie = $especie;
            $this -> preevolucion = $preevolucion;
            $this -> evolucion = $evolucion;
            $this -> tipo = $tipo;
            $this -> imagen = "img/".$imagen.".png";

            $this -> puntosSaludJuego = $puntosSaludJuego;
            $this -> habilidades = $habilidades;
        }


        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of especie
         */ 
        public function getEspecie()
        {
                return $this->especie;
        }

        /**
         * Set the value of especie
         *
         * @return  self
         */ 
        public function setEspecie($especie)
        {
                $this->especie = $especie;

                return $this;
        }

        /**
         * Get the value of preevolucion
         */ 
        public function getPreevolucion()
        {
                return $this->preevolucion;
        }

        /**
         * Set the value of preevolucion
         *
         * @return  self
         */ 
        public function setPreevolucion($preevolucion)
        {
                $this->preevolucion = $preevolucion;

                return $this;
        }

        /**
         * Get the value of evolucion
         */ 
        public function getEvolucion()
        {
                return $this->evolucion;
        }

        /**
         * Set the value of evolucion
         *
         * @return  self
         */ 
        public function setEvolucion($evolucion)
        {
                $this->evolucion = $evolucion;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of puntosSaludJuego
         */ 
        public function getPuntosSaludJuego()
        {
                return $this->puntosSaludJuego;
        }

        /**
         * Set the value of puntosSaludJuego
         *
         * @return  self
         */ 
        public function setPuntosSaludJuego($puntosSaludJuego)
        {
                $this->puntosSaludJuego = $puntosSaludJuego;

                return $this;
        }

        /**
         * Get the value of habilidades
         */ 
        public function getHabilidades()
        {
                return $this->habilidades;
        }

        /**
         * Set the value of habilidades
         *
         * @return  self
         */ 
        public function setHabilidades($habilidades)
        {
                $this->habilidades = $habilidades;

                return $this;
        }
    }

?>