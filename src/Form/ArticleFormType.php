<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 23/04/2019
 * Time: 16:57
 */

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "titre de l'article"
                ]
            ])

            ->add('categorie',EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'label' => false
            ])

            ->add('contenu', TextareaType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => "contenu de l'article"
                ]
            ])

            ->add('featuredImage',FileType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'class' => 'dropify'
                ]
            ])

            ->add('special', CheckboxType::class,[
                'required' => false,
                'attr' => [
                    'data-toggle' => 'toggle',
                    'data-on' => 'Oui',
                    'data-off' => 'Non'
                ]
            ])
            ->add('spotlight', CheckboxType::class, [
                'required' => false,
                'attr' => [
                    'data-toggle' => 'toggle',
                    'data-on' => 'Oui',
                    'data-off' => 'Non'
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Publier mon Article'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        /*
         * ArticleFormType travaillera OBLIGATOIREMENT
         * avec des instances de App/Entity/Article
         */
        $resolver->setDefault('data_class', Article::class);
    }

    public function getBlockPrefix()
    {
        /*
         * Permet de préfixer les id et name des formulaires
         */
        return 'form';
    }
}