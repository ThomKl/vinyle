<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController {


    /**
    * @Route("/article/{nomProduit}")
    */
    public function pageProduct($nomProduit) {
        return new Response("<html><body>page produit : " . $nomProduit . "</body></html>");
    }

}
