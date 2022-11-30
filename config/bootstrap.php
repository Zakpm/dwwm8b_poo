<?php

// Chargmement de l'autoloader de composer 
require __DIR__ . "/../vendor/autoload.php";

// Chargement des constantes
require __DIR__ . "/constants.php";

// Chargment des variables d'envirnnement 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__)); 
$dotenv->load();

// Chargement du conteneur de dépendances 
$container = require __DIR__ . "/di/container.php";

