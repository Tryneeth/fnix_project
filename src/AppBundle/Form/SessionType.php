<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType {
	/**
	 * {@inheritdoc}
	 */
	public function buildForm( FormBuilderInterface $builder, array $options ) {
		$builder
			->add( 'name', TextType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Nombre'
				]
			)
			->add( 'description', TextareaType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Descripción'
				]
			)
			->add( 'alarm', DateTimeType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Alarma'
				]
			)
			->add( 'date', DateType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Fecha'
				]
			)
			->add( 'idTreatment', null,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Tratamiento'

				]
			)
			->add( 'idAdmin', null,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Administrador'
				]
			);
	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions( OptionsResolver $resolver ) {
		$resolver->setDefaults( array(
			'data_class' => 'AppBundle\Entity\Session'
		) );
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix() {
		return 'appbundle_session';
	}


}
