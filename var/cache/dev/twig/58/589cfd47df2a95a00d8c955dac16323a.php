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

/* pages/rythme_vital/besoins_vitaux.html.twig */
class __TwigTemplate_cf6248267c7d03ae01b784560ddedfba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/besoins_vitaux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/besoins_vitaux.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/besoins_vitaux.html.twig", 1);
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

        echo "Waou - Liste des besoins vitaux
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_ajouter_besoin_vital");
        echo "\">Ajouter</a>
\t\t<div class=\"container-texte-exemple\">
\t\t\t<h3>Dans cette page,  j'indique le temps que je consacre chaque jour à MES BESOINS VITAUX
\t\t\t\t<br>(Temps physiologique) dont 3 sont universels :
\t\t\t\t<br><br>
\t\t\t\tDormir, Manger, S’entretenir (s'habiller/se Laver…)<br><br>J'ajoute éventuellement un besoin vital spécifique à ma propre situation personnelle.<br><br>Exemple : “Soin médical journalier”</h3>
\t\t</div>
\t\t<div class=\"container-cards\">
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstBesoinsVitaux"]) || array_key_exists("lstBesoinsVitaux", $context) ? $context["lstBesoinsVitaux"] : (function () { throw new RuntimeError('Variable "lstBesoinsVitaux" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 21
            echo "\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 23) == "Sommeil")) {
                // line 24
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-dormir.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
$context["entry"], "intitule", [], "any", false, false, false, 25) == "Manger (Tps de preparation Repas inclus)")) {
                // line 26
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-manger.jpeg"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 27
$context["entry"], "intitule", [], "any", false, false, false, 27) == "Se lever / s'habiller et autres besoins de vie")) {
                // line 28
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-se-laver.jpeg"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto_autre_temps.png"), "html", null, true);
                echo "\">\t
\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 32) == "Manger (Tps de preparation Repas inclus)")) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">Manger <span style=\"font-size: 0.8rem\"><br>(Tps de preparation Repas inclus)</span></h1>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["entry"], "intitule", [], "any", false, false, false, 34) == "Se lever / s'habiller et autres besoins de vie")) {
                // line 35
                echo "\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">S'entretenir
\t\t\t\t\t\t\t\t<br><span style=\"font-size: 0.8rem\">(Se lever, s'habiller et autres besoins de vie)</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 39), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<p>Usage de mon temps cible
\t\t\t\t\t\t\t\t\t<span>(moyenne par jour)</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 47
            $context["totalSeconds"] = ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "lundi", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mardi", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mercredi", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "jeudi", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "vendredi", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "samedi", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "dimanche", [], "any", false, false, false, 47), "getTimestamp", [], "method", false, false, false, 47));
            // line 48
            echo "\t\t\t\t\t\t\t\t";
            $context["averageSecondsPerDay"] = ((isset($context["totalSeconds"]) || array_key_exists("totalSeconds", $context) ? $context["totalSeconds"] : (function () { throw new RuntimeError('Variable "totalSeconds" does not exist.', 48, $this->source); })()) / 7);
            // line 49
            echo "\t\t\t\t\t\t\t\t";
            $context["averagePercentage"] = (((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 49, $this->source); })()) / (24 * 3600)) * 100);
            // line 50
            echo "\t\t\t\t\t\t\t\t";
            $context["roundedPercentage"] = (twig_round(((isset($context["averagePercentage"]) || array_key_exists("averagePercentage", $context) ? $context["averagePercentage"] : (function () { throw new RuntimeError('Variable "averagePercentage" does not exist.', 50, $this->source); })()) * 2)) / 2);
            // line 51
            echo "\t\t\t\t\t\t\t\t";
            // line 52
            echo "\t\t\t\t\t\t\t\t";
            $context["averageHoursPerDay"] = ((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 52, $this->source); })()) / 3600);
            // line 53
            echo "\t\t\t\t\t\t\t\t";
            $context["hours"] = (twig_round(((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 53, $this->source); })()) * 2)) / twig_round(2, 0, "floor"));
            // line 54
            echo "\t\t\t\t\t\t\t\t";
            $context["minutes"] = twig_round((((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 54, $this->source); })()) * 60) % 60));
            // line 55
            echo "\t\t\t\t\t\t\t\t";
            $context["formattedTime"] = twig_sprintf("%02dh%02d", (isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 55, $this->source); })()), (isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 55, $this->source); })()));
            // line 56
            echo "\t\t\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, (isset($context["formattedTime"]) || array_key_exists("formattedTime", $context) ? $context["formattedTime"] : (function () { throw new RuntimeError('Variable "formattedTime" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t<h2>";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["roundedPercentage"]) || array_key_exists("roundedPercentage", $context) ? $context["roundedPercentage"] : (function () { throw new RuntimeError('Variable "roundedPercentage" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t";
            // line 60
            if ((((twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 60) != "Sommeil") && (twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 60) != "Manger (Tps de preparation Repas inclus)")) && (twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 60) != "Se lever / s'habiller et autres besoins de vie"))) {
                // line 61
                echo "\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoin_vital_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce besoin vital ?')\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
                echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_modifier_besoin_vital", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_ajouter_besoin_vital");
        echo "\">Ajouter</a>
