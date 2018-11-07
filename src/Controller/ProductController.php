<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Product;


class ProductController extends AbstractController
{
    /**
 * @Route("/product/{id}", name="product_show")
 */
    public function show($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);


        if (!$product) {
            throw $this->createNotFoundException(
                "Le produit n'existe pas pour cet id : " . $id
            );
        }
        return $this->render(
            'product/detail.html.twig',
            array('product' => $product)
        );
    }
    /**
 * @Route("/{category}", name="category_show")
 */
    public function category_show($category) {

            $entityManager = $this->getDoctrine()->getManager();
            $products = $entityManager->getRepository(Product::class)->findByCategory($category);
                
        return $this->render(
            'product/categorie.html.twig',
            array('products' => $products)
        );
    }

}
