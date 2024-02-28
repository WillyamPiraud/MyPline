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

/* pages/rythme_vital/liste_des_obligations_familiales.html.twig */
class __TwigTemplate_32bca3568c10836dbd49c13c2f61191d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/liste_des_obligations_familiales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/liste_des_obligations_familiales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/liste_des_obligations_familiales.html.twig", 1);
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

        echo "Waou - Obligation Familiale
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("list_calendrier");
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
        echo "<section class=\"container-list-calendrier element-to-scroll\">
\t<div class=\"container-list row\">
\t\t<a class=\"button-add\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_obligation_familiale", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\">Ajouter</a>
\t\t<div class=\"container-texte-exemple\">
\t\t\t<h3>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["texteIntro"]) || array_key_exists("texteIntro", $context) ? $context["texteIntro"] : (function () { throw new RuntimeError('Variable "texteIntro" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t<div class=\"container-cards\">
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lst_obligations"]) || array_key_exists("lst_obligations", $context) ? $context["lst_obligations"] : (function () { throw new RuntimeError('Variable "lst_obligations" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 18
            echo "\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 20) == "Les amener à l'école")) {
                // line 21
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-amener-ecole.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 22
$context["entry"], "intitule", [], "any", false, false, false, 22) == "Les amener à des activités extra-scolaire")) {
                // line 23
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-activite-extra-scolaire.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 24
$context["entry"], "intitule", [], "any", false, false, false, 24) == "Présence/soins auprès de mes Parents âgés")) {
                // line 25
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-personne-age.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 26
$context["entry"], "intitule", [], "any", false, false, false, 26) == "Présence/soins auprès de mes beaux parents âges")) {
                // line 27
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-personne-age.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 28
$context["entry"], "intitule", [], "any", false, false, false, 28) == "Présence/soins auprès d'un proche malade")) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-aide-malade.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 30
$context["entry"], "intitule", [], "any", false, false, false, 30) == "Présence/soins auprès d'un proche Handicapé")) {
                // line 31
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-aide-handicape.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 32
$context["entry"], "intitule", [], "any", false, false, false, 32) == "Moments d'échanges priviligée avec mon conjoint")) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-couple.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["entry"], "intitule", [], "any", false, false, false, 34) == "Activité de ménage (Nettoyage Maison)")) {
                // line 35
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-menage.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["entry"], "intitule", [], "any", false, false, false, 36) == "Activité repassage (entretien linge)")) {
                // line 37
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-linge.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 38
$context["entry"], "intitule", [], "any", false, false, false, 38) == "Activité de Jardinage (entretien espaces verts)")) {
                // line 39
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-jardinage.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
$context["entry"], "intitule", [], "any", false, false, false, 40) == "Activité planifiée de bricolage / amenagement")) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-entretien-reparation.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
$context["entry"], "intitule", [], "any", false, false, false, 42) == "Préparer les repas pris à la maison")) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-cuisinier.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
$context["entry"], "intitule", [], "any", false, false, false, 44) == "Faire les courses regulières d'approvisionnement")) {
                // line 45
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-courses.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
$context["entry"], "intitule", [], "any", false, false, false, 46) == "Gestion des factures à payer & suivis des comptes")) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-factures.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
$context["entry"], "intitule", [], "any", false, false, false, 48) == "Gestion des courriers et tâches administratives du foyer")) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-courriers.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
$context["entry"], "intitule", [], "any", false, false, false, 50) == "Établissement de budget, gestion de placements")) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-budget.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 52
$context["entry"], "intitule", [], "any", false, false, false, 52) == "Gestion de bien immobiliers, de comptes SCI")) {
                // line 53
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-immobilier.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 54
$context["entry"], "intitule", [], "any", false, false, false, 54) == "Les aider aux devoirs")) {
                // line 55
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-aide-devoir.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } else {
                // line 57
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto_autre_temps.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 59) == "Manger (Tps de preparation Repas inclus)")) {
                // line 60
                echo "\t\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">Manger
\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\"><br>(Tps de preparation Repas inclus)</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 63
$context["entry"], "intitule", [], "any", false, false, false, 63) == "Se lever / s'habiller et autres besoins de vie")) {
                // line 64
                echo "\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">S'entretenir
\t\t\t\t\t\t\t\t<br><span style=\"font-size: 0.8rem\">(Se lever, s'habiller et autres besoins de vie)</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 68), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<p>Usage de mon temps cible
\t\t\t\t\t\t\t\t\t<span>(moyenne par jour)</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 76
            $context["totalSeconds"] = ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "lundi", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mardi", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mercredi", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "jeudi", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "vendredi", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "samedi", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "dimanche", [], "any", false, false, false, 76), "getTimestamp", [], "method", false, false, false, 76));
            // line 77
            echo "\t\t\t\t\t\t\t\t";
            $context["averageSecondsPerDay"] = ((isset($context["totalSeconds"]) || array_key_exists("totalSeconds", $context) ? $context["totalSeconds"] : (function () { throw new RuntimeError('Variable "totalSeconds" does not exist.', 77, $this->source); })()) / 7);
            // line 78
            echo "\t\t\t\t\t\t\t\t";
            $context["averagePercentage"] = (((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 78, $this->source); })()) / (24 * 3600)) * 100);
            // line 79
            echo "\t\t\t\t\t\t\t\t";
            $context["roundedPercentage"] = (twig_round(((isset($context["averagePercentage"]) || array_key_exists("averagePercentage", $context) ? $context["averagePercentage"] : (function () { throw new RuntimeError('Variable "averagePercentage" does not exist.', 79, $this->source); })()) * 2)) / 2);
            // line 80
            echo "\t\t\t\t\t\t\t\t";
            // line 81
            echo "\t\t\t\t\t\t\t\t";
            $context["averageHoursPerDay"] = ((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 81, $this->source); })()) / 3600);
            // line 82
            echo "\t\t\t\t\t\t\t\t";
            $context["hours"] = (twig_round(((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 82, $this->source); })()) * 2)) / twig_round(2, 0, "floor"));
            // line 83
            echo "\t\t\t\t\t\t\t\t";
            $context["minutes"] = twig_round((((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 83, $this->source); })()) * 60) % 60));
            // line 84
            echo "\t\t\t\t\t\t\t\t";
            $context["formattedTime"] = twig_sprintf("%02dh%02d", (isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 84, $this->source); })()), (isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 84, $this->source); })()));
            // line 85
            echo "\t\t\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, (isset($context["formattedTime"]) || array_key_exists("formattedTime", $context) ? $context["formattedTime"] : (function () { throw new RuntimeError('Variable "formattedTime" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t<h2>";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["roundedPercentage"]) || array_key_exists("roundedPercentage", $context) ? $context["roundedPercentage"] : (function () { throw new RuntimeError('Variable "roundedPercentage" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t";
            // line 89
            if ((((twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 89) != "Sommeil") && (twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 89) != "Manger (Tps de preparation Repas inclus)")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 89) != "Se lever / s'habiller et autres besoins de vie"))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoin_vital_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce besoin vital ?')\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 94
                echo "\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_obligation_familiale", ["type" => twig_get_attribute($this->env, $this->source, $context["entry"], "getIdObligation", [], "method", false, false, false, 95), "id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t<div class=\"container-button-add\">
\t\t\t\t<a class=\"button-add\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_obligation_familiale", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 107, $this->source); })())]), "html", null, true);
        echo "\">Ajouter</a>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/rythme_vital/liste_des_obligations_familiales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 107,  376 => 106,  360 => 96,  355 => 95,  352 => 94,  346 => 91,  341 => 90,  339 => 89,  333 => 86,  328 => 85,  325 => 84,  322 => 83,  319 => 82,  316 => 81,  314 => 80,  311 => 79,  308 => 78,  305 => 77,  303 => 76,  295 => 70,  289 => 68,  283 => 64,  281 => 63,  276 => 60,  273 => 59,  267 => 57,  261 => 55,  259 => 54,  254 => 53,  252 => 52,  247 => 51,  245 => 50,  240 => 49,  238 => 48,  233 => 47,  231 => 46,  226 => 45,  224 => 44,  219 => 43,  217 => 42,  212 => 41,  210 => 40,  205 => 39,  203 => 38,  198 => 37,  196 => 36,  191 => 35,  189 => 34,  184 => 33,  182 => 32,  177 => 31,  175 => 30,  170 => 29,  168 => 28,  163 => 27,  161 => 26,  156 => 25,  154 => 24,  149 => 23,  147 => 22,  142 => 21,  140 => 20,  136 => 18,  132 => 17,  126 => 14,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Obligation Familiale
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
<section class=\"container-list-calendrier element-to-scroll\">
\t<div class=\"container-list row\">
\t\t<a class=\"button-add\" href=\"{{ path('app_ajouter_obligation_familiale', {'type': type }) }}\">Ajouter</a>
\t\t<div class=\"container-texte-exemple\">
\t\t\t<h3>{{ texteIntro }}</h3>
\t\t</div>
\t\t<div class=\"container-cards\">
\t\t\t{% for entry in lst_obligations %}
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t{% if entry.intitule == 'Les amener à l\\'école' %}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-amener-ecole.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == 'Les amener à des activités extra-scolaire' %}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-activite-extra-scolaire.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == 'Présence/soins auprès de mes Parents âgés' %}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-personne-age.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == 'Présence/soins auprès de mes beaux parents âges' %}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-personne-age.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Présence/soins auprès d'un proche malade\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-aide-malade.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Présence/soins auprès d'un proche Handicapé\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-aide-handicape.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Moments d'échanges priviligée avec mon conjoint\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-couple.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Activité de ménage (Nettoyage Maison)\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-menage.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Activité repassage (entretien linge)\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-linge.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Activité de Jardinage (entretien espaces verts)\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-jardinage.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Activité planifiée de bricolage / amenagement\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-entretien-reparation.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Préparer les repas pris à la maison\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-cuisinier.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Faire les courses regulières d'approvisionnement\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-courses.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Gestion des factures à payer & suivis des comptes\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-factures.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Gestion des courriers et tâches administratives du foyer\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-courriers.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Établissement de budget, gestion de placements\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-budget.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == \"Gestion de bien immobiliers, de comptes SCI\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-immobilier.png') }}\">
\t\t\t\t\t\t\t{% elseif entry.intitule == 'Les aider aux devoirs' %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-aide-devoir.png') }}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto_autre_temps.png') }}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if entry.intitule == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">Manger
\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\"><br>(Tps de preparation Repas inclus)</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t{% elseif entry.intitule == 'Se lever / s\\'habiller et autres besoins de vie' %}
\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">S'entretenir
\t\t\t\t\t\t\t\t<br><span style=\"font-size: 0.8rem\">(Se lever, s'habiller et autres besoins de vie)</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h1>{{ entry.intitule }}</h1>
\t\t\t\t\t\t\t{% endif%}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<p>Usage de mon temps cible
\t\t\t\t\t\t\t\t\t<span>(moyenne par jour)</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{% set totalSeconds = entry.lundi.getTimestamp() + entry.mardi.getTimestamp() + entry.mercredi.getTimestamp() + entry.jeudi.getTimestamp() + entry.vendredi.getTimestamp() + entry.samedi.getTimestamp() + entry.dimanche.getTimestamp() %}
\t\t\t\t\t\t\t\t{% set averageSecondsPerDay = totalSeconds / 7 %}
\t\t\t\t\t\t\t\t{% set averagePercentage = (averageSecondsPerDay / (24*3600)) * 100 %}
\t\t\t\t\t\t\t\t{% set roundedPercentage = (averagePercentage * 2) | round / 2 %}
\t\t\t\t\t\t\t\t{# arrondi au 0,5% le plus proche #}
\t\t\t\t\t\t\t\t{% set averageHoursPerDay = averageSecondsPerDay / 3600 %}
\t\t\t\t\t\t\t\t{% set hours = (averageHoursPerDay * 2) | round / 2 | round(0, 'floor') %}
\t\t\t\t\t\t\t\t{% set minutes = ((averageHoursPerDay * 60) % 60) | round %}
\t\t\t\t\t\t\t\t{% set formattedTime = '%02dh%02d'|format(hours, minutes) %}
\t\t\t\t\t\t\t\t<h2>{{ formattedTime }}</h2>
\t\t\t\t\t\t\t\t<h2>{{ roundedPercentage }}%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t{% if entry.intitule != 'Sommeil' and entry.intitule != 'Manger (Tps de preparation Repas inclus)' and entry.intitule != 'Se lever / s\\'habiller et autres besoins de vie' %}
\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"{{ path('app_rythme_vital_besoin_vital_delete', {'id' : entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce besoin vital ?')\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_modifier_obligation_familiale', {'type' : entry.getIdObligation(),'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"container-button-add\">
\t\t\t\t<a class=\"button-add\" href=\"{{ path('app_ajouter_obligation_familiale', {'type': type }) }}\">Ajouter</a>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/rythme_vital/liste_des_obligations_familiales.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/liste_des_obligations_familiales.html.twig");
    }
}
