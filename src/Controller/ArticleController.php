<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController {
   
    /**Permet de déclarer une route sans passer par le fichier routes.yml **/
    /**
    * @Route("/")
    */
    
    public function homepage() {
        return new Response('homepage');
    }
   
    
    /**
    * @Route("/article/{nomProduit}")
    */
    public function pageProduct($nomProduit) {
        return new Response("<html><body>page produit : " . $nomProduit . "</body></html>");
    }

}
    