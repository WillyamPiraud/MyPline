<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_f07fd8fa244f66fcfca23f7caaeb7750 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t<!--=============== REMIXICONS ===============-->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css\" rel=\"stylesheet\">
\t\t<meta name=\"description\" content=\"Découvrez la meilleure plateforme pour atteindre vos objectifs. Notre plateforme vous permet d'integrer dans votre routine journalière, les actions pour atteindre vos objectifs petit à petit.\">

\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>🎯</text></svg>\">
\t\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t</head>

\t<!--=============== HEADER ===============-->
\t<header class=\"header\">
\t\t<nav class=\"nav container\">
\t\t\t<div class=\"nav__data\">
\t\t\t\t<a href=\"#\" class=\"nav__logo\">
\t\t\t\t\t<i class=\"ri-planet-line\"></i>
\t\t\t\t\tMyPline
\t\t\t\t</a>
\t\t\t\t<div class=\"nav__toggle\" id=\"nav-toggle\">
\t\t\t\t\t<i class=\"ri-menu-line nav__burger\"></i>
\t\t\t\t\t<i class=\"ri-close-line nav__close\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--=============== NAV MENU ===============-->
\t\t\t<div class=\"nav__menu\" id=\"nav-menu\">
\t\t\t\t<ul class=\"nav__list\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav__link\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier");
        echo "\" class=\"nav__link\">Journalier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 1 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tRoutines
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-service-line\"></i>
\t\t\t\t\t\t\t\t\tVital
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligations_familiales");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-parent-line\"></i>
\t\t\t\t\t\t\t\t\tFamiliale
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_professionnel");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-suitcase-line\"></i>
\t\t\t\t\t\t\t\t\tProfessionnelle
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs_vacances");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-run-line\"></i>
\t\t\t\t\t\t\t\t\tLoisir
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liens_sociaux");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-speak-fill\"></i>
\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!--=============== Dropdown Submenu ===============-->
\t\t\t\t\t\t\t<li class=\"dropdown__subitem\">
\t\t\t\t\t\t\t\t<div class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-vip-diamond-fill\"></i>
\t\t\t\t\t\t\t\t\tSubmenu
\t\t\t\t\t\t\t\t\t<i class=\"ri-add-line dropdown__add\"></i>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<ul class=\"dropdown__submenu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown__sublink\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-text-line\"></i>
\t\t\t\t\t\t\t\t\t\t\tDocuments
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown__sublink\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bill-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\tFactures
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown__sublink\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-refund-2-line\"></i>
\t\t\t\t\t\t\t\t\t\t\tRemboursements
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 2 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tPost-it & Notes
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-sticky-note-2-fill\"></i>
\t\t\t\t\t\t\t\t\tPost-it
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_it_notes_mes_notes");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-file-paper-2-fill\"></i>
\t\t\t\t\t\t\t\t\tNotes
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 3 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tListes & Documents
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_document_liste");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-file-list-fill\"></i>
\t\t\t\t\t\t\t\t\tListes
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_it_notes_mes_notes");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-article-fill\"></i>
\t\t\t\t\t\t\t\t\tDocuments
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 4 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tObjectifs
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_sante", ["secteur" => "Sante"]);
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-mental-health-fill\"></i>
\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_activity");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-riding-line\"></i>
\t\t\t\t\t\t\t\t\tActivité
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_sociabilite");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-speak-fill\"></i>
\t\t\t\t\t\t\t\t\tSociabilité
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_finance");
        echo "\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-cash-line\"></i>
\t\t\t\t\t\t\t\t\tFinance
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</header>


\t<!-- Ancienne version du header
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<nav class=\"navigation-pages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-button-accueil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-sans-bg.png"), "html", null, true);
        echo " alt=\"Logo\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 202
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202)) {
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-connexion\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "prenom", [], "any", false, false, false, 203), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-connexion\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"buttons-nav titleImage\" style=\"padding: 2%; width: 30%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"buttons-nav\">Vidéo d'Utilisation de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>Cette Page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-->
\t<body>
\t\t";
        // line 217
        $this->displayBlock('body', $context, $blocks);
        // line 218
        echo "
\t\t<footer>
\t\t\t<div class=\"waves\">
\t\t\t\t<div style=\"background: url(";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wave.png"), "html", null, true);
        echo ");\" class=\"wave\" id=\"wave1\"></div>
\t\t\t\t<div style=\"background: url(";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wave.png"), "html", null, true);
        echo ");\" class=\"wave\" id=\"wave2\"></div>
