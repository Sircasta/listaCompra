<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="producto")
 */
class Producto
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
     * @ORM\Column(type="integer")
     * @var int
     */
    private $cantidad;

    /**
     * @ORM\Column(type="float")
     * @var double
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    private $origen;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    private $tienda;

    /**
     * @ORM\Column(type="float")
     * @var double
     */
    private $calorias;

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
     * @return Producto
     */
    public function setNombre(string $nombre): Producto
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return int
     */
    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    /**
     * @param int $cantidad
     * @return Producto
     */
    public function setCantidad(int $cantidad): Producto
    {
        $this->cantidad = $cantidad;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * @param float $precio
     * @return Producto
     */
    public function setPrecio(float $precio): Producto
    {
        $this->precio = $precio;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigen(): string
    {
        return $this->origen;
    }

    /**
     * @param string $origen
     * @return Producto
     */
    public function setOrigen(string $origen): Producto
    {
        $this->origen = $origen;
        return $this;
    }

    /**
     * @return string
     */
    public function getTienda(): string
    {
        return $this->tienda;
    }

    /**
     * @param string $tienda
     * @return Producto
     */
    public function setTienda(string $tienda): Producto
    {
        $this->tienda = $tienda;
        return $this;
    }

    /**
     * @return float
     */
    public function getCalorias(): float
    {
        return $this->calorias;
    }

    /**
     * @param float $calorias
     * @return Producto
     */
    public function setCalorias(float $calorias): Producto
    {
        $this->calorias = $calorias;
        return $this;
    }


}