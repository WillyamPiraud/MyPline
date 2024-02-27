<?php

namespace App\Form;

use App\Entity\BesoinVitalRepas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BesoinVitalRepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lundi_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('lundi_dejeuner', TimeType::class, [
                'label' => '⌛ Dejeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('lundi_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mardi_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mardi_dejeuner', TimeType::class, [
                'label' => '⌛ Dejeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mardi_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mercredi_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mercredi_dejeuner', TimeType::class, [
                'label' => '⌛ Dejeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mercredi_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('jeudi_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('jeudi_dejeuner', TimeType::class, [
                'label' => '⌛ Dejeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('jeudi_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('vendredi_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('vendredi_dejeuner', TimeType::class, [
                'label' => '⌛ Dejeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('vendredi_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('samedi_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('samedi_dejeuner', TimeType::class, [
                'label' => '⌛ Dejeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('samedi_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('dimanche_petit_dejeuner', TimeType::class, [
                'label' => '⌛ Petit Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('dimanche_dejeuner', TimeType::class, [
                'label' => '⌛ Déjeuner (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('dimanche_dinner', TimeType::class, [
                'label' => '⌛ Dinner (hh:mm) :',
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BesoinVitalRepas::class,
        ]);
    }
}
