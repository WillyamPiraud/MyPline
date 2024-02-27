<?php

namespace App\Form;

use App\Entity\CalendrierChosesAFaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class CalendrierChosesAFaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('intitule')
            ->add('date_butoir', DateType::class, [
                'label' => 'Date butoir :',
                'widget' => 'single_text',
                'html5' => true, // Activez l'option HTML5 pour obtenir un sélecteur de date
                'format' => 'yyyy-MM-dd',
            ])
            ->add('date_prevue', DateType::class, [
                'label' => 'Date prévue :',
                'widget' => 'single_text',
                'html5' => true, // Activez l'option HTML5 pour obtenir un sélecteur de date
                'format' => 'yyyy-MM-dd',
                 ])
            ->add('temps_prevue', TimeType::class, [
                'label' => '⌛ Temps Prévu (hh:mm) :',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'time-input',
                ],
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CalendrierChosesAFaire::class,
        ]);
    }
}
