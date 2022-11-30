<?php

use Symfony\Component\HttpFoundation\Request;

    return [

        // La requête
        Request::class => Request::createFromGlobals(),


        // Liste des contrôleurs
        'controllers' => [


        ],


        //  Le router
        DI\create(Router::class)->constructor(DI\get(Request::class), DI\get('controller')),
        
    ];
