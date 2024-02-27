<?php

namespace App\Form;

use App\Entity\MesLoisirs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MesLoisirsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('temps_prevue', TimeType::class, [
                'label' => '⌛ Temps Prévue (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('frequence', ChoiceType::class, [
                'choices' => [
                    'Quotidien' => 'quotidien',
                    'Hebdomadaire' => 'hebdomadaire',
                    'Quinzaine' => 'quinzaine',
                    'Mensuel' => 'mensuel',
                    'Trimestriel' => 'trimestriel',
                    'Semestriel' => 'semestriel',
                    'Annuel' => 'annuel',
                ],
            ])
            ->add('nombre_action', NumberType::class, [
                'label' => 'Nb de récurrence :',
            ])
            ->add('jour_recurrence', DateType::class, [
                'label' => 'Premier jour :',
                'widget' => 'single_text',
                'html5' => true, // Activez l'option HTML5 pour obtenir un sélecteur de date
                'format' => 'yyyy-MM-dd',
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu de réalisation :',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MesLoisirs::class,
        ]);
    }
}
