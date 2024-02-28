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

/* pages/rythme_vital/liste_des_liens.html.twig */
class __TwigTemplate_065d73e0504e1f534a7a5bb700115398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/liste_des_liens.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/liste_des_liens.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/liste_des_liens.html.twig", 1);
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

        echo "Waou - Liste des liens sociaux
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_lien", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["texteIntro"]) || array_key_exists("texteIntro", $context) ? $context["texteIntro"] : (function () { throw new RuntimeError('Variable "texteIntro" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lst_obligations"]) || array_key_exists("lst_obligations", $context) ? $context["lst_obligations"] : (function () { throw new RuntimeError('Variable "lst_obligations" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t";
            // line 20
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "reunion_famille")) {
                // line 21
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-reunion-famille.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } elseif ((            // line 22
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 22, $this->source); })()) == "reunion_amis")) {
                // line 23
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-reunion-amis.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } elseif ((            // line 24
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()) == "fete")) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-fete.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } elseif ((            // line 26
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 26, $this->source); })()) == "association")) {
                // line 27
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-association.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } elseif ((            // line 28
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 28, $this->source); })()) == "benevolat")) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-benevolat.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } elseif ((            // line 30
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })()) == "cours")) {
                // line 31
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-atelier-club.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-other.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "objet", [], "any", false, false, false, 35), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<p>Usage de mon temps cible
\t\t\t\t\t\t\t\t\t<span>(moyenne par jour)</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 42
            $context["totalSeconds"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tempsPrevue", [], "any", false, false, false, 42), "getTimestamp", [], "method", false, false, false, 42);
            // line 43
            echo "\t\t\t\t\t\t\t\t";
            $context["averageSecondsPerDay"] = ((isset($context["totalSeconds"]) || array_key_exists("totalSeconds", $context) ? $context["totalSeconds"] : (function () { throw new RuntimeError('Variable "totalSeconds" does not exist.', 43, $this->source); })()) / 7);
            // line 44
            echo "\t\t\t\t\t\t\t\t";
            $context["averagePercentage"] = (((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 44, $this->source); })()) / (24 * 3600)) * 100);
            // line 45
            echo "\t\t\t\t\t\t\t\t";
            $context["roundedPercentage"] = (twig_round(((isset($context["averagePercentage"]) || array_key_exists("averagePercentage", $context) ? $context["averagePercentage"] : (function () { throw new RuntimeError('Variable "averagePercentage" does not exist.', 45, $this->source); })()) * 2)) / 2);
            // line 46
            echo "\t\t\t\t\t\t\t\t";
            // line 47
            echo "\t\t\t\t\t\t\t\t";
            $context["averageHoursPerDay"] = ((isset($context["averageSecondsPerDay"]) || array_key_exists("averageSecondsPerDay", $context) ? $context["averageSecondsPerDay"] : (function () { throw new RuntimeError('Variable "averageSecondsPerDay" does not exist.', 47, $this->source); })()) / 3600);
            // line 48
            echo "\t\t\t\t\t\t\t\t";
            $context["hours"] = (twig_round(((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 48, $this->source); })()) * 2)) / twig_round(2, 0, "floor"));
            // line 49
            echo "\t\t\t\t\t\t\t\t";
            $context["minutes"] = twig_round((((isset($context["averageHoursPerDay"]) || array_key_exists("averageHoursPerDay", $context) ? $context["averageHoursPerDay"] : (function () { throw new RuntimeError('Variable "averageHoursPerDay" does not exist.', 49, $this->source); })()) * 60) % 60));
            // line 50
            echo "\t\t\t\t\t\t\t\t";
            $context["formattedTime"] = twig_sprintf("%02dh%02d", (isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 50, $this->source); })()), (isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 50, $this->source); })()));
            // line 51
            echo "\t\t\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, (isset($context["formattedTime"]) || array_key_exists("formattedTime", $context) ? $context["formattedTime"] : (function () { throw new RuntimeError('Variable "formattedTime" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t<h2>";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["roundedPercentage"]) || array_key_exists("roundedPercentage", $context) ? $context["roundedPercentage"] : (function () { throw new RuntimeError('Variable "roundedPercentage" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_lien", ["type" => twig_get_attribute($this->env, $this->source, $context["entry"], "getTypeLoisir", [], "method", false, false, false, 55), "id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_lien", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 67, $this->source); })())]), "html", null, true);
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
        return "pages/rythme_vital/liste_des_liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 67,  256 => 66,  240 => 56,  236 => 55,  230 => 52,  225 => 51,  222 => 50,  219 => 49,  216 => 48,  213 => 47,  211 => 46,  208 => 45,  205 => 44,  202 => 43,  200 => 42,  189 => 35,  183 => 33,  177 => 31,  175 => 30,  170 => 29,  168 => 28,  163 => 27,  161 => 26,  156 => 25,  154 => 24,  149 => 23,  147 => 22,  142 => 21,  140 => 20,  136 => 18,  132 => 17,  126 => 14,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Liste des liens sociaux
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_ajouter_lien', {'type': type }) }}\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>{{ texteIntro }}</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t{% for entry in lst_obligations %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t{% if type == \"reunion_famille\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-reunion-famille.png') }}\">
\t\t\t\t\t\t\t{% elseif type == \"reunion_amis\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-reunion-amis.png') }}\">
\t\t\t\t\t\t\t{% elseif type == \"fete\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-fete.png') }}\">
\t\t\t\t\t\t\t{% elseif type == \"association\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-association.png') }}\">
\t\t\t\t\t\t\t{% elseif type == \"benevolat\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-benevolat.png') }}\">
\t\t\t\t\t\t\t{% elseif type == \"cours\" %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-atelier-club.png') }}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/picto-other.png') }}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<h1>{{ entry.objet }}</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<p>Usage de mon temps cible
\t\t\t\t\t\t\t\t\t<span>(moyenne par jour)</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{% set totalSeconds = entry.tempsPrevue.getTimestamp() %}
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
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_modifier_lien', {'type' : entry.getTypeLoisir(),'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<h2>08:00</h2>
\t\t\t\t\t\t\t\t<h2>33%</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"{{ path('app_ajouter_lien', {'type': type }) }}\">Ajouter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
", "pages/rythme_vital/liste_des_liens.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/liste_des_liens.html.twig");
    }
}
