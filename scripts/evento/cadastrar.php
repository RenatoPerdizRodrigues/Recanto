<?php
    require "../../config.php";

    $id = $_POST['id'] ? $_POST['id'] : null;
    $data = $_POST['data'] ? $_POST['data'] : null;
    $hora = $_POST['hora'] ? $_POST['hora'] : null;

    if ($id != null && $data != null && $hora != null){
        $conn = new Connection("localhost", "keiko", "renato", "pass");
        $evento = new Evento($id, $data, $hora);
        $cadastrar = new ServiceEvento($conn, $evento);
        $cadastrar->cadastrar();
    }
?>