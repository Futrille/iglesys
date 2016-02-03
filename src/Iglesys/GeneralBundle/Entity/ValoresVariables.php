<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValoresVariables
 *
 * @ORM\Table(name="valores_variables")
 * @ORM\Entity
 */
class ValoresVariables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="VVA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vvaId;

    /**
     * @var string
     *
     * @ORM\Column(name="VVA_CODIGO", type="string", length=20, nullable=false)
     */
    private $vvaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="VVA_VALOR", type="string", length=20, nullable=false)
     */
    private $vvaValor;

    /**
     * @var string
     *
     * @ORM\Column(name="VVA_NOMBRE", type="string", length=100, nullable=false)
     */
    private $vvaNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="VVA_ORDEN", type="integer", nullable=false)
     */
    private $vvaOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="VVA_DESCRIPCION", type="string", length=500, nullable=false)
     */
    private $vvaDescripcion;


}

