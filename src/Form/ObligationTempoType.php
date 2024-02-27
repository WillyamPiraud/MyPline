<?php

namespace App\Form;

use App\Entity\ObligationFamilialeTempo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObligationTempoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('customfield', TextType::class, [
            'label' => 'Intitulé :',
            'mapped' => false,
            'required' => false,
        ])
        ->add('lundi_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('lundi_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('lundi_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('mardi_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('mardi_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('mardi_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('mercredi_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('mercredi_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('mercredi_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('jeudi_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('jeudi_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('jeudi_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('vendredi_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('vendredi_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('vendredi_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('samedi_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('samedi_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('samedi_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('dimanche_matin', TimeType::class, [
            'label' => '⌛ Matin (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('dimanche_midi', TimeType::class, [
            'label' => '⌛ Midi (hh:mm) :',
            'widget' => 'single_text',
        ])
        ->add('dimanche_soir', TimeType::class, [
            'label' => '⌛ Soir (hh:mm) :',
            'widget' => 'single_text',
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ObligationFamilialeTempo::class,
        ]);
    }
}
