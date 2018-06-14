<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Intl\NumberFormatter\NumberFormatter;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;

class AdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            )
            ->add('password',RepeatedType::class,[
                'type'=> PasswordType::class,
                'required' => true,
                'first_options'  => array('label' => 'Password', 'attr' => ['class' => 'form-control']),
                'second_options' => array('label' => 'Repeat Password', 'attr' => ['class' => 'form-control']),
            ])
            ->add('role', TextType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            )
            ->add('name',TextType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            )
            ->add('lastname',TextType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            )
            ->add('email',EmailType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            )
            ->add('phone',NumberType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            )
            ->add('photo', FileType::class,
	            ['attr' =>
		             ['class' => 'form-control']
	            ]
            );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Admin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_admin';
    }


}
