<?php
    class ServiceCliente{
        private $db;
        private $cliente;

        public function __construct($db, $cliente = null){
            $this->db = $db->connect();
            $this->cliente = $cliente;
        }

        public function cadastrar(){
            $query = "INSERT INTO cliente(nome, sobrenome, datanasc, rg) VALUES (:nome, :sobrenome, :datanasc, :rg)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":nome", $this->cliente->getNome());
            $stmt->bindValue(":sobrenome", $this->cliente->getSobrenome());
            $stmt->bindValue(":datanasc", $this->cliente->getDatanasc());
            $stmt->bindValue(":rg", $this->cliente->getRg());

            if($stmt->execute()){
                $_SESSION['cadastro'] = "Sucesso";
                header("Location: ../../index.php");
            } else {
                $_SESSION['cadastro'] = "Fracasso";
                header("Location: ../../index.php");
            }
        }

        public function buscar($conteudo, $tipo){
            if ($tipo == "nome"){
                $query = "SELECT * FROM cliente WHERE nome LIKE :nome";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(":nome", "%".$conteudo."%");
    
                if($stmt->execute()){
                    $_SESSION['pesquisa'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    header("Location: ../../views/cliente/visualizar.php");
                } else {
                    $_SESSION['cadastro'] = "Fracasso";
                    header("Location: ../../index.php");
                }
            } elseif ($tipo == "id"){
                $query = "SELECT * FROM cliente WHERE id = :id";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(":id", $conteudo);
    
                if($stmt->execute()){
                    return $_SESSION['pesquisa'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $_SESSION['cadastro'] = "Fracasso";
                    header("Location: ../../index.php");
                }
            }
        }

        public function editar($id){
            $query = "UPDATE cliente SET nome = :nome, sobrenome = :sobrenome, datanasc = :datanasc, rg = :rg WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":nome", $this->cliente->getNome());
            $stmt->bindValue(":sobrenome", $this->cliente->getSobrenome());
            $stmt->bindValue(":datanasc", $this->cliente->getDatanasc());
            $stmt->bindValue(":rg", $this->cliente->getRg());
            $stmt->bindValue(":id", $id);

            if($stmt->execute()){
                $_SESSION['cadastro'] = "Sucesso";
                header("Location: ../../index.php");
            } else {
                $_SESSION['cadastro'] = "Fracasso";
                header("Location: ../../index.php");
            }
        }

        public function excluir($id){
            $query = "DELETE FROM cliente WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":id", $id);

            if($stmt->execute()){
                $_SESSION['cadastro'] = "Sucesso";
                header("Location: ../../index.php");
            } else {
                $_SESSION['cadastro'] = "Fracasso";
                header("Location: ../../index.php");
            }
        }
    }
?>