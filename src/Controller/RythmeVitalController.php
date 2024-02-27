<?php

namespace App\Controller;

use App\Entity\ActiviteProfessionnelle;
use App\Entity\BesoinsVitaux;
use App\Entity\BesoinVitalRepas;
use App\Entity\MesLiensSociaux;
use App\Entity\MesLoisirs;
use App\Entity\ObligationFamiliale;
use App\Form\ActiviteProfessionnelleType;
use App\Form\BesoinVitalRepasType;
use App\Form\BesoinVitalType;
use App\Form\MesLiensSociauxType;
use App\Form\MesLoisirsType;
use App\Form\ObligationFamilialeType;
use App\Repository\ActiviteProfessionnelleRepository;
use App\Repository\BesoinsVitauxRepository;
use App\Repository\BesoinVitalRepasRepository;
use App\Repository\MesLiensSociauxRepository;
use App\Repository\MesLoisirsRepository;
use App\Repository\ObligationFamilialeRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/rythme_vital', name: 'app_rythme_vital')]
class RythmeVitalController extends AbstractController
{
    #[Route('/besoins_vitaux', name: '_besoins_vitaux')]
    public function index(BesoinsVitauxRepository $besoinsVitauxRepository, Security $security): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstBesoinsVitaux = $besoinsVitauxRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/rythme_vital/besoins_vitaux.html.twig', [
            'lstBesoinsVitaux' => $lstBesoinsVitaux,
            'title_page' => 'Mes besoins vitaux',
            'imagePath' => 'img/picto-mes-besoins-vitaux.png',
        ]);
    }
    #[Route('/ajouter_besoin_vital', name: '_ajouter_besoin_vital')]
    #[Route('/modifier_besoin_vital/{id}', name: '_modifier_besoin_vital')]
    public function add_besoin_vital(EntityManagerInterface $entityManager, HttpFoundationRequest $request, int $id = null, BesoinsVitauxRepository $besoinsVitauxRepository, BesoinVitalRepasRepository $besoin_repo_repas): Response
    {
        if ($request->attributes->get('_route') == 'app_rythme_vital_ajouter_besoin_vital')
        {
            $besoin_vital = new BesoinsVitaux();
            $besoin_vital->setLundi(new \DateTime('00:00'));
            $besoin_vital->setMardi(new \DateTime('00:00'));
            $besoin_vital->setMercredi(new \DateTime('00:00'));
            $besoin_vital->setJeudi(new \DateTime('00:00'));
            $besoin_vital->setVendredi(new \DateTime('00:00'));
            $besoin_vital->setSamedi(new \DateTime('00:00'));
            $besoin_vital->setDimanche(new \DateTime('00:00'));
            $strBesoin = "Ajouter un besoin vital";

            $besoin_repas = new BesoinVitalRepas();
            $besoin_repas->setLundiPetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setLundiDejeuner(new \DateTime('00:00'));
            $besoin_repas->setLundiDinner(new \DateTime('00:00'));
            $besoin_repas->setMardiPetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setMardiDejeuner(new \DateTime('00:00'));
            $besoin_repas->setMardiDinner(new \DateTime('00:00'));
            $besoin_repas->setMercrediPetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setMercrediDejeuner(new \DateTime('00:00'));
            $besoin_repas->setMercrediDinner(new \DateTime('00:00'));
            $besoin_repas->setJeudiPetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setJeudiDejeuner(new \DateTime('00:00'));
            $besoin_repas->setJeudiDinner(new \DateTime('00:00'));
            $besoin_repas->setVendrediPetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setVendrediDejeuner(new \DateTime('00:00'));
            $besoin_repas->setVendrediDinner(new \DateTime('00:00'));
            $besoin_repas->setSamediPetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setSamediDejeuner(new \DateTime('00:00'));
            $besoin_repas->setSamediDinner(new \DateTime('00:00'));
            $besoin_repas->setDimanchePetitDejeuner(new \DateTime('00:00'));
            $besoin_repas->setDimancheDejeuner(new \DateTime('00:00'));
            $besoin_repas->setDimancheDinner(new \DateTime('00:00'));
            $besoin_repas->setIdBesoinVital(0);

            $user = $this->getUser();

            if ($this->isGranted('ROLE_USER')) {
                if ($user instanceof UserInterface) {
                    $userId = $user->getId();
                    $besoin_vital->setUserId($userId);
                }
            }
        } else {
            $besoin_vital = $besoinsVitauxRepository->find($id);

            if ($besoin_vital) {
                $besoin_repas = $besoin_repo_repas->findOneBy(['id_besoin_vital' => $id]);
            
                if (!$besoin_repas) {
                    $besoin_repas = new BesoinVitalRepas();
                    $besoin_repas->setLundiPetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setLundiDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setLundiDinner(new \DateTime('00:00'));
                    $besoin_repas->setMardiPetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setMardiDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setMardiDinner(new \DateTime('00:00'));
                    $besoin_repas->setMercrediPetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setMercrediDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setMercrediDinner(new \DateTime('00:00'));
                    $besoin_repas->setJeudiPetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setJeudiDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setJeudiDinner(new \DateTime('00:00'));
                    $besoin_repas->setVendrediPetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setVendrediDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setVendrediDinner(new \DateTime('00:00'));
                    $besoin_repas->setSamediPetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setSamediDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setSamediDinner(new \DateTime('00:00'));
                    $besoin_repas->setDimanchePetitDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setDimancheDejeuner(new \DateTime('00:00'));
                    $besoin_repas->setDimancheDinner(new \DateTime('00:00'));
                    $besoin_repas->setIdBesoinVital($id);
                    $user = $this->getUser();
                    
                    if ($this->isGranted('ROLE_USER')) {
                        if ($user instanceof UserInterface) {
                            $userId = $user->getId();
                            $besoin_repas->setUserId($userId);
                        }
                    }
                }
                $strBesoin = "Modifier un besoin vital";
            } else {
                $besoin_repas = $besoin_repo_repas->findOneBy(['id_besoin_vital' => $id]);
            }
            $strBesoin = "Modifier un besoin vital";
        }

        $form_besoin_vital = $this->createForm(BesoinVitalType::class, $besoin_vital);
        $form_besoin_repas = $this->createForm(BesoinVitalRepasType::class, $besoin_repas);

        $form_besoin_vital->handleRequest($request);

        if ($form_besoin_vital->isSubmitted() && $form_besoin_vital->isValid()) {

            $entityManager->persist($besoin_vital);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital_besoins_vitaux');
        }

        $form_besoin_repas->handleRequest($request);

        if ($form_besoin_repas->isSubmitted() && $form_besoin_repas->isValid()) {

            // Calcul du temps total de LUNDI //

            $lundi_petit_dejeuner = $form_besoin_repas->get('lundi_petit_dejeuner')->getData();
            $lundi_dejeuner = $form_besoin_repas->get('lundi_dejeuner')->getData();
            $lundi_dinner = $form_besoin_repas->get('lundi_dinner')->getData();

            // Calcul du temps

            $lundi_petit_dejeuner_seconds = $lundi_petit_dejeuner->getTimestamp();
            $lundi_dejeuner_seconds = $lundi_dejeuner->getTimestamp();
            $lundi_dinner_seconds = $lundi_dinner->getTimestamp();
            
            // Conversion du temps
            $total_lundi_seconds = $lundi_petit_dejeuner_seconds + $lundi_dejeuner_seconds + $lundi_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_lundi_hours = intdiv($total_lundi_seconds, 3600);
            $total_lundi_minutes = intdiv(($total_lundi_seconds % 3600), 60);

            $resultat_lundi = new DateTime();
            $resultat_lundi->setTime($total_lundi_hours, $total_lundi_minutes);

            ///// Calcul du temps total de MARDI /////

            $mardi_petit_dejeuner = $form_besoin_repas->get('mardi_petit_dejeuner')->getData();
            $mardi_dejeuner = $form_besoin_repas->get('mardi_dejeuner')->getData();
            $mardi_dinner = $form_besoin_repas->get('mardi_dinner')->getData();

            // Calcul du temps

            $mardi_petit_dejeuner_seconds = $mardi_petit_dejeuner->getTimestamp();
            $mardi_dejeuner_seconds = $mardi_dejeuner->getTimestamp();
            $mardi_dinner_seconds = $mardi_dinner->getTimestamp();
            
            // Conversion du temps
            $total_mardi_seconds = $mardi_petit_dejeuner_seconds + $mardi_dejeuner_seconds + $mardi_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_mardi_hours = intdiv($total_mardi_seconds, 3600);
            $total_mardi_minutes = intdiv(($total_mardi_seconds % 3600), 60);

            $resultat_mardi = new DateTime();
            $resultat_mardi->setTime($total_mardi_hours, $total_mardi_minutes);

            ///// Calcul du temps total de MERCREDI /////

            $mercredi_petit_dejeuner = $form_besoin_repas->get('mercredi_petit_dejeuner')->getData();
            $mercredi_dejeuner = $form_besoin_repas->get('mercredi_dejeuner')->getData();
            $mercredi_dinner = $form_besoin_repas->get('mercredi_dinner')->getData();

            // Calcul du temps

            $mercredi_petit_dejeuner_seconds = $mercredi_petit_dejeuner->getTimestamp();
            $mercredi_dejeuner_seconds = $mercredi_dejeuner->getTimestamp();
            $mercredi_dinner_seconds = $mercredi_dinner->getTimestamp();
            
            // Conversion du temps
            $total_mercredi_seconds = $mercredi_petit_dejeuner_seconds + $mercredi_dejeuner_seconds + $mercredi_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_mercredi_hours = intdiv($total_mercredi_seconds, 3600);
            $total_mercredi_minutes = intdiv(($total_mercredi_seconds % 3600), 60);

            $resultat_mercredi = new DateTime();
            $resultat_mercredi->setTime($total_mercredi_hours, $total_mercredi_minutes);

            ///// Calcul du temps total de JEUDI /////

            $jeudi_petit_dejeuner = $form_besoin_repas->get('jeudi_petit_dejeuner')->getData();
            $jeudi_dejeuner = $form_besoin_repas->get('jeudi_dejeuner')->getData();
            $jeudi_dinner = $form_besoin_repas->get('jeudi_dinner')->getData();

            // Calcul du temps

            $jeudi_petit_dejeuner_seconds = $jeudi_petit_dejeuner->getTimestamp();
            $jeudi_dejeuner_seconds = $jeudi_dejeuner->getTimestamp();
            $jeudi_dinner_seconds = $jeudi_dinner->getTimestamp();
            
            // Conversion du temps
            $total_jeudi_seconds = $jeudi_petit_dejeuner_seconds + $jeudi_dejeuner_seconds + $jeudi_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_jeudi_hours = intdiv($total_jeudi_seconds, 3600);
            $total_jeudi_minutes = intdiv(($total_jeudi_seconds % 3600), 60);

            $resultat_jeudi = new DateTime();
            $resultat_jeudi->setTime($total_jeudi_hours, $total_jeudi_minutes);


            ///// Calcul du temps total de VENDREDI /////

            $vendredi_petit_dejeuner = $form_besoin_repas->get('vendredi_petit_dejeuner')->getData();
            $vendredi_dejeuner = $form_besoin_repas->get('vendredi_dejeuner')->getData();
            $vendredi_dinner = $form_besoin_repas->get('vendredi_dinner')->getData();

            // Calcul du temps

            $vendredi_petit_dejeuner_seconds = $vendredi_petit_dejeuner->getTimestamp();
            $vendredi_dejeuner_seconds = $vendredi_dejeuner->getTimestamp();
            $vendredi_dinner_seconds = $vendredi_dinner->getTimestamp();
            
            // Conversion du temps
            $total_vendredi_seconds = $vendredi_petit_dejeuner_seconds + $vendredi_dejeuner_seconds + $vendredi_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_vendredi_hours = intdiv($total_vendredi_seconds, 3600);
            $total_vendredi_minutes = intdiv(($total_vendredi_seconds % 3600), 60);

            $resultat_vendredi = new DateTime();
            $resultat_vendredi->setTime($total_vendredi_hours, $total_vendredi_minutes);


            ///// Calcul du temps total de SAMEDI /////

            $samedi_petit_dejeuner = $form_besoin_repas->get('samedi_petit_dejeuner')->getData();
            $samedi_dejeuner = $form_besoin_repas->get('samedi_dejeuner')->getData();
            $samedi_dinner = $form_besoin_repas->get('samedi_dinner')->getData();

            // Calcul du temps

            $samedi_petit_dejeuner_seconds = $samedi_petit_dejeuner->getTimestamp();
            $samedi_dejeuner_seconds = $samedi_dejeuner->getTimestamp();
            $samedi_dinner_seconds = $samedi_dinner->getTimestamp();
            
            // Conversion du temps
            $total_samedi_seconds = $samedi_petit_dejeuner_seconds + $samedi_dejeuner_seconds + $samedi_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_samedi_hours = intdiv($total_samedi_seconds, 3600);
            $total_samedi_minutes = intdiv(($total_samedi_seconds % 3600), 60);

            $resultat_samedi = new DateTime();
            $resultat_samedi->setTime($total_samedi_hours, $total_samedi_minutes);


            ///// Calcul du temps total de DIMANCHE /////

            $dimanche_petit_dejeuner = $form_besoin_repas->get('dimanche_petit_dejeuner')->getData();
            $dimanche_dejeuner = $form_besoin_repas->get('dimanche_dejeuner')->getData();
            $dimanche_dinner = $form_besoin_repas->get('dimanche_dinner')->getData();

            // Calcul du temps

            $dimanche_petit_dejeuner_seconds = $dimanche_petit_dejeuner->getTimestamp();
            $dimanche_dejeuner_seconds = $dimanche_dejeuner->getTimestamp();
            $dimanche_dinner_seconds = $dimanche_dinner->getTimestamp();
            
            // Conversion du temps
            $total_dimanche_seconds = $dimanche_petit_dejeuner_seconds + $dimanche_dejeuner_seconds + $dimanche_dinner_seconds;

            // Convertir les secondes en heures et minutes
            $total_dimanche_hours = intdiv($total_dimanche_seconds, 3600);
            $total_dimanche_minutes = intdiv(($total_dimanche_seconds % 3600), 60);

            $resultat_dimanche = new DateTime();
            $resultat_dimanche->setTime($total_dimanche_hours, $total_dimanche_minutes);








            $besoin_vital->setLundi($resultat_lundi);
            $besoin_vital->setMardi($resultat_mardi);
            $besoin_vital->setMercredi($resultat_mercredi);
            $besoin_vital->setJeudi($resultat_jeudi);
            $besoin_vital->setVendredi($resultat_vendredi);
            $besoin_vital->setSamedi($resultat_samedi);
            $besoin_vital->setDimanche($resultat_dimanche);

            $entityManager->persist($besoin_repas);
            $entityManager->persist($besoin_vital);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital_besoins_vitaux');
        }

        return $this->render('pages/rythme_vital/editer_besoin_vital.html.twig', [
            'form_besoin_vital' => $form_besoin_vital,
            'form_besoin_repas' => $form_besoin_repas,
            'title_page' => $strBesoin,
            'imagePath' => 'img/picto-mes-besoins-vitaux.png',
        ]);
    }
    #[Route('/besoin_vital/delete/{id}', name: '_besoin_vital_delete')]
    public function lst_obligation_familiale_delete(EntityManagerInterface $entityManager, int $id = null, BesoinsVitauxRepository $besoinsVitauxRepository): Response
    {
        $besoin_vital = $besoinsVitauxRepository->find($id);
        $entityManager->remove($besoin_vital);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_rythme_vital_besoins_vitaux');
    }
    #[Route('/obligations_familiales', name: '_obligations_familiales')]
    public function obligation_familiales(Security $security, ObligationFamilialeRepository $obligationFamilialeRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstObligationFamiliale = $obligationFamilialeRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/rythme_vital/obligation_familiale.html.twig', [
            'lstOlstObligationFamiliale' =>$lstObligationFamiliale,
            'title_page' => 'Liste des obligations familiales',
            'imagePath' => 'img/picto-obligation-domestique.png',
        ]);
    }
    #[Route('/ajouter_obligation_familiale', name: '_ajouter_obligation_familiale')]
    #[Route('/modifier_obligation_familiale/{id}', name: '_modifier_obligation_familiale')]
    public function add_obligation_familiale(EntityManagerInterface $entityManager, HttpFoundationRequest $request, int $id = null, ObligationFamilialeRepository $obligationFamilialeRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_rythme_vital_ajouter_obligation_familiale')
        {
            $obligation_familiale = new ObligationFamiliale();
            $obligation_familiale->setLundi(new \DateTime('00:00'));
            $obligation_familiale->setMardi(new \DateTime('00:00'));
            $obligation_familiale->setMercredi(new \DateTime('00:00'));
            $obligation_familiale->setJeudi(new \DateTime('00:00'));
            $obligation_familiale->setVendredi(new \DateTime('00:00'));
            $obligation_familiale->setSamedi(new \DateTime('00:00'));
            $obligation_familiale->setDimanche(new \DateTime('00:00'));
            $ObligationFamiliale = "Ajouter une obligation familiale";
        } else {
            $obligation_familiale = $obligationFamilialeRepository->find($id);
            $ObligationFamiliale = "Modifier une obligation familiale";
        }

        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $obligation_familiale->setUserId($userId);
            }
        }

        $form_obligation_familiale = $this->createForm(ObligationFamilialeType::class, $obligation_familiale);

        $form_obligation_familiale->handleRequest($request);

        if ($form_obligation_familiale->isSubmitted() && $form_obligation_familiale->isValid()) {

            $entityManager->persist($obligation_familiale);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital_obligations_familiales');
        }

        return $this->render('pages/rythme_vital/editer_obligation_familiale.html.twig', [
            'form_obligation_familiale' => $form_obligation_familiale,
            'title_page' => $ObligationFamiliale,
            'imagePath' => 'img/picto-obligation-domestique.png',
        ]);
    }
    #[Route('/obligation_familiale/delete/{id}', name: '_obligation_familiale_delete')]
    public function lst_obligation_familial_delete(EntityManagerInterface $entityManager, int $id = null, ObligationFamilialeRepository $obligationFamilialeRepository): Response
    {
        $obligation_familiale = $obligationFamilialeRepository->find($id);
        $entityManager->remove($obligation_familiale);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_rythme_vital_obligations_familiales');
    }
    #[Route('/activite_professionnelle', name: '_activite_professionnelle')]
    public function activite_professionnelle(Security $security, ActiviteProfessionnelleRepository $activiteProfessionnelleRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstActiviteProfessionnelle = $activiteProfessionnelleRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/rythme_vital/activite_professionnelle.html.twig', [
            'lstActiviteProfessionnelle' =>$lstActiviteProfessionnelle,
            'title_page' => 'Liste de mes activités professionnelle',
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
        ]);
    }
    #[Route('/ajouter_activite_professionnelle', name: '_ajouter_activite_professionnelle')]
    #[Route('/modifier_activite_professionnelle/{id}', name: '_modifier_activite_professionnelle')]
    public function add_activite_professionnelle(EntityManagerInterface $entityManager, HttpFoundationRequest $request, int $id = null, ActiviteProfessionnelleRepository $activiteProfessionnelleRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_rythme_vital_ajouter_activite_professionnelle')
        {
            $activite_professionnelle = new ActiviteProfessionnelle();
            $activite_professionnelle->setLundi(new \DateTime('00:00'));
            $activite_professionnelle->setMardi(new \DateTime('00:00'));
            $activite_professionnelle->setMercredi(new \DateTime('00:00'));
            $activite_professionnelle->setJeudi(new \DateTime('00:00'));
            $activite_professionnelle->setVendredi(new \DateTime('00:00'));
            $activite_professionnelle->setSamedi(new \DateTime('00:00'));
            $activite_professionnelle->setDimanche(new \DateTime('00:00'));
            $ActPro = "Ajouter une activité professionnelle";
        } else {
            $activite_professionnelle = $activiteProfessionnelleRepository->find($id);
            $ActPro = "Modifier une activité professionnelle";
        }

        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $activite_professionnelle->setUserId($userId);
            }
        }

        $form_activite_professionnelle = $this->createForm(ActiviteProfessionnelleType::class, $activite_professionnelle);

        $form_activite_professionnelle->handleRequest($request);

        if ($form_activite_professionnelle->isSubmitted() && $form_activite_professionnelle->isValid()) {

            $entityManager->persist($activite_professionnelle);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital_activite_professionnelle');
        }

        return $this->render('pages/rythme_vital/editer_activite_professionnelle.html.twig', [
            'form_activite_professionnelle' =>$form_activite_professionnelle,
            'title_page' => $ActPro,
            'imagePath' => 'img/picto-activite-professionnel-formation.png',
        ]);
    }
    #[Route('/activite_professionnelle/delete/{id}', name: '_activite_professionnelle_delete')]
    public function lst_activite_professionnelle_delete(EntityManagerInterface $entityManager, int $id = null, ActiviteProfessionnelleRepository $activiteProfessionnelleRepository): Response
    {
        $activite_professionnelle = $activiteProfessionnelleRepository->find($id);
        $entityManager->remove($activite_professionnelle);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_rythme_vital_activite_professionnelle');
    }
    #[Route('/mes_loisirs', name: '_mes_loisirs')]
    public function mes_loisirs(Security $security, MesLoisirsRepository $mesLoisirsRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstMesLoisirs = $mesLoisirsRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/rythme_vital/mes_loisirs.html.twig', [
            'lstMesLoisirs' => $lstMesLoisirs,
            'title_page' => 'Liste de mes loisirs',
            'imagePath' => 'img/picto-loisir-vacance.png',
        ]);
    }
    #[Route('/ajouter_mes_loisirs', name: '_ajouter_mes_loisirs')]
    #[Route('/modifier_mes_loisirs/{id}', name: '_modifier_mes_loisirs')]
    public function add_mes_loisirs(EntityManagerInterface $entityManager, HttpFoundationRequest $request, int $id = null, MesLoisirsRepository $mesLoisirsRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_rythme_vital_ajouter_mes_loisirs')
        {
            $mes_loisirs = new MesLoisirs();
            $mes_loisirs->setLundi(new \DateTime('00:00'));
            $mes_loisirs->setMardi(new \DateTime('00:00'));
            $mes_loisirs->setMercredi(new \DateTime('00:00'));
            $mes_loisirs->setJeudi(new \DateTime('00:00'));
            $mes_loisirs->setVendredi(new \DateTime('00:00'));
            $mes_loisirs->setSamedi(new \DateTime('00:00'));
            $mes_loisirs->setDimanche(new \DateTime('00:00'));
            $MesLoisirs = "Ajouter un loisir";
        } else {
            $mes_loisirs = $mesLoisirsRepository->find($id);
            $MesLoisirs = "Modifier un loisir";
        }

        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $mes_loisirs->setUserId($userId);
            }
        }

        $form_mes_loisirs = $this->createForm(MesLoisirsType::class, $mes_loisirs);

        $form_mes_loisirs->handleRequest($request);

        if ($form_mes_loisirs->isSubmitted() && $form_mes_loisirs->isValid()) {

            $entityManager->persist($mes_loisirs);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital_mes_loisirs');
        }

        return $this->render('pages/rythme_vital/editer_mes_loisirs.html.twig', [
            'form_mes_loisirs' =>$form_mes_loisirs,
            'title_page' => $MesLoisirs,
            'imagePath' => 'img/picto-loisir-vacance.png',
        ]);
    }
    #[Route('/mes_loisirs/delete/{id}', name: '_mes_loisirs_delete')]
    public function lst_mes_loisirs_delete(EntityManagerInterface $entityManager, int $id = null, MesLoisirsRepository $mesLoisirsRepository): Response
    {
        $mes_loisirs = $mesLoisirsRepository->find($id);
        $entityManager->remove($mes_loisirs);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_rythme_vital_mes_loisirs');
    }
    #[Route('/mes_liens_sociaux', name: '_mes_liens_sociaux')]
    public function mes_liens_sociaux(Security $security, MesLiensSociauxRepository $mesLiensSociauxRepository): Response
    {
        $user = $security->getUser();
        $userId = $user->getId();

        $lstMesLiensSociaux = $mesLiensSociauxRepository->findBy(['user_id' => $userId]);

        return $this->render('pages/rythme_vital/mes_liens_sociaux.html.twig', [
            'lstMesLiensSociaux' => $lstMesLiensSociaux,
            'title_page' => 'Liste de mes liens sociaux',
            'imagePath' => 'img/picto-lien-social.png',
        ]);
    }
    #[Route('/ajouter_mes_liens_sociaux', name: '_ajouter_mes_liens_sociaux')]
    #[Route('/modifier_mes_liens_sociaux/{id}', name: '_modifier_mes_liens_sociaux')]
    public function add_mes_liens_sociaux(EntityManagerInterface $entityManager, HttpFoundationRequest $request, int $id = null, MesLiensSociauxRepository $mesLiensSociauxRepository): Response
    {
        if ($request->attributes->get('_route') == 'app_rythme_vital_ajouter_mes_liens_sociaux')
        {
            $mes_liens_sociaux = new MesLiensSociaux();
            $mes_liens_sociaux->setLundi(new \DateTime('00:00'));
            $mes_liens_sociaux->setMardi(new \DateTime('00:00'));
            $mes_liens_sociaux->setMercredi(new \DateTime('00:00'));
            $mes_liens_sociaux->setJeudi(new \DateTime('00:00'));
            $mes_liens_sociaux->setVendredi(new \DateTime('00:00'));
            $mes_liens_sociaux->setSamedi(new \DateTime('00:00'));
            $mes_liens_sociaux->setDimanche(new \DateTime('00:00'));
            $LiensSociaux = "Ajouter un lien social";
        } else {
            $mes_liens_sociaux = $mesLiensSociauxRepository->find($id);
            $LiensSociaux = "Modifier un lien social";
        }

        $user = $this->getUser();

        if ($this->isGranted('ROLE_USER')) {
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
                $mes_liens_sociaux->setUserId($userId);
            }
        }

        $form_mes_liens_sociaux = $this->createForm(MesLiensSociauxType::class, $mes_liens_sociaux);

        $form_mes_liens_sociaux->handleRequest($request);

        if ($form_mes_liens_sociaux->isSubmitted() && $form_mes_liens_sociaux->isValid()) {

            $entityManager->persist($mes_liens_sociaux);
            $entityManager->flush();

            return $this->redirectToRoute('app_rythme_vital_mes_liens_sociaux');
        }

        return $this->render('pages/rythme_vital/editer_mes_liens_sociaux.html.twig', [
            'form_mes_liens_sociaux' => $form_mes_liens_sociaux,
            'title_page' => $LiensSociaux,
            'imagePath' => 'img/picto-lien-social.png',
        ]);
    }
    #[Route('/mes_liens_sociaux/delete/{id}', name: '_mes_liens_sociaux_delete')]
    public function lst_mes_liens_sociaux_delete(EntityManagerInterface $entityManager, int $id = null, MesLiensSociauxRepository $mesLiensSociauxRepository): Response
    {
        $mes_liens = $mesLiensSociauxRepository->find($id);
        $entityManager->remove($mes_liens);
        $entityManager->flush();

        $this->addFlash('success', 'L\'élément a été supprimé avec succès.');

        return $this->redirectToRoute('app_rythme_vital_mes_liens_sociaux');
    } 
}
