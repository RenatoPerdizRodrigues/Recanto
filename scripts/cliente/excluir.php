<?php
    require "../../config.php";

    $id = $_GET['user'] ? $_GET['user'] : null;

    if ($id != null){
        $conn = new Connection("localhost", "keiko", "renato", "pass");
        $exclusao = new ServiceCliente($conn);
        $exclusao->excluir($id);
    }
?>