<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoderecurso
 *
 * @ORM\Table(name="tipoDeRecurso")
 * @ORM\Entity
 */
class Tipoderecurso
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo", type="string", length=254, nullable=true)
     */
    private $nombreTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_tipo", type="string", length=254, nullable=true)
     */
    private $descripcionTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipoDeRecurso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoderecurso;



    /**
     * Set nombreTipo
     *
     * @param string $nombreTipo
     * @return Tipoderecurso
     */
    public function setNombreTipo($nombreTipo)
    {
        $this->nombreTipo = $nombreTipo;

        return $this;
    }

    /**
     * Get nombreTipo
     *
     * @return string 
     */
    public function getNombreTipo()
    {
        return $this->nombreTipo;
    }

    /**
     * Set descripcionTipo
     *
     * @param string $descripcionTipo
     * @return Tipoderecurso
     */
    public function setDescripcionTipo($descripcionTipo)
    {
        $this->descripcionTipo = $descripcionTipo;

        return $this;
    }

    /**
     * Get descripcionTipo
     *
     * @return string 
     */
    public function getDescripcionTipo()
    {
        return $this->descripcionTipo;
    }

    /**
     * Get idTipoderecurso
     *
     * @return integer 
     */
    public function getIdTipoderecurso()
    {
        return $this->idTipoderecurso;
    }
}
