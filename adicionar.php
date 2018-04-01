<head>
    <meta charset="utf-8">
    <title>Controle usuarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
include('config.php');
if(!empty($_POST['nome']) && isset($_POST['nome'])){
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);

    $sql = "insert into usuarios set nome='$nome', email='$email';";
    $pdo->query($sql);
    echo "<center> <h1>Usuario adicionado</h1> </center>";
    echo "<p><a href='index.php'> Voltar para a home </a></p>";
}else {
    echo "<center> <h2>Usuario nao adicionado</h2></center>";
    echo "<p><a href='index.php'> Voltar para a home </a></p>";
}
