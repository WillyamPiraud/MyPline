<?php

namespace App\Entity;

use App\Repository\ActiviteProfessionnelleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteProfessionnelleRepository::class)]
class ActiviteProfessionnelle
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
}
