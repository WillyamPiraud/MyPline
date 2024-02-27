<?php

namespace App\Entity;

use App\Repository\PlanActionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanActionRepository::class)]
class PlanAction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $id_objectif = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $temps_prevu = null;

    #[ORM\Column(length: 255)]
    private ?string $frequence = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_realisation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $semaine = null;

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

    public function getIdObjectif(): ?int
    {
        return $this->id_objectif;
    }

    public function setIdObjectif(int $id_objectif): static
    {
        $this->id_objectif = $id_objectif;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTempsPrevu(): ?\DateTimeInterface
    {
        return $this->temps_prevu;
    }

    public function setTempsPrevu(\DateTimeInterface $temps_prevu): static
    {
        $this->temps_prevu = $temps_prevu;

        return $this;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(string $frequence): static
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getDateRealisation(): ?\DateTimeInterface
    {
        return $this->date_realisation;
    }

    public function setDateRealisation(?\DateTimeInterface $date_realisation): static
    {
        $this->date_realisation = $date_realisation;

        return $this;
    }

    public function getSemaine(): ?string
    {
        return $this->semaine;
    }

    public function setSemaine(?string $semaine): static
    {
        $this->semaine = $semaine;

        return $this;
    }
}
