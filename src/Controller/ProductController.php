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
        
        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}