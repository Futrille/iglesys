<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParejasMinisteriales
 *
 * @ORM\Table(name="parejas_ministeriales", indexes={@ORM\Index(name="fk_PAREJA_MINISTERIAL_LIDERES1_idx", columns={"LID_IDLIDER1"})})
 * @ORM\Entity
 */
class ParejasMinisteriales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PMI_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pmiId;

    /**
     * @var string
     *
     * @ORM\Column(name="PMI_CODIGO", type="string", length=50, nullable=true)
     */
    private $pmiCodigo;

    /**
     * @var \Lideres
     *
     * @ORM\ManyToOne(targetEntity="Lideres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LID_IDLIDER1", referencedColumnName="LID_ID")
     * })
     */
    private $lidlider1;


}

