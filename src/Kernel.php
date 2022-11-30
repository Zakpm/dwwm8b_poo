<?php 
namespace App;

use App\Zinc\HttpKernel\HttpKernel;
use App\Zinc\Trait\ChangeTimeZone;
use Psr\Container\ContainerInterface;


/**
 * -----------------------------------------------------
 * Kernel
 * 
 * Le noyau
 * 
 * Ses rôles : 
 *      - Récupérer les dépendances du conteneur
 *      - Demander au routeur de vérifier si l'application attend la visite de la requête du client 
 *        C'est à dire vérifier si la requête de l'url match avec l'une des routes 
 *        dont l'application attend la réception
 *      - Récupere la réponse du routeur 
 *          -- Si la réponse est positive :
 *              --- Demander au contrôleur en charge de la requête de générer
 *              --- Puis, de lui retourner la réponse correspondante 
 *          -- Dans le cas contraire, 
 *              --- DEmnader au contôleur chargé de gérer les erreurs de s'activer
 *              --- Puis, retourner au client la réponse correspondante 
 *      - Retourner cette réponse au contrôleur frontal
 * 
 * @version 1.0.0
 * @author Zakaryya PAPA MOHAMED <zakaryyapm@outlook.fr>          
 * -----------------------------------------------------
 */


class Kernel extends HttpKernel {

   
    use ChangeTimeZone;

    public function __construct(ContainerInterface $container)
    {
      $this->changeTimeZone("Europe/Paris");
       parent::__construct($container);
    }

   
}
