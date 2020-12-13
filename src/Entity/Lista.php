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
}