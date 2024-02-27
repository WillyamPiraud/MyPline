<?php

namespace App\Form;

use App\Entity\Journalier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JournalierRendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('temps_task', TimeType::class, [
                'label' => '⌛ Temps (hh:mm) :',
                'widget' => 'single_text',
            ])
            ->add('telephone')
            ->add('lieu_rdv')
            ->add('horraire', TimeType::class, [
                'label' => '⌛ Heure (hh:mm) :',
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Journalier::class,
        ]);
    }
}
