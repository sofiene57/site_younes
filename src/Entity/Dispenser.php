<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dispenser
 *
 * @ORM\Table(name="dispenser", indexes={@ORM\Index(name="id_coach", columns={"id_coach"})})
 * @ORM\Entity
 */
class Dispenser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_service", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idService;

    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCoach;

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }


}
