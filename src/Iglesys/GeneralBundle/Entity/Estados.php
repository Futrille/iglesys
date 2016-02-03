<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 *
 * @ORM\Table(name="estados", indexes={@ORM\Index(name="fk_ESTADOS_PAISES_idx", columns={"PAI_ID"})})
 * @ORM\Entity
 */
class Estados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="EDO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $edoId;

    /**
     * @var string
     *
     * @ORM\Column(name="EDO_NOMBRE", type="string", length=100, nullable=false)
     */
    private $edoNombre;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PAI_ID", referencedColumnName="PAI_ID")
     * })
     */
    private $pai;


}

