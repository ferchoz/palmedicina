<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlineServicesController extends Controller
{
    /**
     * @Route("/consultas/servicios-online/examenes-medicos", name="medicalExaminations")
     */
    public function medicalExaminationsAction()
    {
        return $this->render('OnlineServices/medicalExaminations.html.twig');
    }

}
