<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
	        ->add('address',TextType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('phone',NumberType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('mail',EmailType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('photo',FileType::class,
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
            'data_class' => 'AppBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_client';
    }


}
