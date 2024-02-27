<?php

namespace App\Entity;

use App\Repository\CalendrierChosesAFaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalendrierChosesAFaireRepository::class)]
class CalendrierChosesAFaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $intitule = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $date_butoir = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?bool $valide = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable:true)]
    private ?\DateTimeInterface $date_prevue = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $temps_prevue = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fait_le = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateButoir(): ?\DateTimeInterface
    {
        return $this->date_butoir;
    }

    public function setDateButoir(\DateTimeInterface $date_butoir): static
    {
        $this->date_butoir = $date_butoir;

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

    public function isValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getDatePrevue(): ?\DateTimeInterface
    {
        return $this->date_prevue;
    }

    public function setDatePrevue(\DateTimeInterface $date_prevue): static
    {
        $this->date_prevue = $date_prevue;

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

    public function getFaitLe(): ?\DateTimeInterface
    {
        return $this->fait_le;
    }

    public function setFaitLe(?\DateTimeInterface $fait_le): static
    {
        $this->fait_le = $fait_le;

        return $this;
    }
}
