<?php
    include "../../config.php";

    $tipo = $_POST['tipo'] ? $_POST['tipo'] : null;
    $valor = $_POST['valor'] ? $_POST['valor'] : null;

    if ($tipo != null && $valor != null){
        if ($tipo == "nome"){
            $conn = new Connection("localhost", "keiko", "renato", "pass");
            $busca = new ServiceEvento($conn);
            $busca->buscar($valor, $tipo);
        } elseif ($tipo == "data"){
            echo "oi";
            $valor = explode("/", $valor);
            $conn = new Connection("localhost", "keiko", "renato", "pass");
            $busca = new ServiceEvento($conn);
            $busca->buscar($valor, $tipo);
        }
    }
?>