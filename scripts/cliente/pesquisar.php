<?php
    include "../../config.php";
    $nome = $_POST['nome'] ? $_POST['nome'] : null;

    if ($nome != null){
        $conn = new Connection("localhost", "keiko", "renato", "pass");
        $busca = new ServiceCliente($conn);
        $busca->buscar($nome, "nome");
    }
?>