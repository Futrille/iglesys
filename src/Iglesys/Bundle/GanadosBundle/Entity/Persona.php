<?php

namespace Iglesys\Bundle\GanadosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Iglesys\Bundle\GeneralBundle\Entity\ValorVariable;
use Iglesys\Bundle\GeneralBundle\Entity\Pais;
use Iglesys\Bundle\GeneralBundle\Entity\Iglesia;

/**
 * Persona
 *
 * @ORM\Table(name="personas", indexes={@ORM\Index(name="fk_PERSONAS_PAISES1_idx", columns={"PAI_ID"}), @ORM\Index(name="fk_PERSONAS_VALORESVARIABLES1_idx", columns={"VVA_IDESTATUS"}), @ORM\Index(name="fk_PERSONAS_VALORESVARIABLES2_idx", columns={"VVA_IDESCOMPLETO"}), @ORM\Index(name="fk_PERSONAS_IGLESIAS1_idx", columns={"IGL_ID"})})
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PER_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="PER_ESTATUS", type="integer", nullable=false)
     */
    private $estatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="PER_ESCOMPLETO", type="integer", nullable=false)
     */
    private $esCompleto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PER_FECHANACIMIENTO", type="integer", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="PER_CEDULA", type="string", length=20, nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="PER_NACIONALIDAD", type="string", length=1, nullable=false)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="PER_NOMBRES", type="string", length=100, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="PER_APELLIDOS", type="string", length=100, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="PER_SEXO", type="string", nullable=false)
     */
    private $sexo;

    /**
     * @var \Iglesys\Bundle\GeneralBundle\Entity\Iglesia
     *
     * @ORM\ManyToOne(targetEntity="\Iglesys\Bundle\GeneralBundle\Entity\Iglesia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IGL_ID", referencedColumnName="IGL_ID")
     * })
     */
    private  $iglesia;

    /**
     * @var \Iglesys\Bundle\GeneralBundle\Entity\Pais
     *
     * @ORM\ManyToOne(targetEntity="\Iglesys\Bundle\GeneralBundle\Entity\Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PAI_ID", referencedColumnName="PAI_ID")
     * })
     */
    private $pais;

    /**
     * @var \Iglesys\Bundle\GeneralBundle\Entity\ValorVariable
     *
     * @ORM\ManyToOne(targetEntity="\Iglesys\Bundle\GeneralBundle\Entity\ValorVariable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VVA_IDESTATUS", referencedColumnName="VVA_ID")
     * })
     */
    private $vvaEstatus;

    /**
     * @var \Iglesys\Bundle\GeneralBundle\Entity\ValorVariable
     *
     * @ORM\ManyToOne(targetEntity="\Iglesys\Bundle\GeneralBundle\Entity\ValorVariable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VVA_IDESCOMPLETO", referencedColumnName="VVA_ID")
     * })
     */
    private $vvaEscompleto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="\Iglesys\Bundle\GeneralBundle\Entity\Direccion", inversedBy="personas")
     * @ORM\JoinTable(name="personas_has_direcciones",
     *   joinColumns={
     *     @ORM\JoinColumn(name="PER_ID", referencedColumnName="PER_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="DIR_ID", referencedColumnName="DIR_ID")
     *   }
     * )
     */
    private $direcciones;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="\Iglesys\Bundle\GeneralBundle\Entity\Telefono", inversedBy="personas")
     * @ORM\JoinTable(name="personas_has_telefonos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="PER_ID", referencedColumnName="PER_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="TLF_ID", referencedColumnName="TLF_ID")
     *   }
     * )
     */
    private $telefonos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direcciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * @param int $estatus
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    }

    /**
     * @return int
     */
    public function getEsCompleto()
    {
        return $this->esCompleto;
    }

    /**
     * @param int $esCompleto
     */
    public function setEsCompleto($esCompleto)
    {
        $this->esCompleto = $esCompleto;
    }

    /**
     * @return int
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param int $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param string $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * @param string $nacionalidad
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    /**
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return Iglesia
     */
    public function getIglesia()
    {
        return $this->iglesia;
    }

    /**
     * @param Iglesia $iglesia
     */
    public function setIglesia($iglesia)
    {
        $this->iglesia = $iglesia;
    }

    /**
     * @return \Iglesys\Bundle\GeneralBundle\Entity\Pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param \Iglesys\Bundle\GeneralBundle\Entity\Pais $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return ValorVariable
     */
    public function getVvaEstatus()
    {
        return $this->vvaEstatus;
    }

    /**
     * @param ValorVariable $vvaEstatus
     */
    public function setVvaEstatus($vvaEstatus)
    {
        $this->vvaEstatus = $vvaEstatus;
    }

    /**
     * @return ValorVariable
     */
    public function getVvaEscompleto()
    {
        return $this->vvaEscompleto;
    }

    /**
     * @param ValorVariable $vvaEscompleto
     */
    public function setVvaEscompleto($vvaEscompleto)
    {
        $this->vvaEscompleto = $vvaEscompleto;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDirecciones()
    {
        return $this->direcciones;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $direcciones
     */
    public function setDirecciones($direcciones)
    {
        $this->direcciones = $direcciones;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $telefonos
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;
    }

}

