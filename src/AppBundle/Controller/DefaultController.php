<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('company'));
    }

    /**
     * @Route("/consultas/empresa", name="company")
     */
    public function companyAction()
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

    /**
     * @Route("/consultas/novedades-del-dia", name="todayNews")
     */
    public function todayNewsAction()
    {
        $user = $this->getUser();
        $news = $this->get('doctrine')
            ->getRepository('OldBundle:iNOVEDADES', 'old')
            ->findBy(
                array('codigoe' => $user->getCodigopal(), 'fecha' => new \DateTime('2015-03-02')),
                array('fecha' => 'DESC')
            );
        ;
        return $this->render('default/todayNews.html.twig', array('news' => $news));
    }

    /**
     * @Route("/consultas/novedades-del-mes", name="monthNews")
     */
    public function monthNewsAction()
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');
        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iNOVEDADES a where a.codigoe = :codigo AND a.fecha >= :date ORDER BY a.fecha DESC");
        $query->setParameter('codigo', $user->getCodigopal());
        $query->setParameter('date', new \DateTime('midnight first day of this month'));
        $news = $query->getResult();

        return $this->render('default/monthNews.html.twig', array('news' => $news));
    }

    /**
     * @Route("/consultas/novedades-del-anio", name="yearNews")
     */
    public function yearNewsAction()
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');
        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iNOVEDADES a where a.codigoe = :codigo AND a.fecha >= :date ORDER BY a.fecha DESC");
        $query->setParameter('codigo', $user->getCodigopal());
        $query->setParameter('date', new \DateTime('first day of January 2015'));
        $news = $query->getResult();

        return $this->render('default/yearNews.html.twig', array('news' => $news));
    }
}
