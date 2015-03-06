<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/consultas/empresa", name="company")
     */
    public function empresaAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/consultas/preguntas-frecuentes", name="faq")
     */
    public function faqAction()
    {
        return $this->render('default/faq.html.twig');
    }

    /**
     * @Route("/consultas/servicios", name="services")
     */
    public function servicesAction()
    {
        return $this->render('default/services.html.twig');
    }
}
