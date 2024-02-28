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

/* pages/journalier/journalier.html.twig */
class __TwigTemplate_c5756f760b78e4d0b69b1a6b146d0503 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/journalier/journalier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/journalier/journalier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/journalier/journalier.html.twig", 1);
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

        echo "Waou - Mon Journalier
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("journalier");
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
        echo "\t<section class=\"section-journalier\">
\t\t<div class=\"container-text-principal\">
\t\t\t<h1>Ma liste des tâches à réaliser le jour
\t\t\t\t<br>je la check au fur et à mesure des réalisations</h1>
\t\t</div>
\t\t<div class=\"container-time\">
\t\t\t<div class=\"container-image\">
\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-sablier.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"container-time\">
\t\t\t\t<div class=\"container-title-time\">
\t\t\t\t\t<h2>Mon temps engagé</h2>
\t\t\t\t\t<h2>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["totalTempsHeures"]) || array_key_exists("totalTempsHeures", $context) ? $context["totalTempsHeures"] : (function () { throw new RuntimeError('Variable "totalTempsHeures" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"container-title-time\">
\t\t\t\t\t<h2>Reste Disponible</h2>
\t\t\t\t\t<h2>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["totalTempsDisponible"]) || array_key_exists("totalTempsDisponible", $context) ? $context["totalTempsDisponible"] : (function () { throw new RuntimeError('Variable "totalTempsDisponible" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-tasks\">
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["journalier"]) || array_key_exists("journalier", $context) ? $context["journalier"] : (function () { throw new RuntimeError('Variable "journalier" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 32
            echo "\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "statut", [], "any", false, false, false, 33) == 1)) {
                // line 34
                echo "\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                echo "\" alt=\"Validé\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", [0 => "_route"], "method", false, false, false, 38) == "app_journalier")) {
                // line 39
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"container-title\">
\t\t\t\t\t\t\t<h3>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 40), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t<h3>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "tempsTask", [], "any", false, false, false, 41), "H:i"), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 44), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 44, $this->source); })()), "Y-m-d")]), "html", null, true);
                echo "\" class=\"container-title\">
\t\t\t\t\t\t\t<h3>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 45), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t<h3>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "tempsTask", [], "any", false, false, false, 46), "H:i"), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t";
            // line 50
            if ((((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 50) == "Petites Choses à faire du Jour") || (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 50) == "Obligations familiales")) || (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 50) == "Manger (Tps de preparation Repas inclus)"))) {
                // line 51
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 51) == "Petites Choses à faire du Jour")) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('choseApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 56
$context["entry"], "titre", [], "any", false, false, false, 56) == "Obligations familiales")) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('obligationApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 61
$context["entry"], "titre", [], "any", false, false, false, 61) == "Manger (Tps de preparation Repas inclus)")) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('repasApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 66
$context["entry"], "titre", [], "any", false, false, false, 66) == "Obligations familiales")) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('obligationApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 71
$context["entry"], "titre", [], "any", false, false, false, 71) == "Plan d'Actions Objectifs")) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('ObjectifApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif (((((((twig_get_attribute($this->env, $this->source,                 // line 76
$context["entry"], "titre", [], "any", false, false, false, 76) != "Sommeil") && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 76) != "Manger (Tps de preparation Repas inclus)")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 76) != "Se laver / s'habiller et autres besoins quotidiens de vie")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 76) != "Imprévus du jour")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 76) != "Mes Loisirs")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 76) != "Plan d'Actions Objectifs"))) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "Apparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 84) == "Obligations familiales")) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('obligationApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 89
$context["entry"], "titre", [], "any", false, false, false, 89) == "Rendez-Vous")) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('RDVApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((((((((twig_get_attribute($this->env, $this->source,                 // line 94
$context["entry"], "titre", [], "any", false, false, false, 94) != "Sommeil") && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 94) != "Manger (Tps de preparation Repas inclus)")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 94) != "Se laver / s'habiller et autres besoins quotidiens de vie")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 94) != "Imprévus du jour")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 94) != "Mes Loisirs")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 94) != "Mes Liens Sociaux")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 94) != "Plan d'Actions Objectifs"))) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 95), "html", null, true);
                    echo "Apparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 99
