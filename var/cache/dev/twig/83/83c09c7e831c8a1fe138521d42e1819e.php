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

/* pages/objectif/sociabilite/liste_sociabilite.html.twig */
class __TwigTemplate_5dd9445f2b27ee654acc275cceab0a03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/sociabilite/liste_sociabilite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/sociabilite/liste_sociabilite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/sociabilite/liste_sociabilite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Waou - Objectifs Sociabilité
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Je consacre déjà une part de mon temps aux autres, à des activités de partage et d’échanges ce qui constitue une part de mon bien être. J’en ai d’ailleurs saisi la liste dans mes routines actuelles.<br>Je souhaite cependant me consacrer à de nouvelles activités complémentaires ou de substitution.<br>Dans cette page, je fixe mes nouvelles aspirations personnelles<br>(Les loisirs sociaux et communautaires sont à indiquer dans Objectifs SOCIABILITÉ)
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "FamilleSociable"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\">Familles, Conjoints, Enfants
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel de modifier mon temps passé en compagnie de ma famille, mon conjoint, mes enfants ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : Faire 10Min de lecture à mon fils chaque soir avant sa nuit.<br>Faire une soirée  « apéro » une fois par semaine avec ma femme et en profiter pour renforcer notre communication.<br>Téléphoner chaque dimanche à mes parents.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["countFamille"]) || array_key_exists("countFamille", $context) ? $context["countFamille"] : (function () { throw new RuntimeError('Variable "countFamille" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite", ["secteur" => "Sociabilite", "idSecteur" => "FamilleSociable", "typeActivity" => "Sociable"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "FamilleSociable"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "AmisSociable"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Amis
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel de modifier mon temps passé en compagnie de mes amis proches ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : Recevoir des amis à la maison  un  dimanche par mois.<br>Partir à la montagne un week-end par an avec mes amis.<br>Aller une fois par trimestre au restaurant avec ma meilleure amie.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["countAmis"]) || array_key_exists("countAmis", $context) ? $context["countAmis"] : (function () { throw new RuntimeError('Variable "countAmis" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite", ["secteur" => "Sociabilite", "idSecteur" => "AmisSociable", "typeActivity" => "Sociable"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "AmisSociable"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "GroupeSociable"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs de groupe
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel de participer à la vie d’un club, à des ateliers, de faire des sorties de groupe ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : M’inscrire au club de pétanque de ma commune et participer aux entraînements 2 fois par semaine, m’inscrire à un atelier cuisine et y participer tous les 2 mois.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["countGroupe"]) || array_key_exists("countGroupe", $context) ? $context["countGroupe"] : (function () { throw new RuntimeError('Variable "countGroupe" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite", ["secteur" => "Sociabilite", "idSecteur" => "GroupeSociable", "typeActivity" => "Sociable"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "GroupeSociable"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "BenevolatSociable"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Bénévolats & Travails<br>Communautaires
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel participer à des projets de bénévolat dans des organismes de bienfaisance ou de participer à un travail communautaire ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : m’impliquer chaque samedi matin dans des refuges pour animaux.<br>Participer une fois par mois à des activités sociales dans les maisons de retraite.<br>Participer un week-end à un projet de rénovation d’un monument historique.<br>Devenir membre du conseil municipal de ma commune et m’y impliquer.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["countBenevolat"]) || array_key_exists("countBenevolat", $context) ? $context["countBenevolat"] : (function () { throw new RuntimeError('Variable "countBenevolat" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite", ["secteur" => "Sociabilite", "idSecteur" => "BenevolatSociable", "typeActivity" => "Sociable"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "BenevolatSociable"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "EvenementSociable"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Participation à des événements<br>Communautaires
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel d’assister à des événements communautaires ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : Assister au festival de la bande dessinée de ma commune.<br>Participer à la fête annuelle du quartier.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["countEvenement"]) || array_key_exists("countEvenement", $context) ? $context["countEvenement"] : (function () { throw new RuntimeError('Variable "countEvenement" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite", ["secteur" => "Sociabilite", "idSecteur" => "EvenementSociable", "typeActivity" => "Sociable"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "EvenementSociable"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/objectif/sociabilite/liste_sociabilite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 124,  318 => 123,  312 => 120,  308 => 119,  303 => 117,  292 => 109,  282 => 102,  278 => 101,  272 => 98,  268 => 97,  263 => 95,  252 => 87,  242 => 80,  238 => 79,  232 => 76,  228 => 75,  223 => 73,  212 => 65,  202 => 58,  198 => 57,  192 => 54,  188 => 53,  183 => 51,  172 => 43,  162 => 36,  158 => 35,  152 => 32,  148 => 31,  143 => 29,  127 => 18,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Objectifs Sociabilité
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('home') }}
{% endblock %}
{% block body %}
\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Je consacre déjà une part de mon temps aux autres, à des activités de partage et d’échanges ce qui constitue une part de mon bien être. J’en ai d’ailleurs saisi la liste dans mes routines actuelles.<br>Je souhaite cependant me consacrer à de nouvelles activités complémentaires ou de substitution.<br>Dans cette page, je fixe mes nouvelles aspirations personnelles<br>(Les loisirs sociaux et communautaires sont à indiquer dans Objectifs SOCIABILITÉ)
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'FamilleSociable'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\">Familles, Conjoints, Enfants
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel de modifier mon temps passé en compagnie de ma famille, mon conjoint, mes enfants ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : Faire 10Min de lecture à mon fils chaque soir avant sa nuit.<br>Faire une soirée  « apéro » une fois par semaine avec ma femme et en profiter pour renforcer notre communication.<br>Téléphoner chaque dimanche à mes parents.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">{{ countFamille }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite', {'secteur' : 'Sociabilite', 'idSecteur': 'FamilleSociable', 'typeActivity': 'Sociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'FamilleSociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'AmisSociable'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Amis
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel de modifier mon temps passé en compagnie de mes amis proches ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : Recevoir des amis à la maison  un  dimanche par mois.<br>Partir à la montagne un week-end par an avec mes amis.<br>Aller une fois par trimestre au restaurant avec ma meilleure amie.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countAmis }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite', {'secteur' : 'Sociabilite', 'idSecteur': 'AmisSociable', 'typeActivity': 'Sociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'AmisSociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'GroupeSociable'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs de groupe
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel de participer à la vie d’un club, à des ateliers, de faire des sorties de groupe ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : M’inscrire au club de pétanque de ma commune et participer aux entraînements 2 fois par semaine, m’inscrire à un atelier cuisine et y participer tous les 2 mois.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countGroupe }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite', {'secteur' : 'Sociabilite', 'idSecteur': 'GroupeSociable', 'typeActivity': 'Sociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'GroupeSociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'BenevolatSociable'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Bénévolats & Travails<br>Communautaires
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel participer à des projets de bénévolat dans des organismes de bienfaisance ou de participer à un travail communautaire ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : m’impliquer chaque samedi matin dans des refuges pour animaux.<br>Participer une fois par mois à des activités sociales dans les maisons de retraite.<br>Participer un week-end à un projet de rénovation d’un monument historique.<br>Devenir membre du conseil municipal de ma commune et m’y impliquer.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countBenevolat }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite', {'secteur' : 'Sociabilite', 'idSecteur': 'BenevolatSociable', 'typeActivity': 'Sociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'BenevolatSociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'EvenementSociable'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Participation à des événements<br>Communautaires
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tAi-je l’objectif personnel d’assister à des événements communautaires ?<br>Mon objectif doit être clair, précis et vérifiable.<br>Exemples : Assister au festival de la bande dessinée de ma commune.<br>Participer à la fête annuelle du quartier.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countEvenement }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite', {'secteur' : 'Sociabilite', 'idSecteur': 'EvenementSociable', 'typeActivity': 'Sociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'EvenementSociable'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/objectif/sociabilite/liste_sociabilite.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/sociabilite/liste_sociabilite.html.twig");
    }
}
