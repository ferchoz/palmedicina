<?php

namespace OldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * iNOVEDADES
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class iNOVEDADES
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigoe", type="string", length=255)
     */
    private $codigoe;

    /**
     * @var string
     *
     * @ORM\Column(name="Razon", type="string", length=255)
     */
    private $razon;

    /**
     * @var string
     *
     * @ORM\Column(name="Codart", type="string", length=255)
     */
    private $codart;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombart", type="string", length=255)
     */
    private $nombart;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigop", type="string", length=255)
     */
    private $codigop;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Tiponov", type="string", length=255)
     */
    private $tiponov;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren1", type="string", length=255)
     */
    private $ren1;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren2", type="string", length=255)
     */
    private $ren2;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren3", type="string", length=255)
     */
    private $ren3;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren4", type="string", length=255)
     */
    private $ren4;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren5", type="string", length=255)
     */
    private $ren5;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren6", type="string", length=255)
     */
    private $ren6;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren7", type="string", length=255)
     */
    private $ren7;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren8", type="string", length=255)
     */
    private $ren8;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren9", type="string", length=255)
     */
    private $ren9;

    /**
     * @var string
     *
     * @ORM\Column(name="Ren10", type="string", length=255)
     */
    private $ren10;

    /**
     * @var integer
     *
     * @ORM\Column(name="Enlace", type="integer")
     */
    private $enlace;

    /**
     * @var string
     *
     * @ORM\Column(name="Operador", type="string", length=255)
     */
    private $operador;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return iNOVEDADES
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
     * Set codigoe
     *
     * @param string $codigoe
     * @return iNOVEDADES
     */
    public function setCodigoe($codigoe)
    {
        $this->codigoe = $codigoe;

        return $this;
    }

    /**
     * Get codigoe
     *
     * @return string 
     */
    public function getCodigoe()
    {
        return $this->codigoe;
    }

    /**
     * Set razon
     *
     * @param string $razon
     * @return iNOVEDADES
     */
    public function setRazon($razon)
    {
        $this->razon = $razon;

        return $this;
    }

    /**
     * Get razon
     *
     * @return string 
     */
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * Set codart
     *
     * @param string $codart
     * @return iNOVEDADES
     */
    public function setCodart($codart)
    {
        $this->codart = $codart;

        return $this;
    }

    /**
     * Get codart
     *
     * @return string 
     */
    public function getCodart()
    {
        return $this->codart;
    }

    /**
     * Set nombart
     *
     * @param string $nombart
     * @return iNOVEDADES
     */
    public function setNombart($nombart)
    {
        $this->nombart = $nombart;

        return $this;
    }

    /**
     * Get nombart
     *
     * @return string 
     */
    public function getNombart()
    {
        return $this->nombart;
    }

    /**
     * Set codigop
     *
     * @param string $codigop
     * @return iNOVEDADES
     */
    public function setCodigop($codigop)
    {
        $this->codigop = $codigop;

        return $this;
    }

    /**
     * Get codigop
     *
     * @return string 
     */
    public function getCodigop()
    {
        return $this->codigop;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return iNOVEDADES
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tiponov
     *
     * @param string $tiponov
     * @return iNOVEDADES
     */
    public function setTiponov($tiponov)
    {
        $this->tiponov = $tiponov;

        return $this;
    }

    /**
     * Get tiponov
     *
     * @return string 
     */
    public function getTiponov()
    {
        return $this->tiponov;
    }

    /**
     * Set ren1
     *
     * @param string $ren1
     * @return iNOVEDADES
     */
    public function setRen1($ren1)
    {
        $this->ren1 = $ren1;

        return $this;
    }

    /**
     * Get ren1
     *
     * @return string 
     */
    public function getRen1()
    {
        return $this->ren1;
    }

    /**
     * Set ren2
     *
     * @param string $ren2
     * @return iNOVEDADES
     */
    public function setRen2($ren2)
    {
        $this->ren2 = $ren2;

        return $this;
    }

    /**
     * Get ren2
     *
     * @return string 
     */
    public function getRen2()
    {
        return $this->ren2;
    }

    /**
     * Set ren3
     *
     * @param string $ren3
     * @return iNOVEDADES
     */
    public function setRen3($ren3)
    {
        $this->ren3 = $ren3;

        return $this;
    }

    /**
     * Get ren3
     *
     * @return string 
     */
    public function getRen3()
    {
        return $this->ren3;
    }

    /**
     * Set ren4
     *
     * @param string $ren4
     * @return iNOVEDADES
     */
    public function setRen4($ren4)
    {
        $this->ren4 = $ren4;

        return $this;
    }

    /**
     * Get ren4
     *
     * @return string 
     */
    public function getRen4()
    {
        return $this->ren4;
    }

    /**
     * Set ren5
     *
     * @param string $ren5
     * @return iNOVEDADES
     */
    public function setRen5($ren5)
    {
        $this->ren5 = $ren5;

        return $this;
    }

    /**
     * Get ren5
     *
     * @return string 
     */
    public function getRen5()
    {
        return $this->ren5;
    }

    /**
     * Set ren6
     *
     * @param string $ren6
     * @return iNOVEDADES
     */
    public function setRen6($ren6)
    {
        $this->ren6 = $ren6;

        return $this;
    }

    /**
     * Get ren6
     *
     * @return string 
     */
    public function getRen6()
    {
        return $this->ren6;
    }

    /**
     * Set ren7
     *
     * @param string $ren7
     * @return iNOVEDADES
     */
    public function setRen7($ren7)
    {
        $this->ren7 = $ren7;

        return $this;
    }

    /**
     * Get ren7
     *
     * @return string 
     */
    public function getRen7()
    {
        return $this->ren7;
    }

    /**
     * Set ren8
     *
     * @param string $ren8
     * @return iNOVEDADES
     */
    public function setRen8($ren8)
    {
        $this->ren8 = $ren8;

        return $this;
    }

    /**
     * Get ren8
     *
     * @return string 
     */
    public function getRen8()
    {
        return $this->ren8;
    }

    /**
     * Set ren9
     *
     * @param string $ren9
     * @return iNOVEDADES
     */
    public function setRen9($ren9)
    {
        $this->ren9 = $ren9;

        return $this;
    }

    /**
     * Get ren9
     *
     * @return string 
     */
    public function getRen9()
    {
        return $this->ren9;
    }

    /**
     * Set ren10
     *
     * @param string $ren10
     * @return iNOVEDADES
     */
    public function setRen10($ren10)
    {
        $this->ren10 = $ren10;

        return $this;
    }

    /**
     * Get ren10
     *
     * @return string 
     */
    public function getRen10()
    {
        return $this->ren10;
    }

    /**
     * Set enlace
     *
     * @param integer $enlace
     * @return iNOVEDADES
     */
    public function setEnlace($enlace)
    {
        $this->enlace = $enlace;

        return $this;
    }

    /**
     * Get enlace
     *
     * @return integer 
     */
    public function getEnlace()
    {
        return $this->enlace;
    }

    /**
     * Set operador
     *
     * @param string $operador
     * @return iNOVEDADES
     */
    public function setOperador($operador)
    {
        $this->operador = $operador;

        return $this;
    }

    /**
     * Get operador
     *
     * @return string 
     */
    public function getOperador()
    {
        return $this->operador;
    }
}
