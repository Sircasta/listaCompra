<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=40)
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=10, unique=true)
     * @var string
     */
    private $nif;

    /**
     * @ORM\Column(type="string", length=150)
     * @var string
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=12)
     * @var string
     */
    private $tlf;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     */
    private $fecha;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $administrador;

    /**
     * @ORM\OneToMany(targetEntity="Lista", mappedBy="usuario")
     * @var Lista[]|Collection
     */
    private $listas;

    /**
     * Usuario constructor.
     */
    public function __construct()
    {
        $this->listas = new ArrayCollection();
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre(string $nombre): Usuario
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos(string $apellidos): Usuario
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return string
     */
    public function getNif(): string
    {
        return $this->nif;
    }

    /**
     * @param string $nif
     * @return Usuario
     */
    public function setNif(string $nif): Usuario
    {
        $this->nif = $nif;
        return $this;
    }

    /**
     * @return string
     */
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     * @return Usuario
     */
    public function setDireccion(string $direccion): Usuario
    {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Usuario
     */
    public function setEmail(string $email): Usuario
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getTlf(): string
    {
        return $this->tlf;
    }

    /**
     * @param string $tlf
     * @return Usuario
     */
    public function setTlf(string $tlf): Usuario
    {
        $this->tlf = $tlf;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFecha(): ?\DateTime
    {
        return $this->fecha;
    }

    /**
     * @param \DateTime $fecha
     * @return Usuario
     */
    public function setFecha(\DateTime $fecha = null): Usuario
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdministrador(): bool
    {
        return $this->administrador;
    }

    /**
     * @param bool $administrador
     * @return Usuario
     */
    public function setAdministrador(bool $administrador): Usuario
    {
        $this->administrador = $administrador;
        return $this;
    }

    /**
     * @return Lista[]|Collection
     */
    public function getListas()
    {
        return $this->listas;
    }

    /**
     * @param Lista[]|Collection $listas
     * @return Usuario
     */
    public function setListas($listas)
    {
        $this->listas = $listas;
        return $this;
    }


}