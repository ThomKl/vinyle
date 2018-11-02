<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController {
   
    /**Permet de déclarer une route sans passer par le fichier routes.yml **/
    /**
    * @Route("/")
    */
    
    public function homepage() {
        return new Response('lol');
    }
}
    