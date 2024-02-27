<?php

namespace App\Repository;

use App\Entity\CalendrierTel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CalendrierTel>
 *
 * @method CalendrierTel|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalendrierTel|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalendrierTel[]    findAll()
 * @method CalendrierTel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendrierTelRepository extends ServiceEntityRepository
{
    private $security;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalendrierTel::class);
    }

    public function save(CalendrierTel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CalendrierTel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function countInvalidEntriesForUser(int $userId)
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.valide = :valide')
            ->andWhere('c.user_id = :user_id')
            ->setParameter('valide', false)
            ->setParameter('user_id', $userId)
            ->getQuery()
            ->getSingleScalarResult();
    }
    

//    /**
//     * @return CalendrierTel[] Returns an array of CalendrierTel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CalendrierTel
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