\t\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/rythme_vital/besoins_vitaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 78,  269 => 77,  253 => 67,  248 => 66,  245 => 65,  239 => 62,  234 => 61,  232 => 60,  226 => 57,  221 => 56,  218 => 55,  215 => 54,  212 => 53,  209 => 52,  207 => 51,  204 => 50,  201 => 49,  198 => 48,  196 => 47,  188 => 41,  182 => 39,  176 => 35,  174 => 34,  171 => 33,  168 => 32,  162 => 30,  156 => 28,  154 => 27,  149 => 26,  147 => 25,  142 => 24,  140 => 23,  136 => 21,  132 => 20,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Liste des besoins vitaux
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
<section class=\"container-list-calendrier element-to-scroll\">
\t<div class=\"container-list row\">
\t\t<a class=\"button-add\" href=\"{{ path('app_rythme_vital_ajouter_besoin_vital') }}\">Ajouter</a>
\t\t<div class=\"container-texte-exemple\">
\t\t\t<h3>Dans cette page,  j'indique le temps que je consacre chaque jour à MES BESOINS VITAUX
\t\t\t\t<br>(Temps physiologique) dont 3 sont universels :
\t\t\t\t<br><br>
\t\t\t\tDormir, Manger, S’entretenir (s'habiller/se Laver…)<br><br>J'ajoute éventuellement un besoin vital spécifique à ma propre situation personnelle.<br><br>Exemple : “Soin médical journalier”</h3>
\t\t</div>
\t\t<div class=\"container-cards\">
\t\t\t{% for entry in lstBesoinsVitaux %}
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t{% if entry.intitule == 'Sommeil' %}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-dormir.png') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-manger.jpeg') }}\">
\t\t\t\t\t\t{% elseif entry.intitule == 'Se lever / s\\'habiller et autres besoins de vie' %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-se-laver.jpeg') }}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto_autre_temps.png') }}\">\t
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if entry.intitule == 'Manger (Tps de preparation Repas inclus)' %}
\t\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">Manger <span style=\"font-size: 0.8rem\"><br>(Tps de preparation Repas inclus)</span></h1>
\t\t\t\t\t\t\t{% elseif entry.intitule == 'Se lever / s\\'habiller et autres besoins de vie' %}
\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">S'entretenir
\t\t\t\t\t\t\t\t<br><span style=\"font-size: 0.8rem\">(Se lever, s'habiller et autres besoins de vie)</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h1 style=\"background: #F14C4C; color: white;\">{{ entry.intitule }}</h1>
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
\t\t\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_modifier_besoin_vital', {'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"{{ path('app_rythme_vital_ajouter_besoin_vital') }}\">Ajouter</a>
\t\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/rythme_vital/besoins_vitaux.html.twig", "/Users/willyampiraud/Documents/MyPlineV2/templates/pages/rythme_vital/besoins_vitaux.html.twig");
    }
}
