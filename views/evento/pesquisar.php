<?php
    include "../../config.php";
    $title = "Pesquisar Cliente";
    include ROOT."core/header.php";
 ?>
        <form method="POST" action="../../scripts/evento/pesquisar.php">
            <label>Tipo de Pesquisa</label>
            <select name="tipo">
                <option value="nome">Nome</option>
                <option value="data">Mês e Ano</option>
            </select>
            <input type="text" name="valor"><br>
            <small>Para mês e ano, usar formato "MM/YYYY"</small><br>
            <input type="submit" value="Pesquisar">
        </form>
<?php
    include ROOT."core/footer.php";
?>