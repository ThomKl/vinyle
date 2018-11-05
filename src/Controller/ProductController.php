<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Product;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setReference('AZERTY12');
        $product->setCategorie('T-SHIRT');
        $product->setTitre('T-SHIRT TCHOUM');
        $product->setDescription('T-shirt de toute beauté');
        $product->setCouleur('Bleu');
        $product->setTaille('S');
        $product->setPublic('H');
        $product->setPhoto('photo');
        $product->setPrix(89);
        $product->setStock(50);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response("Nouveau produit créé avec l'id ".$product->getId());
    }

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

        return new Response('Voici le produit: '.$product->getTitre());

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}