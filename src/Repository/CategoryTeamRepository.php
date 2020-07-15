<?php

namespace App\Repository;

use App\Entity\CategoryTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryTeam[]    findAll()
 * @method CategoryTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryTeam::class);
    }

    // /**
    //  * @return CategoryTeam[] Returns an array of CategoryTeam objects
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
    public function findOneBySomeField($value): ?CategoryTeam
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
