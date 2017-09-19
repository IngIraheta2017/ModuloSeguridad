<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recurso
 *
 * @ORM\Table(name="recurso", indexes={@ORM\Index(name="FK_Association_12", columns={"id_tipoDeRecurso"})})
 * @ORM\Entity
 */
class Recurso
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_recurso", type="string", length=254, nullable=true)
     */
    private $nombreRecurso;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_recurso", type="string", length=254, nullable=true)
     */
    private $descripcionRecurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_recurso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecurso;

    /**
     * @var \CidesBundle\Entity\Tipoderecurso
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Tipoderecurso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoDeRecurso", referencedColumnName="id_tipoDeRecurso")
     * })
     */
    private $idTipoderecurso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CidesBundle\Entity\Actividad", mappedBy="idRecurso")
     */
    private $idActividad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CidesBundle\Entity\Proyecto", mappedBy="idRecurso")
     */
    private $idProyecto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idActividad = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idProyecto = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombreRecurso
     *
     * @param string $nombreRecurso
     * @return Recurso
     */
    public function setNombreRecurso($nombreRecurso)
    {
        $this->nombreRecurso = $nombreRecurso;

        return $this;
    }

    /**
     * Get nombreRecurso
     *
     * @return string 
     */
    public function getNombreRecurso()
    {
        return $this->nombreRecurso;
    }

    /**
     * Set descripcionRecurso
     *
     * @param string $descripcionRecurso
     * @return Recurso
     */
    public function setDescripcionRecurso($descripcionRecurso)
    {
        $this->descripcionRecurso = $descripcionRecurso;

        return $this;
    }

    /**
     * Get descripcionRecurso
     *
     * @return string 
     */
    public function getDescripcionRecurso()
    {
        return $this->descripcionRecurso;
    }

    /**
     * Get idRecurso
     *
     * @return integer 
     */
    public function getIdRecurso()
    {
        return $this->idRecurso;
    }

    /**
     * Set idTipoderecurso
     *
     * @param \CidesBundle\Entity\Tipoderecurso $idTipoderecurso
     * @return Recurso
     */
    public function setIdTipoderecurso(\CidesBundle\Entity\Tipoderecurso $idTipoderecurso = null)
    {
        $this->idTipoderecurso = $idTipoderecurso;

        return $this;
    }

    /**
     * Get idTipoderecurso
     *
     * @return \CidesBundle\Entity\Tipoderecurso 
     */
    public function getIdTipoderecurso()
    {
        return $this->idTipoderecurso;
    }

    /**
     * Add idActividad
     *
     * @param \CidesBundle\Entity\Actividad $idActividad
     * @return Recurso
     */
    public function addIdActividad(\CidesBundle\Entity\Actividad $idActividad)
    {
        $this->idActividad[] = $idActividad;

        return $this;
    }

    /**
     * Remove idActividad
     *
     * @param \CidesBundle\Entity\Actividad $idActividad
     */
    public function removeIdActividad(\CidesBundle\Entity\Actividad $idActividad)
    {
        $this->idActividad->removeElement($idActividad);
    }

    /**
     * Get idActividad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Add idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Recurso
     */
    public function addIdProyecto(\CidesBundle\Entity\Proyecto $idProyecto)
    {
        $this->idProyecto[] = $idProyecto;

        return $this;
    }

    /**
     * Remove idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     */
    public function removeIdProyecto(\CidesBundle\Entity\Proyecto $idProyecto)
    {
        $this->idProyecto->removeElement($idProyecto);
    }

    /**
     * Get idProyecto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}
