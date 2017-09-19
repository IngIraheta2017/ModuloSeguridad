<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoriaproyecto
 *
 * @ORM\Table(name="categoriaProyecto", indexes={@ORM\Index(name="FK_Association_3", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Categoriaproyecto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_categoria", type="string", length=254, nullable=true)
     */
    private $nombreCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_categoria", type="string", length=254, nullable=true)
     */
    private $descripcionCategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoriaProyecto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoriaproyecto;

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
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     * @return Categoriaproyecto
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string 
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set descripcionCategoria
     *
     * @param string $descripcionCategoria
     * @return Categoriaproyecto
     */
    public function setDescripcionCategoria($descripcionCategoria)
    {
        $this->descripcionCategoria = $descripcionCategoria;

        return $this;
    }

    /**
     * Get descripcionCategoria
     *
     * @return string 
     */
    public function getDescripcionCategoria()
    {
        return $this->descripcionCategoria;
    }

    /**
     * Get idCategoriaproyecto
     *
     * @return integer 
     */
    public function getIdCategoriaproyecto()
    {
        return $this->idCategoriaproyecto;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Categoriaproyecto
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
