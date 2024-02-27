<?php

namespace App\Repository;

use App\Entity\CalendrierEvenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CalendrierEvenement>
 *
 * @method CalendrierEvenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalendrierEvenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalendrierEvenement[]    findAll()
 * @method CalendrierEvenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendrierEvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalendrierEvenement::class);
    }

    public function save(CalendrierEvenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CalendrierEvenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findSortedByDateAndUserId($userId)
    {
        return $this->createQueryBuilder('ce')
            ->andWhere('ce.user_id = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('ce.jour_evenement', 'ASC') // Triez par date de la plus proche à la plus lointaine
            ->getQuery()
            ->getResult();
    }
    public function countInvalidEntries()
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.valide = :valide')
            ->setParameter('valide', false)
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function countInvalidEntriesForUser(int $userId, \DateTimeInterface $currentDate)
    {
    $nextDate = (clone $currentDate)->modify('+1 day');

    return $this->createQueryBuilder('c')
        ->select('COUNT(c.id)')
        ->where('c.valide = :valide')
        ->andWhere('c.user_id = :user_id')
        ->andWhere('(c.jour_evenement = :current_date OR c.jour_evenement < :next_date)')
        ->setParameter('valide', false)
        ->setParameter('user_id', $userId)
        ->setParameter('current_date', $currentDate->format('Y-m-d')) // Format de date adapté à votre base de données
        ->setParameter('next_date', $nextDate->format('Y-m-d')) // Format de date adapté à votre base de données
        ->getQuery()
        ->getSingleScalarResult();
    }

//    /**
//     * @return CalendrierEvenement[] Returns an array of CalendrierEvenement objects
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

//    public function findOneBySomeField($value): ?CalendrierEvenement
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
