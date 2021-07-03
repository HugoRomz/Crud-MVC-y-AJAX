<?php

    class Paciente{

        private $id_pa;
        private $nombre;
        private $fec_nac;
        private $correo;
        private $tel;

        function __construct($id_pa,$nombre,$fec_nac,$correo,$tel){

            $this->id_pa = $id_pa;
            $this->nombre = $nombre;
            $this->fec_nac = $fec_nac;
            $this->correo = $correo;
            $this->tel = $tel;
        }
        function getId_pa(){
            return $this->id_pa;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getFec_nac(){
            return $this->fec_nac;
        }
        function getCorreo(){
            return $this->correo;
        }
        function getTel(){
            return $this->tel;
        }
    }


?>