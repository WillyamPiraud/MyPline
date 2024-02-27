<?php

namespace App\Entity;

use App\Repository\CalendrierEvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalendrierEvenementRepository::class)]
class CalendrierEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $evenement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $jour_evenement = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?bool $valide = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fait_le = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): static
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getJourEvenement(): ?\DateTimeInterface
    {
        return $this->jour_evenement;
    }

    public function setJourEvenement(\DateTimeInterface $jour_evenement): static
    {
        $this->jour_evenement = $jour_evenement;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function isValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getFaitLe(): ?\DateTimeInterface
    {
        return $this->fait_le;
    }

    public function setFaitLe(?\DateTimeInterface $fait_le): static
    {
        $this->fait_le = $fait_le;

        return $this;
    }
}
