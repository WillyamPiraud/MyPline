<?php

namespace App\Entity;

use App\Repository\MesLoisirsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MesLoisirsRepository::class)]
class MesLoisirs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $objet = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $temps_prevue = null;

    #[ORM\Column(length: 255)]
    private ?string $frequence = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre_action = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $jour_recurrence = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $type_loisir = null;

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

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): static
    {
        $this->objet = $objet;

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

    public function setNombreAction(?int $nombre_action): static
    {
        $this->nombre_action = $nombre_action;

        return $this;
    }

    public function getJourRecurrence(): ?\DateTimeInterface
    {
        return $this->jour_recurrence;
    }

    public function setJourRecurrence(\DateTimeInterface $jour_recurrence): static
    {
        $this->jour_recurrence = $jour_recurrence;

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

    public function getTypeLoisir(): ?string
    {
        return $this->type_loisir;
    }

    public function setTypeLoisir(string $type_loisir): static
    {
        $this->type_loisir = $type_loisir;

        return $this;
    }
}
