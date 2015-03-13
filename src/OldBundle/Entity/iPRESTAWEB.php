<?php

namespace OldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * iPRESTAWEB
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class iPRESTAWEB
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
     * @var integer
     *
     * @ORM\Column(name="Registro", type="bigint")
     */
    private $registro;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=255)
     */
    private $numero;

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
     * @ORM\Column(name="Codpre", type="string", length=255)
     */
    private $codpre;

    /**
     * @var string
     *
     * @ORM\Column(name="Estudio", type="string", length=255)
     */
    private $estudio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="smallint")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=10, scale=2)
     */
    private $precio;


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
     * Set registro
     *
     * @param integer $registro
     * @return iPRESTAWEB
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return integer 
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return iPRESTAWEB
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return iPRESTAWEB
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
     * @return iPRESTAWEB
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
     * Set codigop
     *
     * @param string $codigop
     * @return iPRESTAWEB
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
     * @return iPRESTAWEB
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
     * Set codpre
     *
     * @param string $codpre
     * @return iPRESTAWEB
     */
    public function setCodpre($codpre)
    {
        $this->codpre = $codpre;

        return $this;
    }

    /**
     * Get codpre
     *
     * @return string 
     */
    public function getCodpre()
    {
        return $this->codpre;
    }

    /**
     * Set estudio
     *
     * @param string $estudio
     * @return iPRESTAWEB
     */
    public function setEstudio($estudio)
    {
        $this->estudio = $estudio;

        return $this;
    }

    /**
     * Get estudio
     *
     * @return string 
     */
    public function getEstudio()
    {
        return $this->estudio;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return iPRESTAWEB
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return iPRESTAWEB
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
