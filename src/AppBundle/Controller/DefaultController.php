<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/client/empresa", name="index")
     */
    public function empresaAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/client/faq", name="faq")
     */
    public function faqAction()
    {
        return $this->render('default/faq.html.twig');
    }

    /**
     * @Route("/client/services", name="services")
     */
    public function servicesAction()
    {
        return $this->render('default/services.html.twig');
    }
}
