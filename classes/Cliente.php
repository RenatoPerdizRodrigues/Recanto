<?php
    class Cliente{
        private $nome;
        private $sobrenome;
        private $datanasc;
        private $rg;

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setDatanasc($datanasc){
            $this->datanasc = $datanasc;
        }

        public function getDatanasc(){
            return $this->datanasc;
        }

        public function setRg($rg){
            $this->rg = $rg;
        }

        public function getRg(){
            return $this->rg;
        }

        public function __construct($nome, $sobrenome, $datanasc, $rg){
            $this->setNome($nome);
            $this->setSobrenome($sobrenome);
            $this->setDatanasc($datanasc);
            $this->setRg($rg);
        }
    }
?>