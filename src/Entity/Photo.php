<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_photo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_photo", type="string", length=50, nullable=true)
     */
    private $nomPhoto;

    public function getIdPhoto(): ?int
    {
        return $this->idPhoto;
    }

    public function getNomPhoto(): ?string
    {
        return $this->nomPhoto;
    }

    public function setNomPhoto(?string $nomPhoto): self
    {
        $this->nomPhoto = $nomPhoto;

        return $this;
    }


}
