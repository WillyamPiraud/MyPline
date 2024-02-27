<?php

namespace App\Controller;

use App\Entity\CalendrierChosesAFaire;
use App\Entity\CalendrierEvenement;
use App\Entity\CalendrierTel;
use App\Entity\FondUrgence;
use App\Entity\Journalier;
use App\Entity\MesLiensSociaux;
use App\Entity\MesLoisirs;
use App\Entity\MesRevenus;
use App\Entity\Notes;
use App\Entity\Objectif;
use App\Entity\ObjectifFinanceLoisir;
use App\Entity\ObligationFamiliale;
use App\Entity\ObligationFamilialeTempo;
use App\Entity\ObligationMetier;
use App\Entity\PlanAction;
use App\Entity\RendezVous;
use App\Entity\RoutineTravail;
use App\Entity\RythmeVital;
use App\Entity\Task;
use App\Entity\ToDoList;
use App\Form\CalendrierChosesAFaireType;
use App\Form\CalendrierEvenementType;
use App\Form\CalendrierTelType;
use App\Form\FondUrgenceType;
use App\Form\JournalierRendezVousType;
use App\Form\JournalierType;
use App\Form\MesLiensSociauxType;
use App\Form\MesLoisirsType;
use App\Form\MesRevenusType;
use App\Form\NotesType;
use App\Form\ObjectifFinanceLoisirType;
use App\Form\ObjectifType;
use App\Form\ObligationFamilialeType;
use App\Form\ObligationMetierType;
use App\Form\ObligationTempoType;
use App\Form\ObligationType;
use App\Form\PlanActionType;
use App\Form\RendezVousType;
use App\Form\ReportTaskType;
use App\Form\RoutineTravailType;
use App\Form\ToDoListType;
use App\Repository\ActiviteProfessionnelleRepository;
use App\Repository\BesoinsVitauxRepository;
use App\Repository\BesoinVitalRepasRepository;
use App\Repository\CalendrierChosesAFaireRepository;
use App\Repository\CalendrierEvenementRepository;
use App\Repository\CalendrierTelRepository;
use App\Repository\FondUrgenceRepository;
use App\Repository\JournalierRepository;
use App\Repository\MesLiensSociauxRepository;
use App\Repository\MesLoisirsRepository;
use App\Repository\MesRevenusRepository;
use App\Repository\NotesRepository;
use App\Repository\ObjectifFinanceLoisirRepository;
use App\Repository\ObjectifRepository;
use App\Repository\ObligationFamilialeRepository;
use App\Repository\ObligationFamilialeTempoRepository;
use App\Repository\ObligationMetierRepository;
use App\Repository\PlanActionRepository;
use App\Repository\RendezVousRepository;
use App\Repository\RoutineTravailRepository;
use App\Repository\TaskRepository;
use App\Repository\ToDoListRepository;
use DateTime;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\Constraint\IsFalse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class PageController extends AbstractController
{
    #[Route('/je-decouvre', name: 'app_je_decouvre')]
    public function index(): Response
    {
        return $this->render('pages/je-decouvre.html.twig', [
            'title_page' => 'Je découvre',
            'imagePath' => 'img/picto-je-decouvre.png',
        ]);
    }

    #[Route('/mes-objectifs', name: 'app_mes_objectifs')]
    public function objectif(ObjectifRepository $objectifRepository): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();

        $countSante = $objectifRepository->count(['id_user' => $userId, 'secteur' => 'Sante']);
        $countActivite = $objectifRepository->count(['id_user' => $userId, 'secteur' => 'Activite']);
        $countFinance = $objectifRepository->count(['id_user' => $userId, 'secteur' => 'Finance']);
        $countSociabilite = $objectifRepository->count(['id_user' => $userId, 'secteur' => 'Sociabilite']);

        return $this->render('pages/mes-objectifs.html.twig', [
            'title_page' => 'Mes Objectifs & Projets',
            'imagePath' => 'img/icon-agenda.png',
            'countSante' => $countSante,
            'countActivite' => $countActivite,
            'countFinance' => $countFinance,
            'countSociabilite' => $countSociabilite,
        ]);
    }

    #[Route('/objectif/ajout/{secteur}', name: 'app_form_objectif')]
    #[Route('/objectif/modifier/{secteur}/{id}', name: 'app_modifier_form_objectif')]
    public function add_objectif($secteur, Request $request, int $id = null, EntityManagerInterface $entityManager, ObjectifRepository $objectifRepository): Response
    {
        $user = $this->getUser();
        if ($request->attributes->get('_route') == 'app_form_objectif') {
            $objectif = new Objectif();
            if ($this->isGranted('ROLE_USER')) {
                if ($user instanceof UserInterface) {
                    $userId = $user->getId();
                    $objectif->setIdUser($userId);
                }
            }
            $objectif->setSecteur($secteur);
        } else {
            $objectif = $objectifRepository->find($id); 
        }


        $form = $this->createForm(ObjectifType::class, $objectif);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($objectif);
            $entityManager->flush($objectif);

            
            return $this->redirectToRoute('app_mes_objectifs_visualiser', ["secteur" => $secteur]);
        }
        return $this->render('pages/add-objectif.html.twig', [
            'secteur' => $secteur,
            'form' => $form,
            'title_page' => 'Ajouter un objectif',
            'imagePath' => 'img/icon-agenda.png',
        ]);
    }

    #[Route('/mes-objectifs/visualiser/{secteur}', name: 'app_mes_objectifs_visualiser')]
    public function objectif_visualiser($secteur, ObjectifRepository $objectifRepository): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();

        $lstObjectifs = $objectifRepository->findBy(['id_user' => $userId, 'secteur' => $secteur]);
        return $this->render('pages/objectif/visualiser-mes-objectifs.html.twig', [
            'title_page' => 'Visualiser mes Objectifs',
            'imagePath' => 'img/icon-agenda.png',
            'lstObjectifs' => $lstObjectifs,
            'secteur' => $secteur,
        ]);
    }

    #[Route('/objectif/supprimer/{id}/{secteur}', name: 'app_objectif_delete')]
    public function objectif_delete(Request $request, $secteur, EntityManagerInterface $entityManager, int $id, ObjectifRepository $objectifRepository): Response
    {
        $objectif = $objectifRepository->find($id);
        $entityManager->remove($objectif);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_mes_objectifs_visualiser', ["secteur" => $secteur]);
    }

    #[Route('/rythme-vital', name: 'app_rythme_vital')]
    public function rythme_vital(ObligationFamilialeRepository $obligationFamilialeRepository, ActiviteProfessionnelleRepository $activiteProfessionnelleRepository, MesLoisirsRepository $mesLoisirsRepository, MesLiensSociauxRepository $mesLiensSociauxRepository, BesoinsVitauxRepository $besoinsVitauxRepository, ObligationMetierRepository $obligationMetierRepository): Response
    {
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();

                // Calcul du total des temps et pourcentage BesoinsVitaux //

                $besoinsVitaux = $besoinsVitauxRepository->findBy(['user_id' => $userId]);

                $totalSecondsBesoinVital = 0;
                foreach ($besoinsVitaux as $besoinVital) {
                    $totalSecondsBesoinVital += $besoinVital->getLundi()->getTimestamp() % (24 * 60 * 60) +
                        $besoinVital->getMardi()->getTimestamp() % (24 * 60 * 60) +
                        $besoinVital->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                        $besoinVital->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                        $besoinVital->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                        $besoinVital->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                        $besoinVital->getDimanche()->getTimestamp() % (24 * 60 * 60);
                }

                $totalHoursBesoinVital = $totalSecondsBesoinVital / 3600; // Conversion en heures

                $moyennePerDayBesoinVital = $totalHoursBesoinVital / 7;

                $moyenneSeconds = $moyennePerDayBesoinVital * 3600;
                $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
                $moyenneHours = floor($moyennePerDayBesoinVital);
                $moyenneTimeFormattedBesoinVital = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

                $pourcentageBesoinVital = $moyennePerDayBesoinVital / 24 * 100; // Convertir en pourcentage pour une journée complète
                $pourcentageBesoinVitalArrondi = round($pourcentageBesoinVital * 2) / 2;

                // Calcul du total des temps et pourcentage Obligation Familiale //
                
                $obligationFamiliale = $obligationFamilialeRepository->findBy(['user_id' => $userId]);

                $totalSecondsObligationFam = 0;
                foreach ($obligationFamiliale as $obligation) {
                    $totalSecondsObligationFam += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                        $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                        $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                        $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                        $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                        $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                        $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
                }

                $totalHoursObligationFam = $totalSecondsObligationFam / 3600; // Conversion en heures

                $moyennePerDayObligationFam = $totalHoursObligationFam / 7;

                $moyenneSeconds = 0;
                $moyenneMinutes = 0;
                $moyenneHours = 0;
                $moyenneSeconds = $moyennePerDayObligationFam * 3600;
                $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
                $moyenneHours = floor($moyennePerDayObligationFam);
                $moyenneTimeFormattedObligationFam = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

                $pourcentageObligationFam = $moyennePerDayObligationFam / 24 * 100; // Convertir en pourcentage pour une journée complète
                $pourcentageObligationFamArrondi = round($pourcentageObligationFam * 2) / 2;


                // Calcul du total des temps et pourcentage Activite Professionnel //

                $activitePro = $activiteProfessionnelleRepository->findBy(['user_id' => $userId]);

                $totalSecondsActivitePro = 0;
                foreach ($activitePro as $activite) {
                    $totalSecondsActivitePro += $activite->getLundi()->getTimestamp() % (24 * 60 * 60) +
                        $activite->getMardi()->getTimestamp() % (24 * 60 * 60) +
                        $activite->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                        $activite->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                        $activite->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                        $activite->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                        $activite->getDimanche()->getTimestamp() % (24 * 60 * 60);
                }

                $totalHoursActivitePro = $totalSecondsActivitePro / 3600; // Conversion en heures

                $moyennePerDayActivitePro = $totalHoursActivitePro / 7;

                $moyenneSeconds = 0;
                $moyenneMinutes = 0;
                $moyenneHours = 0;
                $moyenneSeconds = $moyennePerDayActivitePro * 3600;
                $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
                $moyenneHours = floor($moyennePerDayActivitePro);
                $moyenneTimeFormattedActivitePro = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

                $pourcentageActivitePro = $moyennePerDayActivitePro / 24 * 100; // Convertir en pourcentage pour une journée complète
                $pourcentageActiviteProArrondi = round($pourcentageActivitePro * 2) / 2;

                // Calcul du total des temps et pourcentage Mes Loisirs //

                $loisirsActivite = $mesLoisirsRepository->findBy(['user_id' => $userId]);

                $totalSecondsMesLoisirs = 0;
                foreach ($loisirsActivite as $loisir) {
                    $totalSecondsMesLoisirs += $loisir->getTempsPrevue()->getTimestamp() % (24 * 60 * 60);
                }

                $totalHoursMesLoisirs = $totalSecondsMesLoisirs / 3600; // Conversion en heures

                $moyennePerDayMesLoisirs = $totalHoursMesLoisirs / 7;

                $moyenneSeconds = 0;
                $moyenneMinutes = 0;
                $moyenneHours = 0;
                $moyenneSeconds = $moyennePerDayMesLoisirs * 3600;
                $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
                $moyenneHours = floor($moyennePerDayMesLoisirs);
                $moyenneTimeFormattedMesLoisirs = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

                $pourcentageMesLoisirs = $moyennePerDayMesLoisirs / 24 * 100; // Convertir en pourcentage pour une journée complète
                $pourcentageMesLoisirsArrondi = round($pourcentageMesLoisirs * 2) / 2;


                // Calcul du total des temps et pourcentage Mes liens sociaux //


                $lienSocial = $mesLiensSociauxRepository->findBy(['user_id' => $userId]);

                $totalSecondsLienSocial = 0;
                foreach ($lienSocial as $lien) {
                    $totalSecondsLienSocial += $lien->getTempsPrevue()->getTimestamp();
                }

                $totalHoursLienSocial = $totalSecondsLienSocial / 3600; // Conversion en heures

                $moyennePerDayLienSocial = $totalHoursLienSocial / 7;

                $moyenneSeconds = 0;
                $moyenneMinutes = 0;
                $moyenneHours = 0;
                $moyenneSeconds = $moyennePerDayLienSocial * 3600;
                $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
                $moyenneHours = floor($moyennePerDayLienSocial);
                $moyenneTimeFormattedLienSocial = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

                $pourcentageLienSocial = $moyennePerDayLienSocial / 24 * 100; // Convertir en pourcentage pour une journée complète
                $pourcentageLienSocialArrondi = round($pourcentageLienSocial * 2) / 2;

                // Sélection de BesoinsVitaux pour l'utilisateur connecté
                $besoinsVitaux = $besoinsVitauxRepository->findBy([
                    'user_id' => $userId,
                    'intitule' => ["Sommeil", "Manger (Tps de preparation Repas inclus)", "Se lever / s'habiller et autres besoins de vie"]
                ]);
    
                $countStatut = 0;
    
                foreach ($besoinsVitaux as $besoinVital) {
                    $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
                    foreach ($joursSemaine as $jour) {
                        $temps = $besoinVital->{'get'.$jour}()->getTimestamp();
                    }
                    if ($temps != 0) {
                        $countStatut += 1;
                    }
                }
            }
        }

       // Calcul du total des temps et pourcentage Obligation Professionnelle //
                
       $routineTravailProfessionnel = $obligationMetierRepository->findBy(['user_id' => $userId]);

       $totalSecondsObligationProfessionnel = 0;
       foreach ($routineTravailProfessionnel as $obligation) {
           $totalSecondsObligationProfessionnel += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
       }

       $totalHoursObligationProfessionnel = $totalSecondsObligationProfessionnel / 3600; // Conversion en heures

       $moyennePerDayObligationProfessionnel = $totalHoursObligationProfessionnel / 7;

       $moyenneSeconds = 0;
       $moyenneMinutes = 0;
       $moyenneHours = 0;
       $moyenneSeconds = $moyennePerDayObligationProfessionnel * 3600;
       $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
       $moyenneHours = floor($moyennePerDayObligationProfessionnel);
       $moyenneTimeFormattedObligationProfessionnel = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

       $pourcentageObligationProfessionnel = $moyennePerDayObligationProfessionnel / 24 * 100; // Convertir en pourcentage pour une journée complète
       $pourcentageObligationProfessionnelArrondi = round($pourcentageObligationProfessionnel * 2) / 2;

       // Statut pour les obligations formation //

       $countStatutProfessionnel = 0;
       $temps = 0;
       foreach ($routineTravailProfessionnel as $obligation) {
           $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
           foreach ($joursSemaine as $jour) {
               $temps += $obligation->{'get'.$jour}()->getTimestamp();
           }
           if ($temps != 0) {
               $countStatutProfessionnel += 1;
           }
       } 




        $countObligationFamiliale = $obligationFamilialeRepository->countByUserId($userId);
        $countActiviteProfessionnelle = $activiteProfessionnelleRepository->countByUserId($userId);
        $countMesLoisirs = $mesLoisirsRepository->countByUserId($userId);
        $countMesLiensSociaux = $mesLiensSociauxRepository->countByUserId($userId);

        return $this->render('pages/rythme-vital.html.twig', [
            'countObligationFamiliale' => $countObligationFamiliale,
            'countActiviteProfessionnelle' => $countActiviteProfessionnelle,
            'countMesLoisirs' => $countMesLoisirs,
            'countMesLiensSociaux' => $countMesLiensSociaux,
            'countStatut' => $countStatut,
            'title_page' => 'Mes Routines',
            'imagePath' => 'img/icon-agenda.png',
            'moyennePerDayBesoinVital' => $moyenneTimeFormattedBesoinVital,
            'pourcentageBesoinVital' => $pourcentageBesoinVitalArrondi,
            'moyennePerDayObligationFam' => $moyenneTimeFormattedObligationFam,
            'pourcentageObligationFam' => $pourcentageObligationFamArrondi, 
            'moyennePerDayActivitePro' => $moyenneTimeFormattedActivitePro,
            'pourcentageActivitePro' => $pourcentageActiviteProArrondi,
            'moyennePerDayMesLoisirs' => $moyenneTimeFormattedMesLoisirs,
            'pourcentageMesLoisirs' => $pourcentageMesLoisirsArrondi,
            'moyennePerDayLienSocial' => $moyenneTimeFormattedLienSocial,
            'pourcentageLienSocial' => $pourcentageLienSocialArrondi,
            'moyenneTimeFormattedObligationProfessionnel' => $moyenneTimeFormattedObligationProfessionnel,
            'pourcentageObligationProfessionnelArrondi' => $pourcentageObligationProfessionnelArrondi,
            'countStatutProfessionnel' => $countStatutProfessionnel,
        ]);
    }

    #[Route('/lst_obligations_familiales', name: 'app_obligations_familiales')]
    public function lst_obligations_familiales(Security $security,ObligationFamilialeRepository $obligationFamilialeRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        // Calcul du total des temps et pourcentage Obligation Familiale //
                
        $obligationFamilialeSoinEnfant = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'soin_enfant']);

        $totalSecondsObligationSoinEnfant = 0;
        foreach ($obligationFamilialeSoinEnfant as $obligation) {
            $totalSecondsObligationSoinEnfant += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationSoinEnfant = $totalSecondsObligationSoinEnfant / 3600; // Conversion en heures

        $moyennePerDayObligationSoinEnfant = $totalHoursObligationSoinEnfant / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationSoinEnfant * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationSoinEnfant);
        $moyenneTimeFormattedObligationSoinEnfant = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationSoinEnfant = $moyennePerDayObligationSoinEnfant / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationSoinEnfantArrondi = round($pourcentageObligationSoinEnfant * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutSoinE = 0;

        foreach ($obligationFamilialeSoinEnfant as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutSoinE += 1;
            }
        }

        // Calcul du total des temps et pourcentage Obligation Familiale Soutien Entourage //
                
        $obligationFamilialeSoutienEntourage = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'soutien_entourage']);

        $totalSecondsObligationSoutienEntourage = 0;
        foreach ($obligationFamilialeSoutienEntourage as $obligation) {
            $totalSecondsObligationSoutienEntourage += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationSoutienEntourage = $totalSecondsObligationSoutienEntourage / 3600; // Conversion en heures

        $moyennePerDayObligationSoutienEntourage = $totalHoursObligationSoutienEntourage / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationSoutienEntourage * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationSoutienEntourage);
        $moyenneTimeFormattedObligationSoutienEntourage = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationSoutienEntourage = $moyennePerDayObligationSoutienEntourage / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationSoutienEntourageArrondi = round($pourcentageObligationSoutienEntourage * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutSoutienE = 0;

        foreach ($obligationFamilialeSoutienEntourage as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutSoutienE += 1;
            }
        }

        // Calcul du total des temps et pourcentage Obligation Familiale Échanges familiaux //
                
        $obligationFamilialeEchanges = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'echange_familiale']);

        $totalSecondsObligationEchanges = 0;
        foreach ($obligationFamilialeEchanges as $obligation) {
            $totalSecondsObligationEchanges += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationEchanges = $totalSecondsObligationEchanges / 3600; // Conversion en heures

        $moyennePerDayObligationEchanges = $totalHoursObligationEchanges / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationEchanges * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationEchanges);
        $moyenneTimeFormattedObligationEchanges = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationEchanges = $moyennePerDayObligationEchanges / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationEchangesArrondi = round($pourcentageObligationEchanges * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutEchanges = 0;

        foreach ($obligationFamilialeEchanges as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutEchanges += 1;
            }
        }

        // Calcul du total des temps et pourcentage Obligation Familiale Entretien du foyer //
                
        $obligationFamilialeEntretienFoyer = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'entretien_foyer']);

        $totalSecondsObligationEntretienFoyer = 0;
        foreach ($obligationFamilialeEntretienFoyer as $obligation) {
            $totalSecondsObligationEntretienFoyer += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationEntretienFoyer = $totalSecondsObligationEntretienFoyer / 3600; // Conversion en heures

        $moyennePerDayObligationEntretienFoyer = $totalHoursObligationEntretienFoyer / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationEntretienFoyer * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationEntretienFoyer);
        $moyenneTimeFormattedObligationEntretienFoyer = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationEntretienFoyer = $moyennePerDayObligationEntretienFoyer / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationEntretienFoyerArrondi = round($pourcentageObligationEntretienFoyer * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutEntretienF = 0;

        foreach ($obligationFamilialeEntretienFoyer as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutEntretienF += 1;
            }
        }

        // Calcul du total des temps et pourcentage Obligation Familiale Entretien & reparation //
                
        $obligationFamilialeEntretienReparation = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'entretien_reparation']);

        $totalSecondsObligationEntretienReparation = 0;
        foreach ($obligationFamilialeEntretienReparation as $obligation) {
            $totalSecondsObligationEntretienReparation += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationEntretienReparation = $totalSecondsObligationEntretienReparation / 3600; // Conversion en heures

        $moyennePerDayObligationEntretienReparation = $totalHoursObligationEntretienReparation / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationEntretienReparation * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationEntretienReparation);
        $moyenneTimeFormattedObligationEntretienReparation = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationEntretienReparation = $moyennePerDayObligationEntretienReparation / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationEntretienReparationArrondi = round($pourcentageObligationEntretienReparation * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutEntretienR = 0;

        foreach ($obligationFamilialeEntretienReparation as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutEntretienR += 1;
            }
        }

        // Calcul du total des temps et pourcentage Obligation Familiale Preparation Repas //
                
        $obligationFamilialePreparationR = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'preparation_repas']);

        $totalSecondsObligationPreparationR = 0;
        foreach ($obligationFamilialePreparationR as $obligation) {
            $totalSecondsObligationPreparationR += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationPreparationR = $totalSecondsObligationPreparationR / 3600; // Conversion en heures

        $moyennePerDayObligationPreparationR = $totalHoursObligationPreparationR / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationPreparationR * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationPreparationR);
        $moyenneTimeFormattedObligationPreparationR = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationPreparationR = $moyennePerDayObligationPreparationR / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationPreparationRArrondi = round($pourcentageObligationPreparationR * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutPreparationR = 0;

        foreach ($obligationFamilialePreparationR as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutPreparationR += 1;
            }
        }

        // Calcul du total des temps et pourcentage Obligation Familiale Gestion Financière //
                
        $obligationFamilialeGestionF = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'gestion_financiere']);

        $totalSecondsObligationGestionF = 0;
        foreach ($obligationFamilialeGestionF as $obligation) {
            $totalSecondsObligationGestionF += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
                $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
        }

        $totalHoursObligationGestionF = $totalSecondsObligationGestionF / 3600; // Conversion en heures

        $moyennePerDayObligationGestionF = $totalHoursObligationGestionF / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayObligationGestionF * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayObligationGestionF);
        $moyenneTimeFormattedObligationGestionF = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageObligationGestionF = $moyennePerDayObligationPreparationR / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageObligationGestionFArrondi = round($pourcentageObligationGestionF * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutGestionF = 0;

        foreach ($obligationFamilialeGestionF as $obligation) {
            $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            foreach ($joursSemaine as $jour) {
                $temps = $obligation->{'get'.$jour}()->getTimestamp();
            }
            if ($temps != 0) {
                $countStatutGestionF += 1;
            }
        }

        return $this->render('pages/rythme_vital/liste_obligations_familiales.html.twig', [
            'title_page' => 'Mes Obligations Familiales & Domestiques',
            'imagePath' => 'img/picto-obligation-domestique.png',
            'moyenneTmpsSoinEnfant' => $moyenneTimeFormattedObligationSoinEnfant,
            'pourcentageSoinEnfant' => $pourcentageObligationSoinEnfantArrondi,
            'countStatutSoinE' => $countStatutSoinE,
            'moyenneTmpsSoutienEntourage' => $moyenneTimeFormattedObligationSoutienEntourage,
            'pourcentageSoutienEntourage' => $pourcentageObligationSoutienEntourageArrondi,
            'countStatutSoutienE' => $countStatutSoutienE,
            'moyenneTmpsEchanges' => $moyenneTimeFormattedObligationEchanges,
            'pourcentageEchanges' => $pourcentageObligationEchangesArrondi,
            'countStatutEchanges' => $countStatutEchanges,
            'moyenneTmpsEntretienF' => $moyenneTimeFormattedObligationEntretienFoyer,
            'pourcentageEntretienF' => $pourcentageObligationEntretienFoyerArrondi,
            'countStatutEntretienF' => $countStatutEntretienF,
            'moyenneTmpsEntretienR' => $moyenneTimeFormattedObligationEntretienReparation,
            'pourcentageEntretienR' => $pourcentageObligationEntretienReparationArrondi,
            'countStatutEntretienR' => $countStatutEntretienR,
            'moyenneTmpsPreparationR' => $moyenneTimeFormattedObligationPreparationR,
            'pourcentagePreparationR' => $pourcentageObligationPreparationRArrondi,
            'countStatutPreparationR' => $countStatutPreparationR,
            'moyenneTmpsGestionF' => $moyenneTimeFormattedObligationGestionF,
            'pourcentageGestionF' => $pourcentageObligationGestionFArrondi,
            'countStatutGestionF' => $countStatutGestionF,
        ]);
    }

    #[Route('/lst_obligation_familiale/{type}', name: 'app_lst_obligation_familiale')]
    public function lst_obligation_familiale(Security $security, $type, ObligationFamilialeRepository $obligationFamilialeRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($type == 'soin_enfant') {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'soin_enfant']);
            $title_page = "Quel temps hebdomadaire je consacre à prendre soin des enfants (petits enfants), les aider avec leurs devoirs, les emmener à l'école, aux activités extra-scolaires, etc.";
        } elseif ($type == 'soutien_entourage') {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'soutien_entourage']);
            $title_page = "Quel temps hebdomadaire je consacre à prendre soin des membres de ma famille qui ont besoin d'assistance en raison de l'âge, d'une maladie ou d'un handicap, etc."; 
        } elseif ($type == 'echange_familiale') {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'echange_familiale']);
            $title_page = "Quel temps hebdomadaire je consacre à mon conjoint pour le maintient de l'harmonie du couple échanges, communication, convivialité..."; 
        } elseif ($type == 'entretien_foyer') {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'entretien_foyer']);
            $title_page = "Quel temps hebdomadaire je consacre au nettoyage de la maison, de la lessive, de la vaisselle, au repasage, au rangement, et l'entretien général de l'espace de vie...";
        } elseif ($type == 'entretien_reparation') {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'entretien_reparation']);
            $title_page = "Quel temps hebdomadaire je consacre à un projet de création ou de rénovation de mon espace de vie.";
        } elseif ($type == 'preparation_repas') {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'preparation_repas']);
            $title_page = "Quel temps hebdomadaire je consacre à la préparation des repas, aux courses alimentaires...";
        } else {
            $lst_obligations = $obligationFamilialeRepository->findBy(['user_id' => $userId, 'id_obligation' => 'gestion_financiere']);
            $title_page = "Quel temps hebdomadaire je consacre à la gestion de mes finances personnelles et familiales, au paiement des factures, au traitement des démarches administratives, etc...";
        }

        return $this->render('pages/rythme_vital/liste_des_obligations_familiales.html.twig', [
            'lst_obligations' => $lst_obligations,
            'title_page' => 'Liste des obligations familiales',
            'imagePath' => 'img/picto-obligation-domestique.png',
            'texteIntro' => $title_page,
            'type' => $type,
        ]);
    }


    #[Route('/ajouter_obligation_familiale/{type}', name: 'app_ajouter_obligation_familiale')]
    #[Route('/modifier_obligation_familiale/{type}/{id}', name: 'app_modifier_obligation_familiale')]
    public function add_obligation_familiale(Security $security, $type, EntityManagerInterface $entityManager, Request $request, int $id = null, ObligationFamilialeRepository $obligationFamilialeRepository, ObligationFamilialeTempoRepository $obligationFamilialeTempoRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_obligation_familiale')
        {
            $titre_obligation = "Ajouter une obligation";

            $obligation = new ObligationFamiliale();
            $obligation->setUserId($user->getId());
            $obligation->setLundi(new \DateTime('00:00'));
            $obligation->setMardi(new \DateTime('00:00'));
            $obligation->setMercredi(new \DateTime('00:00'));
            $obligation->setJeudi(new \DateTime('00:00'));
            $obligation->setVendredi(new \DateTime('00:00'));
            $obligation->setSamedi(new \DateTime('00:00'));
            $obligation->setDimanche(new \DateTime('00:00'));
            $obligation->setIdObligation($type);
            $strBesoin = "Ajouter une obligation familiale";

            $obligation_tempo = new ObligationFamilialeTempo();
            $obligation_tempo->setUserId($user->getId());
            $obligation_tempo->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo->setDimancheSoir(new \DateTime('00:00'));

        } else {
            $obligation = $obligationFamilialeRepository->find($id);
            $titre_obligation = $obligation->getIntitule();

            if ($obligation) {
                $obligation_tempo = $obligationFamilialeTempoRepository->findOneBy(['id_obligation' => $id]);
            
                if (!$obligation_tempo) {
                    $obligation_tempo = new ObligationFamilialeTempo();
                    $obligation_tempo->setUserId($user->getId());
                    $obligation_tempo->setLundiMatin(new \DateTime('00:00'));
                    $obligation_tempo->setLundiMidi(new \DateTime('00:00'));
                    $obligation_tempo->setLundiSoir(new \DateTime('00:00'));
                    $obligation_tempo->setMardiMatin(new \DateTime('00:00'));
                    $obligation_tempo->setMardiMidi(new \DateTime('00:00'));
                    $obligation_tempo->setMardiSoir(new \DateTime('00:00'));
                    $obligation_tempo->setMercrediMatin(new \DateTime('00:00'));
                    $obligation_tempo->setMercrediMidi(new \DateTime('00:00'));
                    $obligation_tempo->setMercrediSoir(new \DateTime('00:00'));
                    $obligation_tempo->setJeudiMatin(new \DateTime('00:00'));
                    $obligation_tempo->setJeudiMidi(new \DateTime('00:00'));
                    $obligation_tempo->setJeudiSoir(new \DateTime('00:00'));
                    $obligation_tempo->setVendrediMatin(new \DateTime('00:00'));
                    $obligation_tempo->setVendrediMidi(new \DateTime('00:00'));
                    $obligation_tempo->setVendrediSoir(new \DateTime('00:00'));
                    $obligation_tempo->setSamediMatin(new \DateTime('00:00'));
                    $obligation_tempo->setSamediMidi(new \DateTime('00:00'));
                    $obligation_tempo->setSamediSoir(new \DateTime('00:00'));
                    $obligation_tempo->setDimancheMatin(new \DateTime('00:00'));
                    $obligation_tempo->setDimancheMidi(new \DateTime('00:00'));
                    $obligation_tempo->setDimancheSoir(new \DateTime('00:00'));
                    $obligation_tempo->setIdObligation($id);
                    $user = $this->getUser();
                }
                
                $obligation_tempo = $obligationFamilialeTempoRepository->findOneBy(['id_obligation' => $id]);
                $strBesoin = "Modifier une obligation familiale";
            } else {
                $obligation_tempo = $obligationFamilialeTempoRepository->findOneBy(['id_obligation' => $id]);
            }
            $strBesoin = "Modifier une obligation familiale";
        }

        $form_obligation_familiale = $this->createForm(ObligationFamilialeType::class, $obligation);
        $form_obligation_tempo = $this->createForm(ObligationTempoType::class, $obligation_tempo);

        
        /*if ($form_obligation_familiale->isSubmitted() && $form_obligation_familiale->isValid()) {
            
            $entityManager->persist($obligation);
            $entityManager->flush();
            $obligation_tempo->setIdObligation($obligation->getId());
            
            return $this->redirectToRoute('app_rythme_vital_besoins_vitaux');
        }*/
        
        $form_obligation_familiale->handleRequest($request);
        $form_obligation_tempo->handleRequest($request);

        if ($form_obligation_tempo->isSubmitted() && $form_obligation_tempo->isValid()) {
            
            // Calcul du temps total de LUNDI //

            $lundi_matin = $form_obligation_tempo->get('lundi_matin')->getData();
            $lundi_midi = $form_obligation_tempo->get('lundi_midi')->getData();
            $lundi_soir = $form_obligation_tempo->get('lundi_soir')->getData();

            // Calcul du temps

            $lundi_matin_seconds = $lundi_matin->getTimestamp();
            $lundi_midi_seconds = $lundi_midi->getTimestamp();
            $lundi_soir_seconds = $lundi_soir->getTimestamp();
            
            // Conversion du temps
            $total_lundi_seconds = $lundi_matin_seconds + $lundi_midi_seconds + $lundi_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_lundi_hours = intdiv($total_lundi_seconds, 3600);
            $total_lundi_minutes = intdiv(($total_lundi_seconds % 3600), 60);

            $resultat_lundi = new DateTime();
            $resultat_lundi->setTime($total_lundi_hours, $total_lundi_minutes);

            ///// Calcul du temps total de MARDI /////

            $mardi_matin = $form_obligation_tempo->get('mardi_matin')->getData();
            $mardi_midi = $form_obligation_tempo->get('mardi_midi')->getData();
            $mardi_soir = $form_obligation_tempo->get('mardi_soir')->getData();

            // Calcul du temps

            $mardi_matin_seconds = $mardi_matin->getTimestamp();
            $mardi_midi_seconds = $mardi_midi->getTimestamp();
            $mardi_soir_seconds = $mardi_soir->getTimestamp();
            
            // Conversion du temps
            $total_mardi_seconds = $mardi_matin_seconds + $mardi_midi_seconds + $mardi_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_mardi_hours = intdiv($total_mardi_seconds, 3600);
            $total_mardi_minutes = intdiv(($total_mardi_seconds % 3600), 60);

            $resultat_mardi = new DateTime();
            $resultat_mardi->setTime($total_mardi_hours, $total_mardi_minutes);

            ///// Calcul du temps total de MERCREDI /////

            $mercredi_matin = $form_obligation_tempo->get('mercredi_matin')->getData();
            $mercredi_midi = $form_obligation_tempo->get('mercredi_midi')->getData();
            $mercredi_soir = $form_obligation_tempo->get('mercredi_soir')->getData();

            // Calcul du temps

            $mercredi_matin_seconds = $mercredi_matin->getTimestamp();
            $mercredi_midi_seconds = $mercredi_midi->getTimestamp();
            $mercredi_soir_seconds = $mercredi_soir->getTimestamp();
            
            // Conversion du temps
            $total_mercredi_seconds = $mercredi_matin_seconds + $mercredi_midi_seconds + $mercredi_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_mercredi_hours = intdiv($total_mercredi_seconds, 3600);
            $total_mercredi_minutes = intdiv(($total_mercredi_seconds % 3600), 60);

            $resultat_mercredi = new DateTime();
            $resultat_mercredi->setTime($total_mercredi_hours, $total_mercredi_minutes);

            ///// Calcul du temps total de JEUDI /////

            $jeudi_matin = $form_obligation_tempo->get('jeudi_matin')->getData();
            $jeudi_midi = $form_obligation_tempo->get('jeudi_midi')->getData();
            $jeudi_soir = $form_obligation_tempo->get('jeudi_soir')->getData();

            // Calcul du temps

            $jeudi_matin_seconds = $jeudi_matin->getTimestamp();
            $jeudi_midi_seconds = $jeudi_midi->getTimestamp();
            $jeudi_soir_seconds = $jeudi_soir->getTimestamp();
            
            // Conversion du temps
            $total_jeudi_seconds = $jeudi_matin_seconds + $jeudi_midi_seconds + $jeudi_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_jeudi_hours = intdiv($total_jeudi_seconds, 3600);
            $total_jeudi_minutes = intdiv(($total_jeudi_seconds % 3600), 60);

            $resultat_jeudi = new DateTime();
            $resultat_jeudi->setTime($total_jeudi_hours, $total_jeudi_minutes);


            ///// Calcul du temps total de VENDREDI /////

            $vendredi_matin = $form_obligation_tempo->get('vendredi_matin')->getData();
            $vendredi_midi = $form_obligation_tempo->get('vendredi_midi')->getData();
            $vendredi_soir = $form_obligation_tempo->get('vendredi_soir')->getData();

            // Calcul du temps

            $vendredi_matin_seconds = $vendredi_matin->getTimestamp();
            $vendredi_midi_seconds = $vendredi_midi->getTimestamp();
            $vendredi_soir_seconds = $vendredi_soir->getTimestamp();
            
            // Conversion du temps
            $total_vendredi_seconds = $vendredi_matin_seconds + $vendredi_midi_seconds + $vendredi_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_vendredi_hours = intdiv($total_vendredi_seconds, 3600);
            $total_vendredi_minutes = intdiv(($total_vendredi_seconds % 3600), 60);

            $resultat_vendredi = new DateTime();
            $resultat_vendredi->setTime($total_vendredi_hours, $total_vendredi_minutes);


            ///// Calcul du temps total de SAMEDI /////

            $samedi_matin = $form_obligation_tempo->get('samedi_matin')->getData();
            $samedi_midi = $form_obligation_tempo->get('samedi_midi')->getData();
            $samedi_soir = $form_obligation_tempo->get('samedi_soir')->getData();

            // Calcul du temps

            $samedi_matin_seconds = $samedi_matin->getTimestamp();
            $samedi_midi_seconds = $samedi_midi->getTimestamp();
            $samedi_soir_seconds = $samedi_soir->getTimestamp();
            
            // Conversion du temps
            $total_samedi_seconds = $samedi_matin_seconds + $samedi_midi_seconds + $samedi_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_samedi_hours = intdiv($total_samedi_seconds, 3600);
            $total_samedi_minutes = intdiv(($total_samedi_seconds % 3600), 60);

            $resultat_samedi = new DateTime();
            $resultat_samedi->setTime($total_samedi_hours, $total_samedi_minutes);


            ///// Calcul du temps total de DIMANCHE /////

            $dimanche_matin = $form_obligation_tempo->get('dimanche_matin')->getData();
            $dimanche_midi = $form_obligation_tempo->get('dimanche_midi')->getData();
            $dimanche_soir = $form_obligation_tempo->get('dimanche_soir')->getData();

            // Calcul du temps

            $dimanche_matin_seconds = $dimanche_matin->getTimestamp();
            $dimanche_midi_seconds = $dimanche_midi->getTimestamp();
            $dimanche_soir_seconds = $dimanche_soir->getTimestamp();
            
            // Conversion du temps
            $total_dimanche_seconds = $dimanche_matin_seconds + $dimanche_midi_seconds + $dimanche_soir_seconds;

            // Convertir les secondes en heures et minutes
            $total_dimanche_hours = intdiv($total_dimanche_seconds, 3600);
            $total_dimanche_minutes = intdiv(($total_dimanche_seconds % 3600), 60);

            $resultat_dimanche = new DateTime();
            $resultat_dimanche->setTime($total_dimanche_hours, $total_dimanche_minutes);








            $obligation->setLundi($resultat_lundi);
            $obligation->setMardi($resultat_mardi);
            $obligation->setMercredi($resultat_mercredi);
            $obligation->setJeudi($resultat_jeudi);
            $obligation->setVendredi($resultat_vendredi);
            $obligation->setSamedi($resultat_samedi);
            $obligation->setDimanche($resultat_dimanche);

            $formData = $form_obligation_tempo->getData();
            $customFieldValue = $form_obligation_tempo->get('customfield')->getData();

            $obligation->setIntitule($customFieldValue);
            $entityManager->persist($obligation);
            $entityManager->flush();
            $obligation_tempo->setIdObligation($obligation->getId());
            $entityManager->persist($obligation_tempo);
            $entityManager->flush();

            return $this->redirectToRoute('app_lst_obligation_familiale', ['type' => $type]);
        }

        return $this->render('pages/rythme_vital/editer_obligation_familiale.html.twig', [
            'form_obligation_familiale' => $form_obligation_familiale,
            'form_obligation_tempo' => $form_obligation_tempo,
            'title_page' => $strBesoin,
            'titreObligation' => $titre_obligation,
            'imagePath' => 'img/picto-mes-besoins-vitaux.png',
        ]);
    }

















    #[Route('/rythme/{type}', name: 'app_form_rythme_vital')]
    public function add_rythme($type, Request $request, EntityManagerInterface $entityManager): Response
    {
        $rythme = new RythmeVital();
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $rythme->setIdUser($userId);
            }
        }

        $rythme->setTypeObligation($type);

        $form_rythme = $this->createForm(ObligationType::class, $rythme);

        $form_rythme->handleRequest($request);

        if ($form_rythme->isSubmitted() && $form_rythme->isValid()) {
            $entityManager->persist($rythme);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital');
        }
        return $this->render('pages/add-rythme-vital.html.twig', [
            'type' => $type,
            'form_rythme' => $form_rythme,
            'title_page' => 'Créer un rythme <br> vital',
        ]);
    }
    // Icon calendrier pour appel telephonique. //

    #[Route('/lst_calendrier_tel', name: 'app_lst_calendrier_tel')]
    public function lst_calendrier_tel(Security $security, CalendrierTelRepository $calendrierTelRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $calendrierTelLst = $calendrierTelRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/liste_calendrier/lst_calendrier_tel.html.twig', [
            'calendrierTelLst' => $calendrierTelLst,
            'title_page' => 'Appels téléphoniques à donner',
            'imagePath' => 'img/picto-appel-a-donner.png',
        ]);
    }
    #[Route('/lst_calendrier_tel/add_tel', name: 'app_lst_calendrier_tel_add')]
    #[Route('/lst_calendrier_tel/modify_tel/{id}', name: 'app_lst_calendrier_tel_modify')]
    public function lst_calendrier_tel_add(Request $request, EntityManagerInterface $entityManager, int $id = null, CalendrierTelRepository $calendrierTelRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_lst_calendrier_tel_add')
        {
            $calendrier_tel = new CalendrierTel();
            $calendrier_tel->setValide(False);
        } else {
            $calendrier_tel = $calendrierTelRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $calendrier_tel->setUserId($userId);
            }
        }


        $form_calendrier_tel = $this->createForm(CalendrierTelType::class, $calendrier_tel);

        $form_calendrier_tel->handleRequest($request);

        if ($form_calendrier_tel->isSubmitted() && $form_calendrier_tel->isValid()) {
            $entityManager->persist($calendrier_tel);
            $entityManager->flush($calendrier_tel);

            return $this->redirectToRoute('app_lst_calendrier_tel');
        }

        return $this->render('pages/liste_calendrier/lst_calendrier_tel_add.html.twig', [
            'form_calendrier_tel' => $form_calendrier_tel,
            'title_page' => 'Créer un appel à donner',
            'imagePath' => 'img/picto-appel-a-donner.png',
        ]);
    }
    #[Route('/lst_calendrier_tel/delete/{id}', name: 'app_lst_calendrier_tel_delete')]
    public function lst_calendrier_tel_delete(Request $request, EntityManagerInterface $entityManager, CalendrierTel $calendrierTel, int $id, CalendrierTelRepository $calendrierTelRepository): Response
    {
        $calendrier_tel = $calendrierTelRepository->find($id);
        $entityManager->remove($calendrier_tel);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_lst_calendrier_tel');
    }
    #[Route('/valider_tel/{id}', name: 'app_valider_tel')]
    public function validerTel(int $id, EntityManagerInterface $entityManager, CalendrierTelRepository $calendrierTelRepository): Response
    {
        $cal_tel = $calendrierTelRepository->find($id);
        
        $cal_tel->setValide(true);
        $cal_tel->setFaitLe(new \DateTime());

        $entityManager->persist($cal_tel);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_lst_calendrier_tel'); 
    }

    // Calendrier petites choses à faire //

    #[Route('/lst_calendrier_choses_a_faire', name: 'app_lst_calendrier_choses_a_faire')]
    public function lst_calendrier_choses_a_faire(Security $security, CalendrierChosesAFaireRepository $calendrierChosesAFaireRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $dateJour = new \DateTime();

        $lstCalendrierChosesAFaire = $calendrierChosesAFaireRepository->findChosesAFaireOrderByDateButoirForUser($userId);
       
        return $this->render('pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig', [
            'lstCalendrierChosesAFaire' => $lstCalendrierChosesAFaire,
            'dateJour' => $dateJour,
            'title_page' => 'Petites choses à faire',
            'imagePath' => 'img/picto-choses-a-faire.png',
        ]);
    }
    #[Route('/lst_calendrier_choses_a_faire/add_choses_a_faire', name: 'app_lst_calendrier_choses_a_faire_add')]
    #[Route('/lst_calendrier_choses_a_faire/modify_choses_a_faire/{id}', name: 'app_lst_calendrier_choses_a_faire_modify')]
    public function lst_calendrier_chosea_faire_add(Request $request, EntityManagerInterface $entityManager, int $id = null, CalendrierChosesAFaireRepository $calendrierChosesAFaireRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_lst_calendrier_choses_a_faire_add')
        {
            $calendrier_choses_a_faire = new CalendrierChosesAFaire();
            $calendrier_choses_a_faire->setValide(False);
            $calendrier_choses_a_faire->setDatePrevue(new \DateTime('0001-01-01'));
        } else {
            $calendrier_choses_a_faire = $calendrierChosesAFaireRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $calendrier_choses_a_faire->setUserId($userId);
            }
        }

        $form_calendrier_choses_a_faire = $this->createForm(CalendrierChosesAFaireType::class, $calendrier_choses_a_faire);

        $form_calendrier_choses_a_faire->handleRequest($request);

        if ($form_calendrier_choses_a_faire->isSubmitted() && $form_calendrier_choses_a_faire->isValid()) {
            $data = $form_calendrier_choses_a_faire->getData();
                if ($data->getDatePrevue() === null) {
                    $defaultDate = new \DateTime('0001-01-01');
                    $data->setDatePrevue($defaultDate);
                    $form_calendrier_choses_a_faire->setData($data);
                }

            $entityManager->persist($calendrier_choses_a_faire);
            $entityManager->flush($calendrier_choses_a_faire);

            return $this->redirectToRoute('app_lst_calendrier_choses_a_faire');
        }

        return $this->render('pages/liste_calendrier/lst_calendrier_choses_a_faire_add.html.twig', [
            'form_calendrier_choses_a_faire' => $form_calendrier_choses_a_faire,
            'title_page' => 'Ajouter une choses à faire',
            'imagePath' => 'img/picto-choses-a-faire.png',
        ]);
    }
    #[Route('/lst_calendrier_choses_a_faire/delete/{id}', name: 'app_lst_calendrier_choses_a_faire_delete')]
    public function lst_calendrier_choses_a_faire_delete(Request $request, EntityManagerInterface $entityManager, CalendrierChosesAFaire $calendrierChosesAFaire, int $id, CalendrierChosesAFaireRepository $calendrierChosesAFaireRepository): Response
    {
        $calendrier_choses = $calendrierChosesAFaireRepository->find($id);
        $entityManager->remove($calendrier_choses);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_lst_calendrier_choses_a_faire');
    }
    #[Route('/valider_choses_a_faire/{id}', name: 'app_valider_choses_a_faire')]
    public function validerChosesAFaire(int $id, EntityManagerInterface $entityManager, CalendrierChosesAFaireRepository $calendrierChosesAFaireRepository): Response
    {
        $cal_choses_a_faire = $calendrierChosesAFaireRepository->find($id);
        
        $cal_choses_a_faire->setValide(true);
        $cal_choses_a_faire->setFaitLe(new \DateTime());

        $entityManager->persist($cal_choses_a_faire);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_lst_calendrier_choses_a_faire'); 
    }

    // Liste calendrier événements //

    #[Route('/lst_calendrier_evenement', name: 'app_lst_calendrier_evenement')]
    public function lst_calendrier_evenement(Security $security, CalendrierEvenementRepository $calendrierEvenementRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstCalendrierEvenement = $calendrierEvenementRepository->findSortedByDateAndUserId($userId);

        return $this->render('pages/liste_calendrier/lst_calendrier_evenement.html.twig', [
            'lstCalendrierEvenement' => $lstCalendrierEvenement,
            'title_page' => 'Événements à souhaiter',
            'imagePath' => 'img/picto-evenement.png',
        ]);
    }
    #[Route('/lst_calendrier_evenement/add_evenement', name: 'app_lst_calendrier_evenement_add')]
    #[Route('/lst_calendrier_evenement/modify_evenement/{id}', name: 'app_lst_calendrier_evenement_modify')]
    public function lst_calendrie_evenement_add(Request $request, EntityManagerInterface $entityManager, int $id = null, CalendrierEvenementRepository $calendrierEvenementRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_lst_calendrier_evenement_add')
        {
            $calendrier_evenement = new CalendrierEvenement();
            $calendrier_evenement->setValide(False);
        } else {
            $calendrier_evenement = $calendrierEvenementRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $calendrier_evenement->setUserId($userId);
            }
        }

        $form_calendrier_evenement = $this->createForm(CalendrierEvenementType::class, $calendrier_evenement);

        $form_calendrier_evenement->handleRequest($request);

        if ($form_calendrier_evenement->isSubmitted() && $form_calendrier_evenement->isValid()) {
            $entityManager->persist($calendrier_evenement);
            $entityManager->flush($calendrier_evenement);

            return $this->redirectToRoute('app_lst_calendrier_evenement');
        }

        return $this->render('pages/liste_calendrier/lst_calendrier_evenement_add.html.twig', [
            'form_calendrier_evenement' => $form_calendrier_evenement,
            'title_page' => 'Créer un événement',
            'imagePath' => 'img/picto-evenement.png',
        ]);
    }
    #[Route('/lst_calendrier_evenement/delete/{id}', name: 'app_lst_calendrier_evenement_delete')]
    public function lst_calendrier_evenement_delete(Request $request, EntityManagerInterface $entityManager, int $id, CalendrierEvenementRepository $calendrierEvenementRepository): Response
    {
        $calendrier_evenement = $calendrierEvenementRepository->find($id);
        $entityManager->remove($calendrier_evenement);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_lst_calendrier_evenement');
    }

    #[Route('/valider_evenement/{id}', name: 'app_valider_evenement')]
    public function validerEvenement(int $id, CalendrierEvenement $evenement, EntityManagerInterface $entityManager, CalendrierEvenementRepository $calendrierEvenementRepository): Response
    {
        $evenement = $calendrierEvenementRepository->find($id);

        if (!$evenement) {
            throw $this->createNotFoundException('Événement non trouvé');
        }

        $copieEvenement = clone $evenement;
        $nouvelleDate = $evenement->getJourEvenement()->add(new \DateInterval('P1Y'));
        $copieEvenement->setJourEvenement($nouvelleDate);

        $entityManager->persist($copieEvenement);

        $entityManager->remove($evenement);

        $entityManager->flush();

        return $this->redirectToRoute('app_lst_calendrier_evenement'); 
    }
    // Calendrier Rendez-vous
    #[Route('/lst_rdv', name: 'app_lst_rdv')]
    public function lst_rdv(Security $security, RendezVousRepository $rendezVousRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstRendezVous = $rendezVousRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig', [
            'lstRendezVous' => $lstRendezVous,
            'title_page' => 'Rendez-vous à prendre',
            'imagePath' => 'img/picto-rendez-vous.png',
        ]);
    }
    #[Route('/lst_calendrier_rdv/add_rdv', name: 'app_lst_calendrier_rdv_add')]
    #[Route('/lst_calendrier_rdv/modify_rdv/{id}', name: 'app_lst_calendrier_rdv_modify')]
    public function lst_calendrier_rdv_add(Request $request, EntityManagerInterface $entityManager, int $id = null, RendezVousRepository $rendezVousRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_lst_calendrier_rdv_add')
        {
            $calendrier_rdv = new RendezVous();
            $calendrier_rdv->setTempsPrevu(new \DateTime('00:00'));
            $calendrier_rdv->setValide(False);
        } else {
            $calendrier_rdv = $rendezVousRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $calendrier_rdv->setUserId($userId);
            }
        }

        $form_calendrier_rdv = $this->createForm(RendezVousType::class, $calendrier_rdv);

        $form_calendrier_rdv->handleRequest($request);

        if ($form_calendrier_rdv->isSubmitted() && $form_calendrier_rdv->isValid()) {
            $entityManager->persist($calendrier_rdv);
            $entityManager->flush($calendrier_rdv);

            return $this->redirectToRoute('app_lst_rdv');
        }

        return $this->render('pages/liste_calendrier/lst_calendrier_rdv_add.html.twig', [
            'form_calendrier_rdv' => $form_calendrier_rdv,
            'title_page' => 'Ajouter un rendez-vous',
            'imagePath' => 'img/picto-rendez-vous.png',
        ]);
    }
    #[Route('/lst_calendrier_rdv/delete/{id}', name: 'app_lst_calendrier_rdv_delete')]
    public function lst_calendrier_rdv_delete(Request $request, EntityManagerInterface $entityManager, int $id, RendezVousRepository $rendezVousRepository): Response
    {
        $calendrier_rdv = $rendezVousRepository->find($id);
        $entityManager->remove($calendrier_rdv);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_lst_rdv');
    }
    #[Route('/rendez_vous_valide/{id}', name: 'app_rendez_vous_valide')]
    public function validerRDV(int $id, EntityManagerInterface $entityManager, RendezVousRepository $rendezVousRepository): Response
    {
        $cal_rdv = $rendezVousRepository->find($id);
        
        $cal_rdv->setValide(true);

        $entityManager->persist($cal_rdv);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_lst_rdv'); 
    }

    /*

    Page Mes Post it et Notes

    */

    #[Route('/post_it_notes', name: 'app_post_it_notes')]
    public function post_it_et_notes(Security $security): Response
    {
        return $this->render('pages/post_it_notes/post_it_notes_home.html.twig', [
            'title_page' => 'Mes Post-it & Notes',
            'imagePath' => 'img/icon-post-it.png',
        ]);
    }
    #[Route('/post_it_notes/mes_notes', name: 'app_post_it_notes_mes_notes')]
    public function mes_notes(Security $security, NotesRepository $notes): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstNotes = $notes->findBy(['user_id' => $userId]);

        return $this->render('pages/post_it_notes/mes_notes.html.twig', [
            'lstNotes' => $lstNotes,
            'title_page' => 'Mes Notes',
            'imagePath' => 'img/icon-post-it.png',
        ]);
    }
    #[Route('/post_it_notes/add_notes', name: 'app_lst_post_it_notes_add')]
    #[Route('/post_it_notes/modify_notes/{id}', name: 'app_lst_post_it_notes_modify')]
    public function lst_add_notes(Request $request, EntityManagerInterface $entityManager, int $id = null, NotesRepository $notesRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_lst_post_it_notes_add')
        {
            $notes = new Notes();
            $notes->setContenu('  ');
        } else {
            $notes = $notesRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $notes->setUserId($userId);
            }
        }

        $notes->setDateCreation(new \DateTime());

        $form_notes = $this->createForm(NotesType::class, $notes);

        $form_notes->handleRequest($request);

        if ($form_notes->isSubmitted() && $form_notes->isValid()) {
            $entityManager->persist($notes);
            $entityManager->flush();

            return $this->redirectToRoute('app_post_it_notes_mes_notes');
        }

        return $this->render('pages/post_it_notes/notes_add.html.twig', [
            'form_notes' => $form_notes,
            'title_page' => 'Créer une note',
            'imagePath' => 'img/picto-lien-social.png',
        ]);
    }
    #[Route('/note/supprimer/{id}', name: 'app_delete_note')]
    public function note_delete(Request $request, EntityManagerInterface $entityManager, int $id, NotesRepository $notes): Response
    {
        $sel_note = $notes->find($id);
        $entityManager->remove($sel_note);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_post_it_notes_mes_notes');
    }
    /* MES LISTES ET DOCUMENTS */

    #[Route('/liste_document', name: 'app_liste_document')]
    public function mes_listes_documents(Security $security): Response
    {
        return $this->render('pages/liste_document/liste_document_home.html.twig', [
            'title_page' => 'Mes listes et documents',
            'imagePath' => 'img/picto-checklist.png',
        ]);
    }
    #[Route('/liste_document/liste', name: 'app_liste_document_liste')]
    public function mes_listes(Security $security, ToDoListRepository $toDoListRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstToDo = $toDoListRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/liste_document/to_do_list.html.twig', [
            'title_page' => 'Mes listes',
            'lstToDoList' => $lstToDo,
            'imagePath' => 'img/picto-checklist.png',
        ]);
    }
    #[Route('/liste_document/add_liste', name: 'app_add_liste')]
    public function add_liste(Request $request, EntityManagerInterface $entityManager): Response
    {

        $todo = new ToDoList();

        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $todo->setUserId($userId);
            }
        }

        $form_todo = $this->createForm(ToDoListType::class, $todo);

        $form_todo->handleRequest($request);

        if ($form_todo->isSubmitted() && $form_todo->isValid()) {
            $entityManager->persist($todo);
            $entityManager->flush();

            return $this->redirectToRoute('app_liste_document_detail_todo', ['id' => $todo->getId()]);
        }

        return $this->render('pages/liste_document/add_to_do_list.html.twig', [
            'form_todo' => $form_todo,
            'title_page' => 'Créer une liste',
            'imagePath' => 'img/picto-checklist.png',
        ]);
    }
    #[Route('/liste_document/detail_todo/{id}', name: 'app_liste_document_detail_todo')]
    public function detail_ma_liste($id, ToDoListRepository $toDoListRepository, TaskRepository $taskRepository): Response
    {
        $todo = $toDoListRepository->find($id);
        $tasks = $taskRepository->findBy(['id_todo' => $id]);

        return $this->render('pages/liste_document/detail_todo.html.twig', [
            'title_page' => 'Détail de ma liste',
            'todo' => $todo,
            'id_todolist' => $id,
            'tasks' => $tasks,
            'imagePath' => 'img/picto-checklist.png',
        ]);
    }

    #[Route('/créer_tache/{id_todolist}', name: 'create_task')]
    public function créer_tache(Request $request, $id_todolist, EntityManagerInterface $entityManager): Response
    {
        $titre = trim($request->request->get('titre'));
        $remarque = trim($request->request->get('remarque'));

        if (empty($titre)) {
            return $this->redirectToRoute('app_liste_document_detail_todo', ['id' => $id_todolist]);
        }

        if(empty($remarque)) {
            $remarque = " ";
        }

        $task = new Task();

        $task->setTitre($titre);
        $task->setRemarque($remarque);
        $task->setStatut(false);
        $task->setIdTodo($id_todolist);

        $entityManager->persist($task);
        $entityManager->flush();

        return $this->redirectToRoute('app_liste_document_detail_todo', ['id' => $id_todolist]);
    }
    #[Route('/liste_document/liste/set_statut/{id}/{id_todolist}', name: 'app_liste_document_liste_set_statut')]
    public function set_statut_task(TaskRepository $taskRepository, $id, EntityManagerInterface $entityManager, $id_todolist): Response
    {

        $task = $taskRepository->find($id);
        $statutActuel = $task->getStatut();
        $id_todolist = $id_todolist;

        $task->setStatut(!$statutActuel);
        $entityManager->persist($task);
        $entityManager->flush();

        return $this->redirectToRoute('app_liste_document_detail_todo', ['id' => $id_todolist]);
    }
    #[Route('/liste/supprimer/{id}', name: 'app_delete_liste')]
    public function liste_delete(Request $request, EntityManagerInterface $entityManager, int $id, ToDoListRepository $toDoListRepository, TaskRepository $taskRepository): Response
    {
        $liste = $toDoListRepository->find($id);
        $entityManager->remove($liste);
        if ($liste) {
            $tasks = $taskRepository->findBy(['id_todo' => $id]);
         
            foreach ($tasks as $task) {
                $entityManager->remove($task);
            }
        
            $entityManager->flush();
        } 

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_liste_document_liste');
    }
    #[Route('/liste_document/liste/delete_task/{id}/{id_todolist}', name: 'app_liste_document_liste_delete_task')]
    public function delete_task(TaskRepository $taskRepository, $id, EntityManagerInterface $entityManager, $id_todolist): Response
    {

        $task = $taskRepository->find($id);
        $id_todolist = $id_todolist;

        $entityManager->remove($task);
        $entityManager->flush();

        return $this->redirectToRoute('app_liste_document_detail_todo', ['id' => $id_todolist]);
    }
    #[Route('/liste_document/liste/reset_tasks/{id_todo}', name: 'app_liste_document_liste_reset_task')]
    public function deleteTasks($id_todo, EntityManagerInterface $entityManager, TaskRepository $taskRepository)
    {

        $tasks = $taskRepository->findBy(['id_todo' => $id_todo]);

        foreach ($tasks as $task) {
            $task->setStatut(False);
        }

        $entityManager->flush();
        return $this->redirectToRoute('app_liste_document_liste');
    }

    // JOURNALIER //

    #[Route('/journalier', name: 'app_journalier')]
    public function journalier(BesoinsVitauxRepository $besoinsVitauxRepository, EntityManagerInterface $entityManager, JournalierRepository $journalierRepository, CalendrierChosesAFaireRepository $calendrierChoses, BesoinVitalRepasRepository $besoinVitalRepasRepository, ObligationFamilialeRepository $obligationFamilialeRepository, ObligationMetierRepository $obligationMetierRepository, RoutineTravailRepository $routineTravailRepository, RendezVousRepository $rendezVousRepository, MesLoisirsRepository $mesLoisirsRepository, MesLiensSociauxRepository $mesLiensSociauxRepository, PlanActionRepository $planActionRepository)
    {
        $user = $this->getUser();

        $currentDate = new \DateTime();
        $aujourdHui = new \DateTime('today');
        $currentDayOfWeek = strtolower($currentDate->format('l'));

        // Récupérer les BesoinsVitaux de l'utilisateur
        $besoinsVitaux = $besoinsVitauxRepository->findBy(['user_id' => $user->getId()]);

        $numberOfEntries = $journalierRepository->count([
            'user_id' => $user->getId(),
        ]);
        if ($numberOfEntries >= 3) {
            $entriesToDelete = $journalierRepository->findBy([
                'user_id' => $user->getId(),
            ]); 
            foreach ($entriesToDelete as $entry) {
                if ($entry->getDateJournalier() < $aujourdHui) {
                    $entityManager->remove($entry);
                }
            }
            $entityManager->flush();

            $ChosesAFaire = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'affilier' => true,
                'id_zoom' => 'ChoseAFaire',
            ]);

            foreach ($ChosesAFaire as $chose) {
                $entityManager->remove($chose);
            }
            $entityManager->flush();

            $chosesFaire = $calendrierChoses->findBy([
                'user_id' => $user->getId(),
                'date_prevue' => $currentDate,
            ]);

            $timeChoses = 0;
            foreach ($chosesFaire as $chose) {
                $timeChoses += $chose->getTempsPrevue()->getTimestamp();

                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                $task->setTitre($chose->getIntitule());
                $time = 0;
                $time = $chose->getTempsPrevue()->getTimestamp(); 
                $task->setTempsTask(new \DateTime(gmdate("H:i", $time)));
                $task->setAffilier(True);
                $task->setIdZoom('ChoseAFaire');

                $entityManager->persist($task);
                $entityManager->flush();
            }
            $choFaire = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Petites Choses à faire du Jour',
            ]);
            foreach ($choFaire as $cho) {
                $entityManager->remove($cho);
            }
            $entityManager->flush();
            $totalChosesHour = gmdate("H:i", $timeChoses);
            
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre('Petites Choses à faire du Jour');
            $task->setTempsTask(new \DateTime($totalChosesHour));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            $tasktodelete = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Obligations familiales',
            ]);

            foreach ($tasktodelete as $task) {
                $entityManager->remove($task);
            }
            $entityManager->flush();

            $obligations = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'id_zoom' => 'obligationFam',
                'date_journalier' => $aujourdHui,
            ]);
            $obligationsCount = $journalierRepository->count([
                'user_id' => $user->getId(),
                'id_zoom' => 'obligationFam',
                'date_journalier' => $aujourdHui,
            ]);
            $totalAllTimeObligation = 0;
            $total_time = 0;
            $total_statut = 0;
            foreach ($obligations as $obligation) {
                $total_time = $obligation->getTempsTask()->getTimestamp();
                $totalAllTimeObligation += $total_time;
                if ($obligation->getStatut() == True) {
                    $total_statut += 1;
                }
            }
            $totalHoursCurrentDay = 0;
            $totalHoursCurrentDay = gmdate("H:i", $total_time);
            $total_time = 0;
            $totalHoursObligation = gmdate("H:i", $totalAllTimeObligation);

            $task = new Journalier();
            if ($total_statut == $obligationsCount) {
                $task->setStatut(True); 
            } else {
                $task->setStatut(False);
            }
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Obligations familiales"); 
            $task->setTempsTask(new \DateTime($totalHoursObligation));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Regenerer Mes Loisirs pour le status //

            $tasktodelete = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Mes Loisirs',
            ]);

            foreach ($tasktodelete as $task) {
                $entityManager->remove($task);
            }
            $entityManager->flush();

            $loisirs = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'id_zoom' => 'mesLoisirs',
                'date_journalier' => $aujourdHui,
            ]);
            $loisirsCount = $journalierRepository->count([
                'user_id' => $user->getId(),
                'id_zoom' => 'mesLoisirs',
                'date_journalier' => $aujourdHui,
            ]);
            $totalAllTimeLoisir = 0;
            $total_time = 0;
            $total_statut = 0;
            foreach ($loisirs as $loisir) {
                $total_time = $loisir->getTempsTask()->getTimestamp();
                $totalAllTimeLoisir += $total_time;
                if ($loisir->getStatut() == True) {
                    $total_statut += 1;
                }
            }
            $totalHoursCurrentDay = 0;
            $totalHoursCurrentDay = gmdate("H:i", $total_time);
            $total_time = 0;
            $totalHoursLoisir = gmdate("H:i", $totalAllTimeLoisir);

            $task = new Journalier();
            if ($total_statut == $loisirsCount) {
                $task->setStatut(True); 
            } else {
                $task->setStatut(False);
            }
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Mes Loisirs"); 
            $task->setTempsTask(new \DateTime($totalHoursLoisir));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Regenerer Mes Liens Sociaux //

            $tasktodelete = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Mes Liens Sociaux',
            ]);

            foreach ($tasktodelete as $task) {
                $entityManager->remove($task);
            }
            $entityManager->flush();

            $liens = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'id_zoom' => 'mesLiens',
                'date_journalier' => $aujourdHui,
            ]);
            $liensCount = $journalierRepository->count([
                'user_id' => $user->getId(),
                'id_zoom' => 'mesLiens',
                'date_journalier' => $aujourdHui,
            ]);
            $totalAllTimeLien = 0;
            $total_time = 0;
            $total_statut = 0;
            foreach ($liens as $lien) {
                $total_time = $lien->getTempsTask()->getTimestamp();
                $totalAllTimeLien += $total_time;
                if ($lien->getStatut() == True) {
                    $total_statut += 1;
                }
            }
            $totalHoursCurrentDay = 0;
            $totalHoursCurrentDay = gmdate("H:i", $total_time);
            $total_time = 0;
            $totalHoursLien = gmdate("H:i", $totalAllTimeLien);

            $task = new Journalier();
            if ($total_statut == $liensCount) {
                $task->setStatut(True); 
            } else {
                $task->setStatut(False);
            }
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Mes Liens Sociaux"); 
            $task->setTempsTask(new \DateTime($totalHoursLien));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Regenerer la ligne des repas pour mettre a jour sont status si toutes les lignes sont valider //

            $tasktodelete = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Manger (Tps de preparation Repas inclus)',
            ]);

            foreach ($tasktodelete as $task) {
                $entityManager->remove($task);
            }
            $entityManager->flush();

            $manger = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'id_zoom' => 'repasJour',
                'date_journalier' => $aujourdHui,
            ]);
            $mangerCount = $journalierRepository->count([
                'user_id' => $user->getId(),
                'id_zoom' => 'repasJour',
                'date_journalier' => $aujourdHui,
            ]);
            $totalAllTimeMange = 0;
            $total_time = 0;
            $total_statut = 0;
            foreach ($manger as $mange) {
                $total_time = $mange->getTempsTask()->getTimestamp();
                $totalAllTimeMange += $total_time;
                if ($mange->getStatut() == True) {
                    $total_statut += 1;
                }
            }
            $totalHoursCurrentDay = 0;
            $totalHoursCurrentDay = gmdate("H:i", $total_time);
            $total_time = 0;
            $totalHoursMange = gmdate("H:i", $totalAllTimeMange);

            $task = new Journalier();
            if ($total_statut == $mangerCount) {
                $task->setStatut(True); 
            } else {
                $task->setStatut(False);
            }
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Manger (Tps de preparation Repas inclus)"); 
            $task->setTempsTask(new \DateTime($totalHoursMange));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

        }
        $numberOfEntriesDay = $journalierRepository->count([
            'user_id' => $user->getId(),
            'date_journalier' => $currentDate,
        ]);
        if ($numberOfEntriesDay < 3) {
            // Initialiser une variable pour stocker le temps total en secondes pour le jour actuel
            $totalTimeCurrentDay = 0;

            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre('Imprévus du jour');
            $task->setTempsTask(new \DateTime('00:00'));
            $task->setAffilier(False);
            $task->setIdZoom('no');
            $entityManager->persist($task);
            $entityManager->flush();

            // Additionner les temps pour le jour actuel pour chaque BesoinVital
            foreach ($besoinsVitaux as $besoinVital) {
                $totalTimeCurrentDay = 0;
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                $task->setTitre($besoinVital->getIntitule());
                $task->setAffilier(False);
                $task->setIdZoom('no');

                switch ($currentDayOfWeek) {
                    case 'monday':
                        $totalTimeCurrentDay += $besoinVital->getLundi()->getTimestamp();
                        break;
                    case 'tuesday':
                        $totalTimeCurrentDay += $besoinVital->getMardi()->getTimestamp();
                        break;
                    case 'wednesday':
                        $totalTimeCurrentDay += $besoinVital->getMercredi()->getTimestamp();
                        break;
                    case 'thursday':
                        $totalTimeCurrentDay += $besoinVital->getJeudi()->getTimestamp();
                        break;
                    case 'friday':
                        $totalTimeCurrentDay += $besoinVital->getVendredi()->getTimestamp();
                        break;
                    case 'saturday':
                        $totalTimeCurrentDay += $besoinVital->getSamedi()->getTimestamp();
                        break;
                    case 'sunday':
                        $totalTimeCurrentDay += $besoinVital->getDimanche()->getTimestamp();
                        break;
                    default:
                        break;
                }
                $totalHoursCurrentDay = gmdate("H:i", $totalTimeCurrentDay);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                $entityManager->persist($task);
                $entityManager->flush();
                if ($besoinVital->getIntitule() == 'Manger (Tps de preparation Repas inclus)') {
                    $repas = $besoinVitalRepasRepository->findBy([
                        'user_id' => $user->getId(),
                        'id_besoin_vital' => $besoinVital->getId(),
                    ]);
                    // Obtenez le nom du jour de la semaine en minuscules
                    $dayOfWeek = strtolower($currentDayOfWeek);

                    switch ($dayOfWeek) {
                        case 'monday':
                            $dayOfWeek = "lundi";
                            break;
                        case 'tuesday':
                            $dayOfWeek = "mardi";
                            break;
                        case 'wednesday':
                            $dayOfWeek = "mercredi";
                            break;
                        case 'thursday':
                            $dayOfWeek = "jeudi";
                            break;
                        case 'friday':
                            $dayOfWeek = "vendredi";
                            break;
                        case 'saturday':
                            $dayOfWeek = "samedi";
                            break;
                        case 'sunday':
                            $dayOfWeek = "dimanche";
                            break;
                        default:
                            break;
                    } 

                    // Liste des types de repas à prendre en compte
                    $typesRepas = ['petit_dejeuner', 'dejeuner', 'dinner'];
                    foreach ($repas as $rep) {
                        foreach ($typesRepas as $typeRepas) {
                            // Obtenez le nom de la colonne en fonction du jour de la semaine et du type de repas
                            $repasColumnName = $dayOfWeek . '_' . $typeRepas;
                            $task = new Journalier();
                            $task->setStatut(false);
                            $task->setDateJournalier(new \DateTime());
                            $task->setUserId($user->getId());
                            $task->setTitre(ucfirst($typeRepas));
    
                            if ($typeRepas == "petit_dejeuner") {
                                $gettmps = "get" . ucfirst($dayOfWeek) . 'PetitDejeuner';
                            } elseif ($typeRepas == "dejeuner") {
                                $gettmps = "get" . ucfirst($dayOfWeek) . 'Dejeuner'; 
                            } elseif ($typeRepas == "dinner") {
                                $gettmps = "get" . ucfirst($dayOfWeek) . 'Dinner'; 
                            }
    
                            $time = $rep->$gettmps()->getTimestamp();
                            $formattedTime = gmdate("H:i", $time);
                            $task->setTempsTask(new \DateTime($formattedTime));
                            $task->setAffilier(true);
                            $task->setIdZoom('repasJour');
                            $entityManager->persist($task);
                            $entityManager->flush();
                        }
                    }
                }
            }

            // Ajout des obligations familiales //

            $obligations = $obligationFamilialeRepository->findBy([
                'user_id' => $user->getId(),
            ]);
            $type_obligations = ['soin_enfant', 'soutien_entourage', 'echange_familiale', 'entretien_foyer', 'entretien_reparation', 'preparation_repas', 'gestion_financiere'];
            $totalAllTimeObligation = 0;
            foreach ($type_obligations as $type) {
                $total_time = 0;
                $obligations = $obligationFamilialeRepository->findBy([
                    'user_id' => $user->getId(),
                    'id_obligation' => $type,
                ]);
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                if ($type == "soin_enfant")
                    $task->setTitre("Soins aux enfants (petits enfants)");
                elseif ($type == "soutien_entourage") {
                    $task->setTitre("Soutien entourage familiale (Pers. âgée ou malade)");
                }
                elseif ($type == "echange_familiale") {
                    $task->setTitre("Échanges familiaux (Conjoint)");
                }
                elseif ($type == "entretien_foyer") {
                    $task->setTitre("Entretien du foyer");
                }
                elseif ($type == "entretien_reparation") {
                    $task->setTitre("Entretien et réparations domestiques");
                }
                elseif ($type == "preparation_repas") {
                    $task->setTitre("Préparation des repas et courses");
                }
                else {
                    $task->setTitre("Gestion financière"); 
                }
                $task->setAffilier(True);
                $task->setIdZoom('obligationFam');
                foreach ($obligations as $obligation) {
                    switch ($currentDayOfWeek) {
                        case 'monday':
                            $total_time += $obligation->getLundi()->getTimestamp();
                            break;
                        case 'tuesday':
                            $total_time += $obligation->getMardi()->getTimestamp();
                            break;
                        case 'wednesday':
                            $total_time += $obligation->getMercredi()->getTimestamp();
                            break;
                        case 'thursday':
                            $total_time += $obligation->getJeudi()->getTimestamp();
                            break;
                        case 'friday':
                            $total_time += $obligation->getVendredi()->getTimestamp();
                            break;
                        case 'saturday':
                            $total_time += $obligation->getSamedi()->getTimestamp();
                            break;
                        case 'sunday':
                            $total_time += $obligation->getDimanche()->getTimestamp();
                            break;
                        default:
                            break;
                    } 
                }
                $totalHoursCurrentDay = 0;
                $totalAllTimeObligation += $total_time;
                $totalHoursCurrentDay = gmdate("H:i", $total_time);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                if ($total_time != 0) {
                    $entityManager->persist($task);
                    $entityManager->flush();
                }
            }
            $totalHoursObligation = gmdate("H:i", $totalAllTimeObligation);
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Obligations familiales"); 
            $task->setTempsTask(new \DateTime($totalHoursObligation));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Ajout des petites choses à faires dans le journalier//

            $chosesFaire = $calendrierChoses->findBy([
                'user_id' => $user->getId(),
                'date_prevue' => $currentDate,
            ]);

            $timeChoses = 0;
            foreach ($chosesFaire as $chose) {
                $timeChoses += $chose->getTempsPrevue()->getTimestamp();

                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                $task->setTitre($chose->getIntitule());
                $time = 0;
                $time = $chose->getTempsPrevue()->getTimestamp(); 
                $task->setTempsTask(new \DateTime(gmdate("H:i", $time)));
                $task->setAffilier(True);
                $task->setIdZoom('ChoseAFaire');

                $entityManager->persist($task);
                $entityManager->flush();

            }
            $totalChosesHour = gmdate("H:i", $timeChoses);
            
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre('Petites Choses à faire du Jour');
            $task->setTempsTask(new \DateTime($totalChosesHour));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();


            // Ajout des différents métiers //

            $diffMetiers = $obligationMetierRepository->findBy([
                'user_id' => $user->getId(),
            ]);
            $nbMetier = 0;
            $nbEtude = 0;
            $nbFormation = 0;
            $tempsParIdPrecis = [];

            foreach ($diffMetiers as $metier) {
                $totalTimeCurrentDay = 0;
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                if ($metier->getType() == "metier") {
                    $intitule = "Métier - " . $metier->getIntitule();
                } elseif ($metier->getType() == "etude") {
                    $intitule = "Étude - " . $metier->getIntitule(); 
                } else {
                    $intitule = "Formation - " . $metier->getIntitule();  
                }
                $task->setTitre($intitule);
                $task->setAffilier(False);
                $task->setIdZoom('no');

                switch ($currentDayOfWeek) {
                    case 'monday':
                        $totalTimeCurrentDay += $metier->getLundi()->getTimestamp();
                        break;
                    case 'tuesday':
                        $totalTimeCurrentDay += $metier->getMardi()->getTimestamp();
                        break;
                    case 'wednesday':
                        $totalTimeCurrentDay += $metier->getMercredi()->getTimestamp();
                        break;
                    case 'thursday':
                        $totalTimeCurrentDay += $metier->getJeudi()->getTimestamp();
                        break;
                    case 'friday':
                        $totalTimeCurrentDay += $metier->getVendredi()->getTimestamp();
                        break;
                    case 'saturday':
                        $totalTimeCurrentDay += $metier->getSamedi()->getTimestamp();
                        break;
                    case 'sunday':
                        $totalTimeCurrentDay += $metier->getDimanche()->getTimestamp();
                        break;
                    default:
                        break;
                }
                $totalHoursCurrentDay = gmdate("H:i", $totalTimeCurrentDay);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                $entityManager->persist($task);
                $entityManager->flush();

                $idTypeMetier = $metier->getId(); 
                $activiteMetier = $routineTravailRepository->findBy([
                    'user_id' => $user->getId(),
                    'id_type' => $idTypeMetier,
                ]);


                foreach ($activiteMetier as $activite) {

                    $date = $activite->getPremierJour();

                    $prochainJour = $date->format('l');
                    $jourSemaine = (int)$date->format('N');

                    // Récupérez le numéro de la semaine dans le mois
                    $numeroSemaine = (int)$date->format('W');

                    // Récupérez le numéro du jour dans le mois
                    $numeroJourDansMois = (int)$date->format('j');
                    $semainesAAjouter = 0;
                    if ($numeroJourDansMois <= 7) {
                        $semainesAAjouter = 0;
                    } elseif ($numeroJourDansMois <= 14) {
                        $semainesAAjouter = 1;
                    } elseif ($numeroJourDansMois <= 21) {
                        $semainesAAjouter = 2;
                    } elseif ($numeroJourDansMois <= 28) {
                        $semainesAAjouter = 3;
                    } else {
                        $semainesAAjouter = 4; 
                    }

                    $frequence = $activite->getFrequence();
                    // Calculer la prochaine date en fonction de la fréquence
                    $dateDuJour = new DateTime('today');


                    if ($activite->getPremierJour() < $dateDuJour) {
                        while ($activite->getPremierJour() < $dateDuJour) {
                            switch ($frequence) {
                                case 'quotidien':
                                    $date->modify('+1 day');
                                    $activite->setPremierJour($date);
                                    break;
                                case 'hebdomadaire':
                                    $date->modify("next " . $prochainJour);
                                    $activite->setPremierJour($date);
                                    break;
                                case 'quinzaine':
                                    $date->modify('+7 days');
                                    $date->modify("next " . $prochainJour);
                                    $activite->setPremierJour($date);
                                    break;
                                case 'mensuel':
                                    if ($date < new DateTime()) {
                                        $date->modify('first day of next month');
                                    }
                                    $date->modify('+' . $semainesAAjouter . 'weeks');
                                    $date->modify("next " . $prochainJour);
                                    $activite->setPremierJour($date);
                                    break;
                                case 'trimestriel':
                                    $date->modify('+3 months');
                                    $date->modify("next " . $prochainJour);
                                    $activite->setPremierJour($date);
                                    break;
                                case 'semestriel':
                                    $date->modify('+6 months');
                                    $date->modify("next " . $prochainJour);
                                    $activite->setPremierJour($date);
                                    break;
                                case 'annuel':
                                    $date->modify('+1 year');
                                    $date->modify('-1 day');
                                    $date->modify("next " . $prochainJour);
                                    $activite->setPremierJour($date);
                                    break;
                            }
                        }
                        // Créer un nouveau rendez-vous avec les mêmes informations sauf la date
                        $nouveauActivite = new RoutineTravail();
                        $nouveauActivite->setIntitule($activite->getIntitule());
                        $nouveauActivite->setTempsPrevue($activite->getTempsPrevue());
                        $nouveauActivite->setFrequence($activite->getFrequence());
                        $nouveauActivite->setNombreAction($activite->getNombreAction());
                        $nouveauActivite->setPremierJour($activite->getPremierJour());
                        $nouveauActivite->setLieu($activite->getLieu());
                        $nouveauActivite->setUserId($activite->getUserId());
                        $nouveauActivite->setType($activite->getType());
                        $nouveauActivite->setIdType($activite->getIdType());

                        // Persistez et flush le nouveau rendez-vous
                        $entityManager->persist($nouveauActivite);
                        $entityManager->flush();

                        // Supprimer l'ancien rendez-vous
                        $entityManager->remove($activite);
                        $entityManager->flush();
                    }

                    $frequence = $activite->getFrequence();
                
                    $activity = new Journalier();
                    $activity->setStatut(False);
                    $activity->setDateJournalier(new \DateTime());
                    $activity->setUserId($user->getId());
                    $activity->setTitre($activite->getIntitule());
                    $activity->setAffilier(True);
                    if ($activite->getType() == 'metier') {
                        $activity->setIdZoom('activite');
                        $nbMetier += 1;
                    } elseif ($activite->getType() == 'etude') {
                        $activity->setIdZoom('activite');
                        $nbEtude += 1; 
                    } else {
                        $activity->setIdZoom('activite');
                        $nbFormation += 1;  
                    }
                    $activity->setIdPrecis($task->getId());
                    $activity->setTempsTask($activite->getTempsPrevue());
                    $entityManager->persist($activity);
                    $entityManager->flush();

                    $idPrecis = $activity->getIdPrecis();
                    if (isset($tempsParIdPrecis[$idPrecis])) {
                        $tempsParIdPrecis[$idPrecis]['heures'] += $activite->getTempsPrevue()->format('H');
                        $tempsParIdPrecis[$idPrecis]['minutes'] += $activite->getTempsPrevue()->format('i');
                        $tempsParIdPrecis[$idPrecis]['secondes'] += $activite->getTempsPrevue()->format('s');
                    } else {
                        $tempsParIdPrecis[$idPrecis] = [
                            'heures' => $activite->getTempsPrevue()->format('H'),
                            'minutes' => $activite->getTempsPrevue()->format('i'),
                            'secondes' => $activite->getTempsPrevue()->format('s'),
                        ];
                    }
                }
            }
            $tempsParMetier = [];

            foreach ($tempsParIdPrecis as $idPrecis => $tempsTotal) {
                $metier = $journalierRepository->find($idPrecis);
                
                // Ajouter le temps total au tableau
                $tempsParMetier[$idPrecis] = [
                    'heures' => $metier->getTempsTask()->format('H'),
                    'minutes' => $metier->getTempsTask()->format('i'),
                    'secondes' => $metier->getTempsTask()->format('s'),
                ];
            }

            $resteDuTemps = [];

            foreach ($tempsParIdPrecis as $idPrecis => $tempsTotal) {
                $metier = $journalierRepository->find($idPrecis);
            
                // Calculer le temps total pour le métier
                $tempsTotalMetier = $tempsParMetier[$idPrecis]['heures'] * 3600 + $tempsParMetier[$idPrecis]['minutes'] * 60 + $tempsParMetier[$idPrecis]['secondes'];

                // Calculer le temps restant
                $tempsRestant = max(0, $tempsTotalMetier - ($tempsTotal['heures'] * 3600 + $tempsTotal['minutes'] * 60 + $tempsTotal['secondes']));
            
                // Ajouter le temps restant au tableau
                $resteDuTemps[$idPrecis] = new \DateTime(gmdate("H:i", $tempsRestant));
            }
            
            // Ajouter une ligne de journalier pour chaque entrée dans $resteDuTemps
            foreach ($resteDuTemps as $idPrecis => $tempsRestant) {
                $journalierReste = new Journalier();
                $journalierReste->setStatut(False);
                $journalierReste->setDateJournalier(new \DateTime());
                $journalierReste->setUserId($user->getId());
                $journalierReste->setTitre("Reste du temps");
                $journalierReste->setAffilier(True);
                $journalierReste->setIdZoom('activite');
                $journalierReste->setIdPrecis($idPrecis);
                $journalierReste->setTempsTask($tempsRestant);
            
                $entityManager->persist($journalierReste);
                $entityManager->flush();
            }

            // Ajout des rendez-vous //

            $rendezVous = $rendezVousRepository->findBy([
                'user_id' => $user->getId(),
            ]);

            foreach ($rendezVous as $rdv) {
                $date = $rdv->getDateRdv();
                $prochainJour = $date->format('l');
                $jourSemaine = (int)$date->format('N');

                // Récupérez le numéro de la semaine dans le mois
                $numeroSemaine = (int)$date->format('W');

                // Récupérez le numéro du jour dans le mois
                $numeroJourDansMois = (int)$date->format('j');
                $semainesAAjouter = 0;
                if ($numeroJourDansMois <= 7) {
                    $semainesAAjouter = 0;
                } elseif ($numeroJourDansMois <= 14) {
                    $semainesAAjouter = 1;
                } elseif ($numeroJourDansMois <= 21) {
                    $semainesAAjouter = 2;
                } elseif ($numeroJourDansMois <= 28) {
                    $semainesAAjouter = 3;
                } else {
                    $semainesAAjouter = 4; 
                }

                $frequence = $rdv->getFrequence();
                // Calculer la prochaine date en fonction de la fréquence
                $dateDuJour = new DateTime('today');

                if ($rdv->getDateRdv() < $dateDuJour) {
                    while ($rdv->getDateRdv() < $dateDuJour) {
                        switch ($frequence) {
                            case 'unique':
                                break;
                            case 'quotidien':
                                $date->modify('+1 day');
                                $activite->setPremierJour($date);
                                break;
                            case 'hebdomadaire':
                                $date->modify("next " . $prochainJour);
                                $rdv->setDateRdv($date);
                                break;
                            case 'quinzaine':
                                $date->modify('+7 days');
                                $date->modify("next " . $prochainJour);
                                $rdv->setDateRdv($date);
                                break;
                            case 'mensuel':
                                if ($date < new DateTime()) {
                                    $date->modify('first day of next month');
                                }
                                $date->modify('+' . $semainesAAjouter . 'weeks');
                                $date->modify("next " . $prochainJour);
                                $rdv->setDateRdv($date);
                                break;
                            case 'trimestriel':
                                $date->modify('+3 months');
                                $date->modify("next " . $prochainJour);
                                $activite->setPremierJour($date);
                                break;
                            case 'semestriel':
                                $date->modify('+6 months');
                                $date->modify("next " . $prochainJour);
                                $activite->setPremierJour($date);
                                break;
                            case 'annuel':
                                $date->modify('+1 year');
                                $date->modify('-1 day');
                                $date->modify("next " . $prochainJour);
                                $rdv->setDateRdv($date);
                                break;
                        }
                    }
                    // Créer un nouveau rendez-vous avec les mêmes informations sauf la date
                    $nouveauRdv = new RendezVous();
                    $nouveauRdv->setObjet($rdv->getObjet());
                    $nouveauRdv->setTempsPrevu($rdv->getTempsPrevu());
                    $nouveauRdv->setLieuRdv($rdv->getLieuRdv());
                    $nouveauRdv->setValide(0);
                    $nouveauRdv->setUserId($rdv->getUserId());
                    $nouveauRdv->setFrequence($rdv->getFrequence());
                    $nouveauRdv->setDateRdv($date);

                    // Persistez et flush le nouveau rendez-vous
                    $entityManager->persist($nouveauRdv);
                    $entityManager->flush();

                    // Supprimer l'ancien rendez-vous
                    $entityManager->remove($rdv);
                    $entityManager->flush();
                }
            }
            $dateDuJour = new DateTime();

            $rendezVousDuJour = $rendezVousRepository->findBy([
                'user_id' => $user->getId(),
                'date_rdv' => $dateDuJour,
            ]);
            $totalTempsPrevu = 0;
            foreach ($rendezVousDuJour as $rdv) {
                $totalTempsPrevu += $rdv->getTempsPrevu()->getTimestamp();

                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                $task->setTitre($rdv->getObjet());
                $task->setTempsTask($rdv->getTempsPrevu());
                $task->setAffilier(True);
                $task->setIdZoom('RendezVous');
                $task->setTelephone($rdv->getTelephone());
                $task->setHorraire($rdv->getHorraire());
                if ($rdv->getLieuRdv() != null) {
                    $task->setLieuRdv($rdv->getLieuRdv());
                }
    
                $entityManager->persist($task);
                $entityManager->flush(); 
            }
            $temps_rendez_vous = new \DateTime(gmdate("H:i", $totalTempsPrevu));
            $journalier_rdv = new Journalier();
            $journalier_rdv->setStatut(false);
            $journalier_rdv->setDateJournalier(new \DateTime());
            $journalier_rdv->setUserId($user->getId());
            $journalier_rdv->setTitre('Rendez-Vous');
            $journalier_rdv->setTempsTask($temps_rendez_vous);
            $journalier_rdv->setAffilier(false);
            $journalier_rdv->setIdZoom('no');

            $entityManager->persist($journalier_rdv);
            $entityManager->flush();

            // Ajout des loisirs dans le journalier //

            $loisirs = $mesLoisirsRepository->findBy([
                'user_id' => $user->getId(),
            ]);

            foreach ($loisirs as $loisir) {
                $date = $loisir->getJourRecurrence();
                $prochainJour = $date->format('l');
                $jourSemaine = (int)$date->format('N');

                // Récupérez le numéro de la semaine dans le mois
                $numeroSemaine = (int)$date->format('W');

                // Récupérez le numéro du jour dans le mois
                $numeroJourDansMois = (int)$date->format('j');
                $semainesAAjouter = 0;
                if ($numeroJourDansMois <= 7) {
                    $semainesAAjouter = 0;
                } elseif ($numeroJourDansMois <= 14) {
                    $semainesAAjouter = 1;
                } elseif ($numeroJourDansMois <= 21) {
                    $semainesAAjouter = 2;
                } elseif ($numeroJourDansMois <= 28) {
                    $semainesAAjouter = 3;
                } else {
                    $semainesAAjouter = 4; 
                }

                $frequence = $loisir->getFrequence();
                // Calculer la prochaine date en fonction de la fréquence
                $dateDuJour = new DateTime('today');

                if ($loisir->getJourRecurrence() < $dateDuJour) {
                    while ($loisir->getJourRecurrence() < $dateDuJour) {
                        switch ($frequence) {
                            case 'quotidien':
                                $date->modify('+1 day');
                                $loisir->setJourRecurrence($date);
                                break;
                            case 'hebdomadaire':
                                $date->modify("next " . $prochainJour);
                                $loisir->setJourRecurrence($date);
                                break;
                            case 'quinzaine':
                                $date->modify('+7 days');
                                $date->modify("next " . $prochainJour);
                                $loisir->setJourRecurrence($date);
                                break;
                            case 'mensuel':
                                if ($date < new DateTime()) {
                                    $date->modify('first day of next month');
                                }
                                $date->modify('+' . $semainesAAjouter . 'weeks');
                                $date->modify("next " . $prochainJour);
                                $loisir->setJourRecurrence($date);
                                break;
                            case 'trimestriel':
                                $date->modify('+3 months');
                                $date->modify("next " . $prochainJour);
                                $loisir->setJourRecurrence($date);
                                break;
                            case 'semestriel':
                                $date->modify('+6 months');
                                $date->modify("next " . $prochainJour);
                                $loisir->setJourRecurrence($date);
                                break;
                            case 'annuel':
                                $date->modify('+1 year');
                                $date->modify('-1 day');
                                $date->modify("next " . $prochainJour);
                                $loisir->setJourRecurrence($date);
                                break;
                        }
                    }
                    // Créer un nouveau loisir avec les mêmes informations sauf la date
                    $nouveauLoisir = new MesLoisirs();
                    $nouveauLoisir->setObjet($loisir->getObjet());
                    $nouveauLoisir->setTempsPrevue($loisir->getTempsPrevue());
                    $nouveauLoisir->setFrequence($loisir->getFrequence());
                    $nouveauLoisir->setNombreAction($loisir->getNombreAction());
                    $nouveauLoisir->setJourRecurrence($date);
                    $nouveauLoisir->setLieu($loisir->getLieu());
                    $nouveauLoisir->setTypeLoisir($loisir->getTypeLoisir());
                    $nouveauLoisir->setUserId($rdv->getUserId());

                    // Persistez et flush le nouveau rendez-vous
                    $entityManager->persist($nouveauLoisir);
                    $entityManager->flush();

                    // Supprimer l'ancien rendez-vous
                    $entityManager->remove($loisir);
                    $entityManager->flush();
                }
            }

            $type_loisirs = ['tele_cine', 'reunion_amis', 'fete', 'association', 'benevolat', 'cours', 'autre'];
            $totalAllTimeLoisirs = 0;
            foreach ($type_loisirs as $type) {
                $total_time = 0;
                $loisirs = $mesLoisirsRepository->findBy([
                    'user_id' => $user->getId(),
                    'type_loisir' => $type,
                    'jour_recurrence' => $dateDuJour,
                ]);
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                if ($type == "tele_cine")
                    $task->setTitre("Télévision & Cinéma");
                elseif ($type == "sport") {
                    $task->setTitre("Sport & Exercice");
                }
                elseif ($type == "lecture") {
                    $task->setTitre("Lecture");
                }
                elseif ($type == "musique") {
                    $task->setTitre("Musique & Chant");
                }
                elseif ($type == "art_creatif") {
                    $task->setTitre("Art Créatif");
                }
                elseif ($type == "voyage") {
                    $task->setTitre("Voyages");
                }
                elseif ($type == "jeux") {
                    $task->setTitre("Jeux");
                }
                elseif ($type == "bien_etre") {
                    $task->setTitre("Bien Etre");
                }
                else {
                    $task->setTitre("Autre"); 
                }
                $task->setAffilier(True);
                $task->setIdZoom('mesLoisirs');
                foreach ($loisirs as $loisir) {
                    $total_time += $loisir->getTempsPrevue()->getTimestamp();
                }
                $totalHoursCurrentDay = 0;
                $totalAllTimeLoisirs += $total_time;
                $totalHoursCurrentDay = gmdate("H:i", $total_time);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                if ($total_time != 0) {
                    $entityManager->persist($task);
                    $entityManager->flush();
                }
            }
            $totalHoursLoisirs = gmdate("H:i", $totalAllTimeLoisirs);
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Mes Loisirs"); 
            $task->setTempsTask(new \DateTime($totalHoursLoisirs));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Ajout des liens dans le journalier //

            $liens = $mesLiensSociauxRepository->findBy([
                'user_id' => $user->getId(),
            ]);

            foreach ($liens as $lien) {
                $date = $lien->getJourRecurrence();
                $prochainJour = $date->format('l');
                $jourSemaine = (int)$date->format('N');

                // Récupérez le numéro de la semaine dans le mois
                $numeroSemaine = (int)$date->format('W');

                // Récupérez le numéro du jour dans le mois
                $numeroJourDansMois = (int)$date->format('j');
                $semainesAAjouter = 0;
                if ($numeroJourDansMois <= 7) {
                    $semainesAAjouter = 0;
                } elseif ($numeroJourDansMois <= 14) {
                    $semainesAAjouter = 1;
                } elseif ($numeroJourDansMois <= 21) {
                    $semainesAAjouter = 2;
                } elseif ($numeroJourDansMois <= 28) {
                    $semainesAAjouter = 3;
                } else {
                    $semainesAAjouter = 4; 
                }

                $frequence = $lien->getFrequence();
                // Calculer la prochaine date en fonction de la fréquence
                $dateDuJour = new DateTime('today');

                if ($lien->getJourRecurrence() < $dateDuJour) {
                    while ($lien->getJourRecurrence() < $dateDuJour) {
                        switch ($frequence) {
                            case 'quotidien':
                                $date->modify('+1 day');
                                $lien->setJourRecurrence($date);
                                break;
                            case 'hebdomadaire':
                                $date->modify("next " . $prochainJour);
                                $lien->setJourRecurrence($date);
                                break;
                            case 'quinzaine':
                                $date->modify('+7 days');
                                $date->modify("next " . $prochainJour);
                                $lien->setJourRecurrence($date);
                                break;
                            case 'mensuel':
                                if ($date < new DateTime()) {
                                    $date->modify('first day of next month');
                                }
                                $date->modify('+' . $semainesAAjouter . 'weeks');
                                $date->modify("next " . $prochainJour);
                                $lien->setJourRecurrence($date);
                                break;
                            case 'trimestriel':
                                $date->modify('+3 months');
                                $date->modify("next " . $prochainJour);
                                $lien->setJourRecurrence($date);
                                break;
                            case 'semestriel':
                                $date->modify('+6 months');
                                $date->modify("next " . $prochainJour);
                                $lien->setJourRecurrence($date);
                                break;
                            case 'annuel':
                                $date->modify('+1 year');
                                $date->modify('-1 day');
                                $date->modify("next " . $prochainJour);
                                $lien->setJourRecurrence($date);
                                break;
                        }
                    }
                    // Créer un nouveau loisir avec les mêmes informations sauf la date
                    $nouveauLien = new MesLiensSociaux();
                    $nouveauLien->setObjet($lien->getObjet());
                    $nouveauLien->setTempsPrevue($lien->getTempsPrevue());
                    $nouveauLien->setFrequence($lien->getFrequence());
                    $nouveauLien->setNombreAction($lien->getNombreAction());
                    $nouveauLien->setJourRecurrence($date);
                    $nouveauLien->setLieu($lien->getLieu());
                    $nouveauLien->setTypeLoisir($lien->getTypeLoisir());
                    $nouveauLien->setUserId($lien->getUserId());

                    // Persistez et flush le nouveau rendez-vous
                    $entityManager->persist($nouveauLien);
                    $entityManager->flush();

                    // Supprimer l'ancien rendez-vous
                    $entityManager->remove($lien);
                    $entityManager->flush();
                }
            }

            $type_liens = ['reunion_famille', 'reunion_amis', 'fete', 'association', 'benevolat', 'cours', 'autre'];
            $totalAllTimeLiens = 0;
            foreach ($type_liens as $type) {
                $total_time = 0;
                $liens = $mesLiensSociauxRepository->findBy([
                    'user_id' => $user->getId(),
                    'type_loisir' => $type,
                    'jour_recurrence' => $dateDuJour,
                ]);
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                if ($type == "reunion_famille")
                    $task->setTitre("Réunion & Repas de famille");
                elseif ($type == "reunion_amis") {
                    $task->setTitre("Réunion & Repas entre amis");
                }
                elseif ($type == "fete") {
                    $task->setTitre("Fêtes célébrations & Événements");
                }
                elseif ($type == "association") {
                    $task->setTitre("Réunion Associatives & Communales");
                }
                elseif ($type == "benevolat") {
                    $task->setTitre("Activités Bénévoles");
                }
                elseif ($type == "cours") {
                    $task->setTitre("Cours, Ateliers & Clubs");
                }
                else {
                    $task->setTitre("Autre"); 
                }
                $task->setAffilier(True);
                $task->setIdZoom('mesLiens');
                foreach ($liens as $lien) {
                    $total_time += $lien->getTempsPrevue()->getTimestamp();
                }
                $totalHoursCurrentDay = 0;
                $totalAllTimeLiens += $total_time;
                $totalHoursCurrentDay = gmdate("H:i", $total_time);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                if ($total_time != 0) {
                    $entityManager->persist($task);
                    $entityManager->flush();
                }
            }
            $totalHoursLiens = gmdate("H:i", $totalAllTimeLiens);
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre("Mes Liens Sociaux"); 
            $task->setTempsTask(new \DateTime($totalHoursLiens));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Ajout des actions du plan d'action dans le journalier//

            $diffActions = $planActionRepository->findBy([
                'user_id' => $user->getId(),
                'date_realisation' => $currentDate,
            ]);

            $timeObjectif = 0;
            foreach ($diffActions as $action) {
                $timeObjectif += $action->getTempsPrevu()->getTimestamp();

                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime());
                $task->setUserId($user->getId());
                $task->setTitre($action->getTitre());
                $time = 0;
                $time = $action->getTempsPrevu()->getTimestamp(); 
                $task->setTempsTask(new \DateTime(gmdate("H:i", $time)));
                $task->setAffilier(True);
                $task->setIdZoom('PlanAction');

                $entityManager->persist($task);
                $entityManager->flush();

            }
            $totalObjectifsHour = gmdate("H:i", $timeObjectif);
            
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime());
            $task->setUserId($user->getId());
            $task->setTitre('Plan d\'Actions Objectifs');
            $task->setTempsTask(new \DateTime($totalObjectifsHour));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();
        }

        $entriesCalcul = $journalierRepository->findBy([
            'user_id' => $user->getId(),
            'date_journalier' => $currentDate,
            'id_zoom' => 'no',
        ]);

        $totalTempsUtilise = 0;

        foreach ($entriesCalcul as $entry) {
            $tempsTask = $entry->getTempsTask();
            $totalTempsUtilise += $tempsTask->format('H') * 3600 + $tempsTask->format('i') * 60;
        }

        $hours = floor($totalTempsUtilise / 3600);
        $minutes = floor(($totalTempsUtilise / 60) % 60);

        $totalTempsHeures = sprintf('%d:%d', $hours, $minutes);

        $totalTempsSur24h = 86400 - $totalTempsUtilise; // Calculer le temps disponible sur 24 heures

        $hoursSur24h = floor($totalTempsSur24h / 3600); // Convertir le temps disponible en heures
        $minutesSur24h = floor(($totalTempsSur24h / 60) % 60); // Convertir le temps disponible en minutes

        if ($totalTempsSur24h < 0) {
            $hoursSur24h = floor(abs($totalTempsSur24h) / 3600); // Convertir le temps disponible en heures en prenant la valeur absolue
            $minutesSur24h = floor((abs($totalTempsSur24h) / 60) % 60); // Convertir le temps disponible en minutes en prenant la valeur absolue
            $totalTempsDisponible = sprintf('-%dh%d', $hoursSur24h, $minutesSur24h); // Formatage avec un signe négatif
        } else {
            $hoursSur24h = floor($totalTempsSur24h / 3600); // Convertir le temps disponible en heures
            $minutesSur24h = floor(($totalTempsSur24h / 60) % 60); // Convertir le temps disponible en minutes
            $totalTempsDisponible = sprintf('%dh%d', $hoursSur24h, $minutesSur24h); // Formatage normal
        }

        $ChosesAFaire = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'id_zoom' => 'ChoseAFaire', 'date_journalier' => $currentDate]);
        $diffRepas = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'id_zoom' => 'repasJour', 'date_journalier' => $currentDate]);
        $diffObli = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'id_zoom' => 'obligationFam', 'date_journalier' => $currentDate]);
        $journalier = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => False, 'date_journalier' => $currentDate]);
        $diffActiJournalier = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'date_journalier' => $currentDate, 'id_zoom' => 'activite']);
        $listeRDV = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'date_journalier' => $currentDate, 'id_zoom' => 'RendezVous']);
        $listeLoisirs = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'date_journalier' => $currentDate, 'id_zoom' => 'mesLoisirs']);
        $listeLiens = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'date_journalier' => $currentDate, 'id_zoom' => 'mesLiens']);
        $listePDA = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'date_journalier' => $currentDate, 'id_zoom' => 'PlanAction']);
    
        // Date du jour dans le titre //

        $dateDuJour = new \DateTime();
        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        $formatter->setPattern('EEEE d MMMM');

        $titreDate = $formatter->format($dateDuJour);
        $titreDate = ucfirst(mb_strtolower($titreDate, 'UTF-8')); // Mettre la première lettre en majuscule

        $title_page = 'Mon Journalier <br> ' . $titreDate;


        return $this->render('pages/journalier/journalier.html.twig', [
            'title_page' => $title_page,
            'imagePath' => 'img/picto-checklist.png',
            'journalier' => $journalier,
            'totalTempsHeures' => $totalTempsHeures,
            'totalTempsDisponible' => $totalTempsDisponible,
            'hoursSur24h' => $hoursSur24h,
            'ChosesAFaire' => $ChosesAFaire,
            'diffRepas' => $diffRepas,
            'diffObli' => $diffObli,
            'diffActiJournalier' => $diffActiJournalier,
            'listeRDV' => $listeRDV,
            'listeLoisirs' => $listeLoisirs,
            'listeLiens' => $listeLiens,
            'listePDA' => $listePDA,
        ]);
    }

    #[Route('/journalier/set_statut/{id}', name: 'app_journalier_set_statut')]
    public function set_statut_journalier(JournalierRepository $journalierRepository, $id, EntityManagerInterface $entityManager): Response
    {

        $task = $journalierRepository->find($id);
        $statutActuel = $task->getStatut();

        $task->setStatut(!$statutActuel);
        $entityManager->persist($task);
        $entityManager->flush();

        return $this->redirectToRoute('app_journalier');
    }
    #[Route('/journalier/set_statut/{id}/{date}', name: 'app_journalier_date_set_statut')]
    public function set_statut_date_journalier(JournalierRepository $journalierRepository, $id, EntityManagerInterface $entityManager, $date): Response
    {

        $task = $journalierRepository->find($id);
        $statutActuel = $task->getStatut();

        $task->setStatut(!$statutActuel);
        $entityManager->persist($task);
        $entityManager->flush();

        return $this->redirectToRoute('app_journalier_date', ['date' => $date]);
    }

     #[Route('/journalier/modifier_tache/{id}', name: 'app_journalier_modifier_tache_jour')]
    public function modify_task(Request $request, EntityManagerInterface $entityManager, int $id = null, JournalierRepository $journalierRepository): Response
    {
        $task = $journalierRepository->find($id);
        $user = $this->getUser();

        $form_task = $this->createForm(JournalierType::class, $task);

        $form_task->handleRequest($request);

        if ($form_task->isSubmitted() && $form_task->isValid()) {
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('app_journalier');
        }

        return $this->render('pages/journalier/modify_journalier.html.twig', [
            'form_task' => $form_task,
            'title_page' => 'Modifier une tâche',
            'imagePath' => 'img/picto-lien-social.png',
        ]);
    }

    #[Route('/journalier/modifier_tache/{id}/{date}', name: 'app_journalier_modifier_tache_date')]
    public function modify_task_date(Request $request, EntityManagerInterface $entityManager, int $id = null, JournalierRepository $journalierRepository, $date = null): Response
    {
        $task = $journalierRepository->find($id);
        $user = $this->getUser();

        $form_task = $this->createForm(JournalierType::class, $task);

        $form_task->handleRequest($request);

        if ($form_task->isSubmitted() && $form_task->isValid()) {
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('app_journalier_date', ['date' => $date]); 
        }

        return $this->render('pages/journalier/modify_journalier.html.twig', [
            'form_task' => $form_task,
            'title_page' => 'Modifier une tâche',
            'imagePath' => 'img/picto-lien-social.png',
        ]);
    }

    // Journalier Delete //

    #[Route('/journalier/delete/{id}', name: 'app_journalier_delete')]
    public function journalier_task_delete(EntityManagerInterface $entityManager, int $id, JournalierRepository $journalierRepository): Response
    {
        $journalier_task = $journalierRepository->find($id);
        $entityManager->remove($journalier_task);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');
        
        return $this->redirectToRoute('app_journalier');
    }

    #[Route('/journalier/delete/{id}/{date}', name: 'app_journalier_date_delete')]
    public function journalier_task_delete_date(EntityManagerInterface $entityManager, int $id, JournalierRepository $journalierRepository, $date): Response
    {
        $journalier_task = $journalierRepository->find($id);
        $entityManager->remove($journalier_task);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');
        
        return $this->redirectToRoute('app_journalier_date', ['date' => $date]);
    }

    // Journalier report //

    #[Route('/journalier/report/{id}', name: 'app_journalier_report')]
    public function journalier_task_report(Request $request, EntityManagerInterface $entityManager, int $id, JournalierRepository $journalierRepository): Response
    {
        $journalier_task = $journalierRepository->find($id);
        $form_report = $this->createForm(ReportTaskType::class, $journalier_task);

        $form_report->handleRequest($request);

        if ($form_report->isSubmitted() && $form_report->isValid()) {
            $dateDuJour = new DateTime();
            $titreAvecDate = $journalier_task->getTitre() . ' - du (' . $dateDuJour->format('Y-m-d') . ')';

            $journalier_task->setTitre($titreAvecDate);

            $entityManager->persist($journalier_task);
            $entityManager->flush();
            return $this->redirectToRoute('app_journalier'); 
        } 
        
        return $this->render('pages/journalier/report_journalier.html.twig', [
            'form_report' => $form_report,
            'title_page' => 'Reporter une tâche',
            'imagePath' => 'img/picto-checklist.png',
        ]);
    }

    #[Route('/journalier/report/{id}/{date}', name: 'app_journalier_date_report')]
    public function journalier_task_date_report(Request $request, EntityManagerInterface $entityManager, int $id, JournalierRepository $journalierRepository, $date): Response
    {
        $journalier_task = $journalierRepository->find($id);
        $form_report = $this->createForm(ReportTaskType::class, $journalier_task);

        $form_report->handleRequest($request);

        if ($form_report->isSubmitted() && $form_report->isValid()) {
            $titreAvecDate = $journalier_task->getTitre() . ' - du (' . $date . ')';

            $journalier_task->setTitre($titreAvecDate);

            $entityManager->persist($journalier_task);
            $entityManager->flush();
            return $this->redirectToRoute('app_journalier_date', ['date' => $date]); 
        } 
        
        return $this->render('pages/journalier/report_journalier.html.twig', [
            'form_report' => $form_report,
            'title_page' => 'Reporter une tâche',
            'imagePath' => 'img/picto-checklist.png',
        ]);
    }


    // Journalier générer par date cette fois-ci //

    #[Route('/journalier/{date}', name: 'app_journalier_date')]
    public function journalierByDate(BesoinsVitauxRepository $besoinsVitauxRepository, EntityManagerInterface $entityManager, JournalierRepository $journalierRepository, $date, CalendrierChosesAFaireRepository $calendrierChoses, BesoinVitalRepasRepository $besoinVitalRepasRepository, ObligationFamilialeRepository $obligationFamilialeRepository, ObligationMetierRepository $obligationMetierRepository, RoutineTravailRepository $routineTravailRepository)
    {
        $user = $this->getUser();

        $currentDate = new \DateTime($date);
        $aujourdHui = new \DateTime('today');
        $currentDayOfWeek = strtolower($currentDate->format('l'));

        // Récupérer les BesoinsVitaux de l'utilisateur
        $besoinsVitaux = $besoinsVitauxRepository->findBy(['user_id' => $user->getId()]);

        $numberOfEntries = $journalierRepository->count([
            'user_id' => $user->getId(),
        ]);

        $numberOfEntriesDay = $journalierRepository->count([
            'user_id' => $user->getId(),
            'date_journalier' => $currentDate,
        ]);

        // Liste a mettre a jour //

        if ($numberOfEntries >= 3) {
            
            $ChosesAFaire = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'affilier' => true,
                'id_zoom' => 'ChoseAFaire',
                'date_journalier' => $currentDate,
            ]);

            foreach ($ChosesAFaire as $chose) {
                $entityManager->remove($chose);
            }
            $entityManager->flush();

            $chosesFaire = $calendrierChoses->findBy([
                'user_id' => $user->getId(),
                'date_prevue' => $currentDate,
            ]);

            $timeChoses = 0;
            foreach ($chosesFaire as $chose) {
                $timeChoses += $chose->getTempsPrevue()->getTimestamp();

                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime($currentDate));
                $task->setUserId($user->getId());
                $task->setTitre($chose->getIntitule());
                $time = 0;
                $time = $chose->getTempsPrevue()->getTimestamp(); 
                $task->setTempsTask(new \DateTime(gmdate("H:i", $time)));
                $task->setAffilier(True);
                $task->setIdZoom('ChoseAFaire');

                $entityManager->persist($task);
                $entityManager->flush();
            }
            $choFaire = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Petites Choses à faire du Jour',
                'date_journalier' => $currentDate,
            ]); 
            foreach ($choFaire as $cho) {
                $entityManager->remove($cho);
            }
            $entityManager->flush();
            $totalChosesHour = gmdate("H:i", $timeChoses);
            
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier($currentDate);
            $task->setUserId($user->getId());
            $task->setTitre('Petites Choses à faire du Jour');
            $task->setTempsTask(new \DateTime($totalChosesHour));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            $tasktodelete = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'titre' => 'Obligations familiales',
                'date_journalier' => $currentDate,
            ]);

            foreach ($tasktodelete as $task) {
                $entityManager->remove($task);
            }
            $entityManager->flush();

            $obligations = $journalierRepository->findBy([
                'user_id' => $user->getId(),
                'id_zoom' => 'obligationFam',
                'date_journalier' => $currentDate,
            ]);
            $totalAllTimeObligation = 0;
            $total_time = 0;
            foreach ($obligations as $obligation) {
                $total_time = $obligation->getTempsTask()->getTimestamp();
                $totalAllTimeObligation += $total_time;
            }
            $totalHoursCurrentDay = 0;
            $totalHoursCurrentDay = gmdate("H:i", $total_time);
            $total_time = 0;
            $totalHoursObligation = gmdate("H:i", $totalAllTimeObligation);

            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier($currentDate);
            $task->setUserId($user->getId());
            $task->setTitre("Obligations familiales"); 
            $task->setTempsTask(new \DateTime($totalHoursObligation));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

        }


        if ($numberOfEntriesDay < 3) {
            // Initialiser une variable pour stocker le temps total en secondes pour le jour actuel
            $totalTimeCurrentDay = 0;

            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime($date));
            $task->setUserId($user->getId());
            $task->setTitre('Imprévus du jour');
            $task->setTempsTask(new \DateTime('00:00'));
            $task->setAffilier(False);
            $task->setIdZoom('no');
            $entityManager->persist($task);
            $entityManager->flush();

            // Additionner les temps pour le jour actuel pour chaque BesoinVital
            foreach ($besoinsVitaux as $besoinVital) {
                $totalTimeCurrentDay = 0;
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime($date));
                $task->setUserId($user->getId());
                $task->setTitre($besoinVital->getIntitule());
                $task->setAffilier(False);
                $task->setIdZoom('no');
                switch ($currentDayOfWeek) {
                    case 'monday':
                        $totalTimeCurrentDay += $besoinVital->getLundi()->getTimestamp();
                        break;
                    case 'tuesday':
                        $totalTimeCurrentDay += $besoinVital->getMardi()->getTimestamp();
                        break;
                    case 'wednesday':
                        $totalTimeCurrentDay += $besoinVital->getMercredi()->getTimestamp();
                        break;
                    case 'thursday':
                        $totalTimeCurrentDay += $besoinVital->getJeudi()->getTimestamp();
                        break;
                    case 'friday':
                        $totalTimeCurrentDay += $besoinVital->getVendredi()->getTimestamp();
                        break;
                    case 'saturday':
                        $totalTimeCurrentDay += $besoinVital->getSamedi()->getTimestamp();
                        break;
                    case 'sunday':
                        $totalTimeCurrentDay += $besoinVital->getDimanche()->getTimestamp();
                        break;
                    default:
                        break;
                }
                $totalHoursCurrentDay = gmdate("H:i", $totalTimeCurrentDay);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                $entityManager->persist($task);
                $entityManager->flush();
                if ($besoinVital->getIntitule() == 'Manger (Tps de preparation Repas inclus)') {
                    $repas = $besoinVitalRepasRepository->findBy([
                        'user_id' => $user->getId(),
                        'id_besoin_vital' => $besoinVital->getId(),
                    ]);
                    // Obtenez le nom du jour de la semaine en minuscules
                    $dayOfWeek = strtolower($currentDayOfWeek);

                    switch ($dayOfWeek) {
                        case 'monday':
                            $dayOfWeek = "lundi";
                            break;
                        case 'tuesday':
                            $dayOfWeek = "mardi";
                            break;
                        case 'wednesday':
                            $dayOfWeek = "mercredi";
                            break;
                        case 'thursday':
                            $dayOfWeek = "jeudi";
                            break;
                        case 'friday':
                            $dayOfWeek = "vendredi";
                            break;
                        case 'saturday':
                            $dayOfWeek = "samedi";
                            break;
                        case 'sunday':
                            $dayOfWeek = "dimanche";
                            break;
                        default:
                            break;
                    } 

                    // Liste des types de repas à prendre en compte
                    $typesRepas = ['petit_dejeuner', 'dejeuner', 'dinner'];
                    foreach ($repas as $rep) {
                        foreach ($typesRepas as $typeRepas) {
                            // Obtenez le nom de la colonne en fonction du jour de la semaine et du type de repas
                            $repasColumnName = $dayOfWeek . '_' . $typeRepas;
                            $task = new Journalier();
                            $task->setStatut(false);
                            $task->setDateJournalier(new \DateTime($date));
                            $task->setUserId($user->getId());
                            $task->setTitre(ucfirst($typeRepas));
    
                            if ($typeRepas == "petit_dejeuner") {
                                $gettmps = "get" . ucfirst($dayOfWeek) . 'PetitDejeuner';
                            } elseif ($typeRepas == "dejeuner") {
                                $gettmps = "get" . ucfirst($dayOfWeek) . 'Dejeuner'; 
                            } elseif ($typeRepas == "dinner") {
                                $gettmps = "get" . ucfirst($dayOfWeek) . 'Dinner'; 
                            }
    
                            $time = $rep->$gettmps()->getTimestamp();
                            $formattedTime = gmdate("H:i", $time);
                            $task->setTempsTask(new \DateTime($formattedTime));
                            $task->setAffilier(true);
                            $task->setIdZoom('repasJour');
                            $entityManager->persist($task);
                            $entityManager->flush();
                        }
                    }
                }
            }
            // Ajout des petites choses à faires dans le journalier

            $chosesFaire = $calendrierChoses->findBy([
                'user_id' => $user->getId(),
                'date_prevue' => $currentDate,
            ]);

            $timeChoses = 0;
            foreach ($chosesFaire as $chose) {
                $timeChoses += $chose->getTempsPrevue()->getTimestamp();

                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier(new \DateTime($date));
                $task->setUserId($user->getId());
                $task->setTitre($chose->getIntitule());
                $time = 0;
                $time = $chose->getTempsPrevue()->getTimestamp(); 
                $task->setTempsTask(new \DateTime(gmdate("H:i", $time)));
                $task->setAffilier(True);
                $task->setIdZoom('ChoseAFaire');

                $entityManager->persist($task);
                $entityManager->flush();

            }
            $totalChosesHour = gmdate("H:i", $timeChoses);
            
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier(new \DateTime($date));
            $task->setUserId($user->getId());
            $task->setTitre('Petites Choses à faire du Jour');
            $task->setTempsTask(new \DateTime($totalChosesHour));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();


            // Ajout des obligations familiales //

            $obligations = $obligationFamilialeRepository->findBy([
                'user_id' => $user->getId(),
            ]);
            $type_obligations = ['soin_enfant', 'soutien_entourage', 'echange_familiale', 'entretien_foyer', 'entretien_reparation', 'preparation_repas', 'gestion_financiere'];
            $totalAllTimeObligation = 0;
            foreach ($type_obligations as $type) {
                $total_time = 0;
                $obligations = $obligationFamilialeRepository->findBy([
                    'user_id' => $user->getId(),
                    'id_obligation' => $type,
                ]);
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier($currentDate);
                $task->setUserId($user->getId());
                if ($type == "soin_enfant")
                    $task->setTitre("Soins aux enfants (petits enfants)");
                elseif ($type == "soutien_entourage") {
                    $task->setTitre("Soutien entourage familiale (Pers. âgée ou malade)");
                }
                elseif ($type == "echange_familiale") {
                    $task->setTitre("Échanges familiaux (Conjoint)");
                }
                elseif ($type == "entretien_foyer") {
                    $task->setTitre("Entretien du foyer");
                }
                elseif ($type == "entretien_reparation") {
                    $task->setTitre("Entretien et réparations domestiques");
                }
                elseif ($type == "preparation_repas") {
                    $task->setTitre("Préparation des repas et courses");
                }
                else {
                    $task->setTitre("Gestion financière"); 
                }
                $task->setAffilier(True);
                $task->setIdZoom('obligationFam');
                foreach ($obligations as $obligation) {
                    switch ($currentDayOfWeek) {
                        case 'monday':
                            $total_time += $obligation->getLundi()->getTimestamp();
                            break;
                        case 'tuesday':
                            $total_time += $obligation->getMardi()->getTimestamp();
                            break;
                        case 'wednesday':
                            $total_time += $obligation->getMercredi()->getTimestamp();
                            break;
                        case 'thursday':
                            $total_time += $obligation->getJeudi()->getTimestamp();
                            break;
                        case 'friday':
                            $total_time += $obligation->getVendredi()->getTimestamp();
                            break;
                        case 'saturday':
                            $total_time += $obligation->getSamedi()->getTimestamp();
                            break;
                        case 'sunday':
                            $total_time += $obligation->getDimanche()->getTimestamp();
                            break;
                        default:
                            break;
                    } 
                }
                $totalHoursCurrentDay = 0;
                $totalAllTimeObligation += $total_time;
                $totalHoursCurrentDay = gmdate("H:i", $total_time);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                if ($total_time != 0) {
                    $entityManager->persist($task);
                    $entityManager->flush();
                }
            }
            $totalHoursObligation = gmdate("H:i", $totalAllTimeObligation);
            $task = new Journalier();
            $task->setStatut(False);
            $task->setDateJournalier($currentDate);
            $task->setUserId($user->getId());
            $task->setTitre("Obligations familiales"); 
            $task->setTempsTask(new \DateTime($totalHoursObligation));
            $task->setAffilier(False);
            $task->setIdZoom('no');

            $entityManager->persist($task);
            $entityManager->flush();

            // Ajout des différents métiers //

            $diffMetiers = $obligationMetierRepository->findBy([
                'user_id' => $user->getId(),
            ]);
            $nbMetier = 0;
            $nbEtude = 0;
            $nbFormation = 0;
            $tempsParIdPrecis = [];

            foreach ($diffMetiers as $metier) {
                $totalTimeCurrentDay = 0;
                $task = new Journalier();
                $task->setStatut(False);
                $task->setDateJournalier($currentDate);
                $task->setUserId($user->getId());
                if ($metier->getType() == "metier") {
                    $intitule = "Métier - " . $metier->getIntitule();
                } elseif ($metier->getType() == "etude") {
                    $intitule = "Étude - " . $metier->getIntitule(); 
                } else {
                    $intitule = "Formation - " . $metier->getIntitule();  
                }
                $task->setTitre($intitule);
                $task->setAffilier(False);
                $task->setIdZoom('no');

                switch ($currentDayOfWeek) {
                    case 'monday':
                        $totalTimeCurrentDay += $metier->getLundi()->getTimestamp();
                        break;
                    case 'tuesday':
                        $totalTimeCurrentDay += $metier->getMardi()->getTimestamp();
                        break;
                    case 'wednesday':
                        $totalTimeCurrentDay += $metier->getMercredi()->getTimestamp();
                        break;
                    case 'thursday':
                        $totalTimeCurrentDay += $metier->getJeudi()->getTimestamp();
                        break;
                    case 'friday':
                        $totalTimeCurrentDay += $metier->getVendredi()->getTimestamp();
                        break;
                    case 'saturday':
                        $totalTimeCurrentDay += $metier->getSamedi()->getTimestamp();
                        break;
                    case 'sunday':
                        $totalTimeCurrentDay += $metier->getDimanche()->getTimestamp();
                        break;
                    default:
                        break;
                }
                $totalHoursCurrentDay = gmdate("H:i", $totalTimeCurrentDay);
                $task->setTempsTask(new \DateTime($totalHoursCurrentDay));
                $entityManager->persist($task);
                $entityManager->flush();

                $idTypeMetier = $metier->getId(); 
                $activiteMetier = $routineTravailRepository->findBy([
                    'user_id' => $user->getId(),
                    'id_type' => $idTypeMetier,
                ]);


                foreach ($activiteMetier as $activite) {

                    $date = $activite->getPremierJour();

                    $prochainJour = $date->format('l');
                    $jourSemaine = (int)$date->format('N');

                    // Récupérez le numéro de la semaine dans le mois
                    $numeroSemaine = (int)$date->format('W');

                    // Récupérez le numéro du jour dans le mois
                    $numeroJourDansMois = (int)$date->format('j');
                    $semainesAAjouter = 0;
                    if ($numeroJourDansMois <= 7) {
                        $semainesAAjouter = 0;
                    } elseif ($numeroJourDansMois <= 14) {
                        $semainesAAjouter = 1;
                    } elseif ($numeroJourDansMois <= 21) {
                        $semainesAAjouter = 2;
                    } elseif ($numeroJourDansMois <= 28) {
                        $semainesAAjouter = 3;
                    } else {
                        $semainesAAjouter = 4; 
                    }

                    $frequence = $activite->getFrequence();
                    // Calculer la prochaine date en fonction de la fréquence

                    $frequence = $activite->getFrequence();

                    if ($frequence == "quotidien") {

                        $activity = new Journalier();
                        $activity->setStatut(False);
                        $activity->setDateJournalier($currentDate);
                        $activity->setUserId($user->getId());
                        $activity->setTitre($activite->getIntitule());
                        $activity->setAffilier(True);
                        if ($activite->getType() == 'metier') {
                            $activity->setIdZoom('activite');
                            $nbMetier += 1;
                        } elseif ($activite->getType() == 'etude') {
                            $activity->setIdZoom('activite');
                            $nbEtude += 1; 
                        } else {
                            $activity->setIdZoom('activite');
                            $nbFormation += 1;  
                        }
                        $activity->setIdPrecis($task->getId());
                        $activity->setTempsTask($activite->getTempsPrevue());
                        $entityManager->persist($activity);
                        $entityManager->flush();

                        $idPrecis = $activity->getIdPrecis();
                        if (isset($tempsParIdPrecis[$idPrecis])) {
                            $tempsParIdPrecis[$idPrecis]['heures'] += $activite->getTempsPrevue()->format('H');
                            $tempsParIdPrecis[$idPrecis]['minutes'] += $activite->getTempsPrevue()->format('i');
                            $tempsParIdPrecis[$idPrecis]['secondes'] += $activite->getTempsPrevue()->format('s');
                        } else {
                            $tempsParIdPrecis[$idPrecis] = [
                                'heures' => $activite->getTempsPrevue()->format('H'),
                                'minutes' => $activite->getTempsPrevue()->format('i'),
                                'secondes' => $activite->getTempsPrevue()->format('s'),
                            ];
                        }
                    }
                }
            }
            $tempsParMetier = [];

            foreach ($tempsParIdPrecis as $idPrecis => $tempsTotal) {
                $metier = $journalierRepository->find($idPrecis);
                
                // Ajouter le temps total au tableau
                $tempsParMetier[$idPrecis] = [
                    'heures' => $metier->getTempsTask()->format('H'),
                    'minutes' => $metier->getTempsTask()->format('i'),
                    'secondes' => $metier->getTempsTask()->format('s'),
                ];
            }

            $resteDuTemps = [];

            foreach ($tempsParIdPrecis as $idPrecis => $tempsTotal) {
                $metier = $journalierRepository->find($idPrecis);
            
                // Calculer le temps total pour le métier
                $tempsTotalMetier = $tempsParMetier[$idPrecis]['heures'] * 3600 + $tempsParMetier[$idPrecis]['minutes'] * 60 + $tempsParMetier[$idPrecis]['secondes'];

                // Calculer le temps restant
                $tempsRestant = max(0, $tempsTotalMetier - ($tempsTotal['heures'] * 3600 + $tempsTotal['minutes'] * 60 + $tempsTotal['secondes']));
            
                // Ajouter le temps restant au tableau
                $resteDuTemps[$idPrecis] = new \DateTime(gmdate("H:i", $tempsRestant));
            }
            
            // Ajouter une ligne de journalier pour chaque entrée dans $resteDuTemps
            foreach ($resteDuTemps as $idPrecis => $tempsRestant) {
                $journalierReste = new Journalier();
                $journalierReste->setStatut(False);
                $journalierReste->setDateJournalier($currentDate);
                $journalierReste->setUserId($user->getId());
                $journalierReste->setTitre("Reste du temps");
                $journalierReste->setAffilier(True);
                $journalierReste->setIdZoom('activite');
                $journalierReste->setIdPrecis($idPrecis);
                $journalierReste->setTempsTask($tempsRestant);
            
                $entityManager->persist($journalierReste);
                $entityManager->flush();
            }
        }

        $entriesCalcul = $journalierRepository->findBy([
            'user_id' => $user->getId(),
            'date_journalier' => $currentDate,
            'affilier' => False,
        ]);

        $totalTempsUtilise = 0;

        foreach ($entriesCalcul as $entry) {
            $tempsTask = $entry->getTempsTask();
            $totalTempsUtilise += $tempsTask->format('H') * 3600 + $tempsTask->format('i') * 60;
        }

        $hours = floor($totalTempsUtilise / 3600);
        $minutes = floor(($totalTempsUtilise / 60) % 60);

        $totalTempsHeures = sprintf('%d:%d', $hours, $minutes);

        $totalTempsSur24h = 86400 - $totalTempsUtilise; // Calculer le temps disponible sur 24 heures

        $hoursSur24h = floor($totalTempsSur24h / 3600); // Convertir le temps disponible en heures
        $minutesSur24h = floor(($totalTempsSur24h / 60) % 60); // Convertir le temps disponible en minutes

        if ($totalTempsSur24h < 0) {
            $hoursSur24h = floor(abs($totalTempsSur24h) / 3600); // Convertir le temps disponible en heures en prenant la valeur absolue
            $minutesSur24h = floor((abs($totalTempsSur24h) / 60) % 60); // Convertir le temps disponible en minutes en prenant la valeur absolue
            $totalTempsDisponible = sprintf('-%dh%d', $hoursSur24h, $minutesSur24h); // Formatage avec un signe négatif
        } else {
            $hoursSur24h = floor($totalTempsSur24h / 3600); // Convertir le temps disponible en heures
            $minutesSur24h = floor(($totalTempsSur24h / 60) % 60); // Convertir le temps disponible en minutes
            $totalTempsDisponible = sprintf('%dh%d', $hoursSur24h, $minutesSur24h); // Formatage normal
        }

        $ChosesAFaire = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'id_zoom' => 'ChoseAFaire', 'date_journalier' => $currentDate,]);
        $diffRepas = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'id_zoom' => 'repasJour', 'date_journalier' => $currentDate]);
        $diffObli = $journalierRepository->findBy(['user_id' => $user->getId(), 'affilier' => True, 'id_zoom' => 'obligationFam', 'date_journalier' => $currentDate]);
        $journalier = $journalierRepository->findBy(['user_id' => $user->getId(),
        'date_journalier' => $currentDate,
        'affilier' => False ]);

        // Date du jour dans le titre //

        $dateDuJour = new \DateTime($date);
        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        $formatter->setPattern('EEEE d MMMM');

        $titreDate = $formatter->format($dateDuJour);
        $titreDate = ucfirst(mb_strtolower($titreDate, 'UTF-8')); // Mettre la première lettre en majuscule

        $title_page = 'Mon Journalier <br> ' . $titreDate;

        return $this->render('pages/journalier/journalier.html.twig', [
            'title_page' => $title_page,
            'imagePath' => 'img/picto-checklist.png',
            'journalier' => $journalier,
            'totalTempsHeures' => $totalTempsHeures,
            'totalTempsDisponible' => $totalTempsDisponible,
            'hoursSur24h' => $hoursSur24h,
            'currentDate' => $currentDate,
            'ChosesAFaire' => $ChosesAFaire,
            'diffRepas' => $diffRepas,
            'diffObli' => $diffObli,
        ]);
    }
    // Activités Professionnelle & Formation //
    
    #[Route('/mes_routines/activite_professionnel', name: 'app_activite_professionnel')]
    public function liste_activite_professionnelle(ObligationMetierRepository $obligationMetierRepository): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();

       // Calcul du total des temps et pourcentage Obligation Metier //
       if ($obligationMetierRepository != null) {
        $routineTravailMetier = $obligationMetierRepository->findBy(['user_id' => $userId, 'type' => 'metier']);
       }
       $totalSecondsObligationMetier = 0;
       foreach ($routineTravailMetier as $obligation) {
           $totalSecondsObligationMetier += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
       }

       $totalHoursObligationMetier = $totalSecondsObligationMetier / 3600; // Conversion en heures

       $moyennePerDayObligationMetier = $totalHoursObligationMetier / 7;

       $moyenneSeconds = 0;
       $moyenneMinutes = 0;
       $moyenneHours = 0;
       $moyenneSeconds = $moyennePerDayObligationMetier * 3600;
       $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
       $moyenneHours = floor($moyennePerDayObligationMetier);
       $moyenneTimeFormattedObligationMetier = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

       $pourcentageObligationMetier = $moyennePerDayObligationMetier / 24 * 100; // Convertir en pourcentage pour une journée complète
       $pourcentageObligationMetierArrondi = round($pourcentageObligationMetier * 2) / 2;

       // Statut pour les obligations metier //

       $countStatutMetier = 0;
       $temps = 0;
       foreach ($routineTravailMetier as $obligation) {
           $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
           foreach ($joursSemaine as $jour) {
               $temps += $obligation->{'get'.$jour}()->getTimestamp();
           }
           if ($temps != 0) {
               $countStatutMetier += 1;
           }
       }

       // Calcul du total des temps et pourcentage Obligation Etudes //
                
       $routineTravailEtude = $obligationMetierRepository->findBy(['user_id' => $userId, 'type' => 'etude']);

       $totalSecondsObligationEtude = 0;
       foreach ($routineTravailEtude as $obligation) {
           $totalSecondsObligationEtude += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
       }

       $totalHoursObligationEtude = $totalSecondsObligationEtude / 3600; // Conversion en heures

       $moyennePerDayObligationEtude = $totalHoursObligationEtude / 7;

       $moyenneSeconds = 0;
       $moyenneMinutes = 0;
       $moyenneHours = 0;
       $moyenneSeconds = $moyennePerDayObligationEtude * 3600;
       $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
       $moyenneHours = floor($moyennePerDayObligationEtude);
       $moyenneTimeFormattedObligationEtude = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

       $pourcentageObligationEtude = $moyennePerDayObligationEtude / 24 * 100; // Convertir en pourcentage pour une journée complète
       $pourcentageObligationEtudeArrondi = round($pourcentageObligationEtude * 2) / 2;

       // Statut pour les obligations etudes //

       $countStatutEtude = 0;
       $temps = 0;
       foreach ($routineTravailEtude as $obligation) {
           $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
           foreach ($joursSemaine as $jour) {
               $temps += $obligation->{'get'.$jour}()->getTimestamp();
           }
           if ($temps != 0) {
               $countStatutEtude += 1;
           }
       }

       // Calcul du total des temps et pourcentage Obligation Formation //
                
       $routineTravailFormation = $obligationMetierRepository->findBy(['user_id' => $userId, 'type' => 'formation']);

       $totalSecondsObligationFormation = 0;
       foreach ($routineTravailFormation as $obligation) {
           $totalSecondsObligationFormation += $obligation->getLundi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMardi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getMercredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getJeudi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getVendredi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getSamedi()->getTimestamp() % (24 * 60 * 60) +
               $obligation->getDimanche()->getTimestamp() % (24 * 60 * 60);
       }

       $totalHoursObligationFormation = $totalSecondsObligationFormation / 3600; // Conversion en heures

       $moyennePerDayObligationFormation = $totalHoursObligationFormation / 7;

       $moyenneSeconds = 0;
       $moyenneMinutes = 0;
       $moyenneHours = 0;
       $moyenneSeconds = $moyennePerDayObligationFormation * 3600;
       $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
       $moyenneHours = floor($moyennePerDayObligationFormation);
       $moyenneTimeFormattedObligationFormation = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

       $pourcentageObligationFormation = $moyennePerDayObligationFormation / 24 * 100; // Convertir en pourcentage pour une journée complète
       $pourcentageObligationFormationArrondi = round($pourcentageObligationFormation * 2) / 2;

       // Statut pour les obligations formation //

       $countStatutFormation = 0;
       $temps = 0;
       foreach ($routineTravailFormation as $obligation) {
           $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
           foreach ($joursSemaine as $jour) {
               $temps += $obligation->{'get'.$jour}()->getTimestamp();
           }
           if ($temps != 0) {
               $countStatutFormation += 1;
           }
       }

        return $this->render('pages/rythme_vital/activite_pro_liste.html.twig', [
            'title_page' => 'Mes activités professionnelles et/ou de formation',
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
            'moyenneTimeFormattedObligationMetier' => $moyenneTimeFormattedObligationMetier,
            'pourcentageObligationMetierArrondi' => $pourcentageObligationMetierArrondi,
            'countStatutMetier' => $countStatutMetier,
            'moyenneTimeFormattedObligationEtude' => $moyenneTimeFormattedObligationEtude,
            'pourcentageObligationEtudeArrondi' => $pourcentageObligationEtudeArrondi,
            'countStatutEtude' => $countStatutEtude,
            'moyenneTimeFormattedObligationFormation' => $moyenneTimeFormattedObligationFormation,
            'pourcentageObligationFormationArrondi' => $pourcentageObligationFormationArrondi,
            'countStatutFormation' => $countStatutFormation,
        ]);
    }
    
    #[Route('/mes_routines/activite_professionnel/temps_travail/{type}/{id}', name: 'app_activite_professionnel_temps_travail')]
    public function liste_activite_professionnelle_temps_travail(RoutineTravailRepository $routineTravailRepository, $type = null, $id = null): Response
    {
        $user = $this->getUser();

        $lstRoutine = $routineTravailRepository->findBy(['user_id' => $user->getId(), 'type' => $type, 'id_type' => $id]);

        return $this->render('pages/rythme_vital/tmps_travail_activite_pro.html.twig', [
            'title_page' => 'Mon temps de travail',
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
            'lstRoutine' => $lstRoutine,
            'type' => $type,
            'id_type' => $id,
        ]);
    }
    #[Route('/temps_travail/add_routine_travail/{type}/{id_type}', name: 'app_routine_travail_add')]
    #[Route('/temps_travail/modify_routine_travail/{id}/{type}/{id_type}', name: 'app_routine_travail_modify')]
    public function lst_editer_temps_travail(Request $request, EntityManagerInterface $entityManager, int $id = null, RoutineTravailRepository $routineTravailRepository, $type = null, $id_type = null): Response
    {
        if ($request->attributes->get('_route') == 'app_routine_travail_add')
        {
            $routine_travail = new RoutineTravail();
            $routine_travail->setTempsPrevue(new \DateTime('00:00'));
            $routine_travail->setNombreAction(1);
            $routine_travail->setType($type);
            $routine_travail->setIdType($id_type);
        } else {
            $routine_travail = $routineTravailRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $routine_travail->setUserId($userId);
            }
        }

        $form_routine = $this->createForm(RoutineTravailType::class, $routine_travail);

        $form_routine->handleRequest($request);

        if ($form_routine->isSubmitted() && $form_routine->isValid()) {
            $entityManager->persist($routine_travail);
            $entityManager->flush();

            return $this->redirectToRoute('app_activite_professionnel_temps_travail', ['type' => $type, 'id' => $id_type]);
        }

        return $this->render('pages/rythme_vital/routine_travail_add.html.twig', [
            'form_routine' => $form_routine,
            'title_page' => 'Créer une routine de travail',
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
            'type' => $type,
        ]);
    }
    #[Route('/temps_travail/delete/{id}/{type}/{id_type}', name: 'app_routine_travail_delete')]
    public function routine_travail_delete(EntityManagerInterface $entityManager, int $id, RoutineTravailRepository $routineTravailRepository, $type = null, $id_type = null): Response
    {
        $routine_travail = $routineTravailRepository->find($id);
        $entityManager->remove($routine_travail);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');
        
        return $this->redirectToRoute('app_activite_professionnel_temps_travail', ['type' => $type, 'id' => $id_type]);
    }

    #[Route('/obligation_professionnel/mon_metier/{type}', name: 'app_mon_metier')]
    public function mon_metier(ObligationMetierRepository $obligationMetierRepository, $type = null): Response
    {
        $user = $this->getUser();

        if ($type == "metier") {
            $textIntro = "Dans cette page, j'indique mes différents métiers :";
        } elseif ($type == "etude") {
            $textIntro = "Dans cette page, j'indique mes différentes études :";
        } else {
            $textIntro = "Dans cette page, j'indique mes différentes formations :";
        }


        $lstMetier = $obligationMetierRepository->findBy(['user_id' => $user->getId(), 'type' => $type]);

        return $this->render('pages/rythme_vital/mon_metier.html.twig', [
            'title_page' => 'Mon/Mes métiers',
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
            'lstMetier' => $lstMetier,
            'type' => $type,
            'textIntro' => $textIntro,
        ]);
    }

    #[Route('/mes_metiers/add_metier_formation/{type}', name: 'app_metier_formation_add')]
    #[Route('/mes_metiers/modify_metier_formation/{id}/{type}', name: 'app_metier_formation_modify')]
    public function lst_mes_metiers(Request $request, EntityManagerInterface $entityManager, int $id = null, ObligationMetierRepository $obligationMetierRepository, $type = null): Response
    {
        if ($request->attributes->get('_route') == 'app_metier_formation_add')
        {
            $metier_formation = new ObligationMetier();
            $metier_formation->setLundi(new \DateTime('00:00'));
            $metier_formation->setMardi(new \DateTime('00:00'));
            $metier_formation->setMercredi(new \DateTime('00:00'));
            $metier_formation->setJeudi(new \DateTime('00:00'));
            $metier_formation->setVendredi(new \DateTime('00:00'));
            $metier_formation->setSamedi(new \DateTime('00:00'));
            $metier_formation->setDimanche(new \DateTime('00:00'));
            $metier_formation->setType($type);
            $textTitle = "Créer un métier / formation";
        } else {
            $metier_formation = $obligationMetierRepository->find($id);
            $textTitle = "Modifier un métier / formation";
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $metier_formation->setUserId($userId);
            }
        }

        $form_metier = $this->createForm(ObligationMetierType::class, $metier_formation);

        $form_metier->handleRequest($request);

        if ($form_metier->isSubmitted() && $form_metier->isValid()) {
            $entityManager->persist($metier_formation);
            $entityManager->flush();

            return $this->redirectToRoute('app_mon_metier', ['type' => $type]);
        }

        return $this->render('pages/rythme_vital/editer_metier_formation.html.twig', [
            'form_metier' => $form_metier,
            'title_page' => $textTitle,
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
        ]);
    }
    #[Route('/metier/delete/{id}/{type}', name: 'app_metier_delete')]
    public function app_liste_delete_metier(Request $request, EntityManagerInterface $entityManager, int $id = null, string $type = null, ObligationMetierRepository $obligationMetierRepository): Response
    {
        $metier = $obligationMetierRepository->find($id);
        $entityManager->remove($metier);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_mon_metier', ['type' => $type]);
    }

    #[Route('/journalier/add_rdv/{id_type}', name: 'app_journalier_rdv_add')]
    #[Route('/journalier/modify_rdv/{id}', name: 'app_journalier_rdv_modify')]
    public function lst_journalier_rdv(Request $request, EntityManagerInterface $entityManager, int $id = null, $id_type, JournalierRepository $journalierRepository): Response
    {
        $currentDate = new \DateTime('today');
        $user = $this->getUser();
        if ($request->attributes->get('_route') == 'app_journalier_rdv_add')
        {
            $rdv_journalier = new Journalier();
            $rdv_journalier->setStatut(False);
            $rdv_journalier->setDateJournalier($currentDate);
            $rdv_journalier->setTempsTask(new \DateTime('00:00'));
            $rdv_journalier->setHorraire(new \DateTime('00:00'));
            $rdv_journalier->setUserId($user->getId());
            $rdv_journalier->setTitre("Rendez-vous - "); 
            $rdv_journalier->setAffilier(True);
            $rdv_journalier->setIdZoom('activite');
            $rdv_journalier->setIdPrecis($id_type);

        } else {
            $rdv_journalier = $journalierRepository->find($id);
        }
        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
            }
        }


        $form_journalier_rdv = $this->createForm(JournalierRendezVousType::class, $rdv_journalier);

        $form_journalier_rdv->handleRequest($request);

        if ($form_journalier_rdv->isSubmitted() && $form_journalier_rdv->isValid()) {
            $entityManager->persist($rdv_journalier);
            $entityManager->flush($rdv_journalier);

            return $this->redirectToRoute('app_journalier');
        }

        return $this->render('pages/journalier/rdv_journalier_add.html.twig', [
            'form_journalier_rdv' => $form_journalier_rdv,
            'title_page' => 'Créer un rendez-vous',
            'imagePath' => 'img/picto-appel-a-donner.png',
        ]);
    }

    #[Route('/lst_loisirs_vacances', name: 'app_loisirs_vacances')]
    public function lst_loisirs_vacances(): Response
    {
        return $this->render('pages/rythme_vital/liste_loisirs_vacances.html.twig', [
            'title_page' => 'Mes Loisirs et/ou Vacances',
            'imagePath' => 'img/picto-mes-loisirs.png',
        ]);
    }

    #[Route('/loisir_vacance/{type}', name: 'app_loisir_vacance')]
    public function loisir_vacance(Security $security, $type, MesLoisirsRepository $mesLoisirsRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($type == 'tele_cine') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'tele_cine']);
            $title_page = "Quel temps je consacre à Regarder la TV (informations, émissions, séries, documentaires) ou à aller au cinéma ?";
        } elseif ($type == 'sport') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'sport']);
            $title_page = "Quel temps je consacre à la pratique d'un sport, à la marche, au yoga ou à tout autre exercice physique ?"; 
        } elseif ($type == 'lecture') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'lecture']);
            $title_page = "Quel temps je consacre à lire des livres, des magazines, des articles en ligne."; 
        } elseif ($type == 'musique') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'musique']);
            $title_page = "Quel temps je consacre à écouter de la musique, jouer d'un instrument , chanter ou assister à des concerts ?";
        } elseif ($type == 'art_creatif') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'art_creatif']);
            $title_page = "Quel temps je consacre à peindre, dessiner, sculpter, coudre, écrire ou s'exprimer dans d'autres formes d'expression artistique";
        } elseif ($type == 'voyage') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'voyage']);
            $title_page = "Quel temps je consacre aux voyages, à l’exploration de nouveaux endroits, que ce soit à l'échelle locale ou internationale ?";
        } elseif ($type == 'jeux') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'jeux']);
            $title_page = "Quel temps je consacre aux jeux (Vidéo, de société) et autres activités ludiques ?";
        } elseif ($type == 'bien_etre') {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'bien_etre']);
            $title_page = "Quel temps je consacre à des activités telles que la méditation, le spa, le massage et d'autres pratiques axées sur le bien-être physique et mentale.";
        } else {
            $lst_obligations = $mesLoisirsRepository->findBy(['user_id' => $userId, 'type_loisir' => 'autre']);
            $title_page = "Quel temps je consacre à d’autres sources de détente et de plaisir ?";
        }

        return $this->render('pages/rythme_vital/liste_des_loisirs.html.twig', [
            'lst_obligations' => $lst_obligations,
            'title_page' => 'Liste des loisirs',
            'imagePath' => 'img/picto-obligation-domestique.png',
            'texteIntro' => $title_page,
            'type' => $type,
        ]);
    }

    #[Route('/ajouter_loisir/{type}', name: 'app_ajouter_loisir')]
    #[Route('/modifier_loisir/{type}/{id}', name: 'app_modifier_loisir')]
    public function add_loisir(Security $security, $type, EntityManagerInterface $entityManager, Request $request, int $id = null, MesLoisirsRepository $mesLoisirsRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_loisir')
        {
            $titre_obligation = "Ajouter un loisir";

            $obligation = new MesLoisirs();
            $obligation->setUserId($user->getId());
            $obligation->setTempsPrevue(new \DateTime('00:00'));
            $obligation->setTypeLoisir($type);
            $strBesoin = "Ajouter une obligation familiale";

        } else {
            $obligation = $mesLoisirsRepository->find($id);
            $titre_obligation = $obligation->getObjet();
            $strBesoin = "Modifier un loisir";
        }

        $form_loisir = $this->createForm(MesLoisirsType::class, $obligation);

        
        $form_loisir->handleRequest($request);

        if ($form_loisir->isSubmitted() && $form_loisir->isValid()) {
            $entityManager->persist($obligation);
            $entityManager->flush();

            return $this->redirectToRoute('app_loisir_vacance', ['type' => $type]);
        }

        return $this->render('pages/rythme_vital/editer_loisirs.html.twig', [
            'form_loisir' => $form_loisir,
            'title_page' => $strBesoin,
            'titreObligation' => $titre_obligation,
            'imagePath' => 'img/picto-mes-besoins-vitaux.png',
        ]);
    }

    #[Route('/lst_liens_sociaux', name: 'app_liens_sociaux')]
    public function lst_liens_sociaux(Security $security, MesLiensSociauxRepository $mesLiensSociauxRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        // Calcul du total des temps et pourcentage Reunion Famille //
                
        $lienSociauxReunionF = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'reunion_famille']);

        $totalSecondsLienSociauxReunionF = 0;
        foreach ($lienSociauxReunionF as $obligation) {
            $totalSecondsLienSociauxReunionF += $obligation->getTempsPrevue()->getTimestamp();
        }

        $totalHoursLienSociauxReunionF = $totalSecondsLienSociauxReunionF / 3600; // Conversion en heures

        $moyennePerDayLienSociauxReunionF = $totalHoursLienSociauxReunionF / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayLienSociauxReunionF * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayLienSociauxReunionF);
        $moyenneTimeFormattedLienSociauxReunionF = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageLienSociauxReunionF = $moyennePerDayLienSociauxReunionF / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageLienSociauxReunionFArrondi = round($pourcentageLienSociauxReunionF * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutReunionF = 0;

        foreach ($lienSociauxReunionF as $obligation) {
            $temps = $obligation->getTempsPrevue()->getTimestamp();
            if ($temps != 0) {
                $countStatutReunionF += 1;
            }
        }

        // Calcul du total des temps et pourcentage Reunion Amis //
                
        $lienSociauxReunionA = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'reunion_amis']);

        $totalSecondsLienSociauxReunionA = 0;
        foreach ($lienSociauxReunionA as $obligation) {
            $totalSecondsLienSociauxReunionA += $obligation->getTempsPrevue()->getTimestamp();
        }

        $totalHoursLienSociauxReunionA = $totalSecondsLienSociauxReunionA / 3600; // Conversion en heures

        $moyennePerDayLienSociauxReunionA = $totalHoursLienSociauxReunionA / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayLienSociauxReunionA * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayLienSociauxReunionA);
        $moyenneTimeFormattedLienSociauxReunionA = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageLienSociauxReunionA = $moyennePerDayLienSociauxReunionA / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageLienSociauxReunionAArrondi = round($pourcentageLienSociauxReunionA * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutReunionA = 0;

        foreach ($lienSociauxReunionA as $obligation) {
            $temps = $obligation->getTempsPrevue()->getTimestamp();
            if ($temps != 0) {
                $countStatutReunionA += 1;
            }
        }

        // Calcul du total des temps et pourcentage Fête //
                
        $lienSociauxFete = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'fete']);

        $totalSecondsLienSociauxFete = 0;
        foreach ($lienSociauxFete as $obligation) {
            $totalSecondsLienSociauxFete += $obligation->getTempsPrevue()->getTimestamp();
        }

        $totalHoursLienSociauxFete = $totalSecondsLienSociauxFete / 3600; // Conversion en heures

        $moyennePerDayLienSociauxFete = $totalHoursLienSociauxFete / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayLienSociauxFete * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayLienSociauxFete);
        $moyenneTimeFormattedLienSociauxFete = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageLienSociauxFete = $moyennePerDayLienSociauxFete / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageLienSociauxFeteArrondi = round($pourcentageLienSociauxFete * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutFete = 0;

        foreach ($lienSociauxFete as $obligation) {
            $temps = $obligation->getTempsPrevue()->getTimestamp();
            if ($temps != 0) {
                $countStatutFete += 1;
            }
        }

        // Calcul du total des temps et pourcentage Association //
                
        $lienSociauxAssociation = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'association']);

        $totalSecondsLienSociauxAssociation = 0;
        foreach ($lienSociauxAssociation as $obligation) {
            $totalSecondsLienSociauxAssociation += $obligation->getTempsPrevue()->getTimestamp();
        }

        $totalHoursLienSociauxAssociation = $totalSecondsLienSociauxAssociation / 3600; // Conversion en heures

        $moyennePerDayLienSociauxAssociation = $totalHoursLienSociauxAssociation / 7;

        $moyenneSeconds = 0;
        $moyenneMinutes = 0;
        $moyenneHours = 0;
        $moyenneSeconds = $moyennePerDayLienSociauxAssociation * 3600;
        $moyenneMinutes = round(($moyenneSeconds / 60) % 60);
        $moyenneHours = floor($moyennePerDayLienSociauxAssociation);
        $moyenneTimeFormattedLienSociauxAssociation = sprintf("%02dh%02d", $moyenneHours, $moyenneMinutes);

        $pourcentageLienSociauxAssociation = $moyennePerDayLienSociauxAssociation / 24 * 100; // Convertir en pourcentage pour une journée complète
        $pourcentageLienSociauxAssociationArrondi = round($pourcentageLienSociauxAssociation * 2) / 2;

        // Statut pour les soins des enfants

        $countStatutAssociation = 0;

        foreach ($lienSociauxAssociation as $obligation) {
            $temps = $obligation->getTempsPrevue()->getTimestamp();
            if ($temps != 0) {
                $countStatutAssociation += 1;
            }
        }

        return $this->render('pages/rythme_vital/liste_liens_sociaux.html.twig', [
            'title_page' => 'Mes Liens Sociaux',
            'imagePath' => 'img/picto-liens-sociaux.png',
            'moyenneTimeFormattedLienSociauxReunionF' => $moyenneTimeFormattedLienSociauxReunionF,
            'pourcentageLienSociauxReunionFArrondi' => $pourcentageLienSociauxReunionFArrondi,
            'countStatutReunionF' => $countStatutReunionF,
            'moyenneTimeFormattedLienSociauxReunionA' => $moyenneTimeFormattedLienSociauxReunionA,
            'pourcentageLienSociauxReunionAArrondi' => $pourcentageLienSociauxReunionAArrondi,
            'countStatutReunionA' => $countStatutReunionA,
            'moyenneTimeFormattedLienSociauxFete' => $moyenneTimeFormattedLienSociauxFete,
            'pourcentageLienSociauxFeteArrondi' => $pourcentageLienSociauxFeteArrondi,
            'countStatutFete' => $countStatutFete,
            'moyenneTimeFormattedLienSociauxAssociation' => $moyenneTimeFormattedLienSociauxAssociation,
            'pourcentageLienSociauxAssociationArrondi' => $pourcentageLienSociauxAssociationArrondi,
            'countStatutAssociation' => $countStatutAssociation,
        ]);
    }

    #[Route('/lien_sociaux/{type}', name: 'app_lien_sociaux')]
    public function lien_sociaux(Security $security, $type, MesLiensSociauxRepository $mesLiensSociauxRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($type == 'reunion_famille') {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'reunion_famille']);
            $title_page = "Est ce que je programme à une fréquence régulière des réunions, repas ou occasions spéciales en famille ?";
        } elseif ($type == 'reunion_amis') {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'reunion_amis']);
            $title_page = "Est ce que je programme à une fréquence régulière des réunions, repas ou occasions spéciales entre amis ?"; 
        } elseif ($type == 'fete') {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'fete']);
            $title_page = "Est ce que je participe à une fréquence régulière  à des événements spéciaux, à des célébrations culturelles spécifiques ?"; 
        } elseif ($type == 'association') {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'association']);
            $title_page = "Est ce que je participe à une fréquence régulière à des réunions de clubs, de communes, d'associations ?";
        } elseif ($type == 'benevolat') {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'benevolat']);
            $title_page = "Est ce que je m’engage à une fréquence régulière  dans des activités bénévoles et de partages ?";
        } elseif ($type == 'cours') {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'cours']);
            $title_page = "Est ce que je participe à une fréquence régulière à des cours, des ateliers ou à des clubs autour d'un intérêt commun en me permettant de rencontrer des personnes partageant les mêmes passions ?";
        } else {
            $lst_obligations = $mesLiensSociauxRepository->findBy(['user_id' => $userId, 'type_loisir' => 'autre']);
            $title_page = "Quel temps je consacre de manière régulière à d’autres activités collectives ?";
        }

        return $this->render('pages/rythme_vital/liste_des_liens.html.twig', [
            'lst_obligations' => $lst_obligations,
            'title_page' => 'Liste des liens sociaux',
            'imagePath' => 'img/picto-liens-sociaux.png',
            'texteIntro' => $title_page,
            'type' => $type,
        ]);
    }

    #[Route('/ajouter_lien/{type}', name: 'app_ajouter_lien')]
    #[Route('/modifier_lien/{type}/{id}', name: 'app_modifier_lien')]
    public function add_lien(Security $security, $type, EntityManagerInterface $entityManager, Request $request, int $id = null, MesLiensSociauxRepository $mesLiensSociauxRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_lien')
        {
            $titre_obligation = "Ajouter un lien social";

            $obligation = new MesLiensSociaux();
            $obligation->setUserId($user->getId());
            $obligation->setTempsPrevue(new \DateTime('00:00'));
            $obligation->setTypeLoisir($type);
            $strBesoin = "Ajouter un lien social";

        } else {
            $obligation = $mesLiensSociauxRepository->find($id);
            $titre_obligation = $obligation->getObjet();
            $strBesoin = "Modifier un lien social";
        }

        $form_lien = $this->createForm(MesLiensSociauxType::class, $obligation);

        
        $form_lien->handleRequest($request);

        if ($form_lien->isSubmitted() && $form_lien->isValid()) {
            $entityManager->persist($obligation);
            $entityManager->flush();

            return $this->redirectToRoute('app_lien_sociaux', ['type' => $type]);
        }

        return $this->render('pages/rythme_vital/editer_liens.html.twig', [
            'form_lien' => $form_lien,
            'title_page' => $strBesoin,
            'titreObligation' => $titre_obligation,
            'imagePath' => 'img/picto-liens-sociaux.png',
        ]);
    }

    // Plan d'action //

    #[Route('/ajouter_pda/{id}', name: 'app_ajouter_pda')]
    #[Route('/modifier_pda/{id}/{id_pda}', name: 'app_modifier_pda')]
    public function add_pda(Security $security, EntityManagerInterface $entityManager, Request $request, int $id = null, int $id_pda = null, PlanActionRepository $planActionRepository, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_pda')
        {
            $titre_pda = "Ajouter une action";

            $pda = new PlanAction();
            $pda->setUserId($user->getId());
            $pda->setIdObjectif($id);
            $strBesoin = "Ajouter une action";

        } else {
            $pda = $planActionRepository->find($id_pda);
            $strBesoin = "Modifier une action";
        }

        $form_pda = $this->createForm(PlanActionType::class, $pda);

        $titre_pda = ""; 
        $form_pda->handleRequest($request);

        $objectif = $objectifRepository->find($id);

        $date_fin = $objectif->getDateFin();
        if ($form_pda->isSubmitted() && $form_pda->isValid()) {
            if ($request->attributes->get('_route') == 'app_ajouter_pda'){
                $inputDate = $form_pda->get('date_realisation')->getData();
                $frequence = $form_pda->get('frequence')->getData();

                // Calculer le nombre de semaines entre la date de réalisation et la date de fin
                $diff = $inputDate->diff($date_fin);
                $nombre_semaines = ceil($diff->days / 7);

                if ($frequence == "hebdomadaire") {
                    for ($i = 0; $i < $nombre_semaines; $i++) {
                        // Créer un nouvel objet PDA pour chaque semaine
                        $currentDate = clone $inputDate;
                        $currentDate->modify('+' . ($i * 7) . ' days');
            
                        $monday = clone $currentDate;
                        $monday->setISODate($currentDate->format('o'), $currentDate->format('W'), 1);
                        
                        $sunday = clone $monday;
                        $sunday->modify('+6 days');
            
                        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                        $weekString = $formatter->format($monday) . ' au ' . $formatter->format($sunday);
            
                        $pdaClone = clone $pda;
                        $pdaClone->setSemaine($weekString);
                        $pdaClone->setDateRealisation($currentDate);
            
                        $entityManager->persist($pdaClone);
                    }
                    $entityManager->flush();
                } elseif ($frequence == "quotidien") {
                    $nombre_jours = ceil($diff->days);
                    for ($i = 0; $i < $nombre_jours; $i++) {
                        // Créer un nouvel objet PDA pour chaque semaine
                        $currentDate = clone $inputDate;
                        $currentDate->modify('+' . $i . ' days');
            
                        $monday = clone $currentDate;
                        $monday->setISODate($currentDate->format('o'), $currentDate->format('W'), 1);
                        
                        $sunday = clone $monday;
                        $sunday->modify('+6 days');
            
                        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                        $weekString = $formatter->format($monday) . ' au ' . $formatter->format($sunday);
            
                        $pdaClone = clone $pda;
                        $pdaClone->setSemaine($weekString);
                        $pdaClone->setDateRealisation($currentDate);

                        dd($pdaClone);
            
                        $entityManager->persist($pdaClone);
                    }
                    $entityManager->flush(); 
                } elseif ($frequence == "quinzaine") {
                    // Calculer le nombre de jours entre la date de réalisation et la date de fin
                    $nombre_jours = $diff->days;
            
                    for ($i = 0; $i < $nombre_jours; $i += 14) {
                        // Créer un nouvel objet PDA pour chaque quinzaine
                        $currentDate = clone $inputDate;
                        $currentDate->modify('+' . $i . ' days');
            
                        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                        $weekString = $formatter->format($currentDate) . ' au ' . $formatter->format($currentDate->modify('+13 days'));
            
                        $pdaClone = clone $pda;
                        $pdaClone->setSemaine($weekString);
                        $pdaClone->setDateRealisation($currentDate);
            
                        $entityManager->persist($pdaClone);
                    }
                    $entityManager->flush();
                } elseif ($frequence == "mensuel") {
                    // Calculer le nombre de mois entre la date de réalisation et la date de fin
                    $nombre_mois = $diff->m + ($diff->y * 12);
            
                    for ($i = 0; $i < $nombre_mois; $i++) {
                        // Créer un nouvel objet PDA pour chaque mois
                        $currentDate = clone $inputDate;
                        $currentDate->modify('+' . $i . ' months');
            
                        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                        $weekString = $formatter->format($currentDate->modify('first day of this month')) . ' au ' . $formatter->format($currentDate->modify('last day of this month'));
            
                        $pdaClone = clone $pda;
                        $pdaClone->setSemaine($weekString);
                        $pdaClone->setDateRealisation($currentDate);
            
                        $entityManager->persist($pdaClone);
                    }
                    $entityManager->flush();
                } elseif ($frequence == "trimestriel") {
                    // Calculer le nombre de trimestres entre la date de réalisation et la date de fin
                    $nombre_trimestres = ceil(($diff->m + ($diff->y * 12)) / 3);
            
                    for ($i = 0; $i < $nombre_trimestres; $i++) {
                        // Créer un nouvel objet PDA pour chaque trimestre
                        $currentDate = clone $inputDate;
                        $currentDate->modify('+' . ($i * 3) . ' months');
            
                        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                        $weekString = $formatter->format($currentDate->modify('first day of this month')) . ' au ' . $formatter->format($currentDate->modify('last day of this month'));
            
                        $pdaClone = clone $pda;
                        $pdaClone->setSemaine($weekString);
                        $pdaClone->setDateRealisation($currentDate);
            
                        $entityManager->persist($pdaClone);
                    }
                } elseif ($frequence == "annuel") {
                    // Calculer le nombre d'années entre la date de réalisation et la date de fin
                    $nombre_annees = ceil($diff->days / 365);
            
                    for ($i = 0; $i < $nombre_annees; $i++) {
                        // Créer un nouvel objet PDA pour chaque année
                        $currentDate = clone $inputDate;
                        $currentDate->modify('+' . $i . ' years');
            
                        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                        $weekString = $formatter->format($currentDate->modify('first day of January')) . ' au ' . $formatter->format($currentDate->modify('last day of December'));
            
                        $pdaClone = clone $pda;
                        $pdaClone->setSemaine($weekString);
                        $pdaClone->setDateRealisation($currentDate);
            
                        $entityManager->persist($pdaClone);
                    }
                    $entityManager->flush();
                }
            } else {
               // On cherche le lundi et dimanche pour afficher la semaine au final affichage : "Semaine du 18/12/2013 au 24/12/2023" //

                $inputDate = $form_pda->get('date_realisation')->getData();
                
                $monday = clone $inputDate;
                $monday->setISODate($inputDate->format('o'), $inputDate->format('W'), 1);
                
                $sunday = clone $monday;
                $sunday->modify('+6 days');

                $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE);
                $weekString = $formatter->format($monday) . ' au ' . $formatter->format($sunday);

                $pda->setSemaine($weekString);

                $entityManager->persist($pda);
                $entityManager->flush();
            }

            return $this->redirectToRoute('app_visualiser_plan_action', ['id' => $id]);
        }

        return $this->render('pages/objectif/editer_pda.html.twig', [
            'form_pda' => $form_pda,
            'title_page' => $strBesoin,
            'titrePDA' => $titre_pda,
            'imagePath' => 'img/icon-pda.png',
        ]);
    }

    #[Route('/visualiser-plan-action/{id}', name: 'app_visualiser_plan_action')]
    public function visualiser_plan_action(Security $security, $id, ObjectifRepository $objectifRepository, PlanActionRepository $planActionRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $objectif = $objectifRepository->find($id);

        $title_objectif = $objectif->getTitre();
        $title_page = 'Visualiser mon plan d\'action : ' . $title_objectif;

        $lstPlanAction = $planActionRepository->findBy(['user_id' => $userId, 'id_objectif' => $id], ['date_realisation' => 'ASC']);

        return $this->render('pages/objectif/visualiser_pda.html.twig', [
            'title_page' => $title_page,
            'imagePath' => 'img/icon-pda.png',
            'id_objectif' => $id,
            'objectif' => $objectif,
            'lstPlanAction' => $lstPlanAction,
        ]);
    }

    #[Route('/tache_pda/delete/{id}/{id_objectif}', name: 'app_tache_pda_delete')]
    public function tache_pda_delete(Request $request, EntityManagerInterface $entityManager, int $id, int $id_objectif, PlanActionRepository $planActionRepository): Response
    {
        $tache_pda = $planActionRepository->find($id);
        $entityManager->remove($tache_pda);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_visualiser_plan_action', ['id' => $id_objectif]);
    }
    // Objectif FINANCE //

    #[Route('/objectif-finance', name: 'app_objectif_finance')]
    public function objectif_finance(Security $security, ObjectifFinanceLoisirRepository $objectifFinanceLoisirRepository, MesRevenusRepository $mesRevenusRepository, FondUrgenceRepository $fondUrgenceRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $finance_loisir = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'loisir']);
        $totalMontantFinanceLoisir = 0;
        foreach ($finance_loisir as $loisir) {
            $totalMontantFinanceLoisir += $loisir->getMontant();
        }

        $finance_formation = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'formation']);
        $totalMontantFinanceFormation = 0;
        foreach ($finance_formation as $loisir) {
            $totalMontantFinanceFormation += $loisir->getMontant();
        }

        $finance_donation = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'donation']);
        $totalMontantFinanceDonation = 0;
        foreach ($finance_donation as $loisir) {
            $totalMontantFinanceDonation += $loisir->getMontant();
        }

        $finance_depense = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'depense']);
        $totalMontantFinanceDepense = 0;
        foreach ($finance_depense as $loisir) {
            $totalMontantFinanceDepense += $loisir->getMontant();
        }

        $revenus = $mesRevenusRepository->findBy(['user_id' => $userId]);
        $totalRevenus = 0;
        foreach ($revenus as $revenu) {
            $totalRevenus += $revenu->getRevenu();
        }

        // Pourcentage du revenus //

        if ($totalRevenus > 0) {
            $pourcentageLoisir = ($totalMontantFinanceLoisir / $totalRevenus) * 100;
            $pourcentageLoisir = round($pourcentageLoisir * 2) / 2;

            $pourcentageFormation = ($totalMontantFinanceFormation / $totalRevenus) * 100;
            $pourcentageFormation = round($pourcentageFormation * 2) / 2;

            $pourcentageDonation = ($totalMontantFinanceDonation / $totalRevenus) * 100;
            $pourcentageDonation = round($pourcentageDonation * 2) / 2;

            $pourcentageDepense = ($totalMontantFinanceDepense / $totalRevenus) * 100;
            $pourcentageDepense = round($pourcentageDepense * 2) / 2;
        } else {
            $pourcentageLoisir = 0;
            $pourcentageFormation = 0;
            $pourcentageDonation = 0;
            $pourcentageDepense = 0;
        }

        $FondUrgence = $fondUrgenceRepository->findOneBy(['user_id' => $userId]);
        $idFondUrgence = $FondUrgence->getId();

        $totalMontantFinanceUrgence = $FondUrgence->getMontantDispo();

        return $this->render('pages/objectif/finance/liste_finances.html.twig', [
            'title_page' => 'Objectif Finance',
            'imagePath' => 'img/icon-pda.png',
            'totalMontantFinanceLoisir' => $totalMontantFinanceLoisir,
            'totalMontantFinanceFormation' => $totalMontantFinanceFormation,
            'totalMontantFinanceDonation' => $totalMontantFinanceDonation,
            'totalMontantFinanceDepense' => $totalMontantFinanceDepense,
            'totalRevenus' => $totalRevenus,
            'idFondUrgence' => $idFondUrgence,
            'totalMontantFinanceUrgence' => $totalMontantFinanceUrgence,
            'pourcentageLoisir' => $pourcentageLoisir,
            'pourcentageFormation' => $pourcentageFormation,
            'pourcentageDonation' => $pourcentageDonation,
            'pourcentageDepense' => $pourcentageDepense,
        ]);
    }
    
    #[Route('/lst_finance_loisir/{type}', name: 'app_finance_loisir')]
    public function lst_finance_loisir(Security $security, $type,ObjectifFinanceLoisirRepository $objectifFinanceLoisirRepository, EntityManagerInterface $entityManager, MesRevenusRepository $mesRevenusRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstFinanceLoisir = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => $type]);
        $titleComplementary = "";
        $textIntro = "";
        if ($type == "loisir") {
            $titleComplementary = "Mes Loisirs";
            $textIntro = "Gérer mes finances personnelles est essentiel à mon bien être. Cela minimise mon stress, me permet d'ateindre mes objectifs et de me construire mon avenir. C'est essentiel à ma stabilité et à ma sécurité. Dans cette page, je détermine mes budgets personnels cible.";
        } elseif ($type == "formation") {
            $titleComplementary = "Ma Formation";
            $textIntro = "Gérer mes finances personnelles est essentiel à mon bien être. Cela minimise mon stress, me permet d'ateindre mes objectifs et de me construire mon avenir. C'est essentiel à ma stabilité et à ma sécurité. Dans cette page, je détermine mes budgets personnels cible.";
        } elseif ($type == "donation") {
            $titleComplementary = "Donations & Partages";
            $textIntro = "Gérer mes finances personnelles est essentiel à mon bien être. Cela minimise mon stress, me permet d'ateindre mes objectifs et de me construire mon avenir. C'est essentiel à ma stabilité et à ma sécurité. Dans cette page, je détermine mes budgets personnels cible.";
        } elseif ($type == "depense") {
            $titleComplementary = "Mes dépenses indispensables";
            $textIntro = "J'indique dans cette page mes dépenses personnelles Mensuelles moyenne prévisibles pour me loger.";
        } elseif ($type == "depense_logement") {
            $titleComplementary = "Mes dépenses de logements";
            $textIntro = "J'indique dans cette page mes dépenses personnelles Mensuelles moyenne prévisibles pour me loger.";
        }

        $depenseLogement = $objectifFinanceLoisirRepository->findOneBy(['user_id' => $userId, 'titre' => 'Dépenses de logements']);
        $lstFinanceLogement = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'depense_logement']);

        $depenseTransport = $objectifFinanceLoisirRepository->findOneBy(['user_id' => $userId, 'titre' => 'Dépenses de Transport']);
        $lstFinanceTransport = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'depense_transport']);

        $depenseEducation = $objectifFinanceLoisirRepository->findOneBy(['user_id' => $userId, 'titre' => 'Dépenses d\'éducation (Mes enfants)']);
        $lstFinanceEducation = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'depense_education']);

        $depenseCommunication = $objectifFinanceLoisirRepository->findOneBy(['user_id' => $userId, 'titre' => 'Dépenses de communication, échanges (Téléphone, internet)']);
        $lstFinanceCommunication = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'depense_communication']);

        if ($type == "depense") {
            $montantLogement = 0;
            foreach ($lstFinanceLogement as $frais) {
                $montantLogement += $frais->getMontant(); 
            }
            $depenseLogement->setMontant($montantLogement);
            $entityManager->persist($depenseLogement);
            $entityManager->flush();

            $montantTransport = 0;
            foreach ($lstFinanceTransport as $frais) {
                $montantTransport += $frais->getMontant(); 
            }
            $depenseTransport->setMontant($montantTransport);
            $entityManager->persist($depenseTransport);
            $entityManager->flush();

            $montantEducation = 0;
            foreach ($lstFinanceEducation as $frais) {
                $montantEducation += $frais->getMontant(); 
            }
            $depenseEducation->setMontant($montantEducation);
            $entityManager->persist($depenseEducation);
            $entityManager->flush();
        }

        $revenus = $mesRevenusRepository->findBy(['user_id' => $userId]);
        $totalRevenus = 0;
        foreach ($revenus as $revenu) {
            $totalRevenus += $revenu->getRevenu();
        }

        return $this->render('pages/objectif/finance/liste_finances_loisirs.html.twig', [
            'title_page' => 'Objectif finance - ' . $titleComplementary,
            'imagePath' => 'img/objectif-finance.png',
            'lstFinanceLoisir' => $lstFinanceLoisir,
            'revenus' => $totalRevenus,
            'textIntro' => $textIntro,
        ]);
    }

    #[Route('/ajouter_finance_loisir/{type}', name: 'app_ajouter_finance_loisir')]
    #[Route('/modifier_finance_loisir/{type}/{id}', name: 'app_modifier_finance_loisir')]
    public function add_finance_loisir(Security $security, EntityManagerInterface $entityManager, Request $request, int $id = null,$type, ObjectifFinanceLoisirRepository $objectifFinanceLoisirRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_finance_loisir')
        {
            $titre_pda = "Ajouter un coût de loisir";

            $loisir = new ObjectifFinanceLoisir();
            $loisir->setUserId($userId);
            $strBesoin = "Ajouter un coût de loisir";
            $loisir->setType($type);

        } else {
            $loisir = $objectifFinanceLoisirRepository->find($id);
            $strBesoin = "Ajouter un coût de loisir";
        }

        $form_finance_loisir = $this->createForm(ObjectifFinanceLoisirType::class, $loisir);

        
        $form_finance_loisir->handleRequest($request);

        if ($form_finance_loisir->isSubmitted() && $form_finance_loisir->isValid()) {

            $entityManager->persist($loisir);
            $entityManager->flush();

            return $this->redirectToRoute('app_finance_loisir', ['type' => $type]);
        }

        return $this->render('pages/objectif/finance/editer_finance_loisir.html.twig', [
            'form_finance_loisir' => $form_finance_loisir,
            'title_page' => $strBesoin,
            'imagePath' => 'img/icon-pda.png',
        ]);
    }

    #[Route('/lst_donation', name: 'app_donation')]
    public function lst_donation(Security $security ,ObjectifFinanceLoisirRepository $objectifFinanceLoisirRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstFinanceLoisir = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/objectif/finance/liste_finances_loisirs.html.twig', [
            'title_page' => 'Objectif finance - Mes loisirs',
            'imagePath' => 'img/objectif-finance.png',
            'lstFinanceLoisir' => $lstFinanceLoisir,
        ]);
    }

    // Mes revenus //

    #[Route('/lst_finance_revenus', name: 'app_finance_revenus')]
    public function lst_finance_revenus(Security $security, MesRevenusRepository $mesRevenusRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstFinanceRevenus = $mesRevenusRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/objectif/finance/liste_revenus.html.twig', [
            'title_page' => 'Objectif finance - Mes revenus',
            'imagePath' => 'img/objectif-finance.png',
            'lstFinanceRevenus' => $lstFinanceRevenus,
        ]);
    }
    
    #[Route('/ajouter_mes_revenus', name: 'app_ajouter_mes_revenus')]
    #[Route('/modifier_mes_revenus/{id}', name: 'app_modifier_mes_revenus')]
    public function add_mes_revenus(Security $security, EntityManagerInterface $entityManager, Request $request, int $id = null, MesRevenusRepository $mesRevenusRepository ): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_mes_revenus')
        {
            $revenu = new MesRevenus();
            $revenu->setUserId($userId);
            $strBesoin = "Ajouter un revenu";

        } else {
            $revenu = $mesRevenusRepository->find($id);
            $strBesoin = "Ajouter un revenu";
        }

        $form_finance_revenu = $this->createForm(MesRevenusType::class, $revenu);

        
        $form_finance_revenu->handleRequest($request);

        if ($form_finance_revenu->isSubmitted() && $form_finance_revenu->isValid()) {

            $entityManager->persist($revenu);
            $entityManager->flush();

            return $this->redirectToRoute('app_finance_revenus');
        }

        return $this->render('pages/objectif/finance/editer_revenu.html.twig', [
            'form_finance_revenu' => $form_finance_revenu,
            'title_page' => $strBesoin,
            'imagePath' => 'img/icon-pda.png',
        ]);
    }

    // Mes fonds d'urgence //

    #[Route('/ajouter_fond_urgence', name: 'app_ajouter_fond_urgence')]
    #[Route('/modifier_fond_urgence/{id}', name: 'app_modifier_fond_urgence')]
    public function add_fond_urgence(Security $security, EntityManagerInterface $entityManager, Request $request, int $id = null, FondUrgenceRepository $fondUrgenceRepository, MesRevenusRepository $mesRevenusRepository, JournalierRepository $journalierRepository, ObjectifFinanceLoisirRepository $objectifFinanceLoisirRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_ajouter_fond_urgence')
        {
            $fond = new FondUrgence();
            $fond->setUserId($userId);
            $strBesoin = "Ajouter un fond d'urgence";

        } else {
            $fond = $fondUrgenceRepository->find($id);
            $strBesoin = "Ajouter un fond d'urgence";
        }

        $finance_depense = $objectifFinanceLoisirRepository->findBy(['user_id' => $userId, 'type' => 'depense']);
        $totalMontantFinanceDepense = 0;
        foreach ($finance_depense as $loisir) {
            $totalMontantFinanceDepense += $loisir->getMontant();
        }

        $totalRevenusEpargne = $totalMontantFinanceDepense * 6;

        $form_finance_fond = $this->createForm(FondUrgenceType::class, $fond);

        
        $form_finance_fond->handleRequest($request);

        if ($form_finance_fond->isSubmitted() && $form_finance_fond->isValid()) {
            $inputEpargne = $form_finance_fond->get('epargne_place')->getData();
            if ($inputEpargne == "non") {
                $journalier = new Journalier();
                $journalier->setStatut(False);
                $journalier->setDateJournalier(new \DateTime());
                $journalier->setUserId($user->getId());
                $journalier->setTitre("Ouvrir un compte livret A à ma banque et virer 20€");
                $journalier->setTempsTask(new \DateTime('00:30'));
                $journalier->setAffilier(False);
                $journalier->setIdZoom('no');

                $entityManager->persist($journalier);
                $entityManager->flush();

                $dixPourcent = $totalMontantFinanceDepense * 0.10;

                $journalier2 = new Journalier();
                $journalier2->setStatut(False);
                $journalier2->setDateJournalier(new \DateTime());
                $journalier2->setUserId($user->getId());
                $journalier2->setTitre("Créer un ordre de virement mensuel de " . $dixPourcent.  "€ de mon compte chèque vers mon compte épargne");
                $journalier2->setTempsTask(new \DateTime('00:30'));
                $journalier2->setAffilier(False);
                $journalier2->setIdZoom('no');

                $entityManager->persist($journalier2);
                $entityManager->flush();
            }
            $entityManager->persist($fond);
            $entityManager->flush();

            return $this->redirectToRoute('app_objectif_finance');
        }

        return $this->render('pages/objectif/finance/editer_fond_urgence.html.twig', [
            'form_finance_fond' => $form_finance_fond,
            'title_page' => $strBesoin,
            'totalRevenusEpargne' => $totalRevenusEpargne,
            'imagePath' => 'img/icon-pda.png',
        ]);
    }

    #[Route('/liste_plan_action/visualiser', name: 'app_liste_plan_action')]
    public function liste_plan_action_visualiser(ObjectifRepository $objectifRepository): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();

        $lstObjectifs = $objectifRepository->findBy(['id_user' => $userId]);

        return $this->render('pages/objectif/visualiser-mes-plans-action.html.twig', [
            'title_page' => 'Visualiser Mes Plans d\'Actions',
            'imagePath' => 'img/icon-agenda.png',
            'lstObjectifs' => $lstObjectifs,
        ]);
    }

    // Objectif Santé //

    #[Route('/mes_objectifs/sante/lst_objectifs_sante', name: 'app_objectifs_sante')]
    public function lst_objectifs_sante(Security $security, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $countAlimentation = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'Alimentation']);
        $countSommeil = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'Sommeil']);
        $countActivite = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'Activite']);
        $countBienEtre = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'BienEtre']);
        $countMedical = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'Medical']);
        $countComportement = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'Comportement']);
        $countAutres = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'Autres']);

        return $this->render('pages/objectif/sante/liste_sante.html.twig', [
            'title_page' => 'Objectif Santé',
            'imagePath' => 'img/icon-sante.png',
            'countAlimentation' => $countAlimentation,
            'countSommeil' => $countSommeil,
            'countActivite' => $countActivite,
            'countBienEtre' => $countBienEtre,
            'countMedical' => $countMedical,
            'countComportement' => $countComportement,
            'countAutres' => $countAutres,
        ]);
    }

    #[Route('/objectif/ajout/{secteur}/{idSecteur}/{typeActivity}', name: 'app_form_objectif_add_activite_loisir')]
    #[Route('/objectif/modifier/{secteur}/{idSecteur}/{id}', name: 'app_modifier_form_objectif_mod_activite_loisir')]
    #[Route('/objectif/ajout/{secteur}/{idSecteur}/{typeActivity}', name: 'app_form_objectif_add_activite')]
    #[Route('/objectif/modifier/{secteur}/{idSecteur}/{id}', name: 'app_modifier_form_objectif_mod_activite')]
    #[Route('/objectif/ajout/{secteur}/{idSecteur}', name: 'app_form_objectif_activite')]
    #[Route('/objectif/modifier/{secteur}/{idSecteur}/{id}', name: 'app_modifier_form_objectif_activite')]
    public function add_objectif_activite($secteur,string $typeActivity = null, Request $request, int $id = null, string $idSecteur = null, EntityManagerInterface $entityManager, ObjectifRepository $objectifRepository): Response
    {
        $user = $this->getUser();
        if ($request->attributes->get('_route') == 'app_form_objectif_activite' or $request->attributes->get('_route') == 'app_form_objectif_add_activite' or $request->attributes->get('_route') == 'app_form_objectif_add_activite_loisir') {
            $objectif = new Objectif();
            if ($this->isGranted('ROLE_USER')) {
                if ($user instanceof UserInterface) {
                    $userId = $user->getId();
                    $objectif->setIdUser($userId);
                }
            }
            $objectif->setSecteur($secteur);
            $objectif->setIdSecteur($idSecteur);
            if ($request->attributes->get('_route') == 'app_form_objectif_add_activite' or $request->attributes->get('_route') == 'app_form_objectif_add_activite_loisir') {
                $objectif->setTypeActivity($typeActivity);
            }
        } else {
            $objectif = $objectifRepository->find($id); 
        }


        $form = $this->createForm(ObjectifType::class, $objectif);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($objectif);
            $entityManager->flush($objectif);
            if ($request->attributes->get('_route') == 'app_form_objectif_activite' or $request->attributes->get('_route') == 'app_modifier_form_objectif_activite') {
                return $this->redirectToRoute('app_objectifs_sante');
            } else {
                if ($typeActivity == "Formation") {
                    return $this->redirectToRoute('app_objectifs_activite_formation');
                } elseif ($typeActivity == "Loisir") {
                    return $this->redirectToRoute('app_objectifs_activite_loisir');
                } elseif ($typeActivity == "Sociable") {
                    return $this->redirectToRoute('app_objectifs_sociabilite');
                } else {
                    return $this->redirectToRoute('app_objectifs_visualiser_activity', ['idSecteur' => $idSecteur]);
                    //return $this->redirectToRoute('app_objectifs_activite_pro');
                }
            }
        }
        return $this->render('pages/add-objectif.html.twig', [
            'secteur' => $secteur,
            'form' => $form,
            'title_page' => 'Ajouter un objectif - Santé',
            'imagePath' => 'img/icon-sante.png',
        ]);
    }

    #[Route('/mes-objectifs/visualiser/activite/{idSecteur}', name: 'app_objectifs_visualiser_activity')]
    #[Route('/mes-objectifs/visualiser/sante/{idSecteur}', name: 'app_mes_objectifs_visualiser_activite')]
    public function objectif_visualiser_activite($idSecteur, ObjectifRepository $objectifRepository, Request $request): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();

        if ($request->attributes->get('_route') == 'app_objectifs_visualiser_activity') {
            $title_page = "Visualiser mes objectifs Activité";
        } else {
            $title_page = "Visualiser mes Objectifs Santé"; 
        }


        $lstObjectifs = $objectifRepository->findBy(['id_user' => $userId, 'id_secteur' => $idSecteur]);

        return $this->render('pages/objectif/sante/visualiser-mes-objectifs-activite.html.twig', [
            'title_page' => $title_page,
            'imagePath' => 'img/icon-agenda.png',
            'lstObjectifs' => $lstObjectifs,
            'idSecteur' => $idSecteur,
        ]);
    }

    #[Route('/objectif_activite/supprimer/{id}/{idSecteur}', name: 'app_objectif_delete_activite')]
    public function objectif_delete_activite(Request $request, $idSecteur, EntityManagerInterface $entityManager, int $id, ObjectifRepository $objectifRepository): Response
    {
        $objectif = $objectifRepository->find($id);
        $entityManager->remove($objectif);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_mes_objectifs_visualiser_activite', ["idSecteur" => $idSecteur]);
    }

    // Objectif Activité //

    #[Route('/mes_objectifs/activite/lst_objectifs_activity', name: 'app_objectifs_activity')]
    public function lst_objectifs_activity(Security $security, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $countPro = $objectifRepository->count(['id_user' => $userId, 'type_activity' => 'Pro']);
        $countFormation = $objectifRepository->count(['id_user' => $userId, 'type_activity' => 'Formation']);
        $countLoisir = $objectifRepository->count(['id_user' => $userId, 'type_activity' => 'Loisir']);

        return $this->render('pages/objectif/activite/liste_activite.html.twig', [
            'title_page' => 'Objectif Activité',
            'imagePath' => 'img/icon-activity.png',
            'countPro' => $countPro,
            'countFormation' => $countFormation,
            'countLoisir' => $countLoisir,
        ]);
    }

    #[Route('/mes_objectifs/activite/activite-pro', name: 'app_objectifs_activite_pro')]
    public function lst_objectifs_activite_pro(Security $security, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $countSources = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'SourcesPro']);
        $countEfficacite = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'EfficacitePro']);
        $countEntreprendre = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'EntreprendrePro']);
        $countEquilibre = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'EquilibreProPerso']);
        $countEntourage = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'EntouragePro']);
        $countAutre = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'AutrePro']);

        return $this->render('pages/objectif/activite/liste_activite_pro.html.twig', [
            'title_page' => 'Objectif Activité Professionnel',
            'imagePath' => 'img/icon-activity.png',
            'countSources' => $countSources,
            'countEfficacite' => $countEfficacite,
            'countEntreprendre' => $countEntreprendre,
            'countEquilibre' => $countEquilibre,
            'countEntourage' => $countEntourage,
            'countAutre' => $countAutre,
        ]);
    }

    // Activité Formation / Etudes //

    #[Route('/mes_objectifs/activite/activite-formation', name: 'app_objectifs_activite_formation')]
    public function lst_objectifs_activite_formation(Security $security, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $countCompetence = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'CompetenceFormation']);
        $countCompetencePerso = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'CompetencePersoFormation']);
        $countAvenir = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'AvenirFormation']);
        $countSeminaire = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'SeminaireFormation']);
        $countAutre = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'AutreFormation']);

        return $this->render('pages/objectif/activite/liste_activite_formation.html.twig', [
            'title_page' => 'Objectif Activité Professionnel',
            'imagePath' => 'img/icon-activity.png',
            'countCompetence' => $countCompetence,
            'countCompetencePerso' => $countCompetencePerso,
            'countAvenir' => $countAvenir,
            'countSeminaire' => $countSeminaire,
            'countAutre' => $countAutre,
        ]);
    }
    
    // Activité Loisirs //

    #[Route('/mes_objectifs/activite/activite-loisir', name: 'app_objectifs_activite_loisir')]
    public function lst_objectifs_activite_loisir(Security $security, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $countSport = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'SportLoisir']);
        $countCulture = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'CulturelLoisir']);
        $countPlantation = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'PlantationLoisir']);
        $countCreatif = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'CreatifLoisir']);
        $countEducatif = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'EducatifLoisir']);
        $countTechno = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'TechnoLoisir']);
        $countAnimalier = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'AnimalierLoisir']);
        $countRelation = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'RelationLoisir']);
        $countVacances = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'VacancesLoisir']);

        return $this->render('pages/objectif/activite/liste_activite_loisirs.html.twig', [
            'title_page' => 'Objectif Activité Loisirs',
            'imagePath' => 'img/icon-activity.png',
            'countSport' => $countSport,
            'countCulture' => $countCulture,
            'countPlantation' => $countPlantation,
            'countCreatif' => $countCreatif,
            'countEducatif' => $countEducatif,
            'countTechno' => $countTechno,
            'countAnimalier' => $countAnimalier,
            'countRelation' => $countRelation,
            'countVacances' => $countVacances,
        ]);
    }
    
    #[Route('/mes_objectifs/activite/sociabilité', name: 'app_objectifs_sociabilite')]
    public function lst_objectifs_sociabilite(Security $security, ObjectifRepository $objectifRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $countFamille = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'FamilleSociable']);
        $countAmis = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'AmisSociable']);
        $countGroupe = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'GroupeSociable']);
        $countBenevolat = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'BenevolatSociable']);
        $countEvenement = $objectifRepository->count(['id_user' => $userId, 'id_secteur' => 'EvenementSociable']);

        return $this->render('pages/objectif/sociabilite/liste_sociabilite.html.twig', [
            'title_page' => 'Objectif Sociabilité',
            'imagePath' => 'img/icon-activity.png',
            'countFamille' => $countFamille,
            'countAmis' => $countAmis,
            'countGroupe' => $countGroupe,
            'countBenevolat' => $countBenevolat,
            'countEvenement' => $countEvenement,
        ]);
    }

    #[Route('/mentions-legales', name: 'app_mentions_legales')]
    public function mentions_legales(Security $security): Response
    {

        return $this->render('pages/mentions_legales.html.twig', [
            'title_page' => 'Mentions Légales',
            'imagePath' => 'img/icon-activity.png',
        ]);
    }
}
