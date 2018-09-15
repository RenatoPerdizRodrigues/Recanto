<?php
    class Connection{
        private $hostname;
        private $dbname;
        private $username;
        private $pass;

        public function __construct($hostname, $dbname, $username, $pass){
            $this->hostname = $hostname;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->pass = $pass;
        }

        public function connect(){
            try {
                return new \PDO("mysql:host=".$this->hostname.";dbname=".$this->dbname, $this->username, $this->pass);
            } catch (\PDOException $e){
                echo "Erro: ".$e->getMessage()."; Número: ".$e->getCode();
            }
        }
    }
?>