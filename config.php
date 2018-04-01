<?php
$dsn = "mysql:dbname=teste; host=localhost";
$dbuser = "root";
$dbpass="";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "ERRO ".$e->getMessage();
}
