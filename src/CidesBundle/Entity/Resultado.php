<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultado
 *
 * @ORM\Table(name="resultado", indexes={@ORM\Index(name="FK_Association_7", columns={"id_indicador"})})
 * @ORM\Entity
 */
class Resultado
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_resultados", type="string", length=254, nullable=true)
     */
    private $descripcionResultados;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_resultado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResultado;

    /**
     * @var \CidesBundle\Entity\Indicador
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Indicador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_indicador", referencedColumnName="id_indicador")
     * })
     */
    private $idIndicador;



    /**
     * Set descripcionResultados
     *
     * @param string $descripcionResultados
     * @return Resultado
     */
    public function setDescripcionResultados($descripcionResultados)
    {
        $this->descripcionResultados = $descripcionResultados;

        return $this;
    }

    /**
     * Get descripcionResultados
     *
     * @return string 
     */
    public function getDescripcionResultados()
    {
        return $this->descripcionResultados;
    }

    /**
     * Get idResultado
     *
     * @return integer 
     */
    public function getIdResultado()
    {
        return $this->idResultado;
    }

    /**
     * Set idIndicador
     *
     * @param \CidesBundle\Entity\Indicador $idIndicador
     * @return Resultado
     */
    public function setIdIndicador(\CidesBundle\Entity\Indicador $idIndicador = null)
    {
        $this->idIndicador = $idIndicador;

        return $this;
    }

    /**
     * Get idIndicador
     *
     * @return \CidesBundle\Entity\Indicador 
     */
    public function getIdIndicador()
    {
        return $this->idIndicador;
    }
}