$context["entry"], "titre", [], "any", false, false, false, 99) == "Mes Loisirs")) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('loisirApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 104
$context["entry"], "titre", [], "any", false, false, false, 104) == "Mes Liens Sociaux")) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('lienApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 109
$context["entry"], "titre", [], "any", false, false, false, 109) == "Rendez-Vous")) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('RDVApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["entry"], "titre", [], "any", false, false, false, 114) == "Plan d'Actions Objectifs")) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('ObjectifApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "get", [0 => "_route"], "method", false, false, false, 121) == "app_journalier_date")) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 122), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 122, $this->source); })()), "Y-m-d")]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                    echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 126
$context["entry"], "titre", [], "any", false, false, false, 126) == "Imprévus du jour")) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire");
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                    echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 131
$context["entry"], "titre", [], "any", false, false, false, 131) == "Rendez-Vous")) {
                    // line 132
                    echo "\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 132) == "Mes Loisirs")) {
                    // line 133
                    echo "\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 133) == "Mes Liens Sociaux")) {
                    // line 134
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                    echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 140
                echo "
\t\t\t\t\t\t\t";
                // line 141
                if (((((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 141) == "Sommeil") || (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 141) == "Manger (Tps de preparation Repas inclus)")) || (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 141) == "Se laver / s'habiller et autres besoins quotidiens de vie")) || (twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 141) == "Imprévus du jour"))) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "get", [0 => "_route"], "method", false, false, false, 143) != "app_journalier_date")) {
                        // line 144
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_report", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                        echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_report", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 149), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 149, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                        // line 150
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                        echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 155) == "Petites Choses à faire du Jour")) {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('choseApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 160
$context["entry"], "titre", [], "any", false, false, false, 160) == "Manger (Tps de preparation Repas inclus)")) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('repasApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-zoom.png"), "html", null, true);
                    echo "\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t";
                // line 178
                echo "\t\t\t\t\t\t\t";
            }
            // line 179
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 181
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 181) == "Petites Choses à faire du Jour")) {
                // line 182
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"choseApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des petites choses à faire :</h2>
\t\t\t\t\t\t\t";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ChosesAFaire"]) || array_key_exists("ChosesAFaire", $context) ? $context["ChosesAFaire"] : (function () { throw new RuntimeError('Variable "ChosesAFaire" does not exist.', 184, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["chose"]) {
                    // line 185
                    echo "\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t";
                    // line 186
                    if ((twig_get_attribute($this->env, $this->source, $context["chose"], "statut", [], "any", false, false, false, 186) == 1)) {
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 188
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "request", [], "any", false, false, false, 191), "get", [0 => "_route"], "method", false, false, false, 191) == "app_journalier")) {
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["chose"], "id", [], "any", false, false, false, 192)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 193
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chose"], "titre", [], "any", false, false, false, 193), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 194
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chose"], "tempsTask", [], "any", false, false, false, 194), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["chose"], "id", [], "any", false, false, false, 197), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 197, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 198
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chose"], "titre", [], "any", false, false, false, 198), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 199
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chose"], "tempsTask", [], "any", false, false, false, 199), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                    // line 203
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                    echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                    // line 207
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                    echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 212
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-liste.png"), "html", null, true);
                    echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 215
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "get", [0 => "_route"], "method", false, false, false, 215) == "app_journalier_date")) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["chose"], "id", [], "any", false, false, false, 216), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 216, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 217
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["chose"], "id", [], "any", false, false, false, 221)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 222
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chose'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 231
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 231) == "Manger (Tps de preparation Repas inclus)")) {
                // line 232
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"repasApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des repas :</h2>
\t\t\t\t\t\t\t";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["diffRepas"]) || array_key_exists("diffRepas", $context) ? $context["diffRepas"] : (function () { throw new RuntimeError('Variable "diffRepas" does not exist.', 234, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["repas"]) {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t";
                    // line 236
                    if ((twig_get_attribute($this->env, $this->source, $context["repas"], "statut", [], "any", false, false, false, 236) == 1)) {
                        // line 237
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 238
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 241
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "request", [], "any", false, false, false, 241), "get", [0 => "_route"], "method", false, false, false, 241) == "app_journalier")) {
                        // line 242
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 243
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repas"], "titre", [], "any", false, false, false, 243), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 244
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repas"], "tempsTask", [], "any", false, false, false, 244), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 247
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 247), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 247, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 248
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repas"], "titre", [], "any", false, false, false, 248), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 249
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repas"], "tempsTask", [], "any", false, false, false, 249), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 253
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "request", [], "any", false, false, false, 253), "get", [0 => "_route"], "method", false, false, false, 253) == "app_journalier_date")) {
                        // line 254
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 254), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 254, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 255
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 259
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 259)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 260
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "request", [], "any", false, false, false, 264), "get", [0 => "_route"], "method", false, false, false, 264) == "app_journalier_date")) {
                        // line 265
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 265), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 265, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 266
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 270
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 270)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 271
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 275
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repas'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 278
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 280
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 280) == "Obligations familiales")) {
                // line 281
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"obligationApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des obligations familiales :</h2>
\t\t\t\t\t\t\t";
                // line 283
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["diffObli"]) || array_key_exists("diffObli", $context) ? $context["diffObli"] : (function () { throw new RuntimeError('Variable "diffObli" does not exist.', 283, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["obligation"]) {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t";
                    // line 285
                    if ((twig_get_attribute($this->env, $this->source, $context["obligation"], "statut", [], "any", false, false, false, 285) == 1)) {
                        // line 286
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 287
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 290
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "get", [0 => "_route"], "method", false, false, false, 290) == "app_journalier")) {
                        // line 291
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["obligation"], "id", [], "any", false, false, false, 291)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 292
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obligation"], "titre", [], "any", false, false, false, 292), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 293
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obligation"], "tempsTask", [], "any", false, false, false, 293), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 296
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["obligation"], "id", [], "any", false, false, false, 296), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 296, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 297
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obligation"], "titre", [], "any", false, false, false, 297), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 298
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obligation"], "tempsTask", [], "any", false, false, false, 298), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 301
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 302
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "request", [], "any", false, false, false, 302), "get", [0 => "_route"], "method", false, false, false, 302) == "app_journalier_date")) {
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["obligation"], "id", [], "any", false, false, false, 303), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 303, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 304
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 308
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["obligation"], "id", [], "any", false, false, false, 308)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 309
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 313
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 314
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                    echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 318
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-liste.png"), "html", null, true);
                    echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 321
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "request", [], "any", false, false, false, 321), "get", [0 => "_route"], "method", false, false, false, 321) == "app_journalier_date")) {
                        // line 322
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["obligation"], "id", [], "any", false, false, false, 322), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 322, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 323
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 327
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["obligation"], "id", [], "any", false, false, false, 327)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 328
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 332
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obligation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 335
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 337
            echo "
