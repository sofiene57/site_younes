<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detient
 *
 * @ORM\Table(name="detient", indexes={@ORM\Index(name="id_diplome", columns={"id_diplome"})})
 * @ORM\Entity
 */
class Detient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCoach;

    /**
     * @var int
     *
     * @ORM\Column(name="id_diplome", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDiplome;

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function getIdDiplome(): ?int
    {
        return $this->idDiplome;
    }


}