\t\t\t\t<div style=\"background: url(";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wave.png"), "html", null, true);
        echo ");\" class=\"wave\" id=\"wave3\"></div>
\t\t\t\t<div style=\"background: url(";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wave.png"), "html", null, true);
        echo ");\" class=\"wave\" id=\"wave4\"></div>
\t\t\t</div>
\t\t\t<ul class=\"social_icon\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-facebook\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-youtube\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-linkedin\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-instagram\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Journalier</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Objectifs</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Plan d'Actions</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">A propos</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<p>©MyPline / Tous droits reservés</p>
\t\t</footer>
\t\t<script type=\"module\" src=\"https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js\"></script>
\t\t<script nomodule src=\"https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js\"></script>

\t</body>


\t<script type=\"text/javascript\">
\t\t\$(function () {
\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) {
\$(\".navigation-pages\").addClass(\"scrolled\");
\$(\".element-to-scroll\").addClass(\"element-scrolled\");
} else {
\$(\".navigation-pages\").removeClass(\"scrolled\");
\$(\".element-to-scroll\").removeClass(\"element-scrolled\");
}
});
});
\t</script>
\t<script type=\"text/javascript\">
\t\tfunction showMenu(toggleId, navId) {
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId);

console.log(toggle, nav); // Check the values in the console

toggle.addEventListener(\"click\", function () {
nav.classList.toggle(\"show-menu\");
toggle.classList.toggle(\"show-icon\");
});
}

showMenu('nav-toggle', 'nav-menu');
\t</script>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyPline - Accueil
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("headapp");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 217
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 217,  463 => 17,  453 => 16,  433 => 7,  347 => 224,  343 => 223,  339 => 222,  335 => 221,  330 => 218,  328 => 217,  316 => 207,  310 => 205,  304 => 203,  302 => 202,  294 => 199,  275 => 183,  266 => 177,  257 => 171,  248 => 165,  229 => 149,  220 => 143,  201 => 127,  192 => 121,  144 => 76,  135 => 70,  126 => 64,  117 => 58,  108 => 52,  95 => 42,  89 => 39,  67 => 19,  65 => 16,  56 => 9,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t{% block title %}MyPline - Accueil
\t\t\t{% endblock %}
\t\t</title>
\t\t<!--=============== REMIXICONS ===============-->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css\" rel=\"stylesheet\">
\t\t<meta name=\"description\" content=\"Découvrez la meilleure plateforme pour atteindre vos objectifs. Notre plateforme vous permet d'integrer dans votre routine journalière, les actions pour atteindre vos objectifs petit à petit.\">

\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>🎯</text></svg>\">
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('headapp') }}
\t\t{% endblock %}
\t</head>

