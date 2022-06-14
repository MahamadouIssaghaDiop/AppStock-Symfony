<?php

namespace App\Form;

use App\Entity\Sortie;
use App\Entity\Entree;
use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateS', DateType::class, array('label'=>"Date de vente", 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('qteS', TextType::class, array('label'=>'Quantite vendue', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('produit', EntityType::class, array('class'=>Produit::class, 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
            ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-success form-group',)))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
