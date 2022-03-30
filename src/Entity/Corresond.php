<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corresond
 *
 * @ORM\Table(name="corresond", indexes={@ORM\Index(name="id_photo", columns={"id_photo"})})
 * @ORM\Entity
 */
class Corresond
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
     * @ORM\Column(name="id_photo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPhoto;

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function getIdPhoto(): ?int
    {
        return $this->idPhoto;
    }


}
