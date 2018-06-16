<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType {
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
			->add( 'lastname', TextType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Apellidos'
				]
			)
			->add( 'address', TextType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Dirección'
				]
			)
			->add( 'phone', TelType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Teléfono'
				]
			)
			->add( 'mail', EmailType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Correo'
				]
			)
			->add( 'photo', FileType::class,
				[
					'attr'  =>
						[ 'class' => 'form-control' ],
					'label' => 'Foto de perfil',
				]
			);
	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions( OptionsResolver $resolver ) {
		$resolver->setDefaults( array(
			'data_class' => 'AppBundle\Entity\Client'
		) );
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix() {
		return 'appbundle_client';
	}


}
