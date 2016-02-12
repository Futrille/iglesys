<?php

namespace Iglesys\Bundle\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="direcciones", indexes={@ORM\Index(name="fk_DIRECCIONES_MUNICIPIOS1_idx", columns={"MCP_ID"}), @ORM\Index(name="fk_DIRECCIONES_ESTADOS1_idx", columns={"EDO_ID"}), @ORM\Index(name="fk_DIRECCIONES_PAISES1_idx", columns={"PAI_ID"})})
 * @ORM\Entity
 */
class Direccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DIR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_URBANIZACION", type="string", length=100, nullable=true)
     */
    private $urbanizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_SECTOR", type="string", length=100, nullable=true)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_CALLE", type="string", length=100, nullable=true)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_CASA", type="string", length=100, nullable=true)
     */
    private $casa;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_PISO", type="string", length=100, nullable=true)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_DIRECCION", type="string", length=2000, nullable=true)
     */
    private $direccion;

    /**
     * @var Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EDO_ID", referencedColumnName="EDO_ID")
     * })
     */
    private $estado;

    /**
     * @var Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MCP_ID", referencedColumnName="MCP_ID")
     * })
     */
    private $municipio;

    /**
     * @var Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PAI_ID", referencedColumnName="PAI_ID")
     * })
     */
    private $pais;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Lideres", mappedBy="dir")
     */
    private $lideres;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Persona", mappedBy="direcciones")
     */
    private $personas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lideres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

