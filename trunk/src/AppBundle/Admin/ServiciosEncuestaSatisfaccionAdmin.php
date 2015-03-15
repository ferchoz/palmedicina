<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ServiciosEncuestaSatisfaccionAdmin extends Admin
{
    protected $baseRouteName    = 'admin_encuesta_satisfaccion';
    protected $baseRoutePattern = 'encuesta-satisfaccion';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            ->remove('edit')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('empresa')
            ->add('isRead', null, array('label' => 'Leido'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('empresa')
            ->add('responde')
            ->add('cargo')
            ->add('isRead', null, array('label' => 'Leido'))
            ->add('created', null, array('label' => 'Enviado'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    protected function configureShowFields(ShowMapper $filter)
    {
        $filter
            ->add('empresa')
            ->add('responde')
            ->add('cargo')
            ->add('comoConocioElServicio')
            ->add('porQueNosEligio')
            ->add('cuantoTiempo')
            ->add('conQueFrecuencia')
            ->add('satisfaccionGeneral')
            ->add('haRecomendado')
            ->add('recomendariaNuestroServicio')
            ->add('atencionTelefonica')
            ->add('visitasDomicilio')
            ->add('examenesMedicos')
            ->add('art')
            ->add('facturacion')
            ->add('paginaWeb')
            ->add('conQueFrecuenciaUtilizaElSitio')
            ->add('comoConsideraLaVisualizacion')
            ->add('comoEvaluaLaFacilidad')
            ->add('comoCalificariaAccesoClientes')
            ->add('opinion')
            ->add('experienciaSugerencias')
            ->add('haTenidoAlgunProblema')
            ->add('seResolvieronEsosProblemas')
            ->add('comentarios')
            ->add('created')
        ;
    }
}