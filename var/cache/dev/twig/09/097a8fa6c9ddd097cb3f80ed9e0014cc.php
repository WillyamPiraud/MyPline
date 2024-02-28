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

/* pages/liste_document/detail_todo.html.twig */
class __TwigTemplate_3a3191b873e74e33525ba210a1343bef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_document/detail_todo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_document/detail_todo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/liste_document/detail_todo.html.twig", 1);
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

        echo "Waou - Détails de la liste
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
\t";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<section class=\"element-to-scroll\" style=\"width: 100%; display: flex; flex-direction: row; justify-content: center; align-items: center\">
\t\t<div class=\"container-principal-form\">
\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1 style=\"font-size: 5rem; text-decoration: underline;\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t";
        // line 20
        echo "\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1>Actions</h1>
\t\t\t\t\t<form style=\"width: 100%\" method=\"post\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_task", ["id_todolist" => (isset($context["id_todolist"]) || array_key_exists("id_todolist", $context) ? $context["id_todolist"] : (function () { throw new RuntimeError('Variable "id_todolist" does not exist.', 22, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input style=\"width:70%; font-size: 2rem\" name=\"titre\" type=\"text\" placeholder=\"Nom de la tâche...\">
\t\t\t\t\t\t<input style=\"width:70%; font-size: 2rem\" name=\"remarque\" type=\"text\" placeholder=\"Remarque\">
\t\t\t\t\t\t<button style=\"font-size: 2rem; width: 15%; height: auto;\" type=\"submit\"><img style=\"width: 70%\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/plus-blanc.png"), "html", null, true);
        echo "\"></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 29
            echo "\t\t\t\t\t<div class=\"col-form object_todo\" style=\"width: 100%; flex-direction: row;\">
\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_document_liste_set_statut", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 30), "id_todolist" => (isset($context["id_todolist"]) || array_key_exists("id_todolist", $context) ? $context["id_todolist"] : (function () { throw new RuntimeError('Variable "id_todolist" does not exist.', 30, $this->source); })())]), "html", null, true);
            echo "\" class=\"actions_todolist\">
\t\t\t\t\t\t\t";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["task"], "statut", [], "any", false, false, false, 31) == 1)) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-valide.png"), "html", null, true);
                echo "\" alt=\"Validé\">
\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "titre", [], "any", false, false, false, 34), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<h3>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "remarque", [], "any", false, false, false, 35), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_document_liste_delete_task", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 37), "id_todolist" => (isset($context["id_todolist"]) || array_key_exists("id_todolist", $context) ? $context["id_todolist"] : (function () { throw new RuntimeError('Variable "id_todolist" does not exist.', 37, $this->source); })())]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche ?')\" class=\"button-supprimer\">
\t\t\t\t\t\t\t<img style=\"width: 100%\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"icone croix\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/liste_document/detail_todo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 42,  181 => 38,  177 => 37,  172 => 35,  167 => 34,  161 => 32,  159 => 31,  155 => 30,  152 => 29,  148 => 28,  142 => 25,  136 => 22,  132 => 20,  127 => 15,  121 => 11,  111 => 10,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Détails de la liste
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t<section class=\"element-to-scroll\" style=\"width: 100%; display: flex; flex-direction: row; justify-content: center; align-items: center\">
\t\t<div class=\"container-principal-form\">
\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1 style=\"font-size: 5rem; text-decoration: underline;\">{{ todo.titre }}</h1>
\t\t\t\t</div>
\t\t\t\t{#<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>{{ todo.titre }}</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>#}
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1>Actions</h1>
\t\t\t\t\t<form style=\"width: 100%\" method=\"post\" action=\"{{ path('create_task', { 'id_todolist': id_todolist }) }}\">
\t\t\t\t\t\t<input style=\"width:70%; font-size: 2rem\" name=\"titre\" type=\"text\" placeholder=\"Nom de la tâche...\">
\t\t\t\t\t\t<input style=\"width:70%; font-size: 2rem\" name=\"remarque\" type=\"text\" placeholder=\"Remarque\">
\t\t\t\t\t\t<button style=\"font-size: 2rem; width: 15%; height: auto;\" type=\"submit\"><img style=\"width: 70%\" src=\"{{ asset('img/plus-blanc.png') }}\"></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t{% for task in tasks %}
\t\t\t\t\t<div class=\"col-form object_todo\" style=\"width: 100%; flex-direction: row;\">
\t\t\t\t\t\t<a href=\"{{ path('app_liste_document_liste_set_statut', {'id': task.id, 'id_todolist': id_todolist }) }}\" class=\"actions_todolist\">
\t\t\t\t\t\t\t{% if task.statut == 1 %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/icon-valide.png') }}\" alt=\"Validé\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<h2>{{ task.titre }}</h2>
\t\t\t\t\t\t\t<h3>{{ task.remarque }}</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_liste_document_liste_delete_task', {'id': task.id, 'id_todolist': id_todolist }) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche ?')\" class=\"button-supprimer\">
\t\t\t\t\t\t\t<img style=\"width: 100%\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"icone croix\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/liste_document/detail_todo.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/liste_document/detail_todo.html.twig");
    }
}
