<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findAllCategories(): array
    {
    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        'SELECT DISTINCT categorie
        FROM App\Entity\Product p'
    );
    // returns an array of Product objects
    return $query->execute();
    }
    
    
    public function findByCategory($value): array
    {
         $qb = $this->createQueryBuilder('p')
            ->andWhere('p.categorie = :val')
            ->setParameter('val', $value)
            ->getQuery();
        return $qb->execute();
    }

    
    public function getAllProductsInStock():array {
            $qb = $this->createQueryBuilder('p')
            ->andWhere('p.stock > 0')
            ->getQuery();

        return $qb->execute();
    }
}
