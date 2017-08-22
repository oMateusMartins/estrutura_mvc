<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == "DEV"){
    define("BASE_URL", "http://localhost/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    // define("BASE_URL", "");
    // $config['dbname'] = 'estrutura_mvc';
    // $config['dbhost'] = 'localhost';
    // $config['dbuser'] = 'root';
    // $config['dbpass'] = '';
}

global $db;

try{
    $db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['dbhost'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>