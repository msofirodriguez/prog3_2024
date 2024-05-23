<?php

    class Database{
        private $conexion=null;
        private $nombre="db_school";
        private $servidor="localhost";
        private $usuario="root";
        private $clave="#Promo2024";

        //conectar bd
        public function __construct(){
            $this->conexion= new mysqli($this->servidor, $this->usuario, $this->clave, $this->nombre);
            if ($this->conexion->connect_error){
                print "fallo la conexion:".$this->conexion->connect_error;
            }
        }

        //query mysql, ejecuta la consulta
        public function query ($sql){
            return $this->conexion->query($sql);
        }

        //cerrar BD
        public function closeDB(){
            //tarea
            $this-> close();
        }

    }


    ?>