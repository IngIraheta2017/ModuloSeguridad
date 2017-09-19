<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetivoproyecto
 *
 * @ORM\Table(name="objetivoProyecto", indexes={@ORM\Index(name="FK_Association_4", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Objetivoproyecto
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_objetivo", type="string", length=254, nullable=true)
     */
    private $descripcionObjetivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_objetivoProyecto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObjetivoproyecto;

    /**
     * @var \CidesBundle\Entity\Proyecto
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $idProyecto;



    /**
     * Set descripcionObjetivo
     *
     * @param string $descripcionObjetivo
     * @return Objetivoproyecto
     */
    public function setDescripcionObjetivo($descripcionObjetivo)
    {
        $this->descripcionObjetivo = $descripcionObjetivo;

        return $this;
    }

    /**
     * Get descripcionObjetivo
     *
     * @return string 
     */
    public function getDescripcionObjetivo()
    {
        return $this->descripcionObjetivo;
    }

    /**
     * Get idObjetivoproyecto
     *
     * @return integer 
     */
    public function getIdObjetivoproyecto()
    {
        return $this->idObjetivoproyecto;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Objetivoproyecto
     */
    public function setIdProyecto(\CidesBundle\Entity\Proyecto $idProyecto = null)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \CidesBundle\Entity\Proyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}
