<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/client")
     */
    public function clientAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/test")
     */
    public function testAction()
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Usuarios')
            ->find(2);

        var_dump($product->getUsername(),$product->getPassword());die;
        return $this->render('default/index.html.twig');
    }
}
