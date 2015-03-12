<?php

namespace OldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * iCTADAT
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class iCTADAT
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
     * @ORM\Column(name="Sucursal", type="string", length=255)
     */
    private $sucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var float
     *
     * @ORM\Column(name="Orden", type="float")
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="Letra", type="string", length=255)
     */
    private $letra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipocomp", type="string", length=255)
     */
    private $tipocomp;

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
     * @ORM\Column(name="Domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="Localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Cpostal", type="string", length=255)
     */
    private $cpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Nrocuit", type="string", length=255)
     */
    private $nrocuit;

    /**
     * @var string
     *
     * @ORM\Column(name="Leyeiva", type="string", length=255)
     */
    private $leyeiva;

    /**
     * @var string
     *
     * @ORM\Column(name="Condiciones", type="string", length=255)
     */
    private $condiciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Vencimiento", type="date")
     */
    private $vencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Gravado", type="decimal", precision=10, scale=2)
     */
    private $gravado;

    /**
     * @var string
     *
     * @ORM\Column(name="Nogravado", type="decimal", precision=10, scale=2)
     */
    private $nogravado;

    /**
     * @var string
     *
     * @ORM\Column(name="Subtotal", type="decimal", precision=10, scale=2)
     */
    private $subtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="Iva1", type="decimal", precision=10, scale=2)
     */
    private $iva1;

    /**
     * @var string
     *
     * @ORM\Column(name="Total", type="decimal", precision=10, scale=2)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo", type="decimal", precision=10, scale=2)
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="Porceper", type="decimal", precision=10, scale=2)
     */
    private $porceper;

    /**
     * @var string
     *
     * @ORM\Column(name="Impoper", type="decimal", precision=10, scale=2)
     */
    private $impoper;


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
     * Set sucursal
     *
     * @param string $sucursal
     * @return iCTADAT
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return iCTADAT
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
     * Set orden
     *
     * @param float $orden
     * @return iCTADAT
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return float 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set letra
     *
     * @param string $letra
     * @return iCTADAT
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return iCTADAT
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
     * Set tipocomp
     *
     * @param string $tipocomp
     * @return iCTADAT
     */
    public function setTipocomp($tipocomp)
    {
        $this->tipocomp = $tipocomp;

        return $this;
    }

    /**
     * Get tipocomp
     *
     * @return string 
     */
    public function getTipocomp()
    {
        return $this->tipocomp;
    }

    /**
     * Set codigoe
     *
     * @param string $codigoe
     * @return iCTADAT
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
     * @return iCTADAT
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
     * Set domicilio
     *
     * @param string $domicilio
     * @return iCTADAT
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
     * Set localidad
     *
     * @param string $localidad
     * @return iCTADAT
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
     * Set cpostal
     *
     * @param string $cpostal
     * @return iCTADAT
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string 
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * Set nrocuit
     *
     * @param string $nrocuit
     * @return iCTADAT
     */
    public function setNrocuit($nrocuit)
    {
        $this->nrocuit = $nrocuit;

        return $this;
    }

    /**
     * Get nrocuit
     *
     * @return string 
     */
    public function getNrocuit()
    {
        return $this->nrocuit;
    }

    /**
     * Set leyeiva
     *
     * @param string $leyeiva
     * @return iCTADAT
     */
    public function setLeyeiva($leyeiva)
    {
        $this->leyeiva = $leyeiva;

        return $this;
    }

    /**
     * Get leyeiva
     *
     * @return string 
     */
    public function getLeyeiva()
    {
        return $this->leyeiva;
    }

    /**
     * Set condiciones
     *
     * @param string $condiciones
     * @return iCTADAT
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return string 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set vencimiento
     *
     * @param \DateTime $vencimiento
     * @return iCTADAT
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return \DateTime 
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }

    /**
     * Set gravado
     *
     * @param string $gravado
     * @return iCTADAT
     */
    public function setGravado($gravado)
    {
        $this->gravado = $gravado;

        return $this;
    }

    /**
     * Get gravado
     *
     * @return string 
     */
    public function getGravado()
    {
        return $this->gravado;
    }

    /**
     * Set nogravado
     *
     * @param string $nogravado
     * @return iCTADAT
     */
    public function setNogravado($nogravado)
    {
        $this->nogravado = $nogravado;

        return $this;
    }

    /**
     * Get nogravado
     *
     * @return string 
     */
    public function getNogravado()
    {
        return $this->nogravado;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     * @return iCTADAT
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return string 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set iva1
     *
     * @param string $iva1
     * @return iCTADAT
     */
    public function setIva1($iva1)
    {
        $this->iva1 = $iva1;

        return $this;
    }

    /**
     * Get iva1
     *
     * @return string 
     */
    public function getIva1()
    {
        return $this->iva1;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return iCTADAT
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     * @return iCTADAT
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set porceper
     *
     * @param string $porceper
     * @return iCTADAT
     */
    public function setPorceper($porceper)
    {
        $this->porceper = $porceper;

        return $this;
    }

    /**
     * Get porceper
     *
     * @return string 
     */
    public function getPorceper()
    {
        return $this->porceper;
    }

    /**
     * Set impoper
     *
     * @param string $impoper
     * @return iCTADAT
     */
    public function setImpoper($impoper)
    {
        $this->impoper = $impoper;

        return $this;
    }

    /**
     * Get impoper
     *
     * @return string 
     */
    public function getImpoper()
    {
        return $this->impoper;
    }
}
