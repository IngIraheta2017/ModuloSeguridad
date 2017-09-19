<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tieneasignado
 *
 * @ORM\Table(name="tieneAsignado", indexes={@ORM\Index(name="FK_Association_111", columns={"id_recurso"})})
 * @ORM\Entity
 */
class Tieneasignado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_actividad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_recurso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idRecurso;



    /**
     * Set idActividad
     *
     * @param integer $idActividad
     * @return Tieneasignado
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
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
     * Set idRecurso
     *
     * @param integer $idRecurso
     * @return Tieneasignado
     */
    public function setIdRecurso($idRecurso)
    {
        $this->idRecurso = $idRecurso;

        return $this;
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
}
