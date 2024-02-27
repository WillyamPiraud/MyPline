<?php

namespace App\Repository;

use App\Entity\ObligationFamilialeTempo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ObligationFamilialeTempo>
 *
 * @method ObligationFamilialeTempo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObligationFamilialeTempo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObligationFamilialeTempo[]    findAll()
 * @method ObligationFamilialeTempo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObligationFamilialeTempoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObligationFamilialeTempo::class);
    }

    public function save(ObligationFamilialeTempo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ObligationFamilialeTempo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ObligationFamilialeTempo[] Returns an array of ObligationFamilialeTempo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ObligationFamilialeTempo
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
