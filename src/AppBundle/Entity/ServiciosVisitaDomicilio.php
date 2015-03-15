<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ServiciosVisitaDomicilio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiciosVisitaDomicilio
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
     * @ORM\Column(name="domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=255, nullable=true)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=255, nullable=true)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="entreCalles", type="string", length=255, nullable=true)
     */
    private $entreCalles;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=255)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

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
     * @return ServiciosVisitaDomicilio
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
     * @return ServiciosVisitaDomicilio
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
     * @return ServiciosVisitaDomicilio
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
     * @return ServiciosVisitaDomicilio
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
     * @return ServiciosVisitaDomicilio
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
     * Set domicilio
     *
     * @param string $domicilio
     * @return ServiciosVisitaDomicilio
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return ServiciosVisitaDomicilio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set piso
     *
     * @param string $piso
     * @return ServiciosVisitaDomicilio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return ServiciosVisitaDomicilio
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set entreCalles
     *
     * @param string $entreCalles
     * @return ServiciosVisitaDomicilio
     */
    public function setEntreCalles($entreCalles)
    {
        $this->entreCalles = $entreCalles;

        return $this;
    }

    /**
     * Get entreCalles
     *
     * @return string 
     */
    public function getEntreCalles()
    {
        return $this->entreCalles;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return ServiciosVisitaDomicilio
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return ServiciosVisitaDomicilio
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ServiciosVisitaDomicilio
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
     * Set isRead
     *
     * @param boolean $isRead
     * @return ServiciosVisitaDomicilio
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
     * @return ServiciosVisitaDomicilio
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
