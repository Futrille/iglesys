<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefonos
 *
 * @ORM\Table(name="telefonos", indexes={@ORM\Index(name="fk_TELEFONOS_PAISES1_idx", columns={"PAI_ID"}), @ORM\Index(name="fk_TELEFONOS_VALORESVARIABLES1_idx", columns={"VVA_IDTIPO"})})
 * @ORM\Entity
 */
class Telefonos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TLF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tlfId;

    /**
     * @var integer
     *
     * @ORM\Column(name="TLF_TIPO", type="integer", nullable=false)
     */
    private $tlfTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="TLF_NUMEROTELEFONICO", type="string", length=20, nullable=false)
     */
    private $tlfNumerotelefonico;

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
     *   @ORM\JoinColumn(name="VVA_IDTIPO", referencedColumnName="VVA_ID")
     * })
     */
    private $vvatipo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Lideres", mappedBy="tlf")
     */
    private $lid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personas", mappedBy="tlf")
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

