<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto", indexes={@ORM\Index(name="FK_Association_1", columns={"id_estadoDeProyecto"})})
 * @ORM\Entity
 */
class Proyecto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_proyecto", type="string", length=254, nullable=true)
     */
    private $nombreProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="tema_proyecto", type="string", length=254, nullable=true)
     */
    private $temaProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion_proyecto", type="string", length=254, nullable=true)
     */
    private $justificacionProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="resultados_esperados", type="string", length=254, nullable=true)
     */
    private $resultadosEsperados;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_proyecto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProyecto;

    /**
     * @var \CidesBundle\Entity\Estadodeproyecto
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Estadodeproyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estadoDeProyecto", referencedColumnName="id_estadoDeProyecto")
     * })
     */
    private $idEstadodeproyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CidesBundle\Entity\Recurso", inversedBy="idProyecto")
     * @ORM\JoinTable(name="necesita",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id_proyecto")
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
     * Set nombreProyecto
     *
     * @param string $nombreProyecto
     * @return Proyecto
     */
    public function setNombreProyecto($nombreProyecto)
    {
        $this->nombreProyecto = $nombreProyecto;

        return $this;
    }

    /**
     * Get nombreProyecto
     *
     * @return string 
     */
    public function getNombreProyecto()
    {
        return $this->nombreProyecto;
    }

    /**
     * Set temaProyecto
     *
     * @param string $temaProyecto
     * @return Proyecto
     */
    public function setTemaProyecto($temaProyecto)
    {
        $this->temaProyecto = $temaProyecto;

        return $this;
    }

    /**
     * Get temaProyecto
     *
     * @return string 
     */
    public function getTemaProyecto()
    {
        return $this->temaProyecto;
    }

    /**
     * Set justificacionProyecto
     *
     * @param string $justificacionProyecto
     * @return Proyecto
     */
    public function setJustificacionProyecto($justificacionProyecto)
    {
        $this->justificacionProyecto = $justificacionProyecto;

        return $this;
    }

    /**
     * Get justificacionProyecto
     *
     * @return string 
     */
    public function getJustificacionProyecto()
    {
        return $this->justificacionProyecto;
    }

    /**
     * Set resultadosEsperados
     *
     * @param string $resultadosEsperados
     * @return Proyecto
     */
    public function setResultadosEsperados($resultadosEsperados)
    {
        $this->resultadosEsperados = $resultadosEsperados;

        return $this;
    }

    /**
     * Get resultadosEsperados
     *
     * @return string 
     */
    public function getResultadosEsperados()
    {
        return $this->resultadosEsperados;
    }

    /**
     * Get idProyecto
     *
     * @return integer 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Set idEstadodeproyecto
     *
     * @param \CidesBundle\Entity\Estadodeproyecto $idEstadodeproyecto
     * @return Proyecto
     */
    public function setIdEstadodeproyecto(\CidesBundle\Entity\Estadodeproyecto $idEstadodeproyecto = null)
    {
        $this->idEstadodeproyecto = $idEstadodeproyecto;

        return $this;
    }

    /**
     * Get idEstadodeproyecto
     *
     * @return \CidesBundle\Entity\Estadodeproyecto 
     */
    public function getIdEstadodeproyecto()
    {
        return $this->idEstadodeproyecto;
    }

    /**
     * Add idRecurso
     *
     * @param \CidesBundle\Entity\Recurso $idRecurso
     * @return Proyecto
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