\t\t\t\t\t";
            // line 339
            echo "\t\t\t\t\t";
            if (array_key_exists("diffActiJournalier", $context)) {
                // line 340
                echo "\t\t\t\t\t\t";
                $context["activitesGroupedByMetier"] = [];
                // line 341
                echo "
\t\t\t\t\t\t";
                // line 342
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["diffActiJournalier"]) || array_key_exists("diffActiJournalier", $context) ? $context["diffActiJournalier"] : (function () { throw new RuntimeError('Variable "diffActiJournalier" does not exist.', 342, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                    // line 343
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 343) == twig_get_attribute($this->env, $this->source, $context["activite"], "idPrecis", [], "any", false, false, false, 343))) {
                        // line 344
                        echo "\t\t\t\t\t\t\t\t";
                        $context["idApparaitre"] = (twig_get_attribute($this->env, $this->source, $context["activite"], "idPrecis", [], "any", false, false, false, 344) . "Apparaitre");
                        // line 345
                        echo "\t\t\t\t\t\t\t\t";
                        $context["activitesGroup"] = (((twig_get_attribute($this->env, $this->source, ($context["activitesGroupedByMetier"] ?? null), (isset($context["idApparaitre"]) || array_key_exists("idApparaitre", $context) ? $context["idApparaitre"] : (function () { throw new RuntimeError('Variable "idApparaitre" does not exist.', 345, $this->source); })()), [], "array", true, true, false, 345) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["activitesGroupedByMetier"] ?? null), (isset($context["idApparaitre"]) || array_key_exists("idApparaitre", $context) ? $context["idApparaitre"] : (function () { throw new RuntimeError('Variable "idApparaitre" does not exist.', 345, $this->source); })()), [], "array", false, false, false, 345)))) ? (twig_get_attribute($this->env, $this->source, ($context["activitesGroupedByMetier"] ?? null), (isset($context["idApparaitre"]) || array_key_exists("idApparaitre", $context) ? $context["idApparaitre"] : (function () { throw new RuntimeError('Variable "idApparaitre" does not exist.', 345, $this->source); })()), [], "array", false, false, false, 345)) : ([]));
                        // line 346
                        echo "\t\t\t\t\t\t\t\t";
                        $context["activitesGroup"] = twig_array_merge((isset($context["activitesGroup"]) || array_key_exists("activitesGroup", $context) ? $context["activitesGroup"] : (function () { throw new RuntimeError('Variable "activitesGroup" does not exist.', 346, $this->source); })()), [0 => $context["activite"]]);
                        // line 347
                        echo "\t\t\t\t\t\t\t\t";
                        $context["activitesGroupedByMetier"] = twig_array_merge((isset($context["activitesGroupedByMetier"]) || array_key_exists("activitesGroupedByMetier", $context) ? $context["activitesGroupedByMetier"] : (function () { throw new RuntimeError('Variable "activitesGroupedByMetier" does not exist.', 347, $this->source); })()), [(isset($context["idApparaitre"]) || array_key_exists("idApparaitre", $context) ? $context["idApparaitre"] : (function () { throw new RuntimeError('Variable "idApparaitre" does not exist.', 347, $this->source); })()) => (isset($context["activitesGroup"]) || array_key_exists("activitesGroup", $context) ? $context["activitesGroup"] : (function () { throw new RuntimeError('Variable "activitesGroup" does not exist.', 347, $this->source); })())]);
                        // line 348
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 349
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "

