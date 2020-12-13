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


}