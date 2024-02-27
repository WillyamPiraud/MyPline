<?php

namespace App\Controller;

use App\Entity\BesoinsVitaux;
use App\Entity\FondUrgence;
use App\Entity\ObjectifFinanceLoisir;
use App\Entity\ObligationFamiliale;
use App\Entity\ObligationFamilialeTempo;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\ObligationFamilialeRepository;
use App\Repository\ObligationFamilialeTempoRepository;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager, ObligationFamilialeRepository $obligationFamilialeRepository, ObligationFamilialeTempoRepository $obligationFamilialeTempoRepository): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            
            $besoinsVitaux = new BesoinsVitaux();
            $besoinsVitaux->setUserId($user->getId());
            $besoinsVitaux->setIntitule('Saisir chaque jours votre temps cible de sommeil');
            $besoinsVitaux->setLundi(new \DateTime('00:00'));
            $besoinsVitaux->setMardi(new \DateTime('00:00'));
            $besoinsVitaux->setMercredi(new \DateTime('00:00'));
            $besoinsVitaux->setJeudi(new \DateTime('00:00'));
            $besoinsVitaux->setVendredi(new \DateTime('00:00'));
            $besoinsVitaux->setSamedi(new \DateTime('00:00'));
            $besoinsVitaux->setDimanche(new \DateTime('00:00'));

            $entityManager->persist($besoinsVitaux);
            $entityManager->flush();

            $besoinsVitaux2 = new BesoinsVitaux();
            $besoinsVitaux2->setUserId($user->getId());
            $besoinsVitaux2->setIntitule('Manger (Tps de preparation Repas inclus)');
            $besoinsVitaux2->setLundi(new \DateTime('00:00'));
            $besoinsVitaux2->setMardi(new \DateTime('00:00'));
            $besoinsVitaux2->setMercredi(new \DateTime('00:00'));
            $besoinsVitaux2->setJeudi(new \DateTime('00:00'));
            $besoinsVitaux2->setVendredi(new \DateTime('00:00'));
            $besoinsVitaux2->setSamedi(new \DateTime('00:00'));
            $besoinsVitaux2->setDimanche(new \DateTime('00:00'));

            $entityManager->persist($besoinsVitaux2);
            $entityManager->flush();

            $besoinsVitaux3 = new BesoinsVitaux();
            $besoinsVitaux3->setUserId($user->getId());
            $besoinsVitaux3->setIntitule('Se laver / s\'habiller et autres besoins quotidiens de vie');
            $besoinsVitaux3->setLundi(new \DateTime('00:00'));
            $besoinsVitaux3->setMardi(new \DateTime('00:00'));
            $besoinsVitaux3->setMercredi(new \DateTime('00:00'));
            $besoinsVitaux3->setJeudi(new \DateTime('00:00'));
            $besoinsVitaux3->setVendredi(new \DateTime('00:00'));
            $besoinsVitaux3->setSamedi(new \DateTime('00:00'));
            $besoinsVitaux3->setDimanche(new \DateTime('00:00'));

            $entityManager->persist($besoinsVitaux3);
            $entityManager->flush();


            $obligation1 = new ObligationFamiliale();
            $obligation1->setUserId($user->getId());
            $obligation1->setIntitule('Les amener à l\'école');
            $obligation1->setLundi(new \DateTime('00:00'));
            $obligation1->setMardi(new \DateTime('00:00'));
            $obligation1->setMercredi(new \DateTime('00:00'));
            $obligation1->setJeudi(new \DateTime('00:00'));
            $obligation1->setVendredi(new \DateTime('00:00'));
            $obligation1->setSamedi(new \DateTime('00:00'));
            $obligation1->setDimanche(new \DateTime('00:00'));
            $obligation1->setIdObligation('soin_enfant');

            $entityManager->persist($obligation1);
            $entityManager->flush();

            $obligation_tempo1 = new ObligationFamilialeTempo();
            $obligation_tempo1->setUserId($user->getId());
            $obligation_tempo1->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo1->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo1->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo1->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo1->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo1->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo1->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo1->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo1->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo1->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo1->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo1->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo1->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo1->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo1->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo1->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo1->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo1->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo1->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo1->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo1->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo1->setIdObligation($obligation1->getId());

            $entityManager->persist($obligation_tempo1);
            $entityManager->flush();

            $obligation2 = new ObligationFamiliale();
            $obligation2->setUserId($user->getId());
            $obligation2->setIntitule('Les amener à des activités extra-scolaire');
            $obligation2->setLundi(new \DateTime('00:00'));
            $obligation2->setMardi(new \DateTime('00:00'));
            $obligation2->setMercredi(new \DateTime('00:00'));
            $obligation2->setJeudi(new \DateTime('00:00'));
            $obligation2->setVendredi(new \DateTime('00:00'));
            $obligation2->setSamedi(new \DateTime('00:00'));
            $obligation2->setDimanche(new \DateTime('00:00'));
            $obligation2->setIdObligation('soin_enfant');

            $entityManager->persist($obligation2);
            $entityManager->flush();

            $obligation_tempo2 = new ObligationFamilialeTempo();
            $obligation_tempo2->setUserId($user->getId());
            $obligation_tempo2->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo2->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo2->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo2->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo2->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo2->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo2->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo2->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo2->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo2->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo2->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo2->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo2->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo2->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo2->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo2->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo2->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo2->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo2->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo2->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo2->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo2->setIdObligation($obligation2->getId());

            $entityManager->persist($obligation_tempo2);
            $entityManager->flush();

            $obligation3 = new ObligationFamiliale();
            $obligation3->setUserId($user->getId());
            $obligation3->setIntitule('Les aider aux devoirs');
            $obligation3->setLundi(new \DateTime('00:00'));
            $obligation3->setMardi(new \DateTime('00:00'));
            $obligation3->setMercredi(new \DateTime('00:00'));
            $obligation3->setJeudi(new \DateTime('00:00'));
            $obligation3->setVendredi(new \DateTime('00:00'));
            $obligation3->setSamedi(new \DateTime('00:00'));
            $obligation3->setDimanche(new \DateTime('00:00'));
            $obligation3->setIdObligation('soin_enfant');

            $entityManager->persist($obligation3);
            $entityManager->flush();

            $obligation_tempo3 = new ObligationFamilialeTempo();
            $obligation_tempo3->setUserId($user->getId());
            $obligation_tempo3->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo3->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo3->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo3->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo3->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo3->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo3->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo3->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo3->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo3->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo3->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo3->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo3->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo3->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo3->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo3->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo3->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo3->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo3->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo3->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo3->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo3->setIdObligation($obligation3->getId());

            $entityManager->persist($obligation_tempo3);
            $entityManager->flush();

            $obligation4 = new ObligationFamiliale();
            $obligation4->setUserId($user->getId());
            $obligation4->setIntitule('Présence/soins auprès de mes Parents âgés');
            $obligation4->setLundi(new \DateTime('00:00'));
            $obligation4->setMardi(new \DateTime('00:00'));
            $obligation4->setMercredi(new \DateTime('00:00'));
            $obligation4->setJeudi(new \DateTime('00:00'));
            $obligation4->setVendredi(new \DateTime('00:00'));
            $obligation4->setSamedi(new \DateTime('00:00'));
            $obligation4->setDimanche(new \DateTime('00:00'));
            $obligation4->setIdObligation('soutien_entourage');

            $entityManager->persist($obligation4);
            $entityManager->flush();

            $obligation_tempo4 = new ObligationFamilialeTempo();
            $obligation_tempo4->setUserId($user->getId());
            $obligation_tempo4->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo4->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo4->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo4->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo4->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo4->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo4->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo4->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo4->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo4->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo4->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo4->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo4->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo4->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo4->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo4->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo4->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo4->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo4->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo4->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo4->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo4->setIdObligation($obligation4->getId());

            $entityManager->persist($obligation_tempo4);
            $entityManager->flush();

            $obligation5 = new ObligationFamiliale();
            $obligation5->setUserId($user->getId());
            $obligation5->setIntitule('Présence/soins auprès de mes beaux parents âges');
            $obligation5->setLundi(new \DateTime('00:00'));
            $obligation5->setMardi(new \DateTime('00:00'));
            $obligation5->setMercredi(new \DateTime('00:00'));
            $obligation5->setJeudi(new \DateTime('00:00'));
            $obligation5->setVendredi(new \DateTime('00:00'));
            $obligation5->setSamedi(new \DateTime('00:00'));
            $obligation5->setDimanche(new \DateTime('00:00'));
            $obligation5->setIdObligation('soutien_entourage');

            $entityManager->persist($obligation5);
            $entityManager->flush();

            $obligation_tempo5 = new ObligationFamilialeTempo();
            $obligation_tempo5->setUserId($user->getId());
            $obligation_tempo5->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo5->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo5->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo5->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo5->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo5->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo5->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo5->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo5->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo5->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo5->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo5->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo5->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo5->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo5->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo5->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo5->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo5->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo5->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo5->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo5->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo5->setIdObligation($obligation5->getId());

            $entityManager->persist($obligation_tempo5);
            $entityManager->flush();

            $obligation6 = new ObligationFamiliale();
            $obligation6->setUserId($user->getId());
            $obligation6->setIntitule("Présence/soins auprès d'un proche malade");
            $obligation6->setLundi(new \DateTime('00:00'));
            $obligation6->setMardi(new \DateTime('00:00'));
            $obligation6->setMercredi(new \DateTime('00:00'));
            $obligation6->setJeudi(new \DateTime('00:00'));
            $obligation6->setVendredi(new \DateTime('00:00'));
            $obligation6->setSamedi(new \DateTime('00:00'));
            $obligation6->setDimanche(new \DateTime('00:00'));
            $obligation6->setIdObligation('soutien_entourage');

            $entityManager->persist($obligation6);
            $entityManager->flush();

            $obligation_tempo6 = new ObligationFamilialeTempo();
            $obligation_tempo6->setUserId($user->getId());
            $obligation_tempo6->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo6->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo6->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo6->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo6->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo6->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo6->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo6->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo6->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo6->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo6->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo6->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo6->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo6->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo6->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo6->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo6->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo6->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo6->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo6->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo6->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo6->setIdObligation($obligation6->getId());

            $entityManager->persist($obligation_tempo6);
            $entityManager->flush();

            $obligation7 = new ObligationFamiliale();
            $obligation7->setUserId($user->getId());
            $obligation7->setIntitule("Présence/soins auprès d'un proche Handicapé");
            $obligation7->setLundi(new \DateTime('00:00'));
            $obligation7->setMardi(new \DateTime('00:00'));
            $obligation7->setMercredi(new \DateTime('00:00'));
            $obligation7->setJeudi(new \DateTime('00:00'));
            $obligation7->setVendredi(new \DateTime('00:00'));
            $obligation7->setSamedi(new \DateTime('00:00'));
            $obligation7->setDimanche(new \DateTime('00:00'));
            $obligation7->setIdObligation('soutien_entourage');

            $entityManager->persist($obligation7);
            $entityManager->flush();

            $obligation_tempo7 = new ObligationFamilialeTempo();
            $obligation_tempo7->setUserId($user->getId());
            $obligation_tempo7->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo7->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo7->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo7->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo7->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo7->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo7->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo7->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo7->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo7->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo7->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo7->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo7->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo7->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo7->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo7->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo7->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo7->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo7->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo7->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo7->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo7->setIdObligation($obligation7->getId());

            $entityManager->persist($obligation_tempo7);
            $entityManager->flush();

            $obligation8 = new ObligationFamiliale();
            $obligation8->setUserId($user->getId());
            $obligation8->setIntitule('Moments d\'échanges priviligée avec mon conjoint');
            $obligation8->setLundi(new \DateTime('00:00'));
            $obligation8->setMardi(new \DateTime('00:00'));
            $obligation8->setMercredi(new \DateTime('00:00'));
            $obligation8->setJeudi(new \DateTime('00:00'));
            $obligation8->setVendredi(new \DateTime('00:00'));
            $obligation8->setSamedi(new \DateTime('00:00'));
            $obligation8->setDimanche(new \DateTime('00:00'));
            $obligation8->setIdObligation('echange_familiale');

            $entityManager->persist($obligation8);
            $entityManager->flush();

            $obligation_tempo8 = new ObligationFamilialeTempo();
            $obligation_tempo8->setUserId($user->getId());
            $obligation_tempo8->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo8->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo8->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo8->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo8->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo8->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo8->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo8->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo8->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo8->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo8->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo8->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo8->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo8->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo8->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo8->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo8->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo8->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo8->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo8->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo8->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo8->setIdObligation($obligation8->getId());

            $entityManager->persist($obligation_tempo8);
            $entityManager->flush();

            $obligation9 = new ObligationFamiliale();
            $obligation9->setUserId($user->getId());
            $obligation9->setIntitule('Activité de ménage (Nettoyage Maison)');
            $obligation9->setLundi(new \DateTime('00:00'));
            $obligation9->setMardi(new \DateTime('00:00'));
            $obligation9->setMercredi(new \DateTime('00:00'));
            $obligation9->setJeudi(new \DateTime('00:00'));
            $obligation9->setVendredi(new \DateTime('00:00'));
            $obligation9->setSamedi(new \DateTime('00:00'));
            $obligation9->setDimanche(new \DateTime('00:00'));
            $obligation9->setIdObligation('entretien_foyer');

            $entityManager->persist($obligation9);
            $entityManager->flush();

            $obligation_tempo9 = new ObligationFamilialeTempo();
            $obligation_tempo9->setUserId($user->getId());
            $obligation_tempo9->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo9->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo9->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo9->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo9->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo9->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo9->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo9->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo9->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo9->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo9->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo9->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo9->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo9->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo9->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo9->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo9->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo9->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo9->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo9->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo9->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo9->setIdObligation($obligation9->getId());

            $entityManager->persist($obligation_tempo9);
            $entityManager->flush();


            $obligation10 = new ObligationFamiliale();
            $obligation10->setUserId($user->getId());
            $obligation10->setIntitule('Activité repassage (entretien linge)');
            $obligation10->setLundi(new \DateTime('00:00'));
            $obligation10->setMardi(new \DateTime('00:00'));
            $obligation10->setMercredi(new \DateTime('00:00'));
            $obligation10->setJeudi(new \DateTime('00:00'));
            $obligation10->setVendredi(new \DateTime('00:00'));
            $obligation10->setSamedi(new \DateTime('00:00'));
            $obligation10->setDimanche(new \DateTime('00:00'));
            $obligation10->setIdObligation('entretien_foyer');

            $entityManager->persist($obligation10);
            $entityManager->flush();

            $obligation_tempo10 = new ObligationFamilialeTempo();
            $obligation_tempo10->setUserId($user->getId());
            $obligation_tempo10->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo10->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo10->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo10->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo10->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo10->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo10->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo10->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo10->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo10->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo10->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo10->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo10->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo10->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo10->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo10->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo10->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo10->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo10->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo10->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo10->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo10->setIdObligation($obligation10->getId());

            $entityManager->persist($obligation_tempo10);
            $entityManager->flush();

            $obligation11 = new ObligationFamiliale();
            $obligation11->setUserId($user->getId());
            $obligation11->setIntitule('Activité de Jardinage (entretien espaces verts)');
            $obligation11->setLundi(new \DateTime('00:00'));
            $obligation11->setMardi(new \DateTime('00:00'));
            $obligation11->setMercredi(new \DateTime('00:00'));
            $obligation11->setJeudi(new \DateTime('00:00'));
            $obligation11->setVendredi(new \DateTime('00:00'));
            $obligation11->setSamedi(new \DateTime('00:00'));
            $obligation11->setDimanche(new \DateTime('00:00'));
            $obligation11->setIdObligation('entretien_foyer');

            $entityManager->persist($obligation11);
            $entityManager->flush();

            $obligation_tempo11 = new ObligationFamilialeTempo();
            $obligation_tempo11->setUserId($user->getId());
            $obligation_tempo11->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo11->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo11->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo11->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo11->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo11->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo11->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo11->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo11->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo11->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo11->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo11->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo11->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo11->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo11->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo11->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo11->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo11->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo11->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo11->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo11->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo11->setIdObligation($obligation11->getId());

            $entityManager->persist($obligation_tempo11);
            $entityManager->flush();

            $obligation12 = new ObligationFamiliale();
            $obligation12->setUserId($user->getId());
            $obligation12->setIntitule('Activité planifiée de bricolage / amenagement');
            $obligation12->setLundi(new \DateTime('00:00'));
            $obligation12->setMardi(new \DateTime('00:00'));
            $obligation12->setMercredi(new \DateTime('00:00'));
            $obligation12->setJeudi(new \DateTime('00:00'));
            $obligation12->setVendredi(new \DateTime('00:00'));
            $obligation12->setSamedi(new \DateTime('00:00'));
            $obligation12->setDimanche(new \DateTime('00:00'));
            $obligation12->setIdObligation('entretien_reparation');

            $entityManager->persist($obligation12);
            $entityManager->flush();

            $obligation_tempo12 = new ObligationFamilialeTempo();
            $obligation_tempo12->setUserId($user->getId());
            $obligation_tempo12->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo12->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo12->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo12->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo12->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo12->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo12->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo12->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo12->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo12->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo12->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo12->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo12->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo12->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo12->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo12->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo12->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo12->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo12->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo12->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo12->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo12->setIdObligation($obligation12->getId());

            $entityManager->persist($obligation_tempo12);
            $entityManager->flush();

            $obligation13 = new ObligationFamiliale();
            $obligation13->setUserId($user->getId());
            $obligation13->setIntitule('Préparer les repas pris à la maison');
            $obligation13->setLundi(new \DateTime('00:00'));
            $obligation13->setMardi(new \DateTime('00:00'));
            $obligation13->setMercredi(new \DateTime('00:00'));
            $obligation13->setJeudi(new \DateTime('00:00'));
            $obligation13->setVendredi(new \DateTime('00:00'));
            $obligation13->setSamedi(new \DateTime('00:00'));
            $obligation13->setDimanche(new \DateTime('00:00'));
            $obligation13->setIdObligation('preparation_repas');

            $entityManager->persist($obligation13);
            $entityManager->flush();

            $obligation_tempo13 = new ObligationFamilialeTempo();
            $obligation_tempo13->setUserId($user->getId());
            $obligation_tempo13->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo13->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo13->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo13->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo13->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo13->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo13->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo13->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo13->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo13->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo13->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo13->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo13->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo13->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo13->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo13->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo13->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo13->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo13->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo13->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo13->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo13->setIdObligation($obligation13->getId());

            $entityManager->persist($obligation_tempo13);
            $entityManager->flush();

            $obligation14 = new ObligationFamiliale();
            $obligation14->setUserId($user->getId());
            $obligation14->setIntitule("Faire les courses regulières d'approvisionnement");
            $obligation14->setLundi(new \DateTime('00:00'));
            $obligation14->setMardi(new \DateTime('00:00'));
            $obligation14->setMercredi(new \DateTime('00:00'));
            $obligation14->setJeudi(new \DateTime('00:00'));
            $obligation14->setVendredi(new \DateTime('00:00'));
            $obligation14->setSamedi(new \DateTime('00:00'));
            $obligation14->setDimanche(new \DateTime('00:00'));
            $obligation14->setIdObligation('preparation_repas');

            $entityManager->persist($obligation14);
            $entityManager->flush();

            $obligation_tempo14 = new ObligationFamilialeTempo();
            $obligation_tempo14->setUserId($user->getId());
            $obligation_tempo14->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo14->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo14->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo14->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo14->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo14->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo14->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo14->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo14->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo14->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo14->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo14->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo14->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo14->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo14->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo14->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo14->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo14->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo14->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo14->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo14->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo14->setIdObligation($obligation14->getId());

            $entityManager->persist($obligation_tempo14);
            $entityManager->flush();

            $obligation15 = new ObligationFamiliale();
            $obligation15->setUserId($user->getId());
            $obligation15->setIntitule('Gestion des factures à payer & suivis des comptes');
            $obligation15->setLundi(new \DateTime('00:00'));
            $obligation15->setMardi(new \DateTime('00:00'));
            $obligation15->setMercredi(new \DateTime('00:00'));
            $obligation15->setJeudi(new \DateTime('00:00'));
            $obligation15->setVendredi(new \DateTime('00:00'));
            $obligation15->setSamedi(new \DateTime('00:00'));
            $obligation15->setDimanche(new \DateTime('00:00'));
            $obligation15->setIdObligation('gestion_financiere');

            $entityManager->persist($obligation15);
            $entityManager->flush();

            $obligation_tempo15 = new ObligationFamilialeTempo();
            $obligation_tempo15->setUserId($user->getId());
            $obligation_tempo15->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo15->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo15->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo15->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo15->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo15->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo15->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo15->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo15->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo15->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo15->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo15->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo15->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo15->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo15->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo15->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo15->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo15->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo15->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo15->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo15->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo15->setIdObligation($obligation15->getId());

            $entityManager->persist($obligation_tempo15);
            $entityManager->flush();

            $obligation16 = new ObligationFamiliale();
            $obligation16->setUserId($user->getId());
            $obligation16->setIntitule('Gestion des courriers et tâches administratives du foyer');
            $obligation16->setLundi(new \DateTime('00:00'));
            $obligation16->setMardi(new \DateTime('00:00'));
            $obligation16->setMercredi(new \DateTime('00:00'));
            $obligation16->setJeudi(new \DateTime('00:00'));
            $obligation16->setVendredi(new \DateTime('00:00'));
            $obligation16->setSamedi(new \DateTime('00:00'));
            $obligation16->setDimanche(new \DateTime('00:00'));
            $obligation16->setIdObligation('gestion_financiere');

            $entityManager->persist($obligation16);
            $entityManager->flush();

            $obligation_tempo16 = new ObligationFamilialeTempo();
            $obligation_tempo16->setUserId($user->getId());
            $obligation_tempo16->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo16->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo16->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo16->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo16->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo16->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo16->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo16->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo16->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo16->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo16->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo16->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo16->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo16->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo16->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo16->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo16->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo16->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo16->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo16->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo16->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo16->setIdObligation($obligation16->getId());

            $entityManager->persist($obligation_tempo16);
            $entityManager->flush();

            $obligation17 = new ObligationFamiliale();
            $obligation17->setUserId($user->getId());
            $obligation17->setIntitule('Établissement de budget, gestion de placements');
            $obligation17->setLundi(new \DateTime('00:00'));
            $obligation17->setMardi(new \DateTime('00:00'));
            $obligation17->setMercredi(new \DateTime('00:00'));
            $obligation17->setJeudi(new \DateTime('00:00'));
            $obligation17->setVendredi(new \DateTime('00:00'));
            $obligation17->setSamedi(new \DateTime('00:00'));
            $obligation17->setDimanche(new \DateTime('00:00'));
            $obligation17->setIdObligation('gestion_financiere');

            $entityManager->persist($obligation17);
            $entityManager->flush();

            $obligation_tempo17 = new ObligationFamilialeTempo();
            $obligation_tempo17->setUserId($user->getId());
            $obligation_tempo17->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo17->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo17->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo17->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo17->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo17->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo17->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo17->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo17->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo17->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo17->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo17->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo17->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo17->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo17->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo17->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo17->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo17->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo17->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo17->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo17->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo17->setIdObligation($obligation17->getId());

            $entityManager->persist($obligation_tempo17);
            $entityManager->flush();

            $obligation18 = new ObligationFamiliale();
            $obligation18->setUserId($user->getId());
            $obligation18->setIntitule('Gestion de bien immobiliers, de comptes SCI');
            $obligation18->setLundi(new \DateTime('00:00'));
            $obligation18->setMardi(new \DateTime('00:00'));
            $obligation18->setMercredi(new \DateTime('00:00'));
            $obligation18->setJeudi(new \DateTime('00:00'));
            $obligation18->setVendredi(new \DateTime('00:00'));
            $obligation18->setSamedi(new \DateTime('00:00'));
            $obligation18->setDimanche(new \DateTime('00:00'));
            $obligation18->setIdObligation('gestion_financiere');

            $entityManager->persist($obligation18);
            $entityManager->flush();

            $obligation_tempo18 = new ObligationFamilialeTempo();
            $obligation_tempo18->setUserId($user->getId());
            $obligation_tempo18->setLundiMatin(new \DateTime('00:00'));
            $obligation_tempo18->setLundiMidi(new \DateTime('00:00'));
            $obligation_tempo18->setLundiSoir(new \DateTime('00:00'));
            $obligation_tempo18->setMardiMatin(new \DateTime('00:00'));
            $obligation_tempo18->setMardiMidi(new \DateTime('00:00'));
            $obligation_tempo18->setMardiSoir(new \DateTime('00:00'));
            $obligation_tempo18->setMercrediMatin(new \DateTime('00:00'));
            $obligation_tempo18->setMercrediMidi(new \DateTime('00:00'));
            $obligation_tempo18->setMercrediSoir(new \DateTime('00:00'));
            $obligation_tempo18->setJeudiMatin(new \DateTime('00:00'));
            $obligation_tempo18->setJeudiMidi(new \DateTime('00:00'));
            $obligation_tempo18->setJeudiSoir(new \DateTime('00:00'));
            $obligation_tempo18->setVendrediMatin(new \DateTime('00:00'));
            $obligation_tempo18->setVendrediMidi(new \DateTime('00:00'));
            $obligation_tempo18->setVendrediSoir(new \DateTime('00:00'));
            $obligation_tempo18->setSamediMatin(new \DateTime('00:00'));
            $obligation_tempo18->setSamediMidi(new \DateTime('00:00'));
            $obligation_tempo18->setSamediSoir(new \DateTime('00:00'));
            $obligation_tempo18->setDimancheMatin(new \DateTime('00:00'));
            $obligation_tempo18->setDimancheMidi(new \DateTime('00:00'));
            $obligation_tempo18->setDimancheSoir(new \DateTime('00:00'));
            $obligation_tempo18->setIdObligation($obligation18->getId());

            $entityManager->persist($obligation_tempo18);
            $entityManager->flush();

            // Objectif finance / mes loisirs //

            $finance = new ObjectifFinanceLoisir();
            $finance->setUserId($user->getId());
            $finance->setTitre('Activités de loisirs (Cours, Ateliers, Abonnement, équipement etc...)');
            $finance->setMontant(0);
            $finance->setType("loisir");

            $entityManager->persist($finance);
            $entityManager->flush();

            $finance2 = new ObjectifFinanceLoisir();
            $finance2->setUserId($user->getId());
            $finance2->setTitre('Divertissements numériques (Abonnement TV, Streaming, Achats de films / musique, Jeux Vidéos etc...)');
            $finance2->setMontant(0);
            $finance2->setType("loisir");

            $entityManager->persist($finance2);
            $entityManager->flush();

            $finance3 = new ObjectifFinanceLoisir();
            $finance3->setUserId($user->getId());
            $finance3->setTitre('Restaurants et sorties (Cinéma, concerts, événements sportifs etc...)');
            $finance3->setMontant(0);
            $finance3->setType("loisir");

            $entityManager->persist($finance3);
            $entityManager->flush();
            
            $finance4 = new ObjectifFinanceLoisir();
            $finance4->setUserId($user->getId());
            $finance4->setTitre('Shopping : Achats de vétements ou accessoires.');
            $finance4->setMontant(0);
            $finance4->setType("loisir");

            $entityManager->persist($finance4);
            $entityManager->flush();
            
            $finance5 = new ObjectifFinanceLoisir();
            $finance5->setUserId($user->getId());
            $finance5->setTitre('Cigarettes & Alcools');
            $finance5->setMontant(0);
            $finance5->setType("loisir");

            $entityManager->persist($finance5);
            $entityManager->flush();
            
            $finance6 = new ObjectifFinanceLoisir();
            $finance6->setUserId($user->getId());
            $finance6->setTitre('Animaux de compagnie (Frais liés)');
            $finance6->setMontant(0);
            $finance6->setType("loisir");

            $entityManager->persist($finance6);
            $entityManager->flush();

            $finance7 = new ObjectifFinanceLoisir();
            $finance7->setUserId($user->getId());
            $finance7->setTitre('Remboursement de crédit à la consommation (ou de découvert sur compte)');
            $finance7->setMontant(0);
            $finance7->setType("loisir");

            $entityManager->persist($finance7);
            $entityManager->flush();

            $finance8 = new ObjectifFinanceLoisir();
            $finance8->setUserId($user->getId());
            $finance8->setTitre('Autres frais de loisirs/plaisirs personnels');
            $finance8->setMontant(0);
            $finance8->setType("loisir");

            $entityManager->persist($finance8);
            $entityManager->flush();

            $formation = new ObjectifFinanceLoisir();
            $formation->setUserId($user->getId());
            $formation->setTitre('Frais spécifique de scolarité, formation en ligne (Inscription, Abonnement)');
            $formation->setMontant(0);
            $formation->setType("formation");

            $entityManager->persist($formation);
            $entityManager->flush();

            $formation2 = new ObjectifFinanceLoisir();
            $formation2->setUserId($user->getId());
            $formation2->setTitre('Achats de livres, de materiel pédagogique, Abonnement à des revues spécifiques...');
            $formation2->setMontant(0);
            $formation2->setType("formation");

            $entityManager->persist($formation2);
            $entityManager->flush();

            $formation3 = new ObjectifFinanceLoisir();
            $formation3->setUserId($user->getId());
            $formation3->setTitre('Conférence et séminaires (coût participation et de déplacement)');
            $formation3->setMontant(0);
            $formation3->setType("formation");

            $entityManager->persist($formation3);
            $entityManager->flush();

            $formation4 = new ObjectifFinanceLoisir();
            $formation4->setUserId($user->getId());
            $formation4->setTitre('Coach, prof particulier, mentor (Paiement d\'honoraires)');
            $formation4->setMontant(0);
            $formation4->setType("formation");

            $entityManager->persist($formation4);
            $entityManager->flush();

            $formation5 = new ObjectifFinanceLoisir();
            $formation5->setUserId($user->getId());
            $formation5->setTitre('Autres frais de formations, de développement de compétences (Achat outils, logiciels, équipement spécifiques)');
            $formation5->setMontant(0);
            $formation5->setType("formation");

            $entityManager->persist($formation5);
            $entityManager->flush();

            $donation = new ObjectifFinanceLoisir();
            $donation->setUserId($user->getId());
            $donation->setTitre('Impôts sur mes revenus (Contribution à la collectivité)');
            $donation->setMontant(0);
            $donation->setType("donation");

            $entityManager->persist($donation);
            $entityManager->flush();

            $donation2 = new ObjectifFinanceLoisir();
            $donation2->setUserId($user->getId());
            $donation2->setTitre('Cadeaux (occasions spéciales, Anniversaires etc...)');
            $donation2->setMontant(0);
            $donation2->setType("donation");

            $entityManager->persist($donation2);
            $entityManager->flush();

            $donation3 = new ObjectifFinanceLoisir();
            $donation3->setUserId($user->getId());
            $donation3->setTitre('Frais de loisirs apportés à mes enfants, petits enfants...');
            $donation3->setMontant(0);
            $donation3->setType("donation");

            $entityManager->persist($donation3);
            $entityManager->flush();

            $donation4 = new ObjectifFinanceLoisir();
            $donation4->setUserId($user->getId());
            $donation4->setTitre('Soutien financiers à des proches (Famille / Amis)');
            $donation4->setMontant(0);
            $donation4->setType("donation");

            $entityManager->persist($donation4);
            $entityManager->flush();

            $donation5 = new ObjectifFinanceLoisir();
            $donation5->setUserId($user->getId());
            $donation5->setTitre('Contributions caritatives (Soutien à des causes)');
            $donation5->setMontant(0);
            $donation5->setType("donation");

            $entityManager->persist($donation5);
            $entityManager->flush();

            $donation6 = new ObjectifFinanceLoisir();
            $donation6->setUserId($user->getId());
            $donation6->setTitre('Autres donations / partages');
            $donation6->setMontant(0);
            $donation6->setType("donation");

            $entityManager->persist($donation6);
            $entityManager->flush();

            $depense = new ObjectifFinanceLoisir();
            $depense->setUserId($user->getId());
            $depense->setTitre('Dépenses de logements');
            $depense->setMontant(0);
            $depense->setType("depense");

            $entityManager->persist($depense);
            $entityManager->flush();

            $depense2 = new ObjectifFinanceLoisir();
            $depense2->setUserId($user->getId());
            $depense2->setTitre('Dépenses de nourritures et de besoins de base');
            $depense2->setMontant(0);
            $depense2->setType("depense");

            $entityManager->persist($depense2);
            $entityManager->flush();

            $depense3 = new ObjectifFinanceLoisir();
            $depense3->setUserId($user->getId());
            $depense3->setTitre('Dépenses de Santé');
            $depense3->setMontant(0);
            $depense3->setType("depense");

            $entityManager->persist($depense3);
            $entityManager->flush();

            $depense4 = new ObjectifFinanceLoisir();
            $depense4->setUserId($user->getId());
            $depense4->setTitre('Dépenses de Transport');
            $depense4->setMontant(0);
            $depense4->setType("depense");

            $entityManager->persist($depense4);
            $entityManager->flush();

            $depense5 = new ObjectifFinanceLoisir();
            $depense5->setUserId($user->getId());
            $depense5->setTitre('Dépenses d\'habillement & soins corporels');
            $depense5->setMontant(0);
            $depense5->setType("depense");

            $entityManager->persist($depense5);
            $entityManager->flush();

            $depense6 = new ObjectifFinanceLoisir();
            $depense6->setUserId($user->getId());
            $depense6->setTitre('Dépenses d\'éducation (Mes enfants)');
            $depense6->setMontant(0);
            $depense6->setType("depense");

            $entityManager->persist($depense6);
            $entityManager->flush();

            $depense7 = new ObjectifFinanceLoisir();
            $depense7->setUserId($user->getId());
            $depense7->setTitre('Dépenses de communication, échanges (Téléphone, internet)');
            $depense7->setMontant(0);
            $depense7->setType("depense");

            $entityManager->persist($depense7);
            $entityManager->flush();

            $fond_urgence = new FondUrgence();
            $fond_urgence->setUserId($user->getId());
            $fond_urgence->setEpargneMinimum("non");
            $fond_urgence->setMontantDispo(0);
            $fond_urgence->setEpargnePlace("non");

            $entityManager->persist($fond_urgence);
            $entityManager->flush();

            $depense_logement = new ObjectifFinanceLoisir();
            $depense_logement->setUserId($user->getId());
            $depense_logement->setTitre('Loyer (locataire) charges incluses');
            $depense_logement->setMontant(0);
            $depense_logement->setType("depense_logement");

            $entityManager->persist($depense_logement);
            $entityManager->flush();

            $depense_logement2 = new ObjectifFinanceLoisir();
            $depense_logement2->setUserId($user->getId());
            $depense_logement2->setTitre('Échéance de prêt immobilier');
            $depense_logement2->setMontant(0);
            $depense_logement2->setType("depense_logement");

            $entityManager->persist($depense_logement2);
            $entityManager->flush();

            $depense_logement3 = new ObjectifFinanceLoisir();
            $depense_logement3->setUserId($user->getId());
            $depense_logement3->setTitre('Chauffage / Électricité et eau');
            $depense_logement3->setMontant(0);
            $depense_logement3->setType("depense_logement");

            $entityManager->persist($depense_logement3);
            $entityManager->flush();

            $depense_logement4 = new ObjectifFinanceLoisir();
            $depense_logement4->setUserId($user->getId());
            $depense_logement4->setTitre('Assurance habitation');
            $depense_logement4->setMontant(0);
            $depense_logement4->setType("depense_logement");

            $entityManager->persist($depense_logement4);
            $entityManager->flush();

            $depense_logement5 = new ObjectifFinanceLoisir();
            $depense_logement5->setUserId($user->getId());
            $depense_logement5->setTitre('Taxes Foncières');
            $depense_logement5->setMontant(0);
            $depense_logement5->setType("depense_logement");

            $entityManager->persist($depense_logement5);
            $entityManager->flush();

            $depense_logement6 = new ObjectifFinanceLoisir();
            $depense_logement6->setUserId($user->getId());
            $depense_logement6->setTitre('Frais de copropriétés');
            $depense_logement6->setMontant(0);
            $depense_logement6->setType("depense_logement");

            $entityManager->persist($depense_logement6);
            $entityManager->flush();

            $depense_logement7 = new ObjectifFinanceLoisir();
            $depense_logement7->setUserId($user->getId());
            $depense_logement7->setTitre('Petits entretiens / Réparations réguliers');
            $depense_logement7->setMontant(0);
            $depense_logement7->setType("depense_logement");

            $entityManager->persist($depense_logement7);
            $entityManager->flush();

            $depense_logement8 = new ObjectifFinanceLoisir();
            $depense_logement8->setUserId($user->getId());
            $depense_logement8->setTitre('Autres frais liés au logements');
            $depense_logement8->setMontant(0);
            $depense_logement8->setType("depense_logement");

            $entityManager->persist($depense_logement8);
            $entityManager->flush();

            $depense_transport = new ObjectifFinanceLoisir();
            $depense_transport->setUserId($user->getId());
            $depense_transport->setTitre('Échéance de prêt (ou location) de mon véhicule courant');
            $depense_transport->setMontant(0);
            $depense_transport->setType("depense_transport");

            $entityManager->persist($depense_transport);
            $entityManager->flush();

            $depense_transport2 = new ObjectifFinanceLoisir();
            $depense_transport2->setUserId($user->getId());
            $depense_transport2->setTitre('Carburant (dépense moyenne)');
            $depense_transport2->setMontant(0);
            $depense_transport2->setType("depense_transport");

            $entityManager->persist($depense_transport2);
            $entityManager->flush();

            $depense_transport3 = new ObjectifFinanceLoisir();
            $depense_transport3->setUserId($user->getId());
            $depense_transport3->setTitre('Assurance de mon véhicule');
            $depense_transport3->setMontant(0);
            $depense_transport3->setType("depense_transport");

            $entityManager->persist($depense_transport3);
            $entityManager->flush();

            $depense_transport4 = new ObjectifFinanceLoisir();
            $depense_transport4->setUserId($user->getId());
            $depense_transport4->setTitre('Frais de stationnement, location/prêt de garage');
            $depense_transport4->setMontant(0);
            $depense_transport4->setType("depense_transport");

            $entityManager->persist($depense_transport4);
            $entityManager->flush();

            $depense_transport5 = new ObjectifFinanceLoisir();
            $depense_transport5->setUserId($user->getId());
            $depense_transport5->setTitre('Frais moyens de transport en commun / Péage');
            $depense_transport5->setMontant(0);
            $depense_transport5->setType("depense_transport");

            $entityManager->persist($depense_transport5);
            $entityManager->flush();

            $depense_transport6 = new ObjectifFinanceLoisir();
            $depense_transport6->setUserId($user->getId());
            $depense_transport6->setTitre('Frais d\'entretien courants de mon véhicule (Contrôle technique, nettoyage etc...)');
            $depense_transport6->setMontant(0);
            $depense_transport6->setType("depense_transport");

            $entityManager->persist($depense_transport6);
            $entityManager->flush();

            $depense_education = new ObjectifFinanceLoisir();
            $depense_education->setUserId($user->getId());
            $depense_education->setTitre('Frais de scolarité (école privé) et fournitures scolaires');
            $depense_education->setMontant(0);
            $depense_education->setType("depense_education");

            $entityManager->persist($depense_education);
            $entityManager->flush();

            $depense_education2 = new ObjectifFinanceLoisir();
            $depense_education2->setUserId($user->getId());
            $depense_education2->setTitre('Frais de santé spécifique à mes enfants');
            $depense_education2->setMontant(0);
            $depense_education2->setType("depense_education");

            $entityManager->persist($depense_education2);
            $entityManager->flush();

            $depense_education3 = new ObjectifFinanceLoisir();
            $depense_education3->setUserId($user->getId());
            $depense_education3->setTitre('Vêtements / chaussures spécifiques pour mes enfants');
            $depense_education3->setMontant(0);
            $depense_education3->setType("depense_education");

            $entityManager->persist($depense_education3);
            $entityManager->flush();

            $depense_education4 = new ObjectifFinanceLoisir();
            $depense_education4->setUserId($user->getId());
            $depense_education4->setTitre('Frais de garde (dépenses personnelles net)');
            $depense_education4->setMontant(0);
            $depense_education4->setType("depense_education");

            $entityManager->persist($depense_education4);
            $entityManager->flush();

            $depense_education5 = new ObjectifFinanceLoisir();
            $depense_education5->setUserId($user->getId());
            $depense_education5->setTitre('Pension Alimentaire');
            $depense_education5->setMontant(0);
            $depense_education5->setType("depense_education");

            $entityManager->persist($depense_education5);
            $entityManager->flush();

            $depense_education6 = new ObjectifFinanceLoisir();
            $depense_education6->setUserId($user->getId());
            $depense_education6->setTitre('Frais d\'activité parascolaire (transports compris)');
            $depense_education6->setMontant(0);
            $depense_education6->setType("depense_education");

            $entityManager->persist($depense_education6);
            $entityManager->flush();

            $depense_education7 = new ObjectifFinanceLoisir();
            $depense_education7->setUserId($user->getId());
            $depense_education7->setTitre('Frais de logement et déplacements pour enfant étudiant');
            $depense_education7->setMontant(0);
            $depense_education7->setType("depense_education");

            $entityManager->persist($depense_education7);
            $entityManager->flush();

            $depense_education8 = new ObjectifFinanceLoisir();
            $depense_education8->setUserId($user->getId());
            $depense_education8->setTitre('Frais de communication pour mes enfants (Abonnement telephonique)');
            $depense_education8->setMontant(0);
            $depense_education8->setType("depense_education");

            $entityManager->persist($depense_education8);
            $entityManager->flush();

            $depense_communication = new ObjectifFinanceLoisir();
            $depense_communication->setUserId($user->getId());
            $depense_communication->setTitre('Forfait téléphonique');
            $depense_communication->setMontant(0);
            $depense_communication->setType("depense_communication");

            $entityManager->persist($depense_communication);
            $entityManager->flush();

            $depense_communication2 = new ObjectifFinanceLoisir();
            $depense_communication2->setUserId($user->getId());
            $depense_communication2->setTitre('Forfait Internet / Box');
            $depense_communication2->setMontant(0);
            $depense_communication2->setType("depense_communication");

            $entityManager->persist($depense_communication2);
            $entityManager->flush();

            $depense_communication3 = new ObjectifFinanceLoisir();
            $depense_communication3->setUserId($user->getId());
            $depense_communication3->setTitre('Frais lié à l\'ordinateur / logiciel');
            $depense_communication3->setMontant(0);
            $depense_communication3->setType("depense_communication");

            $entityManager->persist($depense_communication3);
            $entityManager->flush();

            $depense_communication4 = new ObjectifFinanceLoisir();
            $depense_communication4->setUserId($user->getId());
            $depense_communication4->setTitre('Abonnement Applications et services en ligne');
            $depense_communication4->setMontant(0);
            $depense_communication4->setType("depense_communication");

            $entityManager->persist($depense_communication4);
            $entityManager->flush();

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'title_page' => 'S\'inscrire sur Waou',
            'imagePath' => 'img/picto-inscription.png',
        ]);
    }
}
