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

/* pages/objectif/finance/liste_revenus.html.twig */
class __TwigTemplate_7115b5ead82ef8a80b18b9e15c1bc934 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/finance/liste_revenus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/finance/liste_revenus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/finance/liste_revenus.html.twig", 1);
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

        echo "Waou - Objectif Finances - Mes Loisirs
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_mes_revenus");
        echo "\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>Gérer mes finances personnelles est essentiel à mon bien être.<br>Cela minimise mon stress, me permet d'ateindre mes objectifs et de me construire mon avenir.<br>C'est essentiel à ma stabilité et à ma sécurité.<br>Dans cette page, je détermine mes budgets personnels cible.</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstFinanceRevenus"]) || array_key_exists("lstFinanceRevenus", $context) ? $context["lstFinanceRevenus"] : (function () { throw new RuntimeError('Variable "lstFinanceRevenus" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<h1>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<div class=\"show-montant-euro\">
\t\t\t\t\t\t\t\t\t<h3>Revenu net /mois :</h3>
\t\t\t\t\t\t\t\t\t<h3 id=\"chiffre_montant\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_mes_revenus", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "revenu", [], "any", false, false, false, 29), "html", null, true);
            echo "€</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_mes_revenus");
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
        return "pages/objectif/finance/liste_revenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 37,  164 => 36,  149 => 29,  138 => 21,  133 => 18,  129 => 17,  121 => 12,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Objectif Finances - Mes Loisirs
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
{% endblock %}
{% block body %}
\t<section class=\"container-list-calendrier element-to-scroll\">
\t\t<div class=\"container-list row\">
\t\t\t<a class=\"button-add\" href=\"{{ path('app_ajouter_mes_revenus') }}\">Ajouter</a>
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>Gérer mes finances personnelles est essentiel à mon bien être.<br>Cela minimise mon stress, me permet d'ateindre mes objectifs et de me construire mon avenir.<br>C'est essentiel à ma stabilité et à ma sécurité.<br>Dans cette page, je détermine mes budgets personnels cible.</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t{% for entry in lstFinanceRevenus %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<h1>{{ entry.titre }}</h1>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t<div class=\"show-montant-euro\">
\t\t\t\t\t\t\t\t\t<h3>Revenu net /mois :</h3>
\t\t\t\t\t\t\t\t\t<h3 id=\"chiffre_montant\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_modifier_mes_revenus', {'id': entry.id}) }}\">{{ entry.revenu }}€</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"container-button-add\">
\t\t\t\t\t<a class=\"button-add\" href=\"{{ path('app_ajouter_mes_revenus') }}\">Ajouter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
", "pages/objectif/finance/liste_revenus.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/finance/liste_revenus.html.twig");
    }
}
