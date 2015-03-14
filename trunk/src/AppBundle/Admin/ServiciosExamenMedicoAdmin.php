<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ServiciosExamenMedicoAdmin extends Admin
{
    protected $baseRouteName    = 'admin_examen_medico';
    protected $baseRoutePattern = 'examen-medico';
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
    }

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
            ->add('razonSocial')
            ->add('wasRead', null, array('label' => 'Leido'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('razonSocial')
            ->add('apellidoNombreSolicitante')
            ->add('email')
            ->add('fecha')
            ->add('apellidoNombre')
            ->add('cargoTarea')
            ->add('wasRead', null, array('label' => 'Leido'))
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
            ->add('razonSocial')
            ->add('apellidoNombreSolicitante')
            ->add('email')
            ->add('fecha')
            ->add('apellidoNombre')
            ->add('cargoTarea')
            ->add('observaciones')
            ->add('ingreso')
            ->add('periodico')
            ->add('egreso')
            ->add('ausenciaProlongada')
            ->add('cambioDeTareas')
            ->add('libretaSanitaria')
            ->add('audiometria')
            ->add('psicotecnico')
            ->add('dapTest')
            ->add('rxColumnaLumbarFrente')
            ->add('rxColumnaFrentePerfil')
            ->add('grupoFactorSanguineo')
            ->add('otros')
            ->add('created')
        ;
    }
}