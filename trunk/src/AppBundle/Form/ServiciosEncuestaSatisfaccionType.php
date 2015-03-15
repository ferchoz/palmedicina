<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiciosEncuestaSatisfaccionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $satisfaccionPorSectores = array(
            'expanded' => true,
            'multiple' => false,
            'choices' => array(
                'Excelente' => 'Excelente',
                'Muy bueno' => 'Muy bueno',
                'Bueno'     => 'Bueno',
                'Regular'   => 'Regular',
                'Malo'      => 'Malo',
            )
        );

        $builder
            ->add('empresa')
            ->add('responde')
            ->add('cargo')
            ->add('comoConocioElServicio', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Internet'              => 'Internet',
                    'Recomendacíon'         => 'Recomendacíon',
                    'Accidente de trabajo'  => 'Accidente de trabajo',
                    'Otro'                  => 'Otro',
                ),
            ))
            ->add('porQueNosEligio', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Precio'              => 'Precio',
                    'Servicios ofrecidos' => 'Servicios ofrecidos',
                    'Recomendación'       => 'Recomendación',
                    'Otro'                => 'Otro',
                ),
            ))
            ->add('cuantoTiempo', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Menos de un mes'           => 'Menos de un mes',
                    'Entre seis meses y un año' => 'Entre seis meses y un año',
                    'Entre uno y tres años'     => 'Entre uno y tres años',
                    'Mas de tres años'          => 'Mas de tres años',
                ),
            ))
            ->add('conQueFrecuencia', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Una o más veces a la semana' => 'Una o más veces a la semana',
                    'Dos o tres veces al mes'     => 'Dos o tres veces al mes',
                    'Una véz al mes'              => 'Una véz al mes',
                    'Menos de una véz al mes'     => 'Menos de una véz al mes',
                ),
            ))
            ->add('satisfaccionGeneral', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Completamente satisfecho'   => 'Completamente satisfecho',
                    'Satisfecho'                 => 'Satisfecho',
                    'Insatisfecho'               => 'Insatisfecho',
                    'Completamente insatisfecho' => 'Completamente insatisfecho',
                ),
            ))
            ->add('haRecomendado', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                ),
            ))
            ->add('recomendariaNuestroServicio', 'choice', array(
                'required'    => false,
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                ),
            ))
            ->add('atencionTelefonica', 'choice', $satisfaccionPorSectores)
            ->add('visitasDomicilio', 'choice', $satisfaccionPorSectores)
            ->add('examenesMedicos', 'choice', $satisfaccionPorSectores)
            ->add('art', 'choice', $satisfaccionPorSectores)
            ->add('facturacion', 'choice', $satisfaccionPorSectores)
            ->add('paginaWeb', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                ),
            ))
            ->add('conQueFrecuenciaUtilizaElSitio', 'choice', array(
                'required'    => false,
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Una o más veces a la semana' => 'Una o más veces a la semana',
                    'Dos o tres veces al mes'     => 'Dos o tres veces al mes',
                    'Una véz al mes'              => 'Una véz al mes',
                    'Menos de una véz al mes'     => 'Menos de una véz al mes',
                ),
            ))
            ->add('comoConsideraLaVisualizacion', 'choice', array(
                'required'    => false,
                'empty_value' => 'Selecciona una opción',
                'choices' => array(
                    'Excelente' => 'Excelente',
                    'Muy buena' => 'Muy buena',
                    'Buena'     => 'Buena',
                    'Regular'   => 'Regular',
                    'Mala'      => 'Mala',
                )
            ))
            ->add('comoEvaluaLaFacilidad', 'choice', array(
                'required'    => false,
                'empty_value' => 'Selecciona una opción',
                'choices' => array(
                    'Excelente' => 'Excelente',
                    'Muy buena' => 'Muy buena',
                    'Buena'     => 'Buena',
                    'Regular'   => 'Regular',
                    'Mala'      => 'Mala',
                )
            ))
            ->add('comoCalificariaAccesoClientes', 'choice', array(
                'required'    => false,
                'empty_value' => 'Selecciona una opción',
                'choices' => array(
                    'Excelente' => 'Excelente',
                    'Muy bueno' => 'Muy bueno',
                    'Bueno'     => 'Bueno',
                    'Regular'   => 'Regular',
                    'Malo'      => 'Malo',
                )
            ))
            ->add('opinion', null, array('required' => false))
            ->add('experienciaSugerencias', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                ),
            ))
            ->add('haTenidoAlgunProblema', 'choice', array(
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                ),
            ))
            ->add('seResolvieronEsosProblemas', 'choice', array(
                'required'    => false,
                'empty_value' => 'Selecciona una opción',
                'choices'     => array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                ),
            ))
            ->add('comentarios', null, array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ServiciosEncuestaSatisfaccion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'encuesta';
    }
}
