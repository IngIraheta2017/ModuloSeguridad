<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion", indexes={@ORM\Index(name="FK_Association_19", columns={"id_proyecto"}), @ORM\Index(name="FK_Association_20", columns={"id_user"})})
 * @ORM\Entity
 */
class Asignacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_asignacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsignacion;

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
     * @var \CidesBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;



    /**
     * Get idAsignacion
     *
     * @return integer 
     */
    public function getIdAsignacion()
    {
        return $this->idAsignacion;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Asignacion
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
     * Set idUser
     *
     * @param \CidesBundle\Entity\User $idUser
     * @return Asignacion
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
}
