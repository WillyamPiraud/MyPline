<?php

namespace App\Repository;

use App\Entity\ObjectifFinanceLoisir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ObjectifFinanceLoisir>
 *
 * @method ObjectifFinanceLoisir|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjectifFinanceLoisir|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjectifFinanceLoisir[]    findAll()
 * @method ObjectifFinanceLoisir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjectifFinanceLoisirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjectifFinanceLoisir::class);
    }

    public function save(ObjectifFinanceLoisir $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ObjectifFinanceLoisir $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ObjectifFinanceLoisir[] Returns an array of ObjectifFinanceLoisir objects
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

//    public function findOneBySomeField($value): ?ObjectifFinanceLoisir
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
