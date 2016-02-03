<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="fk_USUARIOS_VALORESVARIABLES1_idx", columns={"VVA_IDESTATUS"}), @ORM\Index(name="fk_USUARIOS_LIDERES1_idx", columns={"LID_ID"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USU_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="USU_ESTATUS", type="integer", nullable=false)
     */
    private $usuEstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="USU_LOGIN", type="string", length=30, nullable=false)
     */
    private $usuLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="USU_PASSWORD", type="string", length=250, nullable=false)
     */
    private $usuPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="USU_NOMBRE", type="string", length=50, nullable=false)
     */
    private $usuNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="USU_APELLIDO", type="string", length=50, nullable=false)
     */
    private $usuApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="USU_EMAIL", type="string", length=100, nullable=false)
     */
    private $usuEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="USU_FECHAEXPIRACION", type="integer", nullable=false)
     */
    private $usuFechaexpiracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="USU_FECHAEXPIRACIONPASSWORD", type="integer", nullable=false)
     */
    private $usuFechaexpiracionpassword;

    /**
     * @var \ValoresVariables
     *
     * @ORM\ManyToOne(targetEntity="ValoresVariables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VVA_IDESTATUS", referencedColumnName="VVA_ID")
     * })
     */
    private $vvaestatus;

    /**
     * @var \Lideres
     *
     * @ORM\ManyToOne(targetEntity="Lideres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LID_ID", referencedColumnName="LID_ID")
     * })
     */
    private $lid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="usu")
     * @ORM\JoinTable(name="usuarios_has_roles",
     *   joinColumns={
     *     @ORM\JoinColumn(name="USU_ID", referencedColumnName="USU_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ROL_ID", referencedColumnName="ROL_ID")
     *   }
     * )
     */
    private $rol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rol = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

