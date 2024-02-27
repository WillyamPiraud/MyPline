<?php

namespace App\Form;

use App\Entity\Journalier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportTaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('date_journalier', DateType::class, [
                'label' => 'Date de report',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('temps_task', TimeType::class, [
                'label' => '⌛ Temps prévu (hh:mm) :',
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
