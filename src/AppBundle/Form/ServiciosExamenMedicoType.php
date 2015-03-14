<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiciosExamenMedicoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razonSocial')
            ->add('apellidoNombreSolicitante')
            ->add('email', 'email')
            ->add('fecha', 'text')
            ->add('apellidoNombre')
            ->add('cargoTarea')
            ->add('observaciones', null, array('required' => false))
            ->add('ingreso', null, array('required' => false))
            ->add('periodico', null, array('required' => false))
            ->add('egreso', null, array('required' => false))
            ->add('ausenciaProlongada', null, array('required' => false))
            ->add('cambioDeTareas', null, array('required' => false))
            ->add('libretaSanitaria', null, array('required' => false))
            ->add('audiometria', null, array('required' => false))
            ->add('psicotecnico', null, array('required' => false))
            ->add('dapTest', null, array('required' => false))
            ->add('rxColumnaLumbarFrente', null, array('required' => false))
            ->add('rxColumnaFrentePerfil', null, array('required' => false))
            ->add('grupoFactorSanguineo', null, array('required' => false))
            ->add('otros', null, array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ServiciosExamenMedico'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'examenmedico';
    }
}
