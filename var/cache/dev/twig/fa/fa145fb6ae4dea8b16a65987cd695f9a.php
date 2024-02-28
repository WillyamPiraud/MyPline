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

/* pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig */
class __TwigTemplate_ab9ac617f411450e30636e6cc2371a32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig", 1);
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

        echo "Waou - Liste Petites Choses à faire
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire_add");
        echo "\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t<th scope=\"col\" class=\"intitule\" style=\"width: 30%;\">Objet (texte libre)</th>
\t\t\t\t\t\t<th scope=\"col\">Date Butoir</th>
\t\t\t\t\t\t<th scope=\"col\">Date Prévue</th>
\t\t\t\t\t\t<th scope=\"col\">Temps Prévu</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstCalendrierChosesAFaire"]) || array_key_exists("lstCalendrierChosesAFaire", $context) ? $context["lstCalendrierChosesAFaire"] : (function () { throw new RuntimeError('Variable "lstCalendrierChosesAFaire" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 30
            echo "\t\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "intitule", [], "any", false, false, false, 31), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "dateButoir", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"";
            // line 33
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "datePrevue", [], "any", false, false, false, 33), "d-m-Y") == twig_date_format_filter($this->env, (isset($context["dateJour"]) || array_key_exists("dateJour", $context) ? $context["dateJour"] : (function () { throw new RuntimeError('Variable "dateJour" does not exist.', 33, $this->source); })()), "d-m-Y"))) {
                echo "jourJ";
            } else {
            }
            echo "\">
\t\t\t\t\t\t\t\t<p>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "datePrevue", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tempsPrevue", [], "any", false, false, false, 36), "format", [0 => "H:i"], "method", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider_choses_a_faire", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment valider cette petite choses à faire ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valider-bleu.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Valider</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette petite choses à faire ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 30%;\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"container-relative\">
\t\t\t\t\t\t\t\t<div style=\"width: 50px; heigth: 50px; border-radius: 50%; text-align: center; font-size: 1.5rem;\" class=\"";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "valide", [], "any", false, false, false, 52)) {
                echo "case-verte";
            } else {
                echo "case-rouge";
            }
            echo "\">-</div>
\t\t\t\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t\t\t\t";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "valide", [], "any", false, false, false, 54)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\tFait le
\t\t\t\t\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "faitLe", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\tA faire
\t\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return "pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 64,  246 => 60,  242 => 58,  237 => 56,  234 => 55,  232 => 54,  223 => 52,  215 => 47,  211 => 46,  205 => 43,  201 => 42,  195 => 39,  191 => 38,  186 => 36,  181 => 34,  174 => 33,  170 => 32,  166 => 31,  163 => 30,  159 => 29,  143 => 16,  139 => 14,  129 => 13,  117 => 11,  112 => 10,  102 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
\t<script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script>
{% endblock %}

{% block title %}Waou - Liste Petites Choses à faire
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_lst_calendrier_choses_a_faire_add') }}\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t<th scope=\"col\" class=\"intitule\" style=\"width: 30%;\">Objet (texte libre)</th>
\t\t\t\t\t\t<th scope=\"col\">Date Butoir</th>
\t\t\t\t\t\t<th scope=\"col\">Date Prévue</th>
\t\t\t\t\t\t<th scope=\"col\">Temps Prévu</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for entry in lstCalendrierChosesAFaire %}
\t\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ entry.intitule }}</th>
\t\t\t\t\t\t\t<td>{{ entry.dateButoir|date('d-m-Y') }}</td>
\t\t\t\t\t\t\t<td class=\"{% if entry.datePrevue|date('d-m-Y') == dateJour|date('d-m-Y') %}jourJ{% else %}{% endif %}\">
\t\t\t\t\t\t\t\t<p>{{ entry.datePrevue|date('d-m-Y') }}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ entry.tempsPrevue.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_valider_choses_a_faire', {'id': entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment valider cette petite choses à faire ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"{{ asset('img/icon-valider-bleu.png') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Valider</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"{{ path('app_lst_calendrier_choses_a_faire_delete', {'id': entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette petite choses à faire ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 30%;\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_calendrier_choses_a_faire_modify', {'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
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
", "pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/liste_calendrier/lst_calendrier_choses_a_faire.html.twig");
    }
}
