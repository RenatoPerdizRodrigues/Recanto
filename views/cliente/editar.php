<?php
    include "../../config.php";
    $conn = new Connection("localhost", "keiko", "renato", "pass");
    $busca = new ServiceCliente($conn);
    $resultado = $busca->buscar($_GET['user'], "id");
    $title = "Editar Cliente";
    include ROOT."core/header.php";
?>
        <form method="POST" action="../../scripts/cliente/editar.php">
            <input hidden type="number" name="id" value="<?= $_GET['user'] ?>">
            <label>Nome</label>
            <input type="text" name="nome" value="<?= $resultado[0]['nome'] ?>"><br>
            <label>Sobrenome</label>
            <input type="text" name="sobrenome" value="<?= $resultado[0]['sobrenome'] ?>"><br>
            <label>Data de Nascimento</label>
            <input type="date" name="datanasc" value="<?= $resultado[0]['datanasc'] ?>"><br>
            <label>RG</label>
            <input type="text" name="rg" value="<?= $resultado[0]['rg'] ?>"><br><br>
            <input type="submit" value="Editar">
        </form>
</div>
        <hr>
        <p><a href="/keiko/index.php">Home</a><p>
        </div>
    </body>
</html>