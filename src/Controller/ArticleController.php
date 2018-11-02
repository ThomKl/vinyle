<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController {
    /**
    * @Route("/")
    */
    
    public function homepage() {
        return new Response('lol');
    }
    
}
    