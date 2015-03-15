<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ServiciosAtencionConsultorio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiciosAtencionConsultorio
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
     * @ORM\Column(name="RazonSocial", type="string", length=255)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoNombreSolicitante", type="string", length=255)
     */
    private $apellidoNombreSolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoNombre", type="string", length=255)
     */
    private $apellidoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ConsultaClinica", type="boolean")
     */
    private $consultaClinica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="traumatologia", type="boolean")
     */
    private $traumatologia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cardiologia", type="boolean")
     */
    private $cardiologia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="controlAusentismo", type="boolean")
     */
    private $controlAusentismo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dermatologia", type="boolean")
     */
    private $dermatologia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="neurologia", type="boolean")
     */
    private $neurologia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="oftalmologia", type="boolean")
     */
    private $oftalmologia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ginecologia", type="boolean")
     */
    private $ginecologia;

    /**
     * @var string
     *
     * @ORM\Column(name="otros", type="string", length=255, nullable=true)
     */
    private $otros;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isRead", type="boolean")
     */
    private $isRead;

    /**
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
        return (string) $this->getRazonSocial().' - '.$this->getApellidoNombreSolicitante();
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
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return ServiciosAtencionConsultorio
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set apellidoNombreSolicitante
     *
     * @param string $apellidoNombreSolicitante
     * @return ServiciosAtencionConsultorio
     */
    public function setApellidoNombreSolicitante($apellidoNombreSolicitante)
    {
        $this->apellidoNombreSolicitante = $apellidoNombreSolicitante;

        return $this;
    }

    /**
     * Get apellidoNombreSolicitante
     *
     * @return string 
     */
    public function getApellidoNombreSolicitante()
    {
        return $this->apellidoNombreSolicitante;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ServiciosAtencionConsultorio
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ServiciosAtencionConsultorio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     * @return ServiciosAtencionConsultorio
     */
    public function setApellidoNombre($apellidoNombre)
    {
        $this->apellidoNombre = $apellidoNombre;

        return $this;
    }

    /**
     * Get apellidoNombre
     *
     * @return string 
     */
    public function getApellidoNombre()
    {
        return $this->apellidoNombre;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ServiciosAtencionConsultorio
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set consultaClinica
     *
     * @param boolean $consultaClinica
     * @return ServiciosAtencionConsultorio
     */
    public function setConsultaClinica($consultaClinica)
    {
        $this->consultaClinica = $consultaClinica;

        return $this;
    }

    /**
     * Get consultaClinica
     *
     * @return boolean 
     */
    public function getConsultaClinica()
    {
        return $this->consultaClinica;
    }

    /**
     * Set traumatologia
     *
     * @param boolean $traumatologia
     * @return ServiciosAtencionConsultorio
     */
    public function setTraumatologia($traumatologia)
    {
        $this->traumatologia = $traumatologia;

        return $this;
    }

    /**
     * Get traumatologia
     *
     * @return boolean 
     */
    public function getTraumatologia()
    {
        return $this->traumatologia;
    }

    /**
     * Set cardiologia
     *
     * @param boolean $cardiologia
     * @return ServiciosAtencionConsultorio
     */
    public function setCardiologia($cardiologia)
    {
        $this->cardiologia = $cardiologia;

        return $this;
    }

    /**
     * Get cardiologia
     *
     * @return boolean 
     */
    public function getCardiologia()
    {
        return $this->cardiologia;
    }

    /**
     * Set controlAusentismo
     *
     * @param boolean $controlAusentismo
     * @return ServiciosAtencionConsultorio
     */
    public function setControlAusentismo($controlAusentismo)
    {
        $this->controlAusentismo = $controlAusentismo;

        return $this;
    }

    /**
     * Get controlAusentismo
     *
     * @return boolean 
     */
    public function getControlAusentismo()
    {
        return $this->controlAusentismo;
    }

    /**
     * Set dermatologia
     *
     * @param boolean $dermatologia
     * @return ServiciosAtencionConsultorio
     */
    public function setDermatologia($dermatologia)
    {
        $this->dermatologia = $dermatologia;

        return $this;
    }

    /**
     * Get dermatologia
     *
     * @return boolean 
     */
    public function getDermatologia()
    {
        return $this->dermatologia;
    }

    /**
     * Set neurologia
     *
     * @param boolean $neurologia
     * @return ServiciosAtencionConsultorio
     */
    public function setNeurologia($neurologia)
    {
        $this->neurologia = $neurologia;

        return $this;
    }

    /**
     * Get neurologia
     *
     * @return boolean 
     */
    public function getNeurologia()
    {
        return $this->neurologia;
    }

    /**
     * Set oftalmologia
     *
     * @param boolean $oftalmologia
     * @return ServiciosAtencionConsultorio
     */
    public function setOftalmologia($oftalmologia)
    {
        $this->oftalmologia = $oftalmologia;

        return $this;
    }

    /**
     * Get oftalmologia
     *
     * @return boolean 
     */
    public function getOftalmologia()
    {
        return $this->oftalmologia;
    }

    /**
     * Set ginecologia
     *
     * @param boolean $ginecologia
     * @return ServiciosAtencionConsultorio
     */
    public function setGinecologia($ginecologia)
    {
        $this->ginecologia = $ginecologia;

        return $this;
    }

    /**
     * Get ginecologia
     *
     * @return boolean 
     */
    public function getGinecologia()
    {
        return $this->ginecologia;
    }

    /**
     * Set otros
     *
     * @param string $otros
     * @return ServiciosAtencionConsultorio
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     * @return ServiciosAtencionConsultorio
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
     * @return ServiciosAtencionConsultorio
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
