<head>
    <meta charset="utf-8">
    <title>Controle usuarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
include('config.php');
$id = addslashes($_GET['id']);
$sql = "delete from usuarios where id =$id;";
$pdo->query($sql);

header("Location: index.php");
