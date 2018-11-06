<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;


class DefaultController extends AbstractController {


    /**Permet de déclarer une route sans passer par le fichier routes.yml **/
    /**
    * @Route("/index")
    */

    public function index() {
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->getAllProductsInStock();
        
        return $this->render(
            'product/index.html.twig',
            array('products' => $products)
        );
    }

}
