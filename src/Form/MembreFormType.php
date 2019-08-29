<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 23/04/2019
 * Time: 16:57
 */

namespace App\Form;

use App\Entity\Membre;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembreFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "Prénom"
                ]
            ])
            ->add('nom', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "Nom"
                ]
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "@mail"
                ]
            ])
            ->add('password', PasswordType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "Password"
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        /*
         * MembreFormType travaillera OBLIGATOIREMENT
         * avec des instances de App/Entity/Membre
         */
        $resolver->setDefault('data_class', Membre::class);
    }

    public function getBlockPrefix()
    {
        /*
         * Permet de préfixer les id et name des formulaires
         */
        return 'app_register';
    }
}