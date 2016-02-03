<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuraciones
 *
 * @ORM\Table(name="configuraciones")
 * @ORM\Entity
 */
class Configuraciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CON_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conId;

    /**
     * @var string
     *
     * @ORM\Column(name="CON_CODIGO", type="string", length=20, nullable=false)
     */
    private $conCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="CON_VALOR", type="string", length=20, nullable=false)
     */
    private $conValor;

    /**
     * @var string
     *
     * @ORM\Column(name="CON_NOMBRE", type="string", length=45, nullable=false)
     */
    private $conNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="CON_ORDEN", type="integer", nullable=false)
     */
    private $conOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="CON_DESCRIPCION", type="string", length=500, nullable=false)
     */
    private $conDescripcion;


}

