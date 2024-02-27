<?php

namespace App\Repository;

use App\Entity\BesoinVitalRepas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BesoinVitalRepas>
 *
 * @method BesoinVitalRepas|null find($id, $lockMode = null, $lockVersion = null)
 * @method BesoinVitalRepas|null findOneBy(array $criteria, array $orderBy = null)
 * @method BesoinVitalRepas[]    findAll()
 * @method BesoinVitalRepas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BesoinVitalRepasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BesoinVitalRepas::class);
    }

    public function save(BesoinVitalRepas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BesoinVitalRepas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BesoinVitalRepas[] Returns an array of BesoinVitalRepas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BesoinVitalRepas
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
