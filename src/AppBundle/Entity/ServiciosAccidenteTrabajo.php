<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ServiciosAccidenteTrabajo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiciosAccidenteTrabajo
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
     * @ORM\Column(name="ART", type="string", length=255)
     */
    private $art;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoNombre", type="string", length=255)
     */
    private $apellidoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="DiagnosticoPresuntivo", type="text", nullable=true)
     */
    private $diagnosticoPresuntivo;

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
     * @return ServiciosAccidenteTrabajo
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
     * @return ServiciosAccidenteTrabajo
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
     * @return ServiciosAccidenteTrabajo
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
     * @return ServiciosAccidenteTrabajo
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
     * Set aRT
     *
     * @param string $aRT
     * @return ServiciosAccidenteTrabajo
     */
    public function setArt($art)
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get aRT
     *
     * @return string 
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     * @return ServiciosAccidenteTrabajo
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
     * Set diagnosticoPresuntivo
     *
     * @param string $diagnosticoPresuntivo
     * @return ServiciosAccidenteTrabajo
     */
    public function setDiagnosticoPresuntivo($diagnosticoPresuntivo)
    {
        $this->diagnosticoPresuntivo = $diagnosticoPresuntivo;

        return $this;
    }

    /**
     * Get diagnosticoPresuntivo
     *
     * @return string 
     */
    public function getDiagnosticoPresuntivo()
    {
        return $this->diagnosticoPresuntivo;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     * @return ServiciosAccidenteTrabajo
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
     * @return ServiciosAccidenteTrabajo
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
