<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represente
 *
 * @ORM\Table(name="represente", indexes={@ORM\Index(name="id_photo", columns={"id_photo"})})
 * @ORM\Entity
 */
class Represente
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
     * @ORM\Column(name="id_photo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPhoto;

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function getIdPhoto(): ?int
    {
        return $this->idPhoto;
    }


}
