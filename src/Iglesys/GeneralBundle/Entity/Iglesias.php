<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iglesias
 *
 * @ORM\Table(name="iglesias", indexes={@ORM\Index(name="fk_IGLESIAS_PAISES1_idx", columns={"PAI_ID"}), @ORM\Index(name="fk_IGLESIAS_VALORES_VARIABLES1_idx", columns={"VVA_IDESTATUS"})})
 * @ORM\Entity
 */
class Iglesias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IGL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iglId;

    /**
     * @var integer
     *
     * @ORM\Column(name="IGL_IDPADRE", type="integer", nullable=true)
     */
    private $iglIdpadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IGL_ESTATUS", type="integer", nullable=false)
     */
    private $iglEstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="IGL_NOMBRE", type="string", length=100, nullable=false)
     */
    private $iglNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="IGL_ABREVIACION", type="string", length=10, nullable=false)
     */
    private $iglAbreviacion;

    /**
     * @var string
     *
     * @ORM\Column(name="IGL_WEB", type="string", length=100, nullable=true)
     */
    private $iglWeb;

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
     * @var \ValoresVariables
     *
     * @ORM\ManyToOne(targetEntity="ValoresVariables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VVA_IDESTATUS", referencedColumnName="VVA_ID")
     * })
     */
    private $vvaestatus;


}

