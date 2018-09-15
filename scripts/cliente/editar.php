<?php
    require "../../config.php";

    $nome = $_POST['nome'] ? $_POST['nome'] : null;
    $sobrenome = $_POST['sobrenome'] ? $_POST['sobrenome'] : null;
    $datanasc = $_POST['datanasc'] ? $_POST['datanasc'] : null;
    $rg = $_POST['rg'] ? $_POST['rg'] : null;
    $id = $_POST['id'] ? $_POST['id'] : null;

    if ($nome != null && $sobrenome != null && $datanasc != null && $rg != null){
        $conn = new Connection("localhost", "keiko", "renato", "pass");
        $cliente = new Cliente($nome, $sobrenome, $datanasc, $rg);
        $cadastro = new ServiceCliente($conn, $cliente);
        $cadastro->editar($id);
    }
?>