<?php

namespace App\Form;

use App\Entity\Guide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GuideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
        'attr' => [
            'class' => 'form-control round-form'
        ]
    ])
            ->add('prenom', TextType::class, [
        'attr' => [
            'class' => 'form-control round-form'
        ]
    ])
            ->add('email', TextType::class, [
                'attr' => [
                    'class' => 'form-control round-form'
                ]
            ])
            ->add('numero', TextType::class, [
                'attr' => [
                    'class' => 'form-control round-form'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Guide::class,
        ]);
    }
}
