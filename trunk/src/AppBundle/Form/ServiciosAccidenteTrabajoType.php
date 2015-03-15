<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiciosAccidenteTrabajoType extends AbstractType
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
            ->add('art', 'choice', array(
                'empty_value' => 'Choose an option',
                'choices'   => array(
                    'Asociart'                  => 'Asociart',
                    'Berkley'                   => 'Berkley',
                    'Victoria'                  => 'Victoria',
                    'Cna'                       => 'Cna',
                    'Consolidar'                => 'Consolidar',
                    'Federación'                => 'Federación',
                    'Interacción'               => 'Interacción',
                    'La Buenos Aires'           => 'La Buenos Aires',
                    'La Caja'                   => 'La Caja',
                    'La Holando'                => 'La Holando',
                    'La Meridional'             => 'La Meridional',
                    'La Segunda'                => 'La Segunda',
                    'Laboratorio French'        => 'Laboratorio French',
                    'Liberty'                   => 'Liberty',
                    'Mapfre Aconcagua'          => 'Mapfre Aconcagua',
                    'Mapfre - Colonia Suiza'    => 'Mapfre - Colonia Suiza',
                    'Medihnt'                   => 'Medihnt',
                    'Prevención'                => 'Prevención',
                    'Provincia'                 => 'Provincia',
                    'Qbe a.r.t.'                => 'Qbe a.r.t.',
                    'Reconquista'               => 'Reconquista',
                ),
            ))
            ->add('apellidoNombre')
            ->add('diagnosticoPresuntivo', null, array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ServiciosAccidenteTrabajo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'accidentetrabajo';
    }
}
