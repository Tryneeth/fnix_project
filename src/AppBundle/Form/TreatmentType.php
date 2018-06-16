<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TreatmentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('name',TextType::class,
		        ['attr' =>
			         ['class' => 'form-control'],
		         'label' => 'Nombre'
		        ]
	        )
	        ->add('description',TextareaType::class,
		        ['attr' =>
			         ['class' => 'form-control'],
		         'label' => 'Descripción'
		        ]
	        )
	        ->add('date',DateType::class,
		        ['attr' =>
			         ['class' => 'form-control'],
		         'label' => 'Fecha'
		        ]
	        )
	        ->add('idClient', null,
		        ['attr' =>
			         ['class' => 'form-control', 'required' => ''],
		         'label' => 'Cliente'
		        ]
	        );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Treatment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_treatment';
    }


}
