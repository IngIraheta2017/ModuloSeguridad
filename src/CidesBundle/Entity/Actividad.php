<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad", indexes={@ORM\Index(name="FK_Association_10", columns={"act_id_actividad2"}), @ORM\Index(name="FK_Association_22", columns={"id_user"}), @ORM\Index(name="FK_Association_25", columns={"act_id_actividad"}), @ORM\Index(name="FK_Association_8", columns={"id_proyecto"}), @ORM\Index(name="FK_Association_9", columns={"act_id_actividad3"})})
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=true)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime", nullable=true)
     */
    private $fechaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer", nullable=true)
     */
    private $duracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_actividad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActividad;

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
     * @var \CidesBundle\Entity\Actividad
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_id_actividad", referencedColumnName="id_actividad")
     * })
     */
    private $actActividad;

    /**
     * @var \CidesBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \CidesBundle\Entity\Actividad
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_id_actividad3", referencedColumnName="id_actividad")
     * })
     */
    private $actActividad3;

    /**
     * @var \CidesBundle\Entity\Actividad
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_id_actividad2", referencedColumnName="id_actividad")
     * })
     */
    private $actActividad2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CidesBundle\Entity\Recurso", inversedBy="idActividad")
     * @ORM\JoinTable(name="tieneasignado",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_actividad", referencedColumnName="id_actividad")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_recurso", referencedColumnName="id_recurso")
     *   }
     * )
     */
    private $idRecurso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRecurso = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Actividad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Actividad
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Actividad
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     * @return Actividad
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Get idActividad
     *
     * @return integer 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Actividad
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

    /**
     * Set actActividad
     *
     * @param \CidesBundle\Entity\Actividad $actActividad
     * @return Actividad
     */
    public function setActActividad(\CidesBundle\Entity\Actividad $actActividad = null)
    {
        $this->actActividad = $actActividad;

        return $this;
    }

    /**
     * Get actActividad
     *
     * @return \CidesBundle\Entity\Actividad 
     */
    public function getActActividad()
    {
        return $this->actActividad;
    }

    /**
     * Set idUser
     *
     * @param \CidesBundle\Entity\User $idUser
     * @return Actividad
     */
    public function setIdUser(\CidesBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \CidesBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set actActividad3
     *
     * @param \CidesBundle\Entity\Actividad $actActividad3
     * @return Actividad
     */
    public function setActActividad3(\CidesBundle\Entity\Actividad $actActividad3 = null)
    {
        $this->actActividad3 = $actActividad3;

        return $this;
    }

    /**
     * Get actActividad3
     *
     * @return \CidesBundle\Entity\Actividad 
     */
    public function getActActividad3()
    {
        return $this->actActividad3;
    }

    /**
     * Set actActividad2
     *
     * @param \CidesBundle\Entity\Actividad $actActividad2
     * @return Actividad
     */
    public function setActActividad2(\CidesBundle\Entity\Actividad $actActividad2 = null)
    {
        $this->actActividad2 = $actActividad2;

        return $this;
    }

    /**
     * Get actActividad2
     *
     * @return \CidesBundle\Entity\Actividad 
     */
    public function getActActividad2()
    {
        return $this->actActividad2;
    }

    /**
     * Add idRecurso
     *
     * @param \CidesBundle\Entity\Recurso $idRecurso
     * @return Actividad
     */
    public function addIdRecurso(\CidesBundle\Entity\Recurso $idRecurso)
    {
        $this->idRecurso[] = $idRecurso;

        return $this;
    }

    /**
     * Remove idRecurso
     *
     * @param \CidesBundle\Entity\Recurso $idRecurso
     */
    public function removeIdRecurso(\CidesBundle\Entity\Recurso $idRecurso)
    {
        $this->idRecurso->removeElement($idRecurso);
    }

    /**
     * Get idRecurso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdRecurso()
    {
        return $this->idRecurso;
    }
}
