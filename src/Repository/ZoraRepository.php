<?php

namespace App\Repository;

use App\Entity\Zora;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Zora|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zora|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zora[]    findAll()
 * @method Zora[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZoraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Zora::class);
    }

    // /**
    //  * @return Zora[] Returns an array of Zora objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Zora
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
