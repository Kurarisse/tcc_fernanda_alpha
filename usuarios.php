<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários cadastrados - Fernanda ZD Modas</title>
</head>
<body>
    <center>
        <h1>Lista dos usuários</h1>
        <hr>

        <table rules="all">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>SOBRENOME</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <th>LOGRADOURO</th>
                    <th>CPF</th>
                    <th>NÍVEL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql_consulta = $conexao->query("SELECT * FROM usuarios");
                    $total = mysqli_num_rows($sql_consulta);

                    while($dados = mysqli_fetch_array($sql_consulta)){
                        ?>
                        <tr>
                            <td><?= $dados[1] ?></td>
                            <td><?= $dados[2] ?></td>
                            <td><?= $dados[3] ?></td>
                            <td><?= $dados[4] ?></td>
                            <td><?= $dados[5] ?></td>
                            <td><?= $dados[6] ?></td>
                            <td><?= $dados[7] ?></td>
                            <!-- <td><a href="editar.php?codigo= <?= $dados[0]?>">&nbsp;Editar&nbsp;</a></td>
                            <td><a href="excluir.php?codigo= <?= $dados[0]?>">&nbsp;Excluir&nbsp;</a></td> -->
                        </tr>

                        <?php
                    }
                ?>
                        <tr>
                            <td colspan="7">
                                TOTAL DE REGISTROS: <?= $total ?>
                            </td>
                        </tr>
            </tbody>
        </table>
        <hr>

        <a href="insereProduto.html">Voltar</a><br>
        <a href="pdf.php">Imprimir</a>
    </center>
    
</body>
</html>