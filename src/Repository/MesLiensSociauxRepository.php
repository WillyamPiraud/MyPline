<?php

namespace App\Repository;

use App\Entity\MesLiensSociaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MesLiensSociaux>
 *
 * @method MesLiensSociaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method MesLiensSociaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method MesLiensSociaux[]    findAll()
 * @method MesLiensSociaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesLiensSociauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MesLiensSociaux::class);
    }

    public function save(MesLiensSociaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MesLiensSociaux $entity, bool $flush = false): void
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
//     * @return MesLiensSociaux[] Returns an array of MesLiensSociaux objects
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

//    public function findOneBySomeField($value): ?MesLiensSociaux
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
