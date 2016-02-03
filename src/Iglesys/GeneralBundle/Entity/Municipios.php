<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipios
 *
 * @ORM\Table(name="municipios", indexes={@ORM\Index(name="fk_MUNICIPIOS_ESTADOS1_idx", columns={"EDO_ID"})})
 * @ORM\Entity
 */
class Municipios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MCP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mcpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MCP_NOMBRE", type="integer", nullable=false)
     */
    private $mcpNombre;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EDO_ID", referencedColumnName="EDO_ID")
     * })
     */
    private $edo;


}

