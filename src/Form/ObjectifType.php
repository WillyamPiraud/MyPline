<?php

namespace App\Form;

use App\Entity\Objectif;
use DateTime;
use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObjectifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre (1 ou 2 Mots) :',
            ])
            ->add('action', TextareaType::class, [
                'label' => "L'action précise :",
            ])
            ->add('date_fin', DateType::class, [
                'label' => "Date butoir d'atteinte de l'objectif :",
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Objectif::class,
        ]);
    }
}
