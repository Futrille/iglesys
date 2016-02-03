<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direcciones
 *
 * @ORM\Table(name="direcciones", indexes={@ORM\Index(name="fk_DIRECCIONES_MUNICIPIOS1_idx", columns={"MCP_ID"}), @ORM\Index(name="fk_DIRECCIONES_ESTADOS1_idx", columns={"EDO_ID"}), @ORM\Index(name="fk_DIRECCIONES_PAISES1_idx", columns={"PAI_ID"})})
 * @ORM\Entity
 */
class Direcciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DIR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dirId;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_URBANIZACION", type="string", length=100, nullable=true)
     */
    private $dirUrbanizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_SECTOR", type="string", length=100, nullable=true)
     */
    private $dirSector;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_CALLE", type="string", length=100, nullable=true)
     */
    private $dirCalle;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_CASA", type="string", length=100, nullable=true)
     */
    private $dirCasa;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_PISO", type="string", length=100, nullable=true)
     */
    private $dirPiso;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_DIRECCION", type="string", length=2000, nullable=true)
     */
    private $dirDireccion;

    /**
     * @var \Municipios
     *
     * @ORM\ManyToOne(targetEntity="Municipios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MCP_ID", referencedColumnName="MCP_ID")
     * })
     */
    private $mcp;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EDO_ID", referencedColumnName="EDO_ID")
     * })
     */
    private $edo;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PAI_ID", referencedColumnName="PAI_ID")
     * })
     */
    private $pai;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Lideres", mappedBy="dir")
     */
    private $lid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personas", mappedBy="dir")
     */
    private $per;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->per = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

