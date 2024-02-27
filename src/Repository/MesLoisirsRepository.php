<?php

namespace App\Repository;

use App\Entity\MesLoisirs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MesLoisirs>
 *
 * @method MesLoisirs|null find($id, $lockMode = null, $lockVersion = null)
 * @method MesLoisirs|null findOneBy(array $criteria, array $orderBy = null)
 * @method MesLoisirs[]    findAll()
 * @method MesLoisirs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesLoisirsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MesLoisirs::class);
    }

    public function save(MesLoisirs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MesLoisirs $entity, bool $flush = false): void
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
//     * @return MesLoisirs[] Returns an array of MesLoisirs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MesLoisirs
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
