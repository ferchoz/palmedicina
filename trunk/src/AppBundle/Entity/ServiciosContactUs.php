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
class ServiciosContactUs
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
     * @var string
     *
     * @ORM\Column(name="consulta", type="text")
     */
    private $consulta;

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
     * @return ServiciosContactUs
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
     * @return ServiciosContactUs
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
     * @return ServiciosContactUs
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
     * Set consulta
     *
     * @param string $consulta
     * @return ServiciosContactUs
     */
    public function setConsulta($consulta)
    {
        $this->consulta = $consulta;

        return $this;
    }

    /**
     * Get consulta
     *
     * @return string 
     */
    public function getConsulta()
    {
        return $this->consulta;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     * @return ServiciosContactUs
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
     * @return ServiciosContactUs
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
