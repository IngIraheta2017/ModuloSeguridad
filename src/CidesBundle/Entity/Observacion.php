<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observacion
 *
 * @ORM\Table(name="observacion", indexes={@ORM\Index(name="FK_Association_2", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Observacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="titulo_observacion", type="string", length=254, nullable=true)
     */
    private $tituloObservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_observacion", type="string", length=254, nullable=true)
     */
    private $descripcionObservacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_observacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObservacion;

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
     * Set tituloObservacion
     *
     * @param string $tituloObservacion
     * @return Observacion
     */
    public function setTituloObservacion($tituloObservacion)
    {
        $this->tituloObservacion = $tituloObservacion;

        return $this;
    }

    /**
     * Get tituloObservacion
     *
     * @return string 
     */
    public function getTituloObservacion()
    {
        return $this->tituloObservacion;
    }

    /**
     * Set descripcionObservacion
     *
     * @param string $descripcionObservacion
     * @return Observacion
     */
    public function setDescripcionObservacion($descripcionObservacion)
    {
        $this->descripcionObservacion = $descripcionObservacion;

        return $this;
    }

    /**
     * Get descripcionObservacion
     *
     * @return string 
     */
    public function getDescripcionObservacion()
    {
        return $this->descripcionObservacion;
    }

    /**
     * Get idObservacion
     *
     * @return integer 
     */
    public function getIdObservacion()
    {
        return $this->idObservacion;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Observacion
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
