<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiciosVisitaDomicilioType extends AbstractType
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
            ->add('domicilio')
            ->add('numero')
            ->add('piso', null, array('required' => false))
            ->add('departamento', null, array('required' => false))
            ->add('entreCalles', null, array('required' => false))
            ->add('localidad')
            ->add('provincia')
            ->add('observaciones', null, array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ServiciosVisitaDomicilio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'visitadomicilio';
    }
}
