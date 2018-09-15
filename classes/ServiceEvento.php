<?php
    class ServiceEvento{
        private $db;
        private $evento;

        public function __construct($db, $evento = null){
            $this->db = $db->connect();
            $this->evento = $evento;
        }

        public function cadastrar(){
            $query = "INSERT INTO evento(clienteid, datas, hora) VALUES (:clienteid, :datas, :hora)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":clienteid", $this->evento->getCliente());
            $stmt->bindValue(":datas", $this->evento->getData());
            $stmt->bindValue(":hora", $this->evento->getHora());

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
                $query = "SELECT evento.id, cliente.nome, cliente.sobrenome, evento.datas, evento.hora FROM evento CROSS JOIN cliente ON evento.clienteid = cliente.id WHERE cliente.nome = :nome;";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(":nome", $conteudo);
    
                if($stmt->execute()){
                    $_SESSION['pesquisa'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    header("Location: ../../views/evento/visualizar.php");
                } else {
                    $_SESSION['cadastro'] = "Fracasso";
                    header("Location: ../../index.php");
                }
            } elseif ($tipo == "id"){
                $query = "SELECT * FROM evento WHERE id = :id";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(":id", $conteudo);
    
                if($stmt->execute()){
                    return $_SESSION['pesquisa'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $_SESSION['cadastro'] = "Fracasso";
                    header("Location: ../../index.php");
                }
            } elseif ($tipo == "data"){
                //$query = "SELECT * FROM evento WHERE month(datas) = :mes AND year(datas) = :ano";
                $query = "SELECT evento.id, cliente.nome, cliente.sobrenome, evento.datas, evento.hora FROM evento CROSS JOIN cliente ON evento.clienteid = cliente.id WHERE month(evento.datas) = :mes AND year(evento.datas) = :ano";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(":mes", $conteudo[0]);
                $stmt->bindValue(":ano", $conteudo[1]);

                if($stmt->execute()){
                    $_SESSION['pesquisa'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    header("Location: ../../views/evento/visualizar.php");
                } else {
                    $_SESSION['cadastro'] = "Fracasso";
                    header("Location: ../../index.php");
                }
            }
        }

        public function editar($id){
            $query = "UPDATE evento SET datas = :datas, hora = :hora WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":datas", $this->evento->getData());
            $stmt->bindValue(":hora", $this->evento->getHora());
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
            $query = "DELETE FROM evento WHERE id = :id";
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