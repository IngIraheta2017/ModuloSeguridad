<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permiso", indexes={@ORM\Index(name="FK_Association_14", columns={"id_rol"}), @ORM\Index(name="FK_Association_15", columns={"id_menuItem"})})
 * @ORM\Entity
 */
class Permiso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_permiso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermiso;

    /**
     * @var \CidesBundle\Entity\Menuitem
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Menuitem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_menuItem", referencedColumnName="id_menuItem")
     * })
     */
    private $idMenuitem;

    /**
     * @var \CidesBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id_rol")
     * })
     */
    private $idRol;
    


    /**
     * Get idPermiso
     *
     * @return integer
     */
    public function getIdPermiso()
    {
        return $this->idPermiso;
    }

    /**
     * Set idMenuitem
     *
     * @param \CidesBundle\Entity\Menuitem $idMenuitem
     * @return Permiso
     */
    public function setIdMenuitem(\CidesBundle\Entity\Menuitem $idMenuitem = null)
    {
        $this->idMenuitem = $idMenuitem;

        return $this;
    }

    /**
     * Get idMenuitem
     *
     * @return \CidesBundle\Entity\Menuitem
     */
    public function getIdMenuitem()
    {
        return $this->idMenuitem;
    }

    /**
     * Set idRol
     *
     * @param \CidesBundle\Entity\Rol $idRol
     * @return Permiso
     */
    public function setIdRol(\CidesBundle\Entity\Rol $idRol = null)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \CidesBundle\Entity\Rol
     */
    public function getIdRol()
    {
        return $this->idRol;
    }
}
