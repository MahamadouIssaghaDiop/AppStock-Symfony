<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        # ->add('id', TextType::class, array('label'=>'id du produit', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('libelle', TextType::class, array('label'=>'Libelle du produit', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('qtStock', TextType::class, array('label'=>'Quantité en stock', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('categorie', EntityType::class, array('class'=>Categorie::class, 'label'=>'Libelle du categorie', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-success form-group',)))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
