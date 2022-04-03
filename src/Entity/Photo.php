<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="id_coach", columns={"id_coach"}), @ORM\Index(name="id_service", columns={"id_service"})})
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
     * @ORM\Column(name="lien_photo", type="string", length=50, nullable=true)
     */
    private $lienPhoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_photo", type="string", length=50, nullable=true)
     */
    private $descriptionPhoto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_service", type="integer", nullable=true)
     */
    private $idService;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=true)
     */
    private $idCoach;

    public function getIdPhoto(): ?int
    {
        return $this->idPhoto;
    }

    public function getLienPhoto(): ?string
    {
        return $this->lienPhoto;
    }

    public function setLienPhoto(?string $lienPhoto): self
    {
        $this->lienPhoto = $lienPhoto;

        return $this;
    }

    public function getDescriptionPhoto(): ?string
    {
        return $this->descriptionPhoto;
    }

    public function setDescriptionPhoto(?string $descriptionPhoto): self
    {
        $this->descriptionPhoto = $descriptionPhoto;

        return $this;
    }

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function setIdService(?int $idService): self
    {
        $this->idService = $idService;

        return $this;
    }

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function setIdCoach(?int $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }


}