\t\t\t\t\t\t";
                // line 352
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["activitesGroupedByMetier"]) || array_key_exists("activitesGroupedByMetier", $context) ? $context["activitesGroupedByMetier"] : (function () { throw new RuntimeError('Variable "activitesGroupedByMetier" does not exist.', 352, $this->source); })()));
                foreach ($context['_seq'] as $context["metierId"] => $context["activitesGroup"]) {
                    // line 353
                    echo "\t\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"";
                    echo twig_escape_filter($this->env, $context["metierId"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails :</h2>
\t\t\t\t\t\t\t\t";
                    // line 355
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["activitesGroup"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                        // line 356
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 357
                        if ((twig_get_attribute($this->env, $this->source, $context["activite"], "statut", [], "any", false, false, false, 357) == 1)) {
                            // line 358
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                            // line 359
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                            echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 362
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 362, $this->source); })()), "request", [], "any", false, false, false, 362), "get", [0 => "_route"], "method", false, false, false, 362) == "app_journalier")) {
                            // line 363
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 363)]), "html", null, true);
                            echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 364
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "titre", [], "any", false, false, false, 364), "html", null, true);
                            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 365
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "tempsTask", [], "any", false, false, false, 365), "H:i"), "html", null, true);
                            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 368
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 368), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 368, $this->source); })()), "Y-m-d")]), "html", null, true);
                            echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 369
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "titre", [], "any", false, false, false, 369), "html", null, true);
                            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                            // line 370
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "tempsTask", [], "any", false, false, false, 370), "H:i"), "html", null, true);
                            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 373
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["activite"], "telephone", [], "any", false, false, false, 373) != null)) {
                            // line 374
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 375
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "request", [], "any", false, false, false, 375), "get", [0 => "_route"], "method", false, false, false, 375) == "app_journalier_date")) {
                                // line 376
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, ("https://www.google.com/maps/search/?api=1&query=" . twig_get_attribute($this->env, $this->source, $context["activite"], "lieuRdv", [], "any", false, false, false, 376)), "html", null, true);
                                echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                                // line 377
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-localisation.png"), "html", null, true);
                                echo "\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">lieu du RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 381
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, ("https://www.google.com/maps/search/?api=1&query=" . twig_get_attribute($this->env, $this->source, $context["activite"], "lieuRdv", [], "any", false, false, false, 381)), "html", null, true);
                                echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                                // line 382
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-localisation.png"), "html", null, true);
                                echo "\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">lieu du RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 386
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"tel:";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "telephone", [], "any", false, false, false, 386), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                            // line 387
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-appel-a-donner.png"), "html", null, true);
                            echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Appel à donner</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%;\" src=\"";
                            // line 391
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-horloge.png"), "html", null, true);
                            echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">";
                            // line 392
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "horraire", [], "any", false, false, false, 392), "H:i"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 395
$context["activite"], "titre", [], "any", false, false, false, 395) != "Reste du temps")) {
                            // line 396
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 397
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 397, $this->source); })()), "request", [], "any", false, false, false, 397), "get", [0 => "_route"], "method", false, false, false, 397) == "app_journalier_date")) {
                                // line 398
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 398), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 398, $this->source); })()), "Y-m-d")]), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 399
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                                echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 403
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 403)]), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 404
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                                echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 408
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                            // line 409
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                            echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 412
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 412, $this->source); })()), "request", [], "any", false, false, false, 412), "get", [0 => "_route"], "method", false, false, false, 412) == "app_journalier_date")) {
                                // line 413
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 413), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 413, $this->source); })()), "Y-m-d")]), "html", null, true);
                                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                                // line 414
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                                echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 418
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 418)]), "html", null, true);
                                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                                // line 419
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                                echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 423
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 425
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 426
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "request", [], "any", false, false, false, 426), "get", [0 => "_route"], "method", false, false, false, 426) == "app_journalier_date")) {
                                // line 427
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 427), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 427, $this->source); })()), "Y-m-d")]), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 428
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-rdv-a-prendre.png"), "html", null, true);
                                echo "\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter un RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 432
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_rdv_add", ["id_type" => twig_get_attribute($this->env, $this->source, $context["activite"], "idPrecis", [], "any", false, false, false, 432)]), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 433
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-rdv-a-prendre.png"), "html", null, true);
                                echo "\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter un RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 437
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                            // line 438
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-choses-a-faire-todo.png"), "html", null, true);
                            echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Choses à faire</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 442
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-des-objectif.png"), "html", null, true);
                            echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Objectifs</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 447
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 449
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['metierId'], $context['activitesGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 451
                echo "\t\t\t\t\t";
            }
            // line 452
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 452) == "Rendez-Vous")) {
                // line 453
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"RDVApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des rendez-vous :</h2>
\t\t\t\t\t\t\t";
                // line 455
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeRDV"]) || array_key_exists("listeRDV", $context) ? $context["listeRDV"] : (function () { throw new RuntimeError('Variable "listeRDV" does not exist.', 455, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
                    // line 456
                    echo "\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t";
                    // line 457
                    if ((twig_get_attribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 457) == 1)) {
                        // line 458
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 459
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 462
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 462, $this->source); })()), "request", [], "any", false, false, false, 462), "get", [0 => "_route"], "method", false, false, false, 462) == "app_journalier")) {
                        // line 463
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 463)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 464
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "titre", [], "any", false, false, false, 464), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 465
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "tempsTask", [], "any", false, false, false, 465), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 468
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 468), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 468, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 469
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "titre", [], "any", false, false, false, 469), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 470
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "tempsTask", [], "any", false, false, false, 470), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 473
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 474
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 474, $this->source); })()), "request", [], "any", false, false, false, 474), "get", [0 => "_route"], "method", false, false, false, 474) == "app_journalier_date")) {
                        // line 475
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_rdv", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 475), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 475, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 476
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 480
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_rdv", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 480)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 481
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 485
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%;\" src=\"";
                    // line 486
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-horloge.png"), "html", null, true);
                    echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">";
                    // line 487
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "horraire", [], "any", false, false, false, 487), "H:i"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"tel:";
                    // line 489
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "telephone", [], "any", false, false, false, 489), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 490
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-rdv-a-prendre.png"), "html", null, true);
                    echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Coordonnées</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                    // line 493
                    echo twig_escape_filter($this->env, ("https://www.google.com/maps/search/?api=1&query=" . twig_get_attribute($this->env, $this->source, $context["rdv"], "lieuRdv", [], "any", false, false, false, 493)), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 494
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-localisation.png"), "html", null, true);
                    echo "\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">lieu du RDV</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 497
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "request", [], "any", false, false, false, 497), "get", [0 => "_route"], "method", false, false, false, 497) == "app_journalier_date")) {
                        // line 498
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 498), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 498, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 499
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 503
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 503)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 504
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 508
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 511
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 513
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 513) == "Mes Loisirs")) {
                // line 514
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"loisirApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des loisirs :</h2>
\t\t\t\t\t\t\t";
                // line 516
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeLoisirs"]) || array_key_exists("listeLoisirs", $context) ? $context["listeLoisirs"] : (function () { throw new RuntimeError('Variable "listeLoisirs" does not exist.', 516, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["loisir"]) {
                    // line 517
                    echo "\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t";
                    // line 518
                    if ((twig_get_attribute($this->env, $this->source, $context["loisir"], "statut", [], "any", false, false, false, 518) == 1)) {
                        // line 519
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 520
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 523
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 523, $this->source); })()), "request", [], "any", false, false, false, 523), "get", [0 => "_route"], "method", false, false, false, 523) == "app_journalier")) {
                        // line 524
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", [], "any", false, false, false, 524)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 525
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "titre", [], "any", false, false, false, 525), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 526
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "tempsTask", [], "any", false, false, false, 526), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 529
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", [], "any", false, false, false, 529), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 529, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 530
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "titre", [], "any", false, false, false, 530), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 531
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "tempsTask", [], "any", false, false, false, 531), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 534
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 535
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 535, $this->source); })()), "request", [], "any", false, false, false, 535), "get", [0 => "_route"], "method", false, false, false, 535) == "app_journalier_date")) {
                        // line 536
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", [], "any", false, false, false, 536), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 536, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 537
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 541
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", [], "any", false, false, false, 541)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 542
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 546
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 547
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                    echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 551
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-liste.png"), "html", null, true);
                    echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 554
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "request", [], "any", false, false, false, 554), "get", [0 => "_route"], "method", false, false, false, 554) == "app_journalier_date")) {
                        // line 555
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", [], "any", false, false, false, 555), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 555, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 556
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 560
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "id", [], "any", false, false, false, 560)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 561
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 565
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisir'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 568
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 570
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 570) == "Mes Liens Sociaux")) {
                // line 571
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"lienApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des liens :</h2>
\t\t\t\t\t\t\t";
                // line 573
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeLiens"]) || array_key_exists("listeLiens", $context) ? $context["listeLiens"] : (function () { throw new RuntimeError('Variable "listeLiens" does not exist.', 573, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
                    // line 574
                    echo "\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t";
                    // line 575
                    if ((twig_get_attribute($this->env, $this->source, $context["lien"], "statut", [], "any", false, false, false, 575) == 1)) {
                        // line 576
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 577
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 580
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "request", [], "any", false, false, false, 580), "get", [0 => "_route"], "method", false, false, false, 580) == "app_journalier")) {
                        // line 581
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["lien"], "id", [], "any", false, false, false, 581)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 582
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "titre", [], "any", false, false, false, 582), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 583
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "tempsTask", [], "any", false, false, false, 583), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 586
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["lien"], "id", [], "any", false, false, false, 586), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 586, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 587
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "titre", [], "any", false, false, false, 587), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                        // line 588
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "tempsTask", [], "any", false, false, false, 588), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 591
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 592
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 592, $this->source); })()), "request", [], "any", false, false, false, 592), "get", [0 => "_route"], "method", false, false, false, 592) == "app_journalier_date")) {
                        // line 593
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["lien"], "id", [], "any", false, false, false, 593), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 593, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 594
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 598
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["lien"], "id", [], "any", false, false, false, 598)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 599
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 603
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 604
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                    echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 608
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-liste.png"), "html", null, true);
                    echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 611
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 611, $this->source); })()), "request", [], "any", false, false, false, 611), "get", [0 => "_route"], "method", false, false, false, 611) == "app_journalier_date")) {
                        // line 612
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["lien"], "id", [], "any", false, false, false, 612), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 612, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 613
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 617
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["lien"], "id", [], "any", false, false, false, 617)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 618
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 622
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 625
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 627
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 627) == "Plan d'Actions Objectifs")) {
                // line 628
                echo "\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"ObjectifApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Plans d'actions :</h2>
\t\t\t\t\t\t\t";
                // line 630
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listePDA"]) || array_key_exists("listePDA", $context) ? $context["listePDA"] : (function () { throw new RuntimeError('Variable "listePDA" does not exist.', 630, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 631
                    echo "\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t";
                    // line 632
                    if ((twig_get_attribute($this->env, $this->source, $context["action"], "statut", [], "any", false, false, false, 632) == 1)) {
                        // line 633
                        echo "\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"";
                        // line 634
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                        echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 637
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "request", [], "any", false, false, false, 637), "get", [0 => "_route"], "method", false, false, false, 637) == "app_journalier")) {
                        // line 638
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 638)]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t<h3>";
                        // line 639
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "titre", [], "any", false, false, false, 639), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t<h3>";
                        // line 640
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "tempsTask", [], "any", false, false, false, 640), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 643
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 643), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 643, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t<h3>";
                        // line 644
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "titre", [], "any", false, false, false, 644), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t\t<h3>";
                        // line 645
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "tempsTask", [], "any", false, false, false, 645), "H:i"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 648
                    echo "\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t";
                    // line 649
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 649, $this->source); })()), "request", [], "any", false, false, false, 649), "get", [0 => "_route"], "method", false, false, false, 649) == "app_journalier_date")) {
                        // line 650
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_date", ["id" => twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 650), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 650, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 651
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 655
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_modifier_tache_jour", ["id" => twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 655)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 656
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
                        echo "\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 660
                    echo "\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"";
                    // line 661
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-decaler.png"), "html", null, true);
                    echo "\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 665
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-liste.png"), "html", null, true);
                    echo "\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 668
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 668, $this->source); })()), "request", [], "any", false, false, false, 668), "get", [0 => "_route"], "method", false, false, false, 668) == "app_journalier_date")) {
                        // line 669
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 669), "date" => twig_date_format_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 669, $this->source); })()), "Y-m-d")]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 670
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 674
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 674)]), "html", null, true);
                        echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"";
                        // line 675
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                        echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 679
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 682
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 684
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "\t</div>
\t<form id=\"dateForm\">
\t\t<label for=\"selectedDate\">Consulter une autre date :</label>
\t\t<input type=\"date\" id=\"selectedDate\" name=\"date\">
\t</form>
</section>

