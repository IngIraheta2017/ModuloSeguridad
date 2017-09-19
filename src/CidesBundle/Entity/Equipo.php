<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo", indexes={@ORM\Index(name="FK_Association_23", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Equipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_equipo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipo;

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
     * Get idEquipo
     *
     * @return integer 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Equipo
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
