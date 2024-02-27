<?php

namespace App\Repository;

use App\Entity\ActiviteProfessionnelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ActiviteProfessionnelle>
 *
 * @method ActiviteProfessionnelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActiviteProfessionnelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActiviteProfessionnelle[]    findAll()
 * @method ActiviteProfessionnelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteProfessionnelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActiviteProfessionnelle::class);
    }

    public function save(ActiviteProfessionnelle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ActiviteProfessionnelle $entity, bool $flush = false): void
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
//     * @return ActiviteProfessionnelle[] Returns an array of ActiviteProfessionnelle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ActiviteProfessionnelle
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
