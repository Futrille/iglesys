<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lideres
 *
 * @ORM\Table(name="lideres", indexes={@ORM\Index(name="fk_LIDERES_IGLESIAS1_idx", columns={"IGL_ID"}), @ORM\Index(name="fk_LIDERES_VALORES_VARIABLES1_idx", columns={"VVA_IDESTADOCIVIL"}), @ORM\Index(name="fk_LIDERES_VALORES_VARIABLES2_idx", columns={"VVA_IDTIENEVEHICULO"})})
 * @ORM\Entity
 */
class Lideres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="LID_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lidId;

    /**
     * @var integer
     *
     * @ORM\Column(name="VVA_IDESTATUS", type="integer", nullable=false)
     */
    private $vvaIdestatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="LID_ESTATUS", type="integer", nullable=false)
     */
    private $lidEstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="PMI_CODIGO", type="string", length=50, nullable=true)
     */
    private $pmiCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="LID_CEDULA", type="string", length=20, nullable=false)
     */
    private $lidCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="LID_NOMBRE", type="string", length=100, nullable=false)
     */
    private $lidNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="LID_APELLIDO", type="string", length=100, nullable=false)
     */
    private $lidApellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="LID_FECHANACIMIENTO", type="integer", nullable=false)
     */
    private $lidFechanacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="LID_SEXO", type="string", length=1, nullable=false)
     */
    private $lidSexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="LID_ESTADOCIVIL", type="integer", nullable=false)
     */
    private $lidEstadocivil;

    /**
     * @var integer
     *
     * @ORM\Column(name="LID_FECHALIDERAZGO", type="integer", nullable=true)
     */
    private $lidFechaliderazgo;

    /**
     * @var string
     *
     * @ORM\Column(name="LID_URLFOTO", type="string", length=100, nullable=true)
     */
    private $lidUrlfoto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LID_TIENEVEHICULO", type="boolean", nullable=false)
     */
    private $lidTienevehiculo;

    /**
     * @var \Iglesias
     *
     * @ORM\ManyToOne(targetEntity="Iglesias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IGL_ID", referencedColumnName="IGL_ID")
     * })
     */
    private $igl;

    /**
     * @var \ValoresVariables
     *
     * @ORM\ManyToOne(targetEntity="ValoresVariables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VVA_IDESTADOCIVIL", referencedColumnName="VVA_ID")
     * })
     */
    private $vvaestadocivil;

    /**
     * @var \ValoresVariables
     *
     * @ORM\ManyToOne(targetEntity="ValoresVariables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VVA_IDTIENEVEHICULO", referencedColumnName="VVA_ID")
     * })
     */
    private $vvatienevehiculo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Direcciones", inversedBy="lid")
     * @ORM\JoinTable(name="lideres_has_direcciones",
     *   joinColumns={
     *     @ORM\JoinColumn(name="LID_ID", referencedColumnName="LID_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="DIR_ID", referencedColumnName="DIR_ID")
     *   }
     * )
     */
    private $dir;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Telefonos", inversedBy="lid")
     * @ORM\JoinTable(name="lideres_has_telefonos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="LID_ID", referencedColumnName="LID_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="TLF_ID", referencedColumnName="TLF_ID")
     *   }
     * )
     */
    private $tlf;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dir = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tlf = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

