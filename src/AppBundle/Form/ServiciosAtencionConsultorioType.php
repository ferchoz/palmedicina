<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiciosAtencionConsultorioType extends AbstractType
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
            ->add('observaciones', null, array('required' => false))
            ->add('consultaClinica', null, array('required' => false))
            ->add('traumatologia', null, array('required' => false))
            ->add('cardiologia', null, array('required' => false))
            ->add('controlAusentismo', null, array('required' => false))
            ->add('dermatologia', null, array('required' => false))
            ->add('neurologia', null, array('required' => false))
            ->add('oftalmologia', null, array('required' => false))
            ->add('ginecologia', null, array('required' => false))
            ->add('otros', null, array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ServiciosAtencionConsultorio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'atencionconsultorio';
    }
}
