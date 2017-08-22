<?php
/* 
* Arquivo responsavel pela conexao com o Banco de Dados
*
* Conecta com a base de dados de acordo com o ambiente. Seja ela local ou de produção.
* Configuração de conexão feita de acordo com o definido no arquivo e constante "environment".
*
* @autor: Mateus Martins
* @autor_url: mateus.a.n.martins@gmail.com
* @package: estrutura_mvc
*/

require 'environment.php';

$config = array();

if(ENVIRONMENT == "DEV"){
    //Conexão Dev
    define("BASE_URL", "http://localhost/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    //Conexão Produção
    define("BASE_URL", "");
    $config['dbname'] = 'estrutura_mvc';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;

try{
    $db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['dbhost'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>