<?php

namespace App\Form;

use App\Entity\BesoinsVitaux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BesoinVitalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('intitule')
            ->add('lundi', TimeType::class, [
                'label' => '⌛ Lundi (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mardi', TimeType::class, [
                'label' => '⌛ Mardi (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('mercredi', TimeType::class, [
                'label' => '⌛ Mercredi (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('jeudi', TimeType::class, [
                'label' => '⌛ Jeudi (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('vendredi', TimeType::class, [
                'label' => '⌛ Vendredi (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('samedi', TimeType::class, [
                'label' => '⌛ Samedi (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('dimanche', TimeType::class, [
                'label' => '⌛ Dimanche (hh:mm) :',
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BesoinsVitaux::class,
        ]);
    }
}
