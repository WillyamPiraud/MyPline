<?php

namespace App\Entity;

use App\Repository\RythmeVitalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RythmeVitalRepository::class)]
class RythmeVital
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 100)]
    private ?string $type_obligation = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $duree_besoin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getTypeObligation(): ?string
    {
        return $this->type_obligation;
    }

    public function setTypeObligation(string $type_obligation): static
    {
        $this->type_obligation = $type_obligation;

        return $this;
    }

    public function getDureeBesoin(): ?\DateTimeInterface
    {
        return $this->duree_besoin;
    }

    public function setDureeBesoin(\DateTimeInterface $duree_besoin): static
    {
        $this->duree_besoin = $duree_besoin;

        return $this;
    }
}
