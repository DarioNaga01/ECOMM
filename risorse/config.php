<?php

defined('DS') ? null:define('DS', DIRECTORY_SEPARATOR);
defined('FRONT_END') ? null:define('FRONT_END', __DIR__ . DS . 'templates/front');
defined('BACK_END') ? null:define('BACK_END', __DIR__ . DS . 'templates/back');
#echo FRONT_END;
#echo Back_END;

//configurare database

define('DB_HOST', 'localhost');
define('DB_UTENTE', 'root');
define('DB_PASSWORD','root');
define('DB_NOME', 'negozio');

$connessione = new mysqli(DB_HOST, DB_UTENTE, DB_PASSWORD, DB_NOME);

if($connessione->connect_error){
     echo 'non sei connesso';
}else{
    #echo 'sei connesso';
}

require_once('funzioni.php');