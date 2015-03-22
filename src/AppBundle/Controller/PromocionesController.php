<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PromocionesController extends Controller
{
    /**
     * @Route("/consultas/promociones/asesoramiento-legal", name="asesoramientoLegal")
     */
    public function asesoramientoLegalAction()
    {
        return $this->render('Promociones/asesoramientoLegal.html.twig');
    }

    /**
     * @Route("/consultas/promociones/libreta-sanitaria", name="libretaSanitaria")
     */
    public function libretaSanitariaAction()
    {
        return $this->render('Promociones/libretaSanitaria.html.twig');
    }

    /**
     * @Route("/consultas/promociones/seguridad-higiene", name="seguridadHigiene")
     */
    public function seguridadHigieneAction()
    {
        return $this->render('Promociones/seguridadHigiene.html.twig');
    }

    /**
     * @Route("/consultas/promociones/cursos", name="cursos")
     */
    public function cursosAction()
    {
        return $this->render('Promociones/cursos.html.twig');
    }

    /**
     * @Route("/consultas/promociones/examen-ingreso", name="examenIngreso")
     */
    public function examenIngresoAction()
    {
        return $this->render('Promociones/examenIngreso.html.twig');
    }

    /**
     * @Route("/consultas/promociones/servicio-odontologia", name="servicioOdontologia")
     */
    public function servicioOdontologiaAction()
    {
        return $this->render('Promociones/servicioOdontologia.html.twig');
    }

    /**
     * @Route("/consultas/promociones/homologacion-examenes", name="homologacionExamenes")
     */
    public function homologacionExamenesAction()
    {
        return $this->render('Promociones/homologacionExamenes.html.twig');
    }

    /**
     * @Route("/consultas/promociones/diagnostico-lanus", name="diagnosticoLanus")
     */
    public function diagnosticoLanusAction()
    {
        return $this->render('Promociones/diagnosticoLanus.html.twig');
    }

    /**
     * @Route("/consultas/promociones/nuevos-clientes", name="nuevosClientes")
     */
    public function nuevosClientesAction()
    {
        return $this->render('Promociones/nuevosClientes.html.twig');
    }
}
