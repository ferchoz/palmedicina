<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ServiciosExamenMedico
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiciosExamenMedico
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
     * @ORM\Column(name="CargoTarea", type="string", length=255)
     */
    private $cargoTarea;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ingreso", type="boolean")
     */
    private $ingreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Periodico", type="boolean")
     */
    private $periodico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Egreso", type="boolean")
     */
    private $egreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AusenciaProlongada", type="boolean")
     */
    private $ausenciaProlongada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CambioDeTareas", type="boolean")
     */
    private $cambioDeTareas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LibretaSanitaria", type="boolean")
     */
    private $libretaSanitaria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Audiometria", type="boolean")
     */
    private $audiometria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Psicotecnico", type="boolean")
     */
    private $psicotecnico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DapTest", type="boolean")
     */
    private $dapTest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RxColumnaLumbarFrente", type="boolean")
     */
    private $rxColumnaLumbarFrente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RxColumnaFrentePerfil", type="boolean")
     */
    private $rxColumnaFrentePerfil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="GrupoFactorSanguineo", type="boolean")
     */
    private $grupoFactorSanguineo;

    /**
     * @var string
     *
     * @ORM\Column(name="Otros", type="string", length=255, nullable=true)
     */
    private $otros;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wasRead", type="boolean")
     */
    private $wasRead;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
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
     * @return ServiciosExamenMedico
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
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     * @return ServiciosExamenMedico
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
     * Set email
     *
     * @param string $email
     * @return ServiciosExamenMedico
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
     * @return ServiciosExamenMedico
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
     * Set apellidoNombreSolicitante
     *
     * @param string $apellidoNombreSolicitante
     * @return ServiciosExamenMedico
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
     * Set cargoTarea
     *
     * @param string $cargoTarea
     * @return ServiciosExamenMedico
     */
    public function setCargoTarea($cargoTarea)
    {
        $this->cargoTarea = $cargoTarea;

        return $this;
    }

    /**
     * Get cargoTarea
     *
     * @return string 
     */
    public function getCargoTarea()
    {
        return $this->cargoTarea;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ServiciosExamenMedico
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
     * Set ingreso
     *
     * @param boolean $ingreso
     * @return ServiciosExamenMedico
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return boolean 
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }

    /**
     * Set periodico
     *
     * @param boolean $periodico
     * @return ServiciosExamenMedico
     */
    public function setPeriodico($periodico)
    {
        $this->periodico = $periodico;

        return $this;
    }

    /**
     * Get periodico
     *
     * @return boolean 
     */
    public function getPeriodico()
    {
        return $this->periodico;
    }

    /**
     * Set egreso
     *
     * @param boolean $egreso
     * @return ServiciosExamenMedico
     */
    public function setEgreso($egreso)
    {
        $this->egreso = $egreso;

        return $this;
    }

    /**
     * Get egreso
     *
     * @return boolean 
     */
    public function getEgreso()
    {
        return $this->egreso;
    }

    /**
     * Set ausenciaProlongada
     *
     * @param boolean $ausenciaProlongada
     * @return ServiciosExamenMedico
     */
    public function setAusenciaProlongada($ausenciaProlongada)
    {
        $this->ausenciaProlongada = $ausenciaProlongada;

        return $this;
    }

    /**
     * Get ausenciaProlongada
     *
     * @return boolean 
     */
    public function getAusenciaProlongada()
    {
        return $this->ausenciaProlongada;
    }

    /**
     * Set cambioDeTareas
     *
     * @param boolean $cambioDeTareas
     * @return ServiciosExamenMedico
     */
    public function setCambioDeTareas($cambioDeTareas)
    {
        $this->cambioDeTareas = $cambioDeTareas;

        return $this;
    }

    /**
     * Get cambioDeTareas
     *
     * @return boolean 
     */
    public function getCambioDeTareas()
    {
        return $this->cambioDeTareas;
    }

    /**
     * Set libretaSanitaria
     *
     * @param boolean $libretaSanitaria
     * @return ServiciosExamenMedico
     */
    public function setLibretaSanitaria($libretaSanitaria)
    {
        $this->libretaSanitaria = $libretaSanitaria;

        return $this;
    }

    /**
     * Get libretaSanitaria
     *
     * @return boolean 
     */
    public function getLibretaSanitaria()
    {
        return $this->libretaSanitaria;
    }

    /**
     * Set audiometria
     *
     * @param boolean $audiometria
     * @return ServiciosExamenMedico
     */
    public function setAudiometria($audiometria)
    {
        $this->audiometria = $audiometria;

        return $this;
    }

    /**
     * Get audiometria
     *
     * @return boolean 
     */
    public function getAudiometria()
    {
        return $this->audiometria;
    }

    /**
     * Set psicotecnico
     *
     * @param boolean $psicotecnico
     * @return ServiciosExamenMedico
     */
    public function setPsicotecnico($psicotecnico)
    {
        $this->psicotecnico = $psicotecnico;

        return $this;
    }

    /**
     * Get psicotecnico
     *
     * @return boolean 
     */
    public function getPsicotecnico()
    {
        return $this->psicotecnico;
    }

    /**
     * Set dapTest
     *
     * @param boolean $dapTest
     * @return ServiciosExamenMedico
     */
    public function setDapTest($dapTest)
    {
        $this->dapTest = $dapTest;

        return $this;
    }

    /**
     * Get dapTest
     *
     * @return boolean 
     */
    public function getDapTest()
    {
        return $this->dapTest;
    }

    /**
     * Set rxColumnaLumbarFrente
     *
     * @param boolean $rxColumnaLumbarFrente
     * @return ServiciosExamenMedico
     */
    public function setRxColumnaLumbarFrente($rxColumnaLumbarFrente)
    {
        $this->rxColumnaLumbarFrente = $rxColumnaLumbarFrente;

        return $this;
    }

    /**
     * Get rxColumnaLumbarFrente
     *
     * @return boolean 
     */
    public function getRxColumnaLumbarFrente()
    {
        return $this->rxColumnaLumbarFrente;
    }

    /**
     * Set rxColumnaFrentePerfil
     *
     * @param boolean $rxColumnaFrentePerfil
     * @return ServiciosExamenMedico
     */
    public function setRxColumnaFrentePerfil($rxColumnaFrentePerfil)
    {
        $this->rxColumnaFrentePerfil = $rxColumnaFrentePerfil;

        return $this;
    }

    /**
     * Get rxColumnaFrentePerfil
     *
     * @return boolean 
     */
    public function getRxColumnaFrentePerfil()
    {
        return $this->rxColumnaFrentePerfil;
    }

    /**
     * Set grupoFactorSanguineo
     *
     * @param boolean $grupoFactorSanguineo
     * @return ServiciosExamenMedico
     */
    public function setGrupoFactorSanguineo($grupoFactorSanguineo)
    {
        $this->grupoFactorSanguineo = $grupoFactorSanguineo;

        return $this;
    }

    /**
     * Get grupoFactorSanguineo
     *
     * @return boolean 
     */
    public function getGrupoFactorSanguineo()
    {
        return $this->grupoFactorSanguineo;
    }

    /**
     * Set otros
     *
     * @param string $otros
     * @return ServiciosExamenMedico
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
     * Set created
     *
     * @param \DateTime $created
     * @return ServiciosExamenMedico
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

    /**
     * Set wasRead
     *
     * @param boolean $wasRead
     * @return ServiciosExamenMedico
     */
    public function setWasRead($wasRead)
    {
        $this->wasRead = $wasRead;

        return $this;
    }

    /**
     * Get wasRead
     *
     * @return boolean 
     */
    public function getWasRead()
    {
        return $this->wasRead;
    }
}
