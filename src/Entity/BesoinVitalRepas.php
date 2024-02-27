<?php

namespace App\Entity;

use App\Repository\BesoinVitalRepasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BesoinVitalRepasRepository::class)]
class BesoinVitalRepas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_dinner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_dinner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_dinner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_dinner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_dinner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_dinner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche_petit_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche_dejeuner = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche_dinner = null;

    #[ORM\Column]
    private ?int $id_besoin_vital = null;

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

    public function getLundiPetitDejeuner(): ?\DateTimeInterface
    {
        return $this->lundi_petit_dejeuner;
    }

    public function setLundiPetitDejeuner(\DateTimeInterface $lundi_petit_dejeuner): static
    {
        $this->lundi_petit_dejeuner = $lundi_petit_dejeuner;

        return $this;
    }

    public function getLundiDejeuner(): ?\DateTimeInterface
    {
        return $this->lundi_dejeuner;
    }

    public function setLundiDejeuner(\DateTimeInterface $lundi_dejeuner): static
    {
        $this->lundi_dejeuner = $lundi_dejeuner;

        return $this;
    }

    public function getLundiDinner(): ?\DateTimeInterface
    {
        return $this->lundi_dinner;
    }

    public function setLundiDinner(\DateTimeInterface $lundi_dinner): static
    {
        $this->lundi_dinner = $lundi_dinner;

        return $this;
    }

    public function getMardiPetitDejeuner(): ?\DateTimeInterface
    {
        return $this->mardi_petit_dejeuner;
    }

    public function setMardiPetitDejeuner(\DateTimeInterface $mardi_petit_dejeuner): static
    {
        $this->mardi_petit_dejeuner = $mardi_petit_dejeuner;

        return $this;
    }

    public function getMardiDejeuner(): ?\DateTimeInterface
    {
        return $this->mardi_dejeuner;
    }

    public function setMardiDejeuner(\DateTimeInterface $mardi_dejeuner): static
    {
        $this->mardi_dejeuner = $mardi_dejeuner;

        return $this;
    }

    public function getMardiDinner(): ?\DateTimeInterface
    {
        return $this->mardi_dinner;
    }

    public function setMardiDinner(\DateTimeInterface $mardi_dinner): static
    {
        $this->mardi_dinner = $mardi_dinner;

        return $this;
    }

    public function getMercrediPetitDejeuner(): ?\DateTimeInterface
    {
        return $this->mercredi_petit_dejeuner;
    }

    public function setMercrediPetitDejeuner(\DateTimeInterface $mercredi_petit_dejeuner): static
    {
        $this->mercredi_petit_dejeuner = $mercredi_petit_dejeuner;

        return $this;
    }

    public function getMercrediDejeuner(): ?\DateTimeInterface
    {
        return $this->mercredi_dejeuner;
    }

    public function setMercrediDejeuner(\DateTimeInterface $mercredi_dejeuner): static
    {
        $this->mercredi_dejeuner = $mercredi_dejeuner;

        return $this;
    }

    public function getMercrediDinner(): ?\DateTimeInterface
    {
        return $this->mercredi_dinner;
    }

    public function setMercrediDinner(\DateTimeInterface $mercredi_dinner): static
    {
        $this->mercredi_dinner = $mercredi_dinner;

        return $this;
    }

    public function getJeudiPetitDejeuner(): ?\DateTimeInterface
    {
        return $this->jeudi_petit_dejeuner;
    }

    public function setJeudiPetitDejeuner(\DateTimeInterface $jeudi_petit_dejeuner): static
    {
        $this->jeudi_petit_dejeuner = $jeudi_petit_dejeuner;

        return $this;
    }

    public function getJeudiDejeuner(): ?\DateTimeInterface
    {
        return $this->jeudi_dejeuner;
    }

    public function setJeudiDejeuner(\DateTimeInterface $jeudi_dejeuner): static
    {
        $this->jeudi_dejeuner = $jeudi_dejeuner;

        return $this;
    }

    public function getJeudiDinner(): ?\DateTimeInterface
    {
        return $this->jeudi_dinner;
    }

    public function setJeudiDinner(\DateTimeInterface $jeudi_dinner): static
    {
        $this->jeudi_dinner = $jeudi_dinner;

        return $this;
    }

    public function getVendrediPetitDejeuner(): ?\DateTimeInterface
    {
        return $this->vendredi_petit_dejeuner;
    }

    public function setVendrediPetitDejeuner(\DateTimeInterface $vendredi_petit_dejeuner): static
    {
        $this->vendredi_petit_dejeuner = $vendredi_petit_dejeuner;

        return $this;
    }

    public function getVendrediDejeuner(): ?\DateTimeInterface
    {
        return $this->vendredi_dejeuner;
    }

    public function setVendrediDejeuner(\DateTimeInterface $vendredi_dejeuner): static
    {
        $this->vendredi_dejeuner = $vendredi_dejeuner;

        return $this;
    }

    public function getVendrediDinner(): ?\DateTimeInterface
    {
        return $this->vendredi_dinner;
    }

    public function setVendrediDinner(\DateTimeInterface $vendredi_dinner): static
    {
        $this->vendredi_dinner = $vendredi_dinner;

        return $this;
    }

    public function getSamediPetitDejeuner(): ?\DateTimeInterface
    {
        return $this->samedi_petit_dejeuner;
    }

    public function setSamediPetitDejeuner(\DateTimeInterface $samedi_petit_dejeuner): static
    {
        $this->samedi_petit_dejeuner = $samedi_petit_dejeuner;

        return $this;
    }

    public function getSamediDejeuner(): ?\DateTimeInterface
    {
        return $this->samedi_dejeuner;
    }

    public function setSamediDejeuner(\DateTimeInterface $samedi_dejeuner): static
    {
        $this->samedi_dejeuner = $samedi_dejeuner;

        return $this;
    }

    public function getSamediDinner(): ?\DateTimeInterface
    {
        return $this->samedi_dinner;
    }

    public function setSamediDinner(\DateTimeInterface $samedi_dinner): static
    {
        $this->samedi_dinner = $samedi_dinner;

        return $this;
    }

    public function getDimanchePetitDejeuner(): ?\DateTimeInterface
    {
        return $this->dimanche_petit_dejeuner;
    }

    public function setDimanchePetitDejeuner(\DateTimeInterface $dimanche_petit_dejeuner): static
    {
        $this->dimanche_petit_dejeuner = $dimanche_petit_dejeuner;

        return $this;
    }

    public function getDimancheDejeuner(): ?\DateTimeInterface
    {
        return $this->dimanche_dejeuner;
    }

    public function setDimancheDejeuner(\DateTimeInterface $dimanche_dejeuner): static
    {
        $this->dimanche_dejeuner = $dimanche_dejeuner;

        return $this;
    }

    public function getDimancheDinner(): ?\DateTimeInterface
    {
        return $this->dimanche_dinner;
    }

    public function setDimancheDinner(\DateTimeInterface $dimanche_dinner): static
    {
        $this->dimanche_dinner = $dimanche_dinner;

        return $this;
    }

    public function getIdBesoinVital(): ?int
    {
        return $this->id_besoin_vital;
    }

    public function setIdBesoinVital(int $id_besoin_vital): static
    {
        $this->id_besoin_vital = $id_besoin_vital;

        return $this;
    }
}
