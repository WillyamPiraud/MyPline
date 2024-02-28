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

/* pages/objectif/visualiser-mes-objectifs.html.twig */
class __TwigTemplate_8c957ab64f0cb0c459528b7840c58114 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/visualiser-mes-objectifs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/visualiser-mes-objectifs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/visualiser-mes-objectifs.html.twig", 1);
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

        echo "Waou - Liste des objectifs
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
        echo "\t<section style=\"margin-top: 15%\" class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif", ["secteur" => (isset($context["secteur"]) || array_key_exists("secteur", $context) ? $context["secteur"] : (function () { throw new RuntimeError('Variable "secteur" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>Dans cette page, vous pouvez visualiser vos différents objectifs et créer votre plan d'action</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstObjectifs"]) || array_key_exists("lstObjectifs", $context) ? $context["lstObjectifs"] : (function () { throw new RuntimeError('Variable "lstObjectifs" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t<h1 style=\"border: 2px solid #112D4E;\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_form_objectif", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 24), "secteur" => (isset($context["secteur"]) || array_key_exists("secteur", $context) ? $context["secteur"] : (function () { throw new RuntimeError('Variable "secteur" does not exist.', 24, $this->source); })())]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%;\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
            echo "\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 28), "secteur" => (isset($context["secteur"]) || array_key_exists("secteur", $context) ? $context["secteur"] : (function () { throw new RuntimeError('Variable "secteur" does not exist.', 28, $this->source); })())]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cet objectif ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%;\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-croix.png"), "html", null, true);
            echo "\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visualiser_plan_action", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-pda.png"), "html", null, true);
            echo "\" alt=\"Plan d'action\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Plan d'action</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif", ["secteur" => (isset($context["secteur"]) || array_key_exists("secteur", $context) ? $context["secteur"] : (function () { throw new RuntimeError('Variable "secteur" does not exist.', 41, $this->source); })())]), "html", null, true);
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
        return "pages/objectif/visualiser-mes-objectifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 41,  181 => 40,  168 => 33,  164 => 32,  158 => 29,  154 => 28,  148 => 25,  144 => 24,  137 => 20,  133 => 18,  129 => 17,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Liste des objectifs
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section style=\"margin-top: 15%\" class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_form_objectif', {'secteur': secteur}) }}\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>Dans cette page, vous pouvez visualiser vos différents objectifs et créer votre plan d'action</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t{% for entry in lstObjectifs %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t<h1 style=\"border: 2px solid #112D4E;\">{{ entry.titre }}</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t<div class=\"container-action\">
\t\t\t\t\t\t\t\t<a class=\"container-relative\" href=\"{{ path('app_modifier_form_objectif', {'id' : entry.id, 'secteur': secteur}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%;\" src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"{{ path('app_objectif_delete', {'id' : entry.id, 'secteur': secteur}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cet objectif ?')\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%;\" src=\"{{ asset('img/icon-croix.png') }}\" alt=\"Supprimer\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Supprimer</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"container-relative delete-button\" href=\"{{ path('app_visualiser_plan_action', {'id' : entry.id}) }}\">
\t\t\t\t\t\t\t\t\t<img style=\"width: 100%;\" src=\"{{ asset('img/icon-pda.png') }}\" alt=\"Plan d'action\">
\t\t\t\t\t\t\t\t\t<div class=\"info-bubble\">Plan d'action</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"{{ path('app_form_objectif', {'secteur': secteur}) }}\">Ajouter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
", "pages/objectif/visualiser-mes-objectifs.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/visualiser-mes-objectifs.html.twig");
    }
}
