<?php

namespace App\Entity;

use App\Repository\ObligationFamilialeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObligationFamilialeRepository::class)]
class ObligationFamiliale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $intitule = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_obligation = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): static
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getLundi(): ?\DateTimeInterface
    {
        return $this->lundi;
    }

    public function setLundi(\DateTimeInterface $lundi): static
    {
        $this->lundi = $lundi;

        return $this;
    }

    public function getMardi(): ?\DateTimeInterface
    {
        return $this->mardi;
    }

    public function setMardi(\DateTimeInterface $mardi): static
    {
        $this->mardi = $mardi;

        return $this;
    }

    public function getMercredi(): ?\DateTimeInterface
    {
        return $this->mercredi;
    }

    public function setMercredi(\DateTimeInterface $mercredi): static
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    public function getJeudi(): ?\DateTimeInterface
    {
        return $this->jeudi;
    }

    public function setJeudi(\DateTimeInterface $jeudi): static
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    public function getVendredi(): ?\DateTimeInterface
    {
        return $this->vendredi;
    }

    public function setVendredi(\DateTimeInterface $vendredi): static
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    public function getSamedi(): ?\DateTimeInterface
    {
        return $this->samedi;
    }

    public function setSamedi(\DateTimeInterface $samedi): static
    {
        $this->samedi = $samedi;

        return $this;
    }

    public function getDimanche(): ?\DateTimeInterface
    {
        return $this->dimanche;
    }

    public function setDimanche(\DateTimeInterface $dimanche): static
    {
        $this->dimanche = $dimanche;

        return $this;
    }

    public function getIdObligation(): ?string
    {
        return $this->id_obligation;
    }

    public function setIdObligation(?string $id_obligation): static
    {
        $this->id_obligation = $id_obligation;

        return $this;
    }
}
