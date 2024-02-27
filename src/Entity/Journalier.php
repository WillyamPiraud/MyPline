<?php

namespace App\Entity;

use App\Repository\JournalierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JournalierRepository::class)]
class Journalier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_journalier = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $temps_task = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?bool $statut = null;

    #[ORM\Column]
    private ?bool $affilier = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $id_zoom = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_precis = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu_rdv = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $horraire = null;

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

    public function getDateJournalier(): ?\DateTimeInterface
    {
        return $this->date_journalier;
    }

    public function setDateJournalier(\DateTimeInterface $date_journalier): static
    {
        $this->date_journalier = $date_journalier;

        return $this;
    }

    public function getTempsTask(): ?\DateTimeInterface
    {
        return $this->temps_task;
    }

    public function setTempsTask(\DateTimeInterface $temps_task): static
    {
        $this->temps_task = $temps_task;

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

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function isAffilier(): ?bool
    {
        return $this->affilier;
    }

    public function setAffilier(bool $affilier): static
    {
        $this->affilier = $affilier;

        return $this;
    }

    public function getIdZoom(): ?string
    {
        return $this->id_zoom;
    }

    public function setIdZoom(?string $id_zoom): static
    {
        $this->id_zoom = $id_zoom;

        return $this;
    }

    public function getIdPrecis(): ?int
    {
        return $this->id_precis;
    }

    public function setIdPrecis(?int $id_precis): static
    {
        $this->id_precis = $id_precis;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getLieuRdv(): ?string
    {
        return $this->lieu_rdv;
    }

    public function setLieuRdv(?string $lieu_rdv): static
    {
        $this->lieu_rdv = $lieu_rdv;

        return $this;
    }

    public function getHorraire(): ?\DateTimeInterface
    {
        return $this->horraire;
    }

    public function setHorraire(?\DateTimeInterface $horraire): static
    {
        $this->horraire = $horraire;

        return $this;
    }
}
