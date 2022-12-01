<?php
declare(strict_types=1);


    /**
     * ----------------------------------------------------
     * Le controleur frontal
     * 
     * Ses rôles : 
     *      - Réaliser le "bootsrapping" de l'application
     *          - Chargement de l'autoloader de composer
     *          - Chargement des constantes
     *          - Chargement des variables d'environnement
     *          - Chargement du conteneur de dépendances
     * 
     *      - Créer une nouvelle instance du noyau (kernel)
     *          - En lui passant le conteneur en paramètres
     *      - Demander au noyau de soumettre la requête du client au système
     *      - Récupérer la réponse correspondante
     *      - Envoyer cette réponse au client 
     * ----------------------------------------------------
     */

use App\Kernel;

    //  Boostrapping de l'application 
    require __DIR__ . "/../config/bootstrap.php";

    
    //  Créer une nouvelle instance du noyau (kernel)
    $kernel = new App\Kernel($container);


    // Demander au noyau de soumettre la requête du client au système
    // Récupérer la réponse correspondante
    $response = $kernel->handleRequest();


    // Le contrôleur frontal envoie la réponse au client 
    $response->send();