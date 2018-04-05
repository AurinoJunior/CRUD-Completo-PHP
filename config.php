<?php
$dsn = "mysql:dbname=crud; host=localhost";
$dbuser = "aurino";
$dbpass ="";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
    echo "ERRO ".$e->getMessage();
}
