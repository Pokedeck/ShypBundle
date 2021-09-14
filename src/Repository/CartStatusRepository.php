<?php

namespace ShypBundle\Repository;

use ShypBundle\Entity\CartStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CartStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartStatus[]    findAll()
 * @method CartStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartStatus::class);
    }

    // /**
    //  * @return CartStatus[] Returns an array of CartStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CartStatus
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
