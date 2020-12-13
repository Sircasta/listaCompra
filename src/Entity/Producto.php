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
}