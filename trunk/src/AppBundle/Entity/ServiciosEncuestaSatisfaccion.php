<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ServiciosEncuestaSatisfaccion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiciosEncuestaSatisfaccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=255)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="responde", type="string", length=255)
     */
    private $responde;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="comoConocioElServicio", type="string", length=255)
     */
    private $comoConocioElServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="porQueNosEligio", type="string", length=255)
     */
    private $porQueNosEligio;

    /**
     * @var string
     *
     * @ORM\Column(name="cuantoTiempo", type="string", length=255)
     */
    private $cuantoTiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="conQueFrecuencia", type="string", length=255)
     */
    private $conQueFrecuencia;

    /**
     * @var string
     *
     * @ORM\Column(name="satisfaccionGeneral", type="string", length=255)
     */
    private $satisfaccionGeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="haRecomendado", type="string", length=255)
     */
    private $haRecomendado;

    /**
     * @var string
     *
     * @ORM\Column(name="recomendariaNuestroServicio", type="string", length=255, nullable=true)
     */
    private $recomendariaNuestroServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="atencionTelefonica", type="string", length=255)
     */
    private $atencionTelefonica;

    /**
     * @var string
     *
     * @ORM\Column(name="visitasDomicilio", type="string", length=255)
     */
    private $visitasDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="examenesMedicos", type="string", length=255)
     */
    private $examenesMedicos;

    /**
     * @var string
     *
     * @ORM\Column(name="art", type="string", length=255)
     */
    private $art;

    /**
     * @var string
     *
     * @ORM\Column(name="facturacion", type="string", length=255)
     */
    private $facturacion;

    /**
     * @var string
     *
     * @ORM\Column(name="paginaWeb", type="string", length=255)
     */
    private $paginaWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="conQueFrecuenciaUtilizaElSitio", type="string", length=255, nullable=true)
     */
    private $conQueFrecuenciaUtilizaElSitio;

    /**
     * @var string
     *
     * @ORM\Column(name="comoConsideraLaVisualizacion", type="string", length=255, nullable=true)
     */
    private $comoConsideraLaVisualizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="comoEvaluaLaFacilidad", type="string", length=255, nullable=true)
     */
    private $comoEvaluaLaFacilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comoCalificariaAccesoClientes", type="string", length=255, nullable=true)
     */
    private $comoCalificariaAccesoClientes;

    /**
     * @var string
     *
     * @ORM\Column(name="opinion", type="text", nullable=true)
     */
    private $opinion;

    /**
     * @var string
     *
     * @ORM\Column(name="experienciaSugerencias", type="string", length=255)
     */
    private $experienciaSugerencias;

    /**
     * @var string
     *
     * @ORM\Column(name="haTenidoAlgunProblema", type="string", length=255)
     */
    private $haTenidoAlgunProblema;

    /**
     * @var string
     *
     * @ORM\Column(name="seResolvieronEsosProblemas", type="string", length=255, nullable=true)
     */
    private $seResolvieronEsosProblemas;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text", nullable=true)
     */
    private $comentarios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isRead", type="boolean")
     */
    private $isRead;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    public function __construct()
    {
        $this->isRead = false;
    }

    public function __toString()
    {
        return (string) $this->getEmpresa().' - '.$this->getResponde();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set responde
     *
     * @param string $responde
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setResponde($responde)
    {
        $this->responde = $responde;

        return $this;
    }

    /**
     * Get responde
     *
     * @return string 
     */
    public function getResponde()
    {
        return $this->responde;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set comoConocioElServicio
     *
     * @param string $comoConocioElServicio
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setComoConocioElServicio($comoConocioElServicio)
    {
        $this->comoConocioElServicio = $comoConocioElServicio;

        return $this;
    }

    /**
     * Get comoConocioElServicio
     *
     * @return string 
     */
    public function getComoConocioElServicio()
    {
        return $this->comoConocioElServicio;
    }

    /**
     * Set porQueNosEligio
     *
     * @param string $porQueNosEligio
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setPorQueNosEligio($porQueNosEligio)
    {
        $this->porQueNosEligio = $porQueNosEligio;

        return $this;
    }

    /**
     * Get porQueNosEligio
     *
     * @return string 
     */
    public function getPorQueNosEligio()
    {
        return $this->porQueNosEligio;
    }

    /**
     * Set cuantoTiempo
     *
     * @param string $cuantoTiempo
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setCuantoTiempo($cuantoTiempo)
    {
        $this->cuantoTiempo = $cuantoTiempo;

        return $this;
    }

    /**
     * Get cuantoTiempo
     *
     * @return string 
     */
    public function getCuantoTiempo()
    {
        return $this->cuantoTiempo;
    }

    /**
     * Set conQueFrecuencia
     *
     * @param string $conQueFrecuencia
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setConQueFrecuencia($conQueFrecuencia)
    {
        $this->conQueFrecuencia = $conQueFrecuencia;

        return $this;
    }

    /**
     * Get conQueFrecuencia
     *
     * @return string 
     */
    public function getConQueFrecuencia()
    {
        return $this->conQueFrecuencia;
    }

    /**
     * Set satisfaccionGeneral
     *
     * @param string $satisfaccionGeneral
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setSatisfaccionGeneral($satisfaccionGeneral)
    {
        $this->satisfaccionGeneral = $satisfaccionGeneral;

        return $this;
    }

    /**
     * Get satisfaccionGeneral
     *
     * @return string 
     */
    public function getSatisfaccionGeneral()
    {
        return $this->satisfaccionGeneral;
    }

    /**
     * Set haRecomendado
     *
     * @param string $haRecomendado
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setHaRecomendado($haRecomendado)
    {
        $this->haRecomendado = $haRecomendado;

        return $this;
    }

    /**
     * Get haRecomendado
     *
     * @return string 
     */
    public function getHaRecomendado()
    {
        return $this->haRecomendado;
    }

    /**
     * Set recomendariaNuestroServicio
     *
     * @param string $recomendariaNuestroServicio
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setRecomendariaNuestroServicio($recomendariaNuestroServicio)
    {
        $this->recomendariaNuestroServicio = $recomendariaNuestroServicio;

        return $this;
    }

    /**
     * Get recomendariaNuestroServicio
     *
     * @return string 
     */
    public function getRecomendariaNuestroServicio()
    {
        return $this->recomendariaNuestroServicio;
    }

    /**
     * Set atencionTelefonica
     *
     * @param string $atencionTelefonica
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setAtencionTelefonica($atencionTelefonica)
    {
        $this->atencionTelefonica = $atencionTelefonica;

        return $this;
    }

    /**
     * Get atencionTelefonica
     *
     * @return string 
     */
    public function getAtencionTelefonica()
    {
        return $this->atencionTelefonica;
    }

    /**
     * Set visitasDomicilio
     *
     * @param string $visitasDomicilio
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setVisitasDomicilio($visitasDomicilio)
    {
        $this->visitasDomicilio = $visitasDomicilio;

        return $this;
    }

    /**
     * Get visitasDomicilio
     *
     * @return string 
     */
    public function getVisitasDomicilio()
    {
        return $this->visitasDomicilio;
    }

    /**
     * Set examenesMedicos
     *
     * @param string $examenesMedicos
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setExamenesMedicos($examenesMedicos)
    {
        $this->examenesMedicos = $examenesMedicos;

        return $this;
    }

    /**
     * Get examenesMedicos
     *
     * @return string 
     */
    public function getExamenesMedicos()
    {
        return $this->examenesMedicos;
    }

    /**
     * Set art
     *
     * @param string $art
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setArt($art)
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get art
     *
     * @return string 
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set facturacion
     *
     * @param string $facturacion
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setFacturacion($facturacion)
    {
        $this->facturacion = $facturacion;

        return $this;
    }

    /**
     * Get facturacion
     *
     * @return string 
     */
    public function getFacturacion()
    {
        return $this->facturacion;
    }

    /**
     * Set paginaWeb
     *
     * @param string $paginaWeb
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->paginaWeb = $paginaWeb;

        return $this;
    }

    /**
     * Get paginaWeb
     *
     * @return string 
     */
    public function getPaginaWeb()
    {
        return $this->paginaWeb;
    }

    /**
     * Set conQueFrecuenciaUtilizaElSitio
     *
     * @param string $conQueFrecuenciaUtilizaElSitio
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setConQueFrecuenciaUtilizaElSitio($conQueFrecuenciaUtilizaElSitio)
    {
        $this->conQueFrecuenciaUtilizaElSitio = $conQueFrecuenciaUtilizaElSitio;

        return $this;
    }

    /**
     * Get conQueFrecuenciaUtilizaElSitio
     *
     * @return string 
     */
    public function getConQueFrecuenciaUtilizaElSitio()
    {
        return $this->conQueFrecuenciaUtilizaElSitio;
    }

    /**
     * Set comoConsideraLaVisualizacion
     *
     * @param string $comoConsideraLaVisualizacion
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setComoConsideraLaVisualizacion($comoConsideraLaVisualizacion)
    {
        $this->comoConsideraLaVisualizacion = $comoConsideraLaVisualizacion;

        return $this;
    }

    /**
     * Get comoConsideraLaVisualizacion
     *
     * @return string 
     */
    public function getComoConsideraLaVisualizacion()
    {
        return $this->comoConsideraLaVisualizacion;
    }

    /**
     * Set comoEvaluaLaFacilidad
     *
     * @param string $comoEvaluaLaFacilidad
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setComoEvaluaLaFacilidad($comoEvaluaLaFacilidad)
    {
        $this->comoEvaluaLaFacilidad = $comoEvaluaLaFacilidad;

        return $this;
    }

    /**
     * Get comoEvaluaLaFacilidad
     *
     * @return string 
     */
    public function getComoEvaluaLaFacilidad()
    {
        return $this->comoEvaluaLaFacilidad;
    }

    /**
     * Set comoCalificariaAccesoClientes
     *
     * @param string $comoCalificariaAccesoClientes
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setComoCalificariaAccesoClientes($comoCalificariaAccesoClientes)
    {
        $this->comoCalificariaAccesoClientes = $comoCalificariaAccesoClientes;

        return $this;
    }

    /**
     * Get comoCalificariaAccesoClientes
     *
     * @return string 
     */
    public function getComoCalificariaAccesoClientes()
    {
        return $this->comoCalificariaAccesoClientes;
    }

    /**
     * Set opinion
     *
     * @param string $opinion
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;

        return $this;
    }

    /**
     * Get opinion
     *
     * @return string 
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * Set experienciaSugerencias
     *
     * @param string $experienciaSugerencias
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setExperienciaSugerencias($experienciaSugerencias)
    {
        $this->experienciaSugerencias = $experienciaSugerencias;

        return $this;
    }

    /**
     * Get experienciaSugerencias
     *
     * @return string 
     */
    public function getExperienciaSugerencias()
    {
        return $this->experienciaSugerencias;
    }

    /**
     * Set haTenidoAlgunProblema
     *
     * @param string $haTenidoAlgunProblema
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setHaTenidoAlgunProblema($haTenidoAlgunProblema)
    {
        $this->haTenidoAlgunProblema = $haTenidoAlgunProblema;

        return $this;
    }

    /**
     * Get haTenidoAlgunProblema
     *
     * @return string 
     */
    public function getHaTenidoAlgunProblema()
    {
        return $this->haTenidoAlgunProblema;
    }

    /**
     * Set seResolvieronEsosProblemas
     *
     * @param string $seResolvieronEsosProblemas
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setSeResolvieronEsosProblemas($seResolvieronEsosProblemas)
    {
        $this->seResolvieronEsosProblemas = $seResolvieronEsosProblemas;

        return $this;
    }

    /**
     * Get seResolvieronEsosProblemas
     *
     * @return string 
     */
    public function getSeResolvieronEsosProblemas()
    {
        return $this->seResolvieronEsosProblemas;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return boolean 
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return ServiciosEncuestaSatisfaccion
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
