<?php

 // Variables scalaires
//  $jour = "Jeudi";
//  $c = 'a';
//  $chiffre = 3;
//  $nombre = 33;
//  $nombre_decimal = 33.33;
//  $test = false;


//  Variables composé 
// $tab = array("Mario", "Luigi", "Browser", "Pik");
// $tab = [
//     0 => "Mario",
//     1 => "Luigi",
//     2 => "Browser",
//     3 => "Pink",
//     3 => "Yoshi",
// ];

//  Les boucles 
// foreach ($tab as $key => $value) {
//     echo "A la clé $key, nous avons comme valeur : $value \n";
// }

// ---------------------------------------------------

//  Les objets
// class Robot {

//     // Propriétés encapsulées obligatoirement
//     private $marque = "Google";

//     // Méthodes
//     public function faireMenage(){

//     }

//     // Accesseurs ou getters
//     public function getMarque(){

//         return $this->marque;
//     }

//     // Mutateurs ou setters
//     public function setMarque($nouvelle_marque){

//         $this->marque = $nouvelle_marque;
//     }
// }

// $robot0 = new Robot;
// // echo $robot0->getMarque() . "\n";
// $robot0->setMarque("Alexa");
// echo $robot0->getMarque() . "\n";

// $robot1 = new Robot;
// echo $robot1->getMarque() . "\n";

// ---------------------------------------------------

interface TelephoneInterface {

    public function appeler();

    public function envoyerMessage();
}

abstract class Telephone implements TelephoneInterface {

    private $marque;
    private $couleur;

    // abstract function faireHello();

    public function appeler()
    {

    }

    public function envoyerMessage()
    {
        
    }


    public function getMarque(){

        return $this->marque;
    }
    
    public function setMarque($marque){

        $this->marque =  $marque;
    }

    public function getCouleur(){

        return $this->couleur;
    }
    
    public function setCouleur($couleur){

        $this->couleur=  $couleur;
    }
}

class Iphone extends Telephone {

    public function prendrePhotos()
    {

    }

    public function appeler()
    {

    }

    public function envoyerMessage()
    {
        
    }
    

    public function getMarque(){

        return $this->marque;
    }
    
    public function setMarque($marque){

        $this->marque =  $marque;
    }

    public function getCouleur(){

        return $this->couleur;
    }
    
    public function setCouleur($couleur){

        $this->couleur=  $couleur;
    }

}

class Samssung extends Telephone {

    public function prendreVideos()
    {

    }

    public function appeler()
    {

    }

    public function envoyerMessage()
    {
        
    }
    

    public function getMarque(){

        return $this->marque;
    }
    
    public function setMarque($marque){

        $this->marque =  $marque;
    }

    public function getCouleur(){

        return $this->couleur;
    }
    
    public function setCouleur($couleur){

        $this->couleur=  $couleur;
    }
    
}

class Huawei extends Telephone {

    public function appeler()
    {

    }

    public function envoyerMessage()
    {
        
    }
    

    public function getMarque(){

        return $this->marque;
    }
    
    public function setMarque($marque){

        $this->marque =  $marque;
    }

    public function getCouleur(){

        return $this->couleur;
    }
    
    public function setCouleur($couleur){

        $this->couleur=  $couleur;
    }
}