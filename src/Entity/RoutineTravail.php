<?php

namespace App\Entity;

use App\Repository\RoutineTravailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoutineTravailRepository::class)]
class RoutineTravail
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
    private ?\DateTimeInterface $temps_prevue = null;

    #[ORM\Column(length: 100)]
    private ?string $frequence = null;

    #[ORM\Column]
    private ?int $nombre_action = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $premier_jour = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_type = null;

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

    public function getTempsPrevue(): ?\DateTimeInterface
    {
        return $this->temps_prevue;
    }

    public function setTempsPrevue(\DateTimeInterface $temps_prevue): static
    {
        $this->temps_prevue = $temps_prevue;

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

    public function getNombreAction(): ?int
    {
        return $this->nombre_action;
    }

    public function setNombreAction(int $nombre_action): static
    {
        $this->nombre_action = $nombre_action;

        return $this;
    }

    public function getPremierJour(): ?\DateTimeInterface
    {
        return $this->premier_jour;
    }

    public function setPremierJour(\DateTimeInterface $premier_jour): static
    {
        $this->premier_jour = $premier_jour;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getIdType(): ?int
    {
        return $this->id_type;
    }

    public function setIdType(?int $id_type): static
    {
        $this->id_type = $id_type;

        return $this;
    }
}
