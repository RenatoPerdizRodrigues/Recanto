<?php
    class Evento{
        private $clienteid;
        private $data;
        private $hora;

        public function setCliente($clienteid){
            $this->clienteid = $clienteid;
        }

        public function getCliente(){
            return $this->clienteid;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function setHora($hora){
            $this->hora = $hora;
        }

        public function getHora(){
            return $this->hora;
        }

        public function __construct($clienteid = null, $data, $hora){
            $this->setCliente($clienteid);
            $this->setData($data);
            $this->setHora($hora);
        }
    }
?>