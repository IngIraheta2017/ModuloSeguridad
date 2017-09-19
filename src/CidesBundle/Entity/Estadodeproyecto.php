<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadodeproyecto
 *
 * @ORM\Table(name="estadoDeProyecto")
 * @ORM\Entity
 */
class Estadodeproyecto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_estado", type="string", length=254, nullable=true)
     */
    private $nombreEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_estado", type="string", length=254, nullable=true)
     */
    private $descripcionEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estadoDeProyecto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstadodeproyecto;



    /**
     * Set nombreEstado
     *
     * @param string $nombreEstado
     * @return Estadodeproyecto
     */
    public function setNombreEstado($nombreEstado)
    {
        $this->nombreEstado = $nombreEstado;

        return $this;
    }

    /**
     * Get nombreEstado
     *
     * @return string 
     */
    public function getNombreEstado()
    {
        return $this->nombreEstado;
    }

    /**
     * Set descripcionEstado
     *
     * @param string $descripcionEstado
     * @return Estadodeproyecto
     */
    public function setDescripcionEstado($descripcionEstado)
    {
        $this->descripcionEstado = $descripcionEstado;

        return $this;
    }

    /**
     * Get descripcionEstado
     *
     * @return string 
     */
    public function getDescripcionEstado()
    {
        return $this->descripcionEstado;
    }

    /**
     * Get idEstadodeproyecto
     *
     * @return integer 
     */
    public function getIdEstadodeproyecto()
    {
        return $this->idEstadodeproyecto;
    }
}
