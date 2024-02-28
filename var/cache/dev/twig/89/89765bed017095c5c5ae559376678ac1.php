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

/* pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig */
class __TwigTemplate_122a11164b14faf4e4109ae664317377 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig", 1);
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

        echo "Waou - Liste des rendez-vous à prendre
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_rdv_add");
        echo "\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t<th scope=\"col\" style=\"width: 30%;\">Objet (texte libre)</th>
\t\t\t\t\t\t<th scope=\"col\">Date du RDV</th>
\t\t\t\t\t\t<th scope=\"col\">Temps prévu</th>
\t\t\t\t\t\t<th scope=\"col\">Lieu du rdv</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t<th scope=\"col\">statut</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstRendezVous"]) || array_key_exists("lstRendezVous", $context) ? $context["lstRendezVous"] : (function () { throw new RuntimeError('Variable "lstRendezVous" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 26
            echo "\t\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "objet", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "dateRdv", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tempsPrevu", [], "any", false, false, false, 29), "format", [0 => "H:i"], "method", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "lieuRdv", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous_valide", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment valider cet evenement ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valider-bleu.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Valider</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_rdv_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cet evenement ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 30%;\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_rdv_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 23%;\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"container-relative\">
\t\t\t\t\t\t\t\t<div style=\"width: 50px; heigth: 50px; border-radius: 50%; text-align: center; font-size: 1.5rem;\" class=\"";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "valide", [], "any", false, false, false, 46)) {
                echo "case-verte";
            } else {
                echo "case-rouge";
            }
            echo "\">-</div>
\t\t\t\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "valide", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\tFait
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\tA faire
\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return "pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 57,  212 => 53,  208 => 51,  204 => 49,  202 => 48,  193 => 46,  185 => 41,  181 => 40,  175 => 37,  171 => 36,  165 => 33,  161 => 32,  156 => 30,  152 => 29,  148 => 28,  144 => 27,  141 => 26,  137 => 25,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Liste des rendez-vous à prendre
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_lst_calendrier_rdv_add') }}\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t<th scope=\"col\" style=\"width: 30%;\">Objet (texte libre)</th>
\t\t\t\t\t\t<th scope=\"col\">Date du RDV</th>
\t\t\t\t\t\t<th scope=\"col\">Temps prévu</th>
\t\t\t\t\t\t<th scope=\"col\">Lieu du rdv</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t<th scope=\"col\">statut</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for entry in lstRendezVous %}
\t\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ entry.objet }}</th>
\t\t\t\t\t\t\t<td>{{ entry.dateRdv|date('d-m-Y') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.tempsPrevu.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.lieuRdv }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_rendez_vous_valide', {'id': entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment valider cet evenement ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 20%;\" src=\"{{ asset('img/icon-valider-bleu.png') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Valider</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"{{ path('app_lst_calendrier_rdv_delete', {'id': entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cet evenement ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 30%;\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_lst_calendrier_rdv_modify', {'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 23%;\" src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"container-relative\">
\t\t\t\t\t\t\t\t<div style=\"width: 50px; heigth: 50px; border-radius: 50%; text-align: center; font-size: 1.5rem;\" class=\"{% if entry.valide %}case-verte{% else %}case-rouge{% endif %}\">-</div>
\t\t\t\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t\t\t\t{% if entry.valide %}
\t\t\t\t\t\t\t\t\t\tFait
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
", "pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/liste_calendrier/lst_calendrier_rendez_vous.html.twig");
    }
}
