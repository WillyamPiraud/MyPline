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

/* pages/liste_document/to_do_list.html.twig */
class __TwigTemplate_01317a0ac0b6d5f557828fcd286409bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_document/to_do_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_document/to_do_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/liste_document/to_do_list.html.twig", 1);
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

        echo "Waou - Listes
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
        echo "\t<section style=\"margin-top: 15%\" class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_liste");
        echo "\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstToDoList"]) || array_key_exists("lstToDoList", $context) ? $context["lstToDoList"] : (function () { throw new RuntimeError('Variable "lstToDoList" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 26
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_liste", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette liste ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 15%;\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_document_detail_todo", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 10%;\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Voir</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_document_liste_reset_task", ["id_todo" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 10%;\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-reset.png"), "html", null, true);
            echo "\" alt=\"reset\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reset</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return "pages/liste_document/to_do_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 44,  191 => 38,  187 => 37,  181 => 34,  177 => 33,  171 => 30,  167 => 29,  162 => 27,  159 => 26,  155 => 25,  143 => 16,  139 => 14,  129 => 13,  117 => 11,  112 => 10,  102 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
\t<script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script>
{% endblock %}

{% block title %}Waou - Listes
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section style=\"margin-top: 15%\" class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_add_liste') }}\">Ajouter</a>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for entry in lstToDoList %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">{{ entry.titre }}</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"{{ path('app_delete_liste', {'id': entry.id })}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette liste ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 15%;\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_liste_document_detail_todo', {'id': entry.id }) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 10%;\" src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Voir</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_liste_document_liste_reset_task', {'id_todo': entry.id }) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 10%;\" src=\"{{ asset('img/icon-reset.png') }}\" alt=\"reset\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Reset</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</section>
{% endblock %}
", "pages/liste_document/to_do_list.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/liste_document/to_do_list.html.twig");
    }
}
