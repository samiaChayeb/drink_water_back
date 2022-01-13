<?php

namespace App\Repository;

use App\Entity\Advices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Advices|null find($id, $lockMode = null, $lockVersion = null)
 * @method Advices|null findOneBy(array $criteria, array $orderBy = null)
 * @method Advices[]    findAll()
 * @method Advices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdvicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Advices::class);
    }

    // /**
    //  * @return Advices[] Returns an array of Advices objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Advices
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
