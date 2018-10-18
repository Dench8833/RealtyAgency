<?php

namespace App\Repository;

use App\Entity\Denis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Denis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Denis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Denis[]    findAll()
 * @method Denis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DenisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Denis::class);
    }

//    /**
//     * @return Denis[] Returns an array of Denis objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Denis
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
