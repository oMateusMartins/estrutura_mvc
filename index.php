<?php
session_start();
require 'config.php';

/* 
* Função Autoload
* Funçao responsável por carregar as classes dinamicamente no sistema.
* 
* @autor: Mateus Martins <mateus.a.n.martins@gmail.com>
* @package: estrutura_mvc
*/
spl_autoload_register(function($class){
    if(file_exists('controllers/'.$class.'.php')){
        require 'controllers/'.$class.'.php';
    }
    else if(file_exists('model/'.$class.'.php')){
        require 'model/'.$class.'.php';
    }
    else if(file_exists('core/'.$class.'.php')){
        require 'core/'.$class.'.php';
    }
});

$core = new Core();
$core->run();