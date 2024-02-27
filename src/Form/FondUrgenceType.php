<?php

namespace App\Form;

use App\Entity\FondUrgence;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FondUrgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('epargne_minimum', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'oui',
                    'Non' => 'non',
                ],
            ])
            ->add('montant_dispo', NumberType::class, [
                'label' => 'Montant disponible à ce jour (en €) :',
            ])
            ->add('epargne_place', ChoiceType::class, [
                'label' => 'Cette épargne est elle placée sur un compte disponible ? (Compte livret)',
                'choices' => [
                    'Oui' => 'oui',
                    'Non' => 'non',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FondUrgence::class,
        ]);
    }
}
