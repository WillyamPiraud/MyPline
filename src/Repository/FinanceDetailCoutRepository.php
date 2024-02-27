<?php

namespace App\Repository;

use App\Entity\FinanceDetailCout;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FinanceDetailCout>
 *
 * @method FinanceDetailCout|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinanceDetailCout|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinanceDetailCout[]    findAll()
 * @method FinanceDetailCout[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinanceDetailCoutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FinanceDetailCout::class);
    }

    public function save(FinanceDetailCout $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FinanceDetailCout $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FinanceDetailCout[] Returns an array of FinanceDetailCout objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FinanceDetailCout
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
