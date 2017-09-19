<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indicador
 *
 * @ORM\Table(name="indicador", indexes={@ORM\Index(name="FK_Association_6", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Indicador
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_indicador", type="string", length=254, nullable=true)
     */
    private $descripcionIndicador;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_indicador", type="string", length=254, nullable=true)
     */
    private $tipoIndicador;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_indicador", type="string", length=254, nullable=true)
     */
    private $nombreIndicador;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_indicador", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIndicador;

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
     * Set descripcionIndicador
     *
     * @param string $descripcionIndicador
     * @return Indicador
     */
    public function setDescripcionIndicador($descripcionIndicador)
    {
        $this->descripcionIndicador = $descripcionIndicador;

        return $this;
    }

    /**
     * Get descripcionIndicador
     *
     * @return string 
     */
    public function getDescripcionIndicador()
    {
        return $this->descripcionIndicador;
    }

    /**
     * Set tipoIndicador
     *
     * @param string $tipoIndicador
     * @return Indicador
     */
    public function setTipoIndicador($tipoIndicador)
    {
        $this->tipoIndicador = $tipoIndicador;

        return $this;
    }

    /**
     * Get tipoIndicador
     *
     * @return string 
     */
    public function getTipoIndicador()
    {
        return $this->tipoIndicador;
    }

    /**
     * Set nombreIndicador
     *
     * @param string $nombreIndicador
     * @return Indicador
     */
    public function setNombreIndicador($nombreIndicador)
    {
        $this->nombreIndicador = $nombreIndicador;

        return $this;
    }

    /**
     * Get nombreIndicador
     *
     * @return string 
     */
    public function getNombreIndicador()
    {
        return $this->nombreIndicador;
    }

    /**
     * Get idIndicador
     *
     * @return integer 
     */
    public function getIdIndicador()
    {
        return $this->idIndicador;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Indicador
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
