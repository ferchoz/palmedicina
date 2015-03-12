<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
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
        $slides = $this->getDoctrine()->getRepository('AppBundle:SlideCompany')->findAll();
        return $this->render('default/index.html.twig', array('slides' => $slides));
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
    public function todayNewsAction(Request $request)
    {
        $user = $this->getUser();
        $news = $this->get('doctrine')
            ->getRepository('OldBundle:iNOVEDADES', 'old')
            ->findBy(
                array('codigoe' => $user->getCodigopal(), 'fecha' => new \DateTime('today')),
                array('fecha' => 'DESC')
            );
        ;

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $news,
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('default/todayNews.html.twig', array('news' => $pagination));
    }

    /**
     * @Route("/consultas/novedades-del-mes", name="monthNews")
     */
    public function monthNewsAction(Request $request)
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');
        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iNOVEDADES a where a.codigoe = :codigo AND a.fecha >= :date ORDER BY a.fecha DESC");
        $query->setParameter('codigo', $user->getCodigopal());
        $query->setParameter('date', new \DateTime('midnight first day of this month'));

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('default/monthNews.html.twig', array('news' => $pagination));
    }

    /**
     * @Route("/consultas/novedades-del-anio", name="yearNews")
     */
    public function yearNewsAction(Request $request)
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');
        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iNOVEDADES a where a.codigoe = :codigo AND a.fecha >= :date ORDER BY a.fecha DESC");
        $query->setParameter('codigo', $user->getCodigopal());
        $query->setParameter('date', new \DateTime('first day of January 2015'));

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('default/yearNews.html.twig', array('news' => $pagination));
    }

    /**
     * @Route("/consultas/estudios-medicos", name="medicalStudies")
     */
    public function medicalStudiesAction(Request $request)
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');

        if ($request->isMethod('POST')) {
            $query = $oldEm->createQuery("SELECT a FROM OldBundle:iESTUDIOS a where a.codigo = :codigo AND a.paciente = :paciente");
            $query->setParameter('codigo', $user->getCodigopal());
            $query->setParameter('paciente', $request->get('patient'));
            $patient = $query->getResult();

            return $this->render('default/medicalStudiesUser.html.twig', array('patient' => array_shift($patient)));
        } else {
            $query = $oldEm->createQuery("SELECT a FROM OldBundle:iESTUDIOS a where a.codigo = :codigo GROUP BY a.paciente ORDER BY a.paciente");
            $query->setParameter('codigo', $user->getCodigopal());
            $patients = $query->getResult();

            return $this->render('default/medicalStudies.html.twig', array('patients' => $patients));
        }
    }

    /**
     * @Route("/consultas/historia-clinica", name="clinicStory")
     */
    public function clinicStoryAction(Request $request)
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');

        if ($request->isMethod('POST')) {
            $query = $oldEm->createQuery("SELECT a FROM OldBundle:iNOVEDADES a where a.codigoe = :codigo AND a.nombre = :paciente");
            $query->setParameter('codigo', $user->getCodigopal());
            $query->setParameter('paciente', $request->get('patient'));
            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query,
                $request->query->get('page', 1)/*page number*/,
                10/*limit per page*/
            );

            return $this->render('default/clinicStoryUser.html.twig', array('patients' => $pagination));
        } else {
            $query = $oldEm->createQuery("SELECT a FROM OldBundle:iESTUDIOS a where a.codigo = :codigo GROUP BY a.paciente ORDER BY a.paciente");
            $query->setParameter('codigo', $user->getCodigopal());
            $patients = $query->getResult();

            return $this->render('default/clinicStory.html.twig', array('patients' => $patients));
        }
    }

    /**
     * @Route("/consultas/cuenta-corriente", name="checkingAccount")
     */
    public function checkingAccountAction(Request $request)
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');
        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iCTADAT a WHERE a.codigoe = :codigo ORDER BY a.fecha");
        $query->setParameter('codigo', $user->getCodigopal());
        $datas = $query->getResult();

        return $this->render('default/checkingAccount.html.twig', array('datas' => $datas));
    }

    /**
     * @Route("/consultas/ver-factura/{nr}", name="seeBill")
     */
    public function seeBillAction(Request $request, $nr)
    {
        $user = $this->getUser();
        $oldEm = $this->get('doctrine')->getManager('old');
        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iCTADAT a WHERE a.codigoe = :codigo AND a.numero = :numero ORDER BY a.fecha");
        $query->setParameter('codigo', $user->getCodigopal());
        $query->setParameter('numero', $nr);
        $bill = $query->getResult();
        $bill = array_shift($bill);

        $query = $oldEm->createQuery("SELECT a FROM OldBundle:iCTADET a WHERE a.sucursal = :sucursal AND a.numero = :numero");
        $query->setParameter('sucursal', $bill->getSucursal());
        $query->setParameter('numero', $nr);
        $rows = $query->getResult();

        return $this->render(
            'default/seeBill.html.twig',
            array(
                'bill' => $bill,
                'rows' => $rows,
            )
        );
    }
}
