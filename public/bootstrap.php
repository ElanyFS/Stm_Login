<?php 

require_once('../vendor/autoload.php');

//Carrega as variaveis do .env
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();