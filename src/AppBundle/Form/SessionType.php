<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
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
	        ->add('description',TextType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('alarm',DateType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('date',DateType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('idTreatment',TextType::class,
		        ['attr' =>
			         ['class' => 'form-control']
		        ]
	        )
	        ->add('idAdmin',CheckboxType::class,
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
            'data_class' => 'AppBundle\Entity\Session'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_session';
    }


}
