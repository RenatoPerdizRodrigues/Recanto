<?php
    include "../../config.php";
    $title = "Pesquisar Cliente";
    include ROOT."core/header.php";
?>
        <table>
            <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Hora</th>
            </tr>
        <?php
            foreach($_SESSION['pesquisa'] as $key){
                echo "<tr>";
                echo "<td>".$key['nome']." ".$key['sobrenome']."</td>";
                echo "<td>".$key['datas']."</td>";
                echo "<td>".$key['hora']."</td>";
                echo "<td><a href=\"editar.php?user=".$key['id']."\">Editar</a> <br> <a href=\"../../scripts/evento/excluir.php?user=".$key['id']."\">Excluir</a> <br></td>";
                echo "</tr>";
            }
        ?>
        </table>
<?php
    include ROOT."core/footer.php";
?>