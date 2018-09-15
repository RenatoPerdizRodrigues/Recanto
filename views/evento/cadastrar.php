<?php
    include "../../config.php";
    $conn = new Connection("localhost", "keiko", "renato", "pass");
    $busca = new ServiceCliente($conn);
    $resultado = $busca->buscar($_GET['user'], "id");
    $title = "Cadastrar Evento";
    include ROOT."core/header.php";
?>
        <form method="POST" action="../../scripts/evento/cadastrar.php">
            <input hidden type="number" name="id" value="<?= $_GET['user'] ?>">
            <label>Data</label>
            <input type="date" name="data"><br>
            <label>Hora</label>
            <input type="time" name="hora"><br>           
            <input type="submit" value="Cadastrar">
        </form>
<?php
    include ROOT."core/footer.php";
?>