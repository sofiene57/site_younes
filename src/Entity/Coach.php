<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coach
 *
 * @ORM\Table(name="coach")
 * @ORM\Entity
 */
class Coach
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_coach", type="string", length=50, nullable=true)
     */
    private $nomCoach;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function getNomCoach(): ?string
    {
        return $this->nomCoach;
    }

    public function setNomCoach(?string $nomCoach): self
    {
        $this->nomCoach = $nomCoach;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }


}