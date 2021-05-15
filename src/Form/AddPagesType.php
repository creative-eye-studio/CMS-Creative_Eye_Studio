<?php

namespace App\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddPagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('page_title', TextType::class, [
                "label" => "Nom de la page",
            ])
            ->add("page_nav_index", NumberType::class, [
                "label" => "Emplacement sur le menu",
                "html5" => true,
            ])
            ->add("page_nav_position", ChoiceType::class, [
                "choices" => [
                    "Menu principal" => "main",
                    "Menu légal" => "legal",
                    "Pas de menu" => "no-nav",
                ],
                "label" => "Menu",
            ])
            ->add('page_content', CKEditorType::class, [
                "label" => "Contenu de la page"
            ])
            ->add('page_url', TextType::class, [
                "label" => "URL de la page",
                "required" => false
            ])
            ->add('page_meta_title', TextType::class, [
                "label" => "Balise Title de la page",
                "required" => false,
            ])
            ->add("page_meta_desc", TextareaType::class, [
                "label" => "Balise Description de la page",
                "required" => false,
            ])
            ->add("page_submit", SubmitType::class, [
                "label" => "Envoyer"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
