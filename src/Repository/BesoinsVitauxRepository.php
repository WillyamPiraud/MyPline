<?php

namespace App\Repository;

use App\Entity\BesoinsVitaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BesoinsVitaux>
 *
 * @method BesoinsVitaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method BesoinsVitaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method BesoinsVitaux[]    findAll()
 * @method BesoinsVitaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BesoinsVitauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BesoinsVitaux::class);
    }

    public function save(BesoinsVitaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BesoinsVitaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BesoinsVitaux[] Returns an array of BesoinsVitaux objects
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

//    public function findOneBySomeField($value): ?BesoinsVitaux
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
