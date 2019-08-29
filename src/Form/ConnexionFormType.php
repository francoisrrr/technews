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

class ConnexionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "Login"
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
                'label' => 'Entrer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        /*
         * Les résultats seront renvoyés sous forme de tableau
         */
        $resolver->setDefault('data_class', null);
    }

    public function getBlockPrefix()
    {
        /*
         * Permet de préfixer les id et name des formulaires
         */
        return 'app_login';
    }
}