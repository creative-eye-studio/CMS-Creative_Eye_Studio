<?php

namespace App\Repository;

use App\Entity\NavPosition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NavPosition|null find($id, $lockMode = null, $lockVersion = null)
 * @method NavPosition|null findOneBy(array $criteria, array $orderBy = null)
 * @method NavPosition[]    findAll()
 * @method NavPosition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavPositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NavPosition::class);
    }

    // /**
    //  * @return NavPosition[] Returns an array of NavPosition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NavPosition
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
