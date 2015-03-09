<?php

namespace OldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * iESTUDIOS
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class iESTUDIOS
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Clave", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="Fecha", type="string", length=255)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Empresa", type="string", length=255)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigop", type="string", length=255)
     */
    private $codigop;

    /**
     * @var string
     *
     * @ORM\Column(name="Paciente", type="string", length=255)
     */
    private $paciente;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=255)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Examen", type="string", length=255)
     */
    private $examen;

    /**
     * @var string
     *
     * @ORM\Column(name="R1est", type="string", length=255)
     */
    private $r1est;

    /**
     * @var string
     *
     * @ORM\Column(name="R2est", type="string", length=255)
     */
    private $r2est;

    /**
     * @var string
     *
     * @ORM\Column(name="R3est", type="string", length=255)
     */
    private $r3est;

    /**
     * @var string
     *
     * @ORM\Column(name="R4est", type="string", length=255)
     */
    private $r4est;

    /**
     * @var string
     *
     * @ORM\Column(name="R5est", type="string", length=255)
     */
    private $r5est;

    /**
     * @var string
     *
     * @ORM\Column(name="R6est", type="string", length=255)
     */
    private $r6est;

    /**
     * @var string
     *
     * @ORM\Column(name="R7est", type="string", length=255)
     */
    private $r7est;

    /**
     * @var string
     *
     * @ORM\Column(name="R8est", type="string", length=255)
     */
    private $r8est;

    /**
     * @var string
     *
     * @ORM\Column(name="R9est", type="string", length=255)
     */
    private $r9est;

    /**
     * @var string
     *
     * @ORM\Column(name="R10est", type="string", length=255)
     */
    private $r10est;

    /**
     * @var string
     *
     * @ORM\Column(name="R1res", type="string", length=255)
     */
    private $r1res;

    /**
     * @var string
     *
     * @ORM\Column(name="R2res", type="string", length=255)
     */
    private $r2res;

    /**
     * @var string
     *
     * @ORM\Column(name="R3res", type="string", length=255)
     */
    private $r3res;

    /**
     * @var string
     *
     * @ORM\Column(name="R4res", type="string", length=255)
     */
    private $r4res;

    /**
     * @var string
     *
     * @ORM\Column(name="R5res", type="string", length=255)
     */
    private $r5res;

    /**
     * @var string
     *
     * @ORM\Column(name="R6res", type="string", length=255)
     */
    private $r6res;

    /**
     * @var string
     *
     * @ORM\Column(name="R7res", type="string", length=255)
     */
    private $r7res;

    /**
     * @var string
     *
     * @ORM\Column(name="R8res", type="string", length=255)
     */
    private $r8res;

    /**
     * @var string
     *
     * @ORM\Column(name="R9res", type="string", length=255)
     */
    private $r9res;

    /**
     * @var string
     *
     * @ORM\Column(name="R10res", type="string", length=255)
     */
    private $r10res;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return iESTUDIOS
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return iESTUDIOS
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return iESTUDIOS
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
     * Set direccion
     *
     * @param string $direccion
     * @return iESTUDIOS
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return iESTUDIOS
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
     * Set telefono
     *
     * @param string $telefono
     * @return iESTUDIOS
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set codigop
     *
     * @param string $codigop
     * @return iESTUDIOS
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
     * Set paciente
     *
     * @param string $paciente
     * @return iESTUDIOS
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return string 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return iESTUDIOS
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set examen
     *
     * @param string $examen
     * @return iESTUDIOS
     */
    public function setExamen($examen)
    {
        $this->examen = $examen;

        return $this;
    }

    /**
     * Get examen
     *
     * @return string 
     */
    public function getExamen()
    {
        return $this->examen;
    }

    /**
     * Set r1est
     *
     * @param string $r1est
     * @return iESTUDIOS
     */
    public function setR1est($r1est)
    {
        $this->r1est = $r1est;

        return $this;
    }

    /**
     * Get r1est
     *
     * @return string 
     */
    public function getR1est()
    {
        return $this->r1est;
    }

    /**
     * Set r2est
     *
     * @param string $r2est
     * @return iESTUDIOS
     */
    public function setR2est($r2est)
    {
        $this->r2est = $r2est;

        return $this;
    }

    /**
     * Get r2est
     *
     * @return string 
     */
    public function getR2est()
    {
        return $this->r2est;
    }

    /**
     * Set r3est
     *
     * @param string $r3est
     * @return iESTUDIOS
     */
    public function setR3est($r3est)
    {
        $this->r3est = $r3est;

        return $this;
    }

    /**
     * Get r3est
     *
     * @return string 
     */
    public function getR3est()
    {
        return $this->r3est;
    }

    /**
     * Set r4est
     *
     * @param string $r4est
     * @return iESTUDIOS
     */
    public function setR4est($r4est)
    {
        $this->r4est = $r4est;

        return $this;
    }

    /**
     * Get r4est
     *
     * @return string 
     */
    public function getR4est()
    {
        return $this->r4est;
    }

    /**
     * Set r5est
     *
     * @param string $r5est
     * @return iESTUDIOS
     */
    public function setR5est($r5est)
    {
        $this->r5est = $r5est;

        return $this;
    }

    /**
     * Get r5est
     *
     * @return string 
     */
    public function getR5est()
    {
        return $this->r5est;
    }

    /**
     * Set r6est
     *
     * @param string $r6est
     * @return iESTUDIOS
     */
    public function setR6est($r6est)
    {
        $this->r6est = $r6est;

        return $this;
    }

    /**
     * Get r6est
     *
     * @return string 
     */
    public function getR6est()
    {
        return $this->r6est;
    }

    /**
     * Set r7est
     *
     * @param string $r7est
     * @return iESTUDIOS
     */
    public function setR7est($r7est)
    {
        $this->r7est = $r7est;

        return $this;
    }

    /**
     * Get r7est
     *
     * @return string 
     */
    public function getR7est()
    {
        return $this->r7est;
    }

    /**
     * Set r8est
     *
     * @param string $r8est
     * @return iESTUDIOS
     */
    public function setR8est($r8est)
    {
        $this->r8est = $r8est;

        return $this;
    }

    /**
     * Get r8est
     *
     * @return string 
     */
    public function getR8est()
    {
        return $this->r8est;
    }

    /**
     * Set r9est
     *
     * @param string $r9est
     * @return iESTUDIOS
     */
    public function setR9est($r9est)
    {
        $this->r9est = $r9est;

        return $this;
    }

    /**
     * Get r9est
     *
     * @return string 
     */
    public function getR9est()
    {
        return $this->r9est;
    }

    /**
     * Set r10est
     *
     * @param string $r10est
     * @return iESTUDIOS
     */
    public function setR10est($r10est)
    {
        $this->r10est = $r10est;

        return $this;
    }

    /**
     * Get r10est
     *
     * @return string 
     */
    public function getR10est()
    {
        return $this->r10est;
    }

    /**
     * Set r1res
     *
     * @param string $r1res
     * @return iESTUDIOS
     */
    public function setR1res($r1res)
    {
        $this->r1res = $r1res;

        return $this;
    }

    /**
     * Get r1res
     *
     * @return string 
     */
    public function getR1res()
    {
        return $this->r1res;
    }

    /**
     * Set r2res
     *
     * @param string $r2res
     * @return iESTUDIOS
     */
    public function setR2res($r2res)
    {
        $this->r2res = $r2res;

        return $this;
    }

    /**
     * Get r2res
     *
     * @return string 
     */
    public function getR2res()
    {
        return $this->r2res;
    }

    /**
     * Set r3res
     *
     * @param string $r3res
     * @return iESTUDIOS
     */
    public function setR3res($r3res)
    {
        $this->r3res = $r3res;

        return $this;
    }

    /**
     * Get r3res
     *
     * @return string 
     */
    public function getR3res()
    {
        return $this->r3res;
    }

    /**
     * Set r4res
     *
     * @param string $r4res
     * @return iESTUDIOS
     */
    public function setR4res($r4res)
    {
        $this->r4res = $r4res;

        return $this;
    }

    /**
     * Get r4res
     *
     * @return string 
     */
    public function getR4res()
    {
        return $this->r4res;
    }

    /**
     * Set r5res
     *
     * @param string $r5res
     * @return iESTUDIOS
     */
    public function setR5res($r5res)
    {
        $this->r5res = $r5res;

        return $this;
    }

    /**
     * Get r5res
     *
     * @return string 
     */
    public function getR5res()
    {
        return $this->r5res;
    }

    /**
     * Set r6res
     *
     * @param string $r6res
     * @return iESTUDIOS
     */
    public function setR6res($r6res)
    {
        $this->r6res = $r6res;

        return $this;
    }

    /**
     * Get r6res
     *
     * @return string 
     */
    public function getR6res()
    {
        return $this->r6res;
    }

    /**
     * Set r7res
     *
     * @param string $r7res
     * @return iESTUDIOS
     */
    public function setR7res($r7res)
    {
        $this->r7res = $r7res;

        return $this;
    }

    /**
     * Get r7res
     *
     * @return string 
     */
    public function getR7res()
    {
        return $this->r7res;
    }

    /**
     * Set r8res
     *
     * @param string $r8res
     * @return iESTUDIOS
     */
    public function setR8res($r8res)
    {
        $this->r8res = $r8res;

        return $this;
    }

    /**
     * Get r8res
     *
     * @return string 
     */
    public function getR8res()
    {
        return $this->r8res;
    }

    /**
     * Set r9res
     *
     * @param string $r9res
     * @return iESTUDIOS
     */
    public function setR9res($r9res)
    {
        $this->r9res = $r9res;

        return $this;
    }

    /**
     * Get r9res
     *
     * @return string 
     */
    public function getR9res()
    {
        return $this->r9res;
    }

    /**
     * Set r10res
     *
     * @param string $r10res
     * @return iESTUDIOS
     */
    public function setR10res($r10res)
    {
        $this->r10res = $r10res;

        return $this;
    }

    /**
     * Get r10res
     *
     * @return string 
     */
    public function getR10res()
    {
        return $this->r10res;
    }
}
