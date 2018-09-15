<?php
    session_start();
    define("ROOT", __DIR__."/");
    
    require ROOT."scripts/helpers.php";
    require ROOT."classes/Connection.php";
    require ROOT."classes/Cliente.php";
    require ROOT."classes/ServiceCliente.php";
    require ROOT."classes/Evento.php";
    require ROOT."classes/ServiceEvento.php";
?>