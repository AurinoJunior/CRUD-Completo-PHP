<?php include('config.php') ?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Controle usuarios</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <table width="100%" border="0px">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            <?php
                $sql = "select * from usuarios";
                $sql = $pdo->query($sql);
                if($sql->rowCount() > 0):
                    foreach($sql->fetchAll() as $users):
            ?>
            <tr align="center">
                <td><?= $users['nome'] ?></td>
                <td><?= $users['email'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $users['id'] ?>">
                        Editar </a> ||
                    <a href="excluir.php?id=<?=$users['id']?>">
                        Excluir</a>
                </td>
            </tr>
            <?php
                    endforeach;
                endif;
             ?>
        </table>
        <br><br><br>
        <a href="form.html">
            <button type="submit" href="form.html">
                Cadastrar novo usuarios
            </button>
        </a>
    </body>
</html>
