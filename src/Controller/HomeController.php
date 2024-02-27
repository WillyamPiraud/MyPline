<?php

namespace App\Controller;

use App\Repository\CalendrierChosesAFaireRepository;
use App\Repository\CalendrierEvenementRepository;
use App\Repository\CalendrierTelRepository;
use App\Repository\RendezVousRepository;
use App\Repository\TexteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class HomeController extends AbstractController
{
    /*#[Route('/accueil', name: 'app_home')]
    public function index(TexteRepository $texteRepository): Response
    {
        $textes = $texteRepository->findAll();

        return $this->render('home/index.html.twig', [
            'textes' => $textes
        ]);
    }*/
    #[Route('/heureu', name: 'app_heureu')]
    public function heureu(): Response
    {
        return $this->render('pages/heureu.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function home(CalendrierTelRepository $calendrierTelRepository, CalendrierEvenementRepository $calendrierEvenementRepository, CalendrierChosesAFaireRepository $calendrierChosesAFaireRepository, RendezVousRepository $rendezVousRepository): Response
    {
        $user = $this->getUser();

        $currentDate = new \DateTime();

        if ($user) {
            $userId = $user->getId();
            $countInvalidEntries = $calendrierTelRepository->countInvalidEntriesForUser($userId);
            $countInvalidEntriesEvent = $calendrierEvenementRepository->countInvalidEntriesForUser($userId, $currentDate);
            $countInvalidEntriesChoses = $calendrierChosesAFaireRepository->countInvalidEntriesForUser($userId, $currentDate);
            $countInvalidEntriesRDV = $rendezVousRepository->countInvalidEntriesForUser($userId);

            $dateLimit = new \DateTime('-15 days');
            $calendrierChosesAFaireRepository->deleteOldEntries($dateLimit, $userId);
        } else {
            $countInvalidEntries = 0;
        }

        $dateActuelle = new DateTime();

        return $this->render('home/home.html.twig', [
            'dateActuelle' => $dateActuelle,
            'countInvalidTel' => $countInvalidEntries,
            'countInvalidEntriesEvent' => $countInvalidEntriesEvent,
            'countInvalidEntriesChoses' => $countInvalidEntriesChoses,
            'countInvalidEntriesRDV' => $countInvalidEntriesRDV,
        ]);
    }
}
