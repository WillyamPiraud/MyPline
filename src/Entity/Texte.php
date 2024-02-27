<?php

namespace App\Entity;

use App\Repository\TexteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TexteRepository::class)]
class Texte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $texte_intro = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $accueil_grille_texte_1 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $accueil_grille_texte_2 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $accueil_grille_texte_3 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $page2_grille_texte_1 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $page2_grille_texte_2 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $page2_grille_texte_3 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $page2_grille_texte_4 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteIntro(): ?string
    {
        return $this->texte_intro;
    }

    public function setTexteIntro(?string $texte_intro): static
    {
        $this->texte_intro = $texte_intro;

        return $this;
    }

    public function getAccueilGrilleTexte1(): ?string
    {
        return $this->accueil_grille_texte_1;
    }

    public function setAccueilGrilleTexte1(?string $accueil_grille_texte_1): static
    {
        $this->accueil_grille_texte_1 = $accueil_grille_texte_1;

        return $this;
    }

    public function getAccueilGrilleTexte2(): ?string
    {
        return $this->accueil_grille_texte_2;
    }

    public function setAccueilGrilleTexte2(?string $accueil_grille_texte_2): static
    {
        $this->accueil_grille_texte_2 = $accueil_grille_texte_2;

        return $this;
    }

    public function getAccueilGrilleTexte3(): ?string
    {
        return $this->accueil_grille_texte_3;
    }

    public function setAccueilGrilleTexte3(?string $accueil_grille_texte_3): static
    {
        $this->accueil_grille_texte_3 = $accueil_grille_texte_3;

        return $this;
    }

    public function getPage2GrilleTexte1(): ?string
    {
        return $this->page2_grille_texte_1;
    }

    public function setPage2GrilleTexte1(?string $page2_grille_texte_1): static
    {
        $this->page2_grille_texte_1 = $page2_grille_texte_1;

        return $this;
    }

    public function getPage2GrilleTexte2(): ?string
    {
        return $this->page2_grille_texte_2;
    }

    public function setPage2GrilleTexte2(?string $page2_grille_texte_2): static
    {
        $this->page2_grille_texte_2 = $page2_grille_texte_2;

        return $this;
    }

    public function getPage2GrilleTexte3(): ?string
    {
        return $this->page2_grille_texte_3;
    }

    public function setPage2GrilleTexte3(?string $page2_grille_texte_3): static
    {
        $this->page2_grille_texte_3 = $page2_grille_texte_3;

        return $this;
    }

    public function getPage2GrilleTexte4(): ?string
    {
        return $this->page2_grille_texte_4;
    }

    public function setPage2GrilleTexte4(?string $page2_grille_texte_4): static
    {
        $this->page2_grille_texte_4 = $page2_grille_texte_4;

        return $this;
    }
}
