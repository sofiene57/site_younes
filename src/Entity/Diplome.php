<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table(name="diplome")
 * @ORM\Entity
 */
class Diplome
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_diplome", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_diplome", type="string", length=50, nullable=true)
     */
    private $nomDiplome;

    public function getIdDiplome(): ?int
    {
        return $this->idDiplome;
    }

    public function getNomDiplome(): ?string
    {
        return $this->nomDiplome;
    }

    public function setNomDiplome(?string $nomDiplome): self
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }


}
