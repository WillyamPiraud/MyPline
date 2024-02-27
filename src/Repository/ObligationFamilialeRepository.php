<?php

namespace App\Repository;

use App\Entity\ObligationFamiliale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ObligationFamiliale>
 *
 * @method ObligationFamiliale|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObligationFamiliale|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObligationFamiliale[]    findAll()
 * @method ObligationFamiliale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObligationFamilialeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObligationFamiliale::class);
    }

    public function save(ObligationFamiliale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ObligationFamiliale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function countByUserId($userId)
    {
        return $this->createQueryBuilder('b')
            ->select('COUNT(b.id)')
            ->where('b.user_id = :user_id')
            ->setParameter('user_id', $userId)
            ->getQuery()
            ->getSingleScalarResult();
    }

//    /**
//     * @return ObligationFamiliale[] Returns an array of ObligationFamiliale objects
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

//    public function findOneBySomeField($value): ?ObligationFamiliale
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