<script>
\tdocument.getElementById('selectedDate').addEventListener('change', function () {
var selectedDate = document.getElementById('selectedDate').value;
var url = \"";
        // line 695
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier_date", ["date" => "selectedDate"]);
        echo "\".replace('selectedDate', selectedDate);
window.location.href = url;
});
</script>
<script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/display.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/journalier/journalier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1781 => 699,  1774 => 695,  1762 => 685,  1756 => 684,  1752 => 682,  1744 => 679,  1737 => 675,  1732 => 674,  1725 => 670,  1720 => 669,  1718 => 668,  1712 => 665,  1705 => 661,  1702 => 660,  1695 => 656,  1690 => 655,  1683 => 651,  1678 => 650,  1676 => 649,  1673 => 648,  1667 => 645,  1663 => 644,  1658 => 643,  1652 => 640,  1648 => 639,  1643 => 638,  1640 => 637,  1634 => 634,  1631 => 633,  1629 => 632,  1626 => 631,  1622 => 630,  1618 => 628,  1615 => 627,  1611 => 625,  1603 => 622,  1596 => 618,  1591 => 617,  1584 => 613,  1579 => 612,  1577 => 611,  1571 => 608,  1564 => 604,  1561 => 603,  1554 => 599,  1549 => 598,  1542 => 594,  1537 => 593,  1535 => 592,  1532 => 591,  1526 => 588,  1522 => 587,  1517 => 586,  1511 => 583,  1507 => 582,  1502 => 581,  1499 => 580,  1493 => 577,  1490 => 576,  1488 => 575,  1485 => 574,  1481 => 573,  1477 => 571,  1474 => 570,  1470 => 568,  1462 => 565,  1455 => 561,  1450 => 560,  1443 => 556,  1438 => 555,  1436 => 554,  1430 => 551,  1423 => 547,  1420 => 546,  1413 => 542,  1408 => 541,  1401 => 537,  1396 => 536,  1394 => 535,  1391 => 534,  1385 => 531,  1381 => 530,  1376 => 529,  1370 => 526,  1366 => 525,  1361 => 524,  1358 => 523,  1352 => 520,  1349 => 519,  1347 => 518,  1344 => 517,  1340 => 516,  1336 => 514,  1333 => 513,  1329 => 511,  1321 => 508,  1314 => 504,  1309 => 503,  1302 => 499,  1297 => 498,  1295 => 497,  1289 => 494,  1285 => 493,  1279 => 490,  1275 => 489,  1270 => 487,  1266 => 486,  1263 => 485,  1256 => 481,  1251 => 480,  1244 => 476,  1239 => 475,  1237 => 474,  1234 => 473,  1228 => 470,  1224 => 469,  1219 => 468,  1213 => 465,  1209 => 464,  1204 => 463,  1201 => 462,  1195 => 459,  1192 => 458,  1190 => 457,  1187 => 456,  1183 => 455,  1179 => 453,  1176 => 452,  1173 => 451,  1166 => 449,  1159 => 447,  1151 => 442,  1144 => 438,  1139 => 437,  1132 => 433,  1127 => 432,  1120 => 428,  1115 => 427,  1113 => 426,  1110 => 425,  1106 => 423,  1099 => 419,  1094 => 418,  1087 => 414,  1082 => 413,  1080 => 412,  1074 => 409,  1071 => 408,  1064 => 404,  1059 => 403,  1052 => 399,  1047 => 398,  1045 => 397,  1042 => 396,  1040 => 395,  1034 => 392,  1030 => 391,  1023 => 387,  1018 => 386,  1011 => 382,  1006 => 381,  999 => 377,  994 => 376,  992 => 375,  989 => 374,  986 => 373,  980 => 370,  976 => 369,  971 => 368,  965 => 365,  961 => 364,  956 => 363,  953 => 362,  947 => 359,  944 => 358,  942 => 357,  939 => 356,  935 => 355,  929 => 353,  925 => 352,  921 => 350,  915 => 349,  912 => 348,  909 => 347,  906 => 346,  903 => 345,  900 => 344,  897 => 343,  893 => 342,  890 => 341,  887 => 340,  884 => 339,  881 => 337,  877 => 335,  869 => 332,  862 => 328,  857 => 327,  850 => 323,  845 => 322,  843 => 321,  837 => 318,  830 => 314,  827 => 313,  820 => 309,  815 => 308,  808 => 304,  803 => 303,  801 => 302,  798 => 301,  792 => 298,  788 => 297,  783 => 296,  777 => 293,  773 => 292,  768 => 291,  765 => 290,  759 => 287,  756 => 286,  754 => 285,  751 => 284,  747 => 283,  743 => 281,  740 => 280,  736 => 278,  728 => 275,  721 => 271,  716 => 270,  709 => 266,  704 => 265,  701 => 264,  694 => 260,  689 => 259,  682 => 255,  677 => 254,  675 => 253,  672 => 252,  666 => 249,  662 => 248,  657 => 247,  651 => 244,  647 => 243,  642 => 242,  639 => 241,  633 => 238,  630 => 237,  628 => 236,  625 => 235,  621 => 234,  617 => 232,  614 => 231,  610 => 229,  602 => 226,  595 => 222,  590 => 221,  583 => 217,  578 => 216,  576 => 215,  570 => 212,  563 => 208,  559 => 207,  553 => 204,  549 => 203,  546 => 202,  540 => 199,  536 => 198,  531 => 197,  525 => 194,  521 => 193,  516 => 192,  513 => 191,  507 => 188,  504 => 187,  502 => 186,  499 => 185,  495 => 184,  491 => 182,  489 => 181,  485 => 179,  482 => 178,  480 => 167,  477 => 166,  470 => 162,  467 => 161,  465 => 160,  459 => 157,  456 => 156,  453 => 155,  450 => 154,  443 => 150,  438 => 149,  431 => 145,  426 => 144,  423 => 143,  420 => 142,  418 => 141,  415 => 140,  408 => 136,  403 => 135,  400 => 134,  397 => 133,  394 => 132,  392 => 131,  386 => 128,  381 => 127,  379 => 126,  373 => 123,  368 => 122,  365 => 121,  362 => 120,  355 => 116,  352 => 115,  350 => 114,  344 => 111,  341 => 110,  339 => 109,  333 => 106,  330 => 105,  328 => 104,  322 => 101,  319 => 100,  317 => 99,  311 => 96,  306 => 95,  304 => 94,  298 => 91,  295 => 90,  293 => 89,  287 => 86,  284 => 85,  281 => 84,  278 => 83,  275 => 82,  268 => 78,  263 => 77,  261 => 76,  255 => 73,  252 => 72,  250 => 71,  244 => 68,  241 => 67,  239 => 66,  233 => 63,  230 => 62,  228 => 61,  222 => 58,  219 => 57,  217 => 56,  211 => 53,  208 => 52,  205 => 51,  203 => 50,  200 => 49,  194 => 46,  190 => 45,  185 => 44,  179 => 41,  175 => 40,  170 => 39,  167 => 38,  161 => 35,  158 => 34,  156 => 33,  153 => 32,  149 => 31,  141 => 26,  134 => 22,  126 => 17,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Mon Journalier
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('journalier') }}
{% endblock %}
{% block body %}
\t<section class=\"section-journalier\">
\t\t<div class=\"container-text-principal\">
\t\t\t<h1>Ma liste des tâches à réaliser le jour
\t\t\t\t<br>je la check au fur et à mesure des réalisations</h1>
\t\t</div>
\t\t<div class=\"container-time\">
\t\t\t<div class=\"container-image\">
\t\t\t\t<img src=\"{{ asset('img/picto-sablier.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"container-time\">
\t\t\t\t<div class=\"container-title-time\">
\t\t\t\t\t<h2>Mon temps engagé</h2>
\t\t\t\t\t<h2>{{ totalTempsHeures }}</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"container-title-time\">
\t\t\t\t\t<h2>Reste Disponible</h2>
\t\t\t\t\t<h2>{{ totalTempsDisponible }}</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-tasks\">
\t\t\t{% for entry in journalier %}
\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t{% if entry.statut == 1 %}
\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': entry.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t<h3>{{ entry.titre }}</h3>
\t\t\t\t\t\t\t<h3>{{ entry.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': entry.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t<h3>{{ entry.titre }}</h3>
\t\t\t\t\t\t\t<h3>{{ entry.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t{% if entry.titre == 'Petites Choses à faire du Jour' or entry.titre == 'Obligations familiales' or entry.titre == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t\t{% if entry.titre == 'Petites Choses à faire du Jour' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('choseApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Obligations familiales' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('obligationApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('repasApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Obligations familiales' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('obligationApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == \"Plan d'Actions Objectifs\" %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('ObjectifApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre != 'Sommeil' and entry.titre != 'Manger (Tps de preparation Repas inclus)' and entry.titre != \"Se laver / s'habiller et autres besoins quotidiens de vie\" and entry.titre != \"Imprévus du jour\" and entry.titre != 'Mes Loisirs' and entry.titre != \"Plan d'Actions Objectifs\" %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('{{ entry.id }}Apparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% if entry.titre == 'Obligations familiales' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('obligationApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Rendez-Vous' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('RDVApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre != 'Sommeil' and entry.titre != 'Manger (Tps de preparation Repas inclus)' and entry.titre != \"Se laver / s'habiller et autres besoins quotidiens de vie\" and entry.titre != \"Imprévus du jour\" and entry.titre != 'Mes Loisirs' and entry.titre != 'Mes Liens Sociaux' and entry.titre != \"Plan d'Actions Objectifs\" %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('{{ entry.id }}Apparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Mes Loisirs' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('loisirApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Mes Liens Sociaux' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('lienApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Rendez-Vous' %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('RDVApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == \"Plan d'Actions Objectifs\" %}
\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('ObjectifApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': entry.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Imprévus du jour' %}
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_calendrier_choses_a_faire') }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == 'Rendez-Vous' %}
\t\t\t\t\t\t\t{% elseif entry.titre == 'Mes Loisirs' %}
\t\t\t\t\t\t\t{% elseif entry.titre == 'Mes Liens Sociaux' %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if entry.titre == 'Sommeil' or entry.titre == 'Manger (Tps de preparation Repas inclus)' or entry.titre == \"Se laver / s'habiller et autres besoins quotidiens de vie\" or entry.titre == \"Imprévus du jour\" %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') != 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_report', {'id': entry.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_report', {'id': entry.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif%}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if entry.titre == 'Petites Choses à faire du Jour' %}
\t\t\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('choseApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% elseif entry.titre == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t\t\t\t\t<a onclick=\"toggleDisplay('repasApparaitre')\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-zoom.png') }}\" alt=\"Zoom\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Zoom</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{#{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': entry.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': entry.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}#}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if entry.titre == 'Petites Choses à faire du Jour' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"choseApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des petites choses à faire :</h2>
\t\t\t\t\t\t\t{% for chose in ChosesAFaire %}
\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t{% if chose.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': chose.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ chose.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ chose.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': chose.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ chose.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ chose.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_calendrier_choses_a_faire') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_calendrier_choses_a_faire') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-liste.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': chose.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': chose.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if entry.titre == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"repasApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des repas :</h2>
\t\t\t\t\t\t\t{% for repas in diffRepas %}
\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t{% if repas.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': repas.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ repas.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ repas.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': repas.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ repas.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ repas.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': repas.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': repas.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': repas.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': repas.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if entry.titre == 'Obligations familiales' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"obligationApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des obligations familiales :</h2>
\t\t\t\t\t\t\t{% for obligation in diffObli %}
\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t{% if obligation.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': obligation.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ obligation.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ obligation.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': obligation.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ obligation.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ obligation.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': obligation.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': obligation.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-liste.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': obligation.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': obligation.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# Listes les différentes tâches de chaques metiers #}
\t\t\t\t\t{% if diffActiJournalier is defined %}
\t\t\t\t\t\t{% set activitesGroupedByMetier = {} %}

\t\t\t\t\t\t{% for activite in diffActiJournalier %}
\t\t\t\t\t\t\t{% if entry.id == activite.idPrecis %}
\t\t\t\t\t\t\t\t{% set idApparaitre = activite.idPrecis ~ 'Apparaitre' %}
\t\t\t\t\t\t\t\t{% set activitesGroup = activitesGroupedByMetier[idApparaitre] ?? [] %}
\t\t\t\t\t\t\t\t{% set activitesGroup = activitesGroup|merge([activite]) %}
\t\t\t\t\t\t\t\t{% set activitesGroupedByMetier = activitesGroupedByMetier|merge({ (idApparaitre): activitesGroup }) %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t{% for metierId, activitesGroup in activitesGroupedByMetier %}
\t\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"{{ metierId }}\">
\t\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails :</h2>
\t\t\t\t\t\t\t\t{% for activite in activitesGroup %}
\t\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t\t{% if activite.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': activite.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ activite.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ activite.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': activite.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ activite.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ activite.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if activite.telephone != null %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ 'https://www.google.com/maps/search/?api=1&query=' ~ activite.lieuRdv }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-localisation.png') }}\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">lieu du RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ 'https://www.google.com/maps/search/?api=1&query=' ~ activite.lieuRdv }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-localisation.png') }}\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">lieu du RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"tel:{{ activite.telephone }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-appel-a-donner.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Appel à donner</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%;\" src=\"{{ asset('img/icon-horloge.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">{{ activite.horraire|date('H:i') }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% elseif activite.titre != \"Reste du temps\"%}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': activite.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': activite.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': activite.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': activite.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': activite.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-rdv-a-prendre.png') }}\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter un RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_rdv_add', {'id_type': activite.idPrecis}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-rdv-a-prendre.png') }}\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter un RDV</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_calendrier_choses_a_faire') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-choses-a-faire-todo.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Choses à faire</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-des-objectif.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Objectifs</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if entry.titre == 'Rendez-Vous' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"RDVApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des rendez-vous :</h2>
\t\t\t\t\t\t\t{% for rdv in listeRDV %}
\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t{% if rdv.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': rdv.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ rdv.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ rdv.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': rdv.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ rdv.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ rdv.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_rdv', {'id': rdv.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_rdv', {'id': rdv.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%;\" src=\"{{ asset('img/icon-horloge.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">{{ rdv.horraire|date('H:i') }}</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"tel:{{ rdv.telephone }}\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-rdv-a-prendre.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Coordonnées</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ 'https://www.google.com/maps/search/?api=1&query=' ~ rdv.lieuRdv }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-localisation.png') }}\" alt=\"Rendez-vous à prendre\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">lieu du RDV</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': rdv.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': rdv.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if entry.titre == 'Mes Loisirs' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"loisirApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des loisirs :</h2>
\t\t\t\t\t\t\t{% for loisir in listeLoisirs %}
\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t{% if loisir.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': loisir.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ loisir.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ loisir.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': loisir.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ loisir.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ loisir.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': loisir.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': loisir.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-liste.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': loisir.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': loisir.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if entry.titre == 'Mes Liens Sociaux' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"lienApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Détails des liens :</h2>
\t\t\t\t\t\t\t{% for lien in listeLiens %}
\t\t\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t\t\t{% if lien.statut == 1 %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': lien.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ lien.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ lien.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': lien.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ lien.titre }}</h3>
\t\t\t\t\t\t\t\t\t\t\t<h3>{{ lien.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': lien.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': lien.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-liste.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': lien.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': lien.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if entry.titre == 'Plan d\\'Actions Objectifs' %}
\t\t\t\t\t\t<div class=\"zoom-journalier\" id=\"ObjectifApparaitre\">
\t\t\t\t\t\t\t<h2 class=\"titre-zoom\">Plans d'actions :</h2>
\t\t\t\t\t\t\t{% for action in listePDA %}
\t\t\t\t\t\t<div class=\"tasks\">
\t\t\t\t\t\t\t{% if action.statut == 1 %}
\t\t\t\t\t\t\t\t<div style=\"width: 10%; margin-right: 1%; height: 100%; display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 75%;\" src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier' %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_set_statut', {'id': action.id}) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t<h3>{{ action.titre }}</h3>
\t\t\t\t\t\t\t\t\t<h3>{{ action.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_journalier_date_set_statut', {'id': action.id, 'date': currentDate|date('Y-m-d') }) }}\" class=\"container-title\">
\t\t\t\t\t\t\t\t\t<h3>{{ action.titre }}</h3>
\t\t\t\t\t\t\t\t\t<h3>{{ action.tempsTask|date(\"H:i\") }}</h3>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_date', {'id': action.id, 'date': currentDate|date('Y-m-d') }) }}\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_modifier_tache_jour', {'id': action.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 70%\" src=\"{{ asset('img/picto-decaler.png') }}\" alt=\"Decaler la tâche\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reporter</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-liste.png') }}\" alt=\"Liste associée\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Liste associée</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% if app.request.get('_route') == 'app_journalier_date' %}
\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_date_delete', {'id': action.id, 'date': currentDate|date('Y-m-d')}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_journalier_delete', {'id': action.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche du journalier ?')\">
\t\t\t\t\t\t\t\t\t\t<img style=\"width: 90%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
\t<form id=\"dateForm\">
\t\t<label for=\"selectedDate\">Consulter une autre date :</label>
\t\t<input type=\"date\" id=\"selectedDate\" name=\"date\">
\t</form>
</section>

<script>
\tdocument.getElementById('selectedDate').addEventListener('change', function () {
var selectedDate = document.getElementById('selectedDate').value;
var url = \"{{ path('app_journalier_date', {'date': 'selectedDate'})|raw }}\".replace('selectedDate', selectedDate);
window.location.href = url;
});
</script>
<script src=\"{{ asset('js/display.js') }}\"></script>{% endblock %}
", "pages/journalier/journalier.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/journalier/journalier.html.twig");
    }
}
