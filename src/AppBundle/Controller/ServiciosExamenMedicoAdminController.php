<?php
namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ServiciosExamenMedicoAdminController extends CRUDController
{
    public function showAction($id = null)
    {
        $id = $this->get('request')->get($this->admin->getIdParameter());

        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('VIEW', $object)) {
            throw new AccessDeniedException();
        }

        $object->setWasRead(true);
        $object = $this->admin->update($object);

        $this->admin->setSubject($object);

        return $this->render($this->admin->getTemplate('show'), array(
            'action'   => 'show',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
        ));
    }
}