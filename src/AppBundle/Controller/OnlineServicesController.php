<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ServiciosExamenMedico;
use AppBundle\Form\ServiciosExamenMedicoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlineServicesController extends Controller
{
    /**
     * @Route("/consultas/servicios-online/examenes-medicos", name="medicalExaminations")
     */
    public function medicalExaminationsAction(Request $request)
    {
        $examenMedico = new ServiciosExamenMedico();
        $form = $this->createForm(new ServiciosExamenMedicoType(), $examenMedico);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fecha = \DateTime::createFromFormat('d/m/Y', $examenMedico->getFecha());
            $examenMedico->setFecha($fecha);
            $em->persist($examenMedico);
            $em->flush();
            return $this->redirect($this->generateUrl('formSuccess'));
        }

        return $this->render(
            'OnlineServices/medicalExaminations.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/consultas/servicios-online/formulario-enviado", name="formSuccess")
     */
    public function formSuccessAction()
    {
        return $this->render('OnlineServices/formSuccess.html.twig');
    }
}
