<?php

namespace App\Repository;

use App\Entity\CalendrierChosesAFaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;

/**
 * @extends ServiceEntityRepository<CalendrierChosesAFaire>
 *
 * @method CalendrierChosesAFaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalendrierChosesAFaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalendrierChosesAFaire[]    findAll()
 * @method CalendrierChosesAFaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendrierChosesAFaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalendrierChosesAFaire::class);
    }

    public function save(CalendrierChosesAFaire $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CalendrierChosesAFaire $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function countInvalidEntriesForUser(int $userId, DateTime $currentDate)
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.valide = :valide')
            ->andWhere('c.user_id = :user_id')
            ->andWhere('c.date_prevue = :current_date') // Ajoutez cette condition
            ->setParameter('valide', false)
            ->setParameter('user_id', $userId)
            ->setParameter('current_date', $currentDate->format('Y-m-d')) // Formattez la date du jour au format 'Y-m-d'
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function deleteOldEntries(\DateTime $dateLimit, int $userId)
    {
        return $this->createQueryBuilder('c')
            ->delete()
            ->where('c.fait_le <= :dateLimit')
            ->andWhere('c.user_id = :user_id')
            ->setParameter('dateLimit', $dateLimit)
            ->setParameter('user_id', $userId)
            ->getQuery()
            ->execute();
    }
    public function findChosesAFaireOrderByDateButoirForUser($userId)
    {
        return $this->createQueryBuilder('c')
            ->where('c.user_id = :user_id')
            ->setParameter('user_id', $userId)
            ->orderBy('c.date_butoir', 'ASC')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return CalendrierChosesAFaire[] Returns an array of CalendrierChosesAFaire objects
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

//    public function findOneBySomeField($value): ?CalendrierChosesAFaire
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
