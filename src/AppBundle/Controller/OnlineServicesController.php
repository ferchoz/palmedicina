<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ServiciosAccidenteTrabajo;
use AppBundle\Entity\ServiciosAtencionConsultorio;
use AppBundle\Entity\ServiciosContactUs;
use AppBundle\Entity\ServiciosEncuestaSatisfaccion;
use AppBundle\Entity\ServiciosExamenMedico;
use AppBundle\Entity\ServiciosVisitaDomicilio;
use AppBundle\Form\ServiciosAccidenteTrabajoType;
use AppBundle\Form\ServiciosAtencionConsultorioType;
use AppBundle\Form\ServiciosContactUsType;
use AppBundle\Form\ServiciosEncuestaSatisfaccionType;
use AppBundle\Form\ServiciosExamenMedicoType;
use AppBundle\Form\ServiciosVisitaDomicilioType;
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
     * @Route("/consultas/servicios-online/atencion-consultorio", name="careClinic")
     */
    public function careClinicAction(Request $request)
    {
        $careClinic = new ServiciosAtencionConsultorio();
        $form = $this->createForm(new ServiciosAtencionConsultorioType(), $careClinic);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fecha = \DateTime::createFromFormat('d/m/Y', $careClinic->getFecha());
            $careClinic->setFecha($fecha);
            $em->persist($careClinic);
            $em->flush();
            return $this->redirect($this->generateUrl('formSuccess'));
        }

        return $this->render(
            'OnlineServices/careClinic.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/consultas/servicios-online/visita-domicilio", name="visitingAddress")
     */
    public function visitingAddressAction(Request $request)
    {
        $visitingAddress = new ServiciosVisitaDomicilio();
        $form = $this->createForm(new ServiciosVisitaDomicilioType(), $visitingAddress);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fecha = \DateTime::createFromFormat('d/m/Y', $visitingAddress->getFecha());
            $visitingAddress->setFecha($fecha);
            $em->persist($visitingAddress);
            $em->flush();
            return $this->redirect($this->generateUrl('formSuccess'));
        }

        return $this->render(
            'OnlineServices/visitingAddress.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/consultas/servicios-online/accidente-trabajo", name="workAccident")
     */
    public function workAccidentAction(Request $request)
    {
        $workAccident = new ServiciosAccidenteTrabajo();
        $form = $this->createForm(new ServiciosAccidenteTrabajoType(), $workAccident);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fecha = \DateTime::createFromFormat('d/m/Y', $workAccident->getFecha());
            $workAccident->setFecha($fecha);
            $em->persist($workAccident);
            $em->flush();
            return $this->redirect($this->generateUrl('formSuccess'));
        }

        return $this->render(
            'OnlineServices/workAccident.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/consultas/servicios-online/encuesta-satisfaccion", name="satisfactionSurvey")
     */
    public function satisfactionSurveyAction(Request $request)
    {
        $satisfactionSurvey = new ServiciosEncuestaSatisfaccion();
        $form = $this->createForm(new ServiciosEncuestaSatisfaccionType(), $satisfactionSurvey);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($satisfactionSurvey);
            $em->flush();
            return $this->redirect($this->generateUrl('formSuccess'));
        }

        return $this->render(
            'OnlineServices/satisfactionSurvey.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/consultas/ayuda/consultas", name="contactUs")
     */
    public function contactUsAction(Request $request)
    {
        $contactUs = new ServiciosContactUs();
        $form = $this->createForm(new ServiciosContactUsType(), $contactUs);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactUs);
            $em->flush();
            return $this->redirect($this->generateUrl('formSuccess'));
        }

        return $this->render(
            'OnlineServices/contactUs.html.twig',
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
