<?php

namespace App\Form;

use App\Entity\PlanAction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanActionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('temps_prevu', TimeType::class, [
                'label' => '⌛ Temps Prévu (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('date_realisation', DateType::class, [
                'label' => 'Date de réalisation :',
                'widget' => 'single_text',
                'html5' => true, // Activez l'option HTML5 pour obtenir un sélecteur de date
                'format' => 'yyyy-MM-dd',
            ])
            ->add('frequence', ChoiceType::class, [
                'choices' => [
                    'Quotidien' => 'quotidien',
                    'Hebdomadaire' => 'hebdomadaire',
                    'Quinzaine' => 'quinzaine',
                    'Mensuel' => 'mensuel',
                    'Trimestriel' => 'trimestriel',
                    'Annuel' => 'annuel',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PlanAction::class,
        ]);
    }
}
