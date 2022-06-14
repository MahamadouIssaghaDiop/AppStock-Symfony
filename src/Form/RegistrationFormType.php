<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Roles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', TextType::class, array('label'=>'Email', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
        ->add('prenom', TextType::class, array('label'=>'Prenom', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
        ->add('nom', TextType::class, array('label'=>'Nom', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
        ->add('roles', EntityType::class, array('class'=>Roles::class, 'mapped'=>false, 'choice_label'=> function(Roles $roles)
        {return $roles->getNom();}, 'multiple'=>false, 'expanded'=>false, 'label'=>'Role', 'attr'=>array('require'=>'require','class'=>'form-control form-group')))
        //->add('roles')
        ->add('Password', PasswordType::class,['attr'=>array('require'=>'require','class'=>'form-control form-group')] ,
        [
            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            'mapped' => false,
            'attr' => ['autocomplete' => 'new-password'],
            'constraints' => 
            [new NotBlank(['message' => 'Please enter a password',]),
                new Length(['min' => 6,'minMessage' => 'Your password should be at least {{ limit }} characters',
                    // max length allowed by Symfony for security reasons
                    'max' => 4096,]),],])
        ->add('agreeTerms', CheckboxType::class, ['mapped'=>false,'constraints'=>[new IsTrue(['message' => 'You should agree to our terms.',]),],],)
        ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-success btn-lg m3-3 form-group col-md-12',)))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
