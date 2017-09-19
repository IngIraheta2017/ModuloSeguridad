<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FK_Association_21", columns={"id_equipo"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreCompleto", type="string", length=255, nullable=false)
     */
    private $nombrecompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="cargoInstitucional", type="string", length=255, nullable=false)
     */
    private $cargoinstitucional;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facultadPertenece", type="string", length=255, nullable=false)
     */
    private $facultadpertenece;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=50, nullable=false)
     */
    private $idioma;

    /**
     * @var string
     *
     * @ORM\Column(name="preparacionAcademica", type="string", length=255, nullable=false)
     */
    private $preparacionacademica;

    /**
     * @var string
     *
     * @ORM\Column(name="capacitacion", type="text", length=65535, nullable=false)
     */
    private $capacitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ponencia", type="string", length=255, nullable=false)
     */
    private $ponencia;

    /**
     * @var string
     *
     * @ORM\Column(name="publicacion", type="string", length=255, nullable=false)
     */
    private $publicacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAgree", type="boolean", nullable=false)
     */
    private $isagree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creatAt", type="date", nullable=false)
     */
    private $creatat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateAt", type="date", nullable=false)
     */
    private $updateat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \CidesBundle\Entity\Equipo
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo", referencedColumnName="id_equipo")
     * })
     */
    private $idEquipo;



    /**
     * Set nombrecompleto
     *
     * @param string $nombrecompleto
     * @return User
     */
    public function setNombrecompleto($nombrecompleto)
    {
        $this->nombrecompleto = $nombrecompleto;

        return $this;
    }

    /**
     * Get nombrecompleto
     *
     * @return string 
     */
    public function getNombrecompleto()
    {
        return $this->nombrecompleto;
    }

    /**
     * Set cargoinstitucional
     *
     * @param string $cargoinstitucional
     * @return User
     */
    public function setCargoinstitucional($cargoinstitucional)
    {
        $this->cargoinstitucional = $cargoinstitucional;

        return $this;
    }

    /**
     * Get cargoinstitucional
     *
     * @return string 
     */
    public function getCargoinstitucional()
    {
        return $this->cargoinstitucional;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set facultadpertenece
     *
     * @param string $facultadpertenece
     * @return User
     */
    public function setFacultadpertenece($facultadpertenece)
    {
        $this->facultadpertenece = $facultadpertenece;

        return $this;
    }

    /**
     * Get facultadpertenece
     *
     * @return string 
     */
    public function getFacultadpertenece()
    {
        return $this->facultadpertenece;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return User
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set preparacionacademica
     *
     * @param string $preparacionacademica
     * @return User
     */
    public function setPreparacionacademica($preparacionacademica)
    {
        $this->preparacionacademica = $preparacionacademica;

        return $this;
    }

    /**
     * Get preparacionacademica
     *
     * @return string 
     */
    public function getPreparacionacademica()
    {
        return $this->preparacionacademica;
    }

    /**
     * Set capacitacion
     *
     * @param string $capacitacion
     * @return User
     */
    public function setCapacitacion($capacitacion)
    {
        $this->capacitacion = $capacitacion;

        return $this;
    }

    /**
     * Get capacitacion
     *
     * @return string 
     */
    public function getCapacitacion()
    {
        return $this->capacitacion;
    }

    /**
     * Set ponencia
     *
     * @param string $ponencia
     * @return User
     */
    public function setPonencia($ponencia)
    {
        $this->ponencia = $ponencia;

        return $this;
    }

    /**
     * Get ponencia
     *
     * @return string 
     */
    public function getPonencia()
    {
        return $this->ponencia;
    }

    /**
     * Set publicacion
     *
     * @param string $publicacion
     * @return User
     */
    public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;

        return $this;
    }

    /**
     * Get publicacion
     *
     * @return string 
     */
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * Set isagree
     *
     * @param boolean $isagree
     * @return User
     */
    public function setIsagree($isagree)
    {
        $this->isagree = $isagree;

        return $this;
    }

    /**
     * Get isagree
     *
     * @return boolean 
     */
    public function getIsagree()
    {
        return $this->isagree;
    }

    /**
     * Set creatat
     *
     * @param \DateTime $creatat
     * @return User
     */
    public function setCreatat($creatat)
    {
        $this->creatat = $creatat;

        return $this;
    }

    /**
     * Get creatat
     *
     * @return \DateTime 
     */
    public function getCreatat()
    {
        return $this->creatat;
    }

    /**
     * Set updateat
     *
     * @param \DateTime $updateat
     * @return User
     */
    public function setUpdateat($updateat)
    {
        $this->updateat = $updateat;

        return $this;
    }

    /**
     * Get updateat
     *
     * @return \DateTime 
     */
    public function getUpdateat()
    {
        return $this->updateat;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idEquipo
     *
     * @param \CidesBundle\Entity\Equipo $idEquipo
     * @return User
     */
    public function setIdEquipo(\CidesBundle\Entity\Equipo $idEquipo = null)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return \CidesBundle\Entity\Equipo 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}
