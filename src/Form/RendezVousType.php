<?php

namespace App\Form;

use App\Entity\RendezVous;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('date_rdv', DateType::class, [
                'label' => 'Date du rendez-vous :',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('temps_prevu', TimeType::class, [
                'label' => '⌛ Temps prévu (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('frequence', ChoiceType::class, [
                'choices' => [
                    'Pas de frequence (unique)' => 'unique',
                    'Quotidien' => 'quotidien',
                    'Hebdomadaire' => 'hebdomadaire',
                    'Quinzaine' => 'quinzaine',
                    'Mensuel' => 'mensuel',
                    'Trimestriel' => 'trimestriel',
                    'Semestriel' => 'semestriel',
                    'Annuel' => 'annuel',
                ],
            ])
            ->add('telephone')
            ->add('horraire', TimeType::class, [
                'label' => '⌛ Heure du RDV (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('lieu_rdv')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
