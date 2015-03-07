<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UsuariosRepository")
 */
class Usuarios implements UserInterface, \Serializable
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
     * @ORM\Column(name="Codigopal", type="string", length=6)
     */
    private $codigopal;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombrepal", type="string", length=50)
     */
    private $nombrepal;

    /**
     * @var string
     *
     * @ORM\Column(name="Clave", type="string", length=10)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario", type="string", length=20)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="Activo", type="string", length=1)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="Correo", type="string", length=110)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="Domicilio", type="string", length=110)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="Localidad", type="string", length=110)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=110)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Contacto", type="string", length=110)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Actividad", type="string", length=110)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Correop", type="string", length=110)
     */
    private $correop;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombart", type="string", length=110)
     */
    private $nombreart;

    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
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
     * Set codigopal
     *
     * @param string $codigopal
     * @return Usuarios
     */
    public function setCodigopal($codigopal)
    {
        $this->codigopal = $codigopal;

        return $this;
    }

    /**
     * Get codigopal
     *
     * @return string 
     */
    public function getCodigopal()
    {
        return $this->codigopal;
    }

    /**
     * Set nombrepal
     *
     * @param string $nombrepal
     * @return Usuarios
     */
    public function setNombrepal($nombrepal)
    {
        $this->nombrepal = $nombrepal;

        return $this;
    }

    /**
     * Get nombrepal
     *
     * @return string 
     */
    public function getNombrepal()
    {
        return $this->nombrepal;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set activo
     *
     * @param string $activo
     * @return Usuarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return string 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuarios
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->getUsername(),
            $this->getPassword(),
        ));
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->usuario,
            $this->clave,
            ) = unserialize($serialized);
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->clave;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->usuario;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * Set contacto
     *
     * @param string $contacto
     * @return Usuarios
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return Usuarios
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set correop
     *
     * @param string $correop
     * @return Usuarios
     */
    public function setCorreop($correop)
    {
        $this->correop = $correop;

        return $this;
    }

    /**
     * Get correop
     *
     * @return string 
     */
    public function getCorreop()
    {
        return $this->correop;
    }

    /**
     * Set nombreart
     *
     * @param string $nombreart
     * @return Usuarios
     */
    public function setNombreart($nombreart)
    {
        $this->nombreart = $nombreart;

        return $this;
    }

    /**
     * Get nombreart
     *
     * @return string 
     */
    public function getNombreart()
    {
        return $this->nombreart;
    }
}
