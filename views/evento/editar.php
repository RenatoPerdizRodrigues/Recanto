<?php
    include "../../config.php";
    $conn = new Connection("localhost", "keiko", "renato", "pass");
    $busca = new ServiceEvento($conn);
    $resultado = $busca->buscar($_GET['user'], "id");

    $cliente = new ServiceCliente($conn);
    $resultadocli = $cliente->buscar($resultado[0]['clienteid'], "id");

    $title = "Editar Evento";
    include ROOT."core/header.php";
?>
        <form method="POST" action="../../scripts/evento/editar.php">
            <input hidden type="number" name="id" value="<?= $_GET['user'] ?>">
            <label>Data</label>
            <input type="date" name="data" value="<?= $resultado[0]['datas'] ?>"><br>
            <label>Hora</label>
            <input type="time" name="hora" value="<?= $resultado[0]['hora'] ?>"><br>           
            <input type="submit" value="Editar">
        </form>
<?php
    include ROOT."core/footer.php";
?>