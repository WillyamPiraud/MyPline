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

/* pages/rythme_vital/mon_metier.html.twig */
class __TwigTemplate_e852cde84f0cb10755786d96450077c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/mon_metier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/mon_metier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/mon_metier.html.twig", 1);
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

        echo "Waou - Liste des métiers / études / formations
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
        echo "\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_formation_add", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["textIntro"]) || array_key_exists("textIntro", $context) ? $context["textIntro"] : (function () { throw new RuntimeError('Variable "textIntro" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstMetier"]) || array_key_exists("lstMetier", $context) ? $context["lstMetier"] : (function () { throw new RuntimeError('Variable "lstMetier" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_professionnel_temps_travail", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })())]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<h1>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 21), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "employeur", [], "any", false, false, false, 22), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<p>Usage de mon temps cible
\t\t\t\t\t\t\t\t\t<span>(moyenne par jour)</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 30
            $context["totalSeconds"] = ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "lundi", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mardi", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mercredi", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "jeudi", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "vendredi", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "samedi", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "dimanche", [], "any", false, false, false, 30), "getTimestamp", [], "method", false, false, false, 30));
            // line 31
            echo "\t\t\t\t\t\t\t\t";
            $context["averageSecondsPerDay"] = ((isset($context["totalSeconds"]) || array_key_exists("totalSeconds", $context) ? $context["totalSeconds"] : (function () { throw new RuntimeError('Variable "totalSeconds" does not exist.', 31, $this->source); })()) / 7);
            // line 32
            echo "\t\t\t\t\t\t\t\t";
            $context["averagePercentage"] = (((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 32, $this->source); })()) / (24 * 3600)) * 100);
            // line 33
            echo "\t\t\t\t\t\t\t\t";
            $context["roundedPercentage"] = (twig_round(((isset($context["averagePercentage"]) || array_key_exists("averagePercentage", $context) ? $context["averagePercentage"] : (function () { throw new RuntimeError('Variable "averagePercentage" does not exist.', 33, $this->source); })()) * 2)) / 2);
            // line 34
            echo "\t\t\t\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t\t\t\t";
            $context["averageHoursPerDay"] = ((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 35, $this->source); })()) / 3600);
            // line 36
            echo "\t\t\t\t\t\t\t\t";
            $context["hours"] = (twig_round(((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 36, $this->source); })()) * 2)) / twig_round(2, 0, "floor"));
            // line 37
            echo "\t\t\t\t\t\t\t\t";
            $context["minutes"] = twig_round((((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 37, $this->source); })()) * 60) % 60));
            // line 38
            echo "\t\t\t\t\t\t\t\t";
            $context["formattedTime"] = twig_sprintf("%02dh%02d", (isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 38, $this->source); })()), (isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 38, $this->source); })()));
            // line 39
            echo "\t\t\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, (isset($context["formattedTime"]) || array_key_exists("formattedTime", $context) ? $context["formattedTime"] : (function () { throw new RuntimeError('Variable "formattedTime" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t<h2>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["roundedPercentage"]) || array_key_exists("roundedPercentage", $context) ? $context["roundedPercentage"] : (function () { throw new RuntimeError('Variable "roundedPercentage" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 43), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 43, $this->source); })())]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce metier ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_formation_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 46), "type" => twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 80%\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_professionnel_temps_travail", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 49, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-liste.png"), "html", null, true);
            echo "\" alt=\"Liste des tâches\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_formation_add");
        echo "\">Ajouter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/rythme_vital/mon_metier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 61,  233 => 60,  217 => 50,  213 => 49,  208 => 47,  204 => 46,  199 => 44,  195 => 43,  189 => 40,  184 => 39,  181 => 38,  178 => 37,  175 => 36,  172 => 35,  170 => 34,  167 => 33,  164 => 32,  161 => 31,  159 => 30,  148 => 22,  144 => 21,  140 => 20,  136 => 18,  132 => 17,  126 => 14,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Liste des métiers / études / formations
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_metier_formation_add', {'type': type}) }}\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>{{ textIntro }}</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t{% for entry in lstMetier %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_activite_professionnel_temps_travail', {'type': type}) }}\">
\t\t\t\t\t\t\t\t<h1>{{ entry.intitule }}
\t\t\t\t\t\t\t\t\t{{ entry.employeur }}</h1>
\t\t\t\t\t\t\t</a>
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
\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"{{ path('app_metier_delete', {'id' : entry.id, 'type': type}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce metier ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_metier_formation_modify', {'id' : entry.id, 'type': entry.type}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 80%\" src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_activite_professionnel_temps_travail', {'type' : type, 'id': entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%\" src=\"{{ asset('img/picto-liste.png') }}\" alt=\"Liste des tâches\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"{{ path('app_metier_formation_add') }}\">Ajouter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
", "pages/rythme_vital/mon_metier.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/mon_metier.html.twig");
    }
}
