<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametrosGenerales
 *
 * @ORM\Table(name="parametros_generales")
 * @ORM\Entity
 */
class ParametrosGenerales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PMT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pmtId;

    /**
     * @var string
     *
     * @ORM\Column(name="PMT_CODIGO", type="string", length=20, nullable=false)
     */
    private $pmtCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="PMT_VALOR", type="string", length=250, nullable=false)
     */
    private $pmtValor;

    /**
     * @var string
     *
     * @ORM\Column(name="PMT_DESCRIPCION", type="string", length=500, nullable=false)
     */
    private $pmtDescripcion;


}

