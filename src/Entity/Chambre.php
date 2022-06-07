<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numero;

    #[ORM\ManyToOne(targetEntity: Typechambre::class, inversedBy: 'chambres')]
    #[ORM\JoinColumn(nullable: false)]
    private $type;

    #[ORM\Column(type: 'boolean')]
    private $isDisponible;

    #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: 'chambre')]
    private $reservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getType(): ?Typechambre
    {
        return $this->type;
    }

    public function setType(?Typechambre $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function isIsDisponible(): ?bool
    {
        return $this->isDisponible;
    }

    public function setIsDisponible(bool $isDisponible): self
    {
        $this->isDisponible = $isDisponible;

        return $this;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
}
