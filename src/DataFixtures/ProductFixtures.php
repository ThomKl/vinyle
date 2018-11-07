<?php
 
namespace App\DataFixtures;
 
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

 
class ProductFixtures extends Fixture
{
     
    public function load(ObjectManager $manager)
    {
           
            //PRODUIT 1
            $product1 = new Product();
            $product1->setReference('TYUIOP14');
            $product1->setCategorie('T-SHIRT');
            $product1->setTitre('T-SHIRT GRINCHEUX');
            $product1->setDescription('Ce t-shirt réagit à l\'humeur de son porteur');
            $product1->setCouleur('Blanc');
            $product1->setTaille('M');
            $product1->setPublic('F');
            $product1->setPhoto('TYUIOP14-01.jpg');
            $product1->setPrix('123');
            $product1->setStock('23');
            $manager->persist($product1);
        
            //PRODUIT 2
            $product2 = new Product();
            $product2->setReference('GHJKLM14');
            $product2->setCategorie('T-SHIRT');
            $product2->setTitre('T-SHIRT DORMEUR');
            $product2->setDescription('Avec ce t-shirt vous dormirez comme un nouveau-né');
            $product2->setCouleur('Bleu');
            $product2->setTaille('S');
            $product2->setPublic('M');
            $product2->setPhoto('GHJKLM14-01.jpg');
            $product2->setPrix('45');
            $product2->setStock('34');
            $manager->persist($product2);
        
            //PRODUIT 3
            $product3 = new Product();
            $product3->setReference('QSFDGH23');
            $product3->setCategorie('T-SHIRT');
            $product3->setTitre('T-SHIRT PROF');
            $product3->setDescription('Vous connaitrez le théorème de Pythagore sur le bout des doigts !');
            $product3->setCouleur('Gris');
            $product3->setTaille('XL');
            $product3->setPublic('M');
            $product3->setPhoto('QSFDGH23-01.jpg');
            $product3->setPrix('23');
            $product3->setStock('2');
            $manager->persist($product3);
        
            //PRODUIT 4
            $product4 = new Product();
            $product4->setReference('AZERTY12');
            $product4->setCategorie('SWEATSHIRT');
            $product4->setTitre('SWEATSHIRT TINTIN');
            $product4->setDescription('Affrontez le yéti en toute sérénité avec Tintin');
            $product4->setCouleur('Blanc');
            $product4->setTaille('M');
            $product4->setPublic('M');
            $product4->setPhoto('AZERTY12-01.jpg');
            $product4->setPrix('34');
            $product4->setStock('89');
            $manager->persist($product4);
        
            //PRODUIT 5
            $product5 = new Product();
            $product5->setReference('ERTYUI13');
            $product5->setCategorie('SWEATSHIRT');
            $product5->setTitre('SWEATSHIRT JAUNE');
            $product5->setDescription('En vrai il est noir mais les daltoniens n\'y verront que du feu');
            $product5->setCouleur('Noir');
            $product5->setTaille('XS');
            $product5->setPublic('F');
            $product5->setPhoto('ERTYUI13-01.jpg');
            $product5->setPrix('23');
            $product5->setStock('12');
            $manager->persist($product5);

            //PRODUIT 6
            $product6 = new Product();
            $product6->setReference('RTYUIO21');
            $product6->setCategorie('SWEATSHIRT');
            $product6->setTitre('SWEATSHIRT TA TAPA');
            $product6->setDescription('Le sweatshirt de Shrodinger, tu l\'as et en même temps tu l\'as pas');
            $product6->setCouleur('Bleu');
            $product6->setTaille('XL');
            $product6->setPublic('M');
            $product6->setPhoto('RTYUIO21-01.jpg');
            $product6->setPrix('45');
            $product6->setStock('34');
            $manager->persist($product6);
       
            //PRODUIT 7
            $product7 = new Product();
            $product7->setReference('SDFGHJ28');
            $product7->setCategorie('SWEATSHIRT');
            $product7->setTitre('SWEATSHIRT CAMOUFLAGE');
            $product7->setDescription('La couleur de ce produit est idéal pour passer inaperçu dans le brouillard en pleine mer');
            $product7->setCouleur('Gris');
            $product7->setTaille('M');
            $product7->setPublic('M');
            $product7->setPhoto('SDFGHJ28-01.jpg');
            $product7->setPrix('87');
            $product7->setStock('9');
            $manager->persist($product7);
       
            //PRODUIT 8
            $product8 = new Product();
            $product8->setReference('WXCVBN16');
            $product8->setCategorie('SWEATSHIRT');
            $product8->setTitre('SWEATSHIRT MONTAGNE');
            $product8->setDescription('Confère un bonus de +5 en dextérité au moment d\'affronter le Yéti');
            $product8->setCouleur('Bleu');
            $product8->setTaille('XS');
            $product8->setPublic('F');
            $product8->setPhoto('WXCVBN16-01.jpg');
            $product8->setPrix('78');
            $product8->setStock('98');
            $manager->persist($product8);

            $manager->flush();

        }
    }