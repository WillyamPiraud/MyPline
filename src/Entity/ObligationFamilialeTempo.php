<?php

namespace App\Entity;

use App\Repository\ObligationFamilialeTempoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObligationFamilialeTempoRepository::class)]
class ObligationFamilialeTempo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_soir = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_soir = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_soir = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_soir = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_soir = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_soir = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche_matin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche_midi = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dimanche_soir = null;

    #[ORM\Column]
    private ?int $id_obligation = null;

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

    public function getLundiMatin(): ?\DateTimeInterface
    {
        return $this->lundi_matin;
    }

    public function setLundiMatin(\DateTimeInterface $lundi_matin): static
    {
        $this->lundi_matin = $lundi_matin;

        return $this;
    }

    public function getLundiMidi(): ?\DateTimeInterface
    {
        return $this->lundi_midi;
    }

    public function setLundiMidi(\DateTimeInterface $lundi_midi): static
    {
        $this->lundi_midi = $lundi_midi;

        return $this;
    }

    public function getLundiSoir(): ?\DateTimeInterface
    {
        return $this->lundi_soir;
    }

    public function setLundiSoir(\DateTimeInterface $lundi_soir): static
    {
        $this->lundi_soir = $lundi_soir;

        return $this;
    }

    public function getMardiMatin(): ?\DateTimeInterface
    {
        return $this->mardi_matin;
    }

    public function setMardiMatin(\DateTimeInterface $mardi_matin): static
    {
        $this->mardi_matin = $mardi_matin;

        return $this;
    }

    public function getMardiMidi(): ?\DateTimeInterface
    {
        return $this->mardi_midi;
    }

    public function setMardiMidi(\DateTimeInterface $mardi_midi): static
    {
        $this->mardi_midi = $mardi_midi;

        return $this;
    }

    public function getMardiSoir(): ?\DateTimeInterface
    {
        return $this->mardi_soir;
    }

    public function setMardiSoir(\DateTimeInterface $mardi_soir): static
    {
        $this->mardi_soir = $mardi_soir;

        return $this;
    }

    public function getMercrediMatin(): ?\DateTimeInterface
    {
        return $this->mercredi_matin;
    }

    public function setMercrediMatin(\DateTimeInterface $mercredi_matin): static
    {
        $this->mercredi_matin = $mercredi_matin;

        return $this;
    }

    public function getMercrediMidi(): ?\DateTimeInterface
    {
        return $this->mercredi_midi;
    }

    public function setMercrediMidi(\DateTimeInterface $mercredi_midi): static
    {
        $this->mercredi_midi = $mercredi_midi;

        return $this;
    }

    public function getMercrediSoir(): ?\DateTimeInterface
    {
        return $this->mercredi_soir;
    }

    public function setMercrediSoir(\DateTimeInterface $mercredi_soir): static
    {
        $this->mercredi_soir = $mercredi_soir;

        return $this;
    }

    public function getJeudiMatin(): ?\DateTimeInterface
    {
        return $this->jeudi_matin;
    }

    public function setJeudiMatin(\DateTimeInterface $jeudi_matin): static
    {
        $this->jeudi_matin = $jeudi_matin;

        return $this;
    }

    public function getJeudiMidi(): ?\DateTimeInterface
    {
        return $this->jeudi_midi;
    }

    public function setJeudiMidi(\DateTimeInterface $jeudi_midi): static
    {
        $this->jeudi_midi = $jeudi_midi;

        return $this;
    }

    public function getJeudiSoir(): ?\DateTimeInterface
    {
        return $this->jeudi_soir;
    }

    public function setJeudiSoir(\DateTimeInterface $jeudi_soir): static
    {
        $this->jeudi_soir = $jeudi_soir;

        return $this;
    }

    public function getVendrediMatin(): ?\DateTimeInterface
    {
        return $this->vendredi_matin;
    }

    public function setVendrediMatin(\DateTimeInterface $vendredi_matin): static
    {
        $this->vendredi_matin = $vendredi_matin;

        return $this;
    }

    public function getVendrediMidi(): ?\DateTimeInterface
    {
        return $this->vendredi_midi;
    }

    public function setVendrediMidi(\DateTimeInterface $vendredi_midi): static
    {
        $this->vendredi_midi = $vendredi_midi;

        return $this;
    }

    public function getVendrediSoir(): ?\DateTimeInterface
    {
        return $this->vendredi_soir;
    }

    public function setVendrediSoir(\DateTimeInterface $vendredi_soir): static
    {
        $this->vendredi_soir = $vendredi_soir;

        return $this;
    }

    public function getSamediMatin(): ?\DateTimeInterface
    {
        return $this->samedi_matin;
    }

    public function setSamediMatin(\DateTimeInterface $samedi_matin): static
    {
        $this->samedi_matin = $samedi_matin;

        return $this;
    }

    public function getSamediMidi(): ?\DateTimeInterface
    {
        return $this->samedi_midi;
    }

    public function setSamediMidi(\DateTimeInterface $samedi_midi): static
    {
        $this->samedi_midi = $samedi_midi;

        return $this;
    }

    public function getSamediSoir(): ?\DateTimeInterface
    {
        return $this->samedi_soir;
    }

    public function setSamediSoir(\DateTimeInterface $samedi_soir): static
    {
        $this->samedi_soir = $samedi_soir;

        return $this;
    }

    public function getDimancheMatin(): ?\DateTimeInterface
    {
        return $this->dimanche_matin;
    }

    public function setDimancheMatin(\DateTimeInterface $dimanche_matin): static
    {
        $this->dimanche_matin = $dimanche_matin;

        return $this;
    }

    public function getDimancheMidi(): ?\DateTimeInterface
    {
        return $this->dimanche_midi;
    }

    public function setDimancheMidi(\DateTimeInterface $dimanche_midi): static
    {
        $this->dimanche_midi = $dimanche_midi;

        return $this;
    }

    public function getDimancheSoir(): ?\DateTimeInterface
    {
        return $this->dimanche_soir;
    }

    public function setDimancheSoir(\DateTimeInterface $dimanche_soir): static
    {
        $this->dimanche_soir = $dimanche_soir;

        return $this;
    }

    public function getIdObligation(): ?int
    {
        return $this->id_obligation;
    }

    public function setIdObligation(int $id_obligation): static
    {
        $this->id_obligation = $id_obligation;

        return $this;
    }
}
