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

/* pages/liste_calendrier/lst_calendrier_tel.html.twig */
class __TwigTemplate_c97c7b690f94896367cf65b04c9d6dc5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_tel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_tel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/liste_calendrier/lst_calendrier_tel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "\t<script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Waou - Liste Appels à donner
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 11
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("list_calendrier");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_tel_add");
        echo "\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"four_columns\">
\t\t\t\t\t\t<th scope=\"col\">Contact à prendre (qui ?)</th>
\t\t\t\t\t\t<th scope=\"col\">Objet</th>
\t\t\t\t\t\t<th scope=\"col\">N°Tel</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendrierTelLst"]) || array_key_exists("calendrierTelLst", $context) ? $context["calendrierTelLst"] : (function () { throw new RuntimeError('Variable "calendrierTelLst" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 29
            echo "\t\t\t\t\t\t<tr class=\"four_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "personne", [], "any", false, false, false, 30), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "objet", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "telephone", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider_tel", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment valider cet appel ?')\" class=\"container-relative\"><img style=\"width: 13%;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valider-bleu.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Valider</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"delete-button container-relative\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_tel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cet appel ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_tel_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 15%;\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"container-relative\">
\t\t\t\t\t\t\t\t<div style=\"width: 50px; heigth: 50px; border-radius: 50%; text-align: center; font-size: 1.5rem;\" class=\"";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "valide", [], "any", false, false, false, 47)) {
                echo "case-verte";
            } else {
                echo "case-rouge";
            }
            echo "\">-</div>
\t\t\t\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t\t\t\t";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "valide", [], "any", false, false, false, 49)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\tFait le
\t\t\t\t\t\t\t\t\t\t";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "faitLe", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\tA faire
\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/liste_calendrier/lst_calendrier_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 59,  231 => 55,  227 => 53,  222 => 51,  219 => 50,  217 => 49,  208 => 47,  200 => 42,  196 => 41,  190 => 38,  186 => 37,  178 => 34,  173 => 32,  169 => 31,  165 => 30,  162 => 29,  158 => 28,  143 => 16,  139 => 14,  129 => 13,  117 => 11,  112 => 10,  102 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
\t<script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script>
{% endblock %}

{% block title %}Waou - Liste Appels à donner
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_lst_calendrier_tel_add') }}\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"four_columns\">
\t\t\t\t\t\t<th scope=\"col\">Contact à prendre (qui ?)</th>
\t\t\t\t\t\t<th scope=\"col\">Objet</th>
\t\t\t\t\t\t<th scope=\"col\">N°Tel</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for entry in calendrierTelLst %}
\t\t\t\t\t\t<tr class=\"four_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ entry.personne }}</th>
\t\t\t\t\t\t\t<td>{{ entry.objet }}</td>
\t\t\t\t\t\t\t<td>{{ entry.telephone }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_valider_tel', {'id': entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment valider cet appel ?')\" class=\"container-relative\"><img style=\"width: 13%;\" src=\"{{ asset('img/icon-valider-bleu.png') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Valider</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"delete-button container-relative\" href=\"{{ path('app_lst_calendrier_tel_delete', {'id': entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cet appel ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_lst_calendrier_tel_modify', {'id' : entry.id}) }}\" class=\"container-relative\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 15%;\" src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"container-relative\">
\t\t\t\t\t\t\t\t<div style=\"width: 50px; heigth: 50px; border-radius: 50%; text-align: center; font-size: 1.5rem;\" class=\"{% if entry.valide %}case-verte{% else %}case-rouge{% endif %}\">-</div>
\t\t\t\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t\t\t\t{% if entry.valide %}
\t\t\t\t\t\t\t\t\t\tFait le
\t\t\t\t\t\t\t\t\t\t{{ entry.faitLe|date('d/m/Y') }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tA faire
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</section>
{% endblock %}

{#<div class=\"row-appel-tel\">
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<h2>Appeler Jeremy</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<h2>0789675465</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t<a><img src=\"{{ asset('img/plus.png') }}\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t<a><img src=\"{{ asset('img/icon-croix.png') }}\"></a>
\t\t\t\t</div>
\t\t\t</div>#}
", "pages/liste_calendrier/lst_calendrier_tel.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/liste_calendrier/lst_calendrier_tel.html.twig");
    }
}
