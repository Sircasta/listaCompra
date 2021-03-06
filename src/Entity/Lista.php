<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="lista")
 */
class Lista
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
     * @ORM\Column(type="text", length=500)
     * @var string
     */
    private $descripcion;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     */
    private $fecha;

    /**
     * @ORM\ManyToMany(targetEntity="Producto", mappedBy="listas")
     * @var Producto[]|Collection
     */
    private $productos;

    /**
     * Lista constructor.
     */
    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="listas")
     * @ORM\JoinColumn(nullable=false)
     * @var Usuario
     */
    private $usuario;

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
     * @return Lista
     */
    public function setNombre(string $nombre): Lista
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Lista
     */
    public function setDescripcion(string $descripcion): Lista
    {
        $this->descripcion = $descripcion;
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
     * @return Lista
     */
    public function setFecha(\DateTime $fecha = null): Lista
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return Producto[]|Collection
     */
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * @param Producto[]|Collection $productos
     * @return Lista
     */
    public function setProductos($productos)
    {
        $this->productos = $productos;
        return $this;
    }

    /**
     * @return Usuario
     */
    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     * @return Lista
     */
    public function setUsuario(Usuario $usuario): Lista
    {
        $this->usuario = $usuario;
        return $this;
    }


}