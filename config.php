<?php
$dsn = "mysql:dbname=teste; host=localhost:3306";
$dbuser = "dev";
$dbpass = "dev123";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
    echo "ERRO ".$e->getMessage();
}
