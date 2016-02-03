<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetodosGanar
 *
 * @ORM\Table(name="metodos_ganar")
 * @ORM\Entity
 */
class MetodosGanar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MET_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metId;

    /**
     * @var string
     *
     * @ORM\Column(name="MET_NOMBRE", type="string", length=100, nullable=false)
     */
    private $metNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="MET_DESCRIPCION", type="string", length=500, nullable=false)
     */
    private $metDescripcion;


}

