<?php

namespace App\Repository;

use App\Entity\Baskets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Baskets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Baskets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Baskets[]    findAll()
 * @method Baskets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BasketsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Baskets::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('b')
            ->where('b.something = :value')->setParameter('value', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