\t<!--=============== HEADER ===============-->
\t<header class=\"header\">
\t\t<nav class=\"nav container\">
\t\t\t<div class=\"nav__data\">
\t\t\t\t<a href=\"#\" class=\"nav__logo\">
\t\t\t\t\t<i class=\"ri-planet-line\"></i>
\t\t\t\t\tMyPline
\t\t\t\t</a>
\t\t\t\t<div class=\"nav__toggle\" id=\"nav-toggle\">
\t\t\t\t\t<i class=\"ri-menu-line nav__burger\"></i>
\t\t\t\t\t<i class=\"ri-close-line nav__close\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--=============== NAV MENU ===============-->
\t\t\t<div class=\"nav__menu\" id=\"nav-menu\">
\t\t\t\t<ul class=\"nav__list\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\" class=\"nav__link\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_journalier') }}\" class=\"nav__link\">Journalier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 1 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tRoutines
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-service-line\"></i>
\t\t\t\t\t\t\t\t\tVital
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_obligations_familiales') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-parent-line\"></i>
\t\t\t\t\t\t\t\t\tFamiliale
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_activite_professionnel') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-suitcase-line\"></i>
\t\t\t\t\t\t\t\t\tProfessionnelle
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_loisirs_vacances') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-run-line\"></i>
\t\t\t\t\t\t\t\t\tLoisir
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_liens_sociaux') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-speak-fill\"></i>
\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!--=============== Dropdown Submenu ===============-->
\t\t\t\t\t\t\t<li class=\"dropdown__subitem\">
\t\t\t\t\t\t\t\t<div class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-vip-diamond-fill\"></i>
\t\t\t\t\t\t\t\t\tSubmenu
\t\t\t\t\t\t\t\t\t<i class=\"ri-add-line dropdown__add\"></i>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<ul class=\"dropdown__submenu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown__sublink\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-text-line\"></i>
\t\t\t\t\t\t\t\t\t\t\tDocuments
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown__sublink\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bill-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\tFactures
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown__sublink\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-refund-2-line\"></i>
\t\t\t\t\t\t\t\t\t\t\tRemboursements
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 2 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tPost-it & Notes
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_lst_calendrier_choses_a_faire') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-sticky-note-2-fill\"></i>
\t\t\t\t\t\t\t\t\tPost-it
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_post_it_notes_mes_notes') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-file-paper-2-fill\"></i>
\t\t\t\t\t\t\t\t\tNotes
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 3 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tListes & Documents
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_liste_document_liste') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-file-list-fill\"></i>
\t\t\t\t\t\t\t\t\tListes
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_post_it_notes_mes_notes') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-article-fill\"></i>
\t\t\t\t\t\t\t\t\tDocuments
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!--=============== Dropdown 4 ===============-->
\t\t\t\t\t<li class=\"dropdown__item\">
\t\t\t\t\t\t<div class=\"nav__link\">
\t\t\t\t\t\t\tObjectifs
\t\t\t\t\t\t\t<i class=\"ri-arrow-down-s-line dropdown__arrow\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"dropdown__menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_objectifs_sante', {'secteur' : 'Sante'}) }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-mental-health-fill\"></i>
\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_objectifs_activity') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-riding-line\"></i>
\t\t\t\t\t\t\t\t\tActivité
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_objectifs_sociabilite') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-speak-fill\"></i>
\t\t\t\t\t\t\t\t\tSociabilité
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_objectif_finance') }}\" class=\"dropdown__link\">
\t\t\t\t\t\t\t\t\t<i class=\"ri-cash-line\"></i>
\t\t\t\t\t\t\t\t\tFinance
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</header>


\t<!-- Ancienne version du header
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<nav class=\"navigation-pages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-button-accueil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\"><img src={{ asset('img/logo-sans-bg.png') }} alt=\"Logo\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-connexion\" href=\"#\">{{ app.user.prenom }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-connexion\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"buttons-nav titleImage\" style=\"padding: 2%; width: 30%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"buttons-nav\">Vidéo d'Utilisation de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>Cette Page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-->
\t<body>
\t\t{% block body %}{% endblock %}

\t\t<footer>
\t\t\t<div class=\"waves\">
\t\t\t\t<div style=\"background: url({{ asset('img/wave.png') }});\" class=\"wave\" id=\"wave1\"></div>
\t\t\t\t<div style=\"background: url({{ asset('img/wave.png') }});\" class=\"wave\" id=\"wave2\"></div>
\t\t\t\t<div style=\"background: url({{ asset('img/wave.png') }});\" class=\"wave\" id=\"wave3\"></div>
\t\t\t\t<div style=\"background: url({{ asset('img/wave.png') }});\" class=\"wave\" id=\"wave4\"></div>
\t\t\t</div>
\t\t\t<ul class=\"social_icon\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-facebook\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-youtube\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-linkedin\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<ion-icon name=\"logo-instagram\"></ion-icon>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Journalier</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Objectifs</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Plan d'Actions</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">A propos</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<p>©MyPline / Tous droits reservés</p>
\t\t</footer>
\t\t<script type=\"module\" src=\"https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js\"></script>
\t\t<script nomodule src=\"https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js\"></script>

\t</body>


\t<script type=\"text/javascript\">
\t\t\$(function () {
\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) {
\$(\".navigation-pages\").addClass(\"scrolled\");
\$(\".element-to-scroll\").addClass(\"element-scrolled\");
} else {
\$(\".navigation-pages\").removeClass(\"scrolled\");
\$(\".element-to-scroll\").removeClass(\"element-scrolled\");
}
});
});
\t</script>
\t<script type=\"text/javascript\">
\t\tfunction showMenu(toggleId, navId) {
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId);

console.log(toggle, nav); // Check the values in the console

toggle.addEventListener(\"click\", function () {
nav.classList.toggle(\"show-menu\");
toggle.classList.toggle(\"show-icon\");
});
}

showMenu('nav-toggle', 'nav-menu');
\t</script>
</html>
", "base.html.twig", "/Users/willyampiraud/Documents/mypline/templates/base.html.twig");
    }
}
