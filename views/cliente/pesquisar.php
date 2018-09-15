<?php
    include "../../config.php";
    $title = "Pesquisar Cliente";
    include ROOT."core/header.php";
 ?>
        <form method="POST" action="../../scripts/cliente/pesquisar.php">
            <label>Nome</label>
            <input type="text" name="nome"><br>
            <input type="submit" value="Pesquisar">
        </form>
<?php
    include ROOT."core/footer.php";
?>