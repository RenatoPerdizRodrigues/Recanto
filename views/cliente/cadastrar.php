<?php
    include "../../config.php";
    $title = "Cadastrar Cliente";
    include ROOT."core/header.php";
 ?>
                <form method="POST" action="../../scripts/cliente/cadastrar.php">
                    <label>Nome</label>
                    <input type="text" name="nome"><br>
                    <label>Sobrenome</label>
                    <input type="text" name="sobrenome"><br>
                    <label>Data de Nascimento</label>
                    <input type="date" name="datanasc"><br>
                    <label>RG</label>
                    <input type="text" name="rg"><br><br>
                    <input type="submit" value="Cadastrar">
                </form>
<?php
    include ROOT."core/footer.php";
?>