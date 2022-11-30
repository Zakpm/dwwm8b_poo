<?php
namespace App\Routing;

class Router implements RouterInterface {

      /**
         * Cette méthode permet de :
         *      - récupérer les contrôleurs,
         *      - En extraire les routes
         *      - Strocker dans un tableau à routes (armoire)
         *
         * @param array $controllers
         * 
         * @return void
         */
        public function addRoutes(array $controllers) : void {

        }

        /**
         * Cette méthode du routeur lui permet : 
         *     - De s'exécuter 
         *     - Et de retourner la réponse correspondante qui peut être
         *          -- Soit un tableau dans le cas où les routes match
         *          -- null dans le cas où aucune route n'a maatché 
         * 
         * 
         *
         * @return array|null
         */
        public function run() : ?array {

            dd("hello");
        }


}