<?php
    require "../../config.php";

    $id = $_GET['user'] ? $_GET['user'] : null;

    if ($id != null){
        $conn = new Connection("localhost", "keiko", "renato", "pass");
        $exclusao = new ServiceEvento($conn);
        $exclusao->excluir($id);
    }
?>