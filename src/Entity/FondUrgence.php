<?php

namespace App\Entity;

use App\Repository\FondUrgenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FondUrgenceRepository::class)]
class FondUrgence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $montant_dispo = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $epargne_minimum = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $epargne_place = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantDispo(): ?float
    {
        return $this->montant_dispo;
    }

    public function setMontantDispo(?float $montant_dispo): static
    {
        $this->montant_dispo = $montant_dispo;

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

    public function getEpargneMinimum(): ?string
    {
        return $this->epargne_minimum;
    }

    public function setEpargneMinimum(?string $epargne_minimum): static
    {
        $this->epargne_minimum = $epargne_minimum;

        return $this;
    }

    public function getEpargnePlace(): ?string
    {
        return $this->epargne_place;
    }

    public function setEpargnePlace(?string $epargne_place): static
    {
        $this->epargne_place = $epargne_place;

        return $this;
    }
}
