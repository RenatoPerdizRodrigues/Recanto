 <?php
    include "config.php";
    $_SESSION['cadastro'] = "Sucesso";
    $title = "Index";
    
    if (isset($_SESSION['cadastro'])){
        echo "<div class=\"mensagem\">".$_SESSION['cadastro']."</div>";
        $_SESSION['cadastro'] = null;
    }

    include ROOT."core/header.php";
?>


                <p><a href="views/cliente/cadastrar.php">Cadastrar Cliente</a></p>
                <p><a href="views/cliente/pesquisar.php">Pesquisar Cliente</a></p>
                <p><a href="views/evento/pesquisar.php">Pesquisar Evento</a></p>

<?php
    include ROOT."core/footer.php";
?>