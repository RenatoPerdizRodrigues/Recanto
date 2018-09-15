<?php
    include "../../config.php";
    $title = "Visualizar Clientes";
    include ROOT."core/header.php";
?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>RG</th>
                <th>Ação</th>
            </tr>
        <?php
            foreach($_SESSION['pesquisa'] as $key){
                echo "<tr>";
                echo "<td>".$key['nome']."</td>";
                echo "<td>".$key['sobrenome']."</td>";
                echo "<td>".$key['datanasc']."</td>";
                echo "<td>".$key['rg']."</td>";
                echo "<td><a href=\"../evento/cadastrar.php?user=".$key['id']."\">Novo Evento</a> <br> <a href=\"editar.php?user=".$key['id']."\">Editar</a> <br> <a href=\"../../scripts/cliente/excluir.php?user=".$key['id']."\">Excluir</a> <br></td>";
                echo "</tr>";
            }
        ?>
        </table>
<?php
    include ROOT."core/footer.php";
?>
