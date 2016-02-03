<?php

namespace Iglesys\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ROL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rolId;

    /**
     * @var string
     *
     * @ORM\Column(name="ROL_NOMBRE", type="string", length=50, nullable=false)
     */
    private $rolNombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuarios", mappedBy="rol")
     */
    private $usu;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usu = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

