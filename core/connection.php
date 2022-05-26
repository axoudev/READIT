<?php
/* CREATION D'UNE INSTANCE PDO $connection */

$dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
$param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try{
    $connection = new PDO($dsn, USERNAME,USERPWD,$param);
}catch(PDOException $e){
    echo "Erreur !: ".$e->getMessage()."</br>";
    die();
}