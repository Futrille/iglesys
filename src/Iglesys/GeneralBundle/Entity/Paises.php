<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 *
 * @ORM\Table(name="paises")
 * @ORM\Entity
 */
class Paises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PAI_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paiId;

    /**
     * @var string
     *
     * @ORM\Column(name="PAI_NOMBRE", type="string", length=100, nullable=false)
     */
    private $paiNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="PAI_CODIGOISO", type="string", length=3, nullable=false)
     */
    private $paiCodigoiso;

    /**
     * @var string
     *
     * @ORM\Column(name="PAI_ABREVIATURA", type="string", length=2, nullable=false)
     */
    private $paiAbreviatura;


}

