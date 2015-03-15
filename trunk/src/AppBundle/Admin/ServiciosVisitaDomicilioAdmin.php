<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ServiciosVisitaDomicilioAdmin extends Admin
{
    protected $baseRouteName    = 'admin_visita_domicilio';
    protected $baseRoutePattern = 'visita-domicilio';

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
            ->add('isRead', null, array('label' => 'Leido'))
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
            ->add('domicilio')
            ->add('numero')
            ->add('localidad')
            ->add('provincia')
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
            ->add('razonSocial')
            ->add('apellidoNombreSolicitante')
            ->add('email')
            ->add('fecha')
            ->add('apellidoNombre')
            ->add('domicilio')
            ->add('numero')
            ->add('piso')
            ->add('departamento')
            ->add('entreCalles')
            ->add('localidad')
            ->add('provincia')
            ->add('observaciones')
            ->add('created')
        ;
    }
}