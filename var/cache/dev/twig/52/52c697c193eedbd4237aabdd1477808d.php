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

/* pages/rythme_vital/activite_professionnelle.html.twig */
class __TwigTemplate_d566a7b3a9b3ccf571851491745cdc97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/activite_professionnelle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/activite_professionnelle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/activite_professionnelle.html.twig", 1);
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

        echo "Waou - Liste des activites professionnelles
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_ajouter_activite_professionnelle");
        echo "\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>Dans cette rubrique indiquez le temps journalier consacré au travail ( ou à votre formation ) spécifiques à votre situation personnelle temps de trajets inclus.<br>Exemple pour la formation : “Suivre mes cours d'école chaque semaine“</h3>
\t\t\t</div>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t<th scope=\"col\" class=\"intitule\" style=\"width: 30%;\">Intitulé</th>
\t\t\t\t\t\t<th scope=\"col\">Lundi</th>
\t\t\t\t\t\t<th scope=\"col\">Mardi</th>
\t\t\t\t\t\t<th scope=\"col\">Mercredi</th>
\t\t\t\t\t\t<th scope=\"col\">Jeudi</th>
\t\t\t\t\t\t<th scope=\"col\">Vendredi</th>
\t\t\t\t\t\t<th scope=\"col\">Samedi</th>
\t\t\t\t\t\t<th scope=\"col\">Dimanche</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstActiviteProfessionnelle"]) || array_key_exists("lstActiviteProfessionnelle", $context) ? $context["lstActiviteProfessionnelle"] : (function () { throw new RuntimeError('Variable "lstActiviteProfessionnelle" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 32
            echo "\t\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "objet", [], "any", false, false, false, 33), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "lundi", [], "any", false, false, false, 34), "format", [0 => "H:i"], "method", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mardi", [], "any", false, false, false, 35), "format", [0 => "H:i"], "method", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "mercredi", [], "any", false, false, false, 36), "format", [0 => "H:i"], "method", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "jeudi", [], "any", false, false, false, 37), "format", [0 => "H:i"], "method", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "vendredi", [], "any", false, false, false, 38), "format", [0 => "H:i"], "method", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "samedi", [], "any", false, false, false, 39), "format", [0 => "H:i"], "method", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "dimanche", [], "any", false, false, false, 40), "format", [0 => "H:i"], "method", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_activite_professionnelle_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette activite professionnelle ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 50%;\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_modifier_activite_professionnelle", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 40%;\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "pages/rythme_vital/activite_professionnelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 51,  196 => 46,  192 => 45,  187 => 43,  183 => 42,  178 => 40,  174 => 39,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  154 => 34,  150 => 33,  147 => 32,  143 => 31,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Liste des activites professionnelles
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_rythme_vital_ajouter_activite_professionnelle') }}\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>Dans cette rubrique indiquez le temps journalier consacré au travail ( ou à votre formation ) spécifiques à votre situation personnelle temps de trajets inclus.<br>Exemple pour la formation : “Suivre mes cours d'école chaque semaine“</h3>
\t\t\t</div>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t<th scope=\"col\" class=\"intitule\" style=\"width: 30%;\">Intitulé</th>
\t\t\t\t\t\t<th scope=\"col\">Lundi</th>
\t\t\t\t\t\t<th scope=\"col\">Mardi</th>
\t\t\t\t\t\t<th scope=\"col\">Mercredi</th>
\t\t\t\t\t\t<th scope=\"col\">Jeudi</th>
\t\t\t\t\t\t<th scope=\"col\">Vendredi</th>
\t\t\t\t\t\t<th scope=\"col\">Samedi</th>
\t\t\t\t\t\t<th scope=\"col\">Dimanche</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for entry in lstActiviteProfessionnelle %}
\t\t\t\t\t\t<tr class=\"six_columns\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ entry.objet }}</th>
\t\t\t\t\t\t\t<td>{{ entry.lundi.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.mardi.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.mercredi.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.jeudi.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.vendredi.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.samedi.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>{{ entry.dimanche.format('H:i') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"delete-button\" href=\"{{ path('app_rythme_vital_activite_professionnelle_delete', {'id' : entry.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette activite professionnelle ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 50%;\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_modifier_activite_professionnelle', {'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 40%;\" src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</section>
{% endblock %}
", "pages/rythme_vital/activite_professionnelle.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/activite_professionnelle.html.twig");
    }
}
