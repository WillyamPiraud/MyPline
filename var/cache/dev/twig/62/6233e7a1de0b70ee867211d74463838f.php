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

/* pages/objectif/finance/liste_finances_loisirs.html.twig */
class __TwigTemplate_27b530b58b19ddfbc905efa98a72c71e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/finance/liste_finances_loisirs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/finance/liste_finances_loisirs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/finance/liste_finances_loisirs.html.twig", 1);
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
        echo "\t<section class=\"container-list-calendrier\" style=\"margin-top: 200px;\">
\t\t<div class=\"container-list row\">
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["textIntro"]) || array_key_exists("textIntro", $context) ? $context["textIntro"] : (function () { throw new RuntimeError('Variable "textIntro" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstFinanceLoisir"]) || array_key_exists("lstFinanceLoisir", $context) ? $context["lstFinanceLoisir"] : (function () { throw new RuntimeError('Variable "lstFinanceLoisir" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 17
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 19) == "Dépenses de logements")) {
                // line 20
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_finance_loisir", ["type" => "depense_logement"]);
                echo "\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 21), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 23
$context["entry"], "titre", [], "any", false, false, false, 23) == "Dépenses de Transport")) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_finance_loisir", ["type" => "depense_transport"]);
                echo "\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 25), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 27
$context["entry"], "titre", [], "any", false, false, false, 27) == "Dépenses d'éducation (Mes enfants)")) {
                // line 28
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_finance_loisir", ["type" => "depense_education"]);
                echo "\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 29), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 31
$context["entry"], "titre", [], "any", false, false, false, 31) == "Dépenses de communication, échanges (Téléphone, internet)")) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_finance_loisir", ["type" => "depense_communication"]);
                echo "\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 33), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "titre", [], "any", false, false, false, 37), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t";
            // line 43
            $context["pourcentage"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "montant", [], "any", false, false, false, 43) / (isset($context["revenus"]) || array_key_exists("revenus", $context) ? $context["revenus"] : (function () { throw new RuntimeError('Variable "revenus" does not exist.', 43, $this->source); })())) * 100);
            // line 44
            echo "\t\t\t\t\t\t\t\t";
            $context["pourcentage_arrondi"] = (twig_round(((isset($context["pourcentage"]) || array_key_exists("pourcentage", $context) ? $context["pourcentage"] : (function () { throw new RuntimeError('Variable "pourcentage" does not exist.', 44, $this->source); })()) * 2)) / 2);
            // line 45
            echo "\t\t\t\t\t\t\t\t<div class=\"show-montant-euro\">
\t\t\t\t\t\t\t\t\t<h3>Montant cible /mois :</h3>
\t\t\t\t\t\t\t\t\t<h3 id=\"chiffre_montant\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_finance_loisir", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 48), "type" => twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "montant", [], "any", false, false, false, 48), "html", null, true);
            echo "€
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem;\">(";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["pourcentage_arrondi"]) || array_key_exists("pourcentage_arrondi", $context) ? $context["pourcentage_arrondi"] : (function () { throw new RuntimeError('Variable "pourcentage_arrondi" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "% du revenu)<span></a>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/objectif/finance/liste_finances_loisirs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 56,  215 => 49,  209 => 48,  204 => 45,  201 => 44,  199 => 43,  194 => 40,  188 => 37,  185 => 36,  179 => 33,  174 => 32,  172 => 31,  167 => 29,  162 => 28,  160 => 27,  155 => 25,  150 => 24,  148 => 23,  143 => 21,  138 => 20,  136 => 19,  132 => 17,  128 => 16,  122 => 13,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
\t<section class=\"container-list-calendrier\" style=\"margin-top: 200px;\">
\t\t<div class=\"container-list row\">
\t\t\t<div class=\"container-texte-exemple\">
\t\t\t\t<h3>{{ textIntro }}</h3>
\t\t\t</div>
\t\t\t<div class=\"container-cards\">
\t\t\t\t{% for entry in lstFinanceLoisir %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"image-title\">
\t\t\t\t\t\t\t{% if entry.titre == \"Dépenses de logements\" %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_finance_loisir', {'type' : 'depense_logement'}) }}\">
\t\t\t\t\t\t\t\t\t<h1>{{ entry.titre }}</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == \"Dépenses de Transport\" %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_finance_loisir', {'type' : 'depense_transport'}) }}\">
\t\t\t\t\t\t\t\t\t<h1>{{ entry.titre }}</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == \"Dépenses d'éducation (Mes enfants)\" %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_finance_loisir', {'type' : 'depense_education'}) }}\">
\t\t\t\t\t\t\t\t\t<h1>{{ entry.titre }}</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif entry.titre == \"Dépenses de communication, échanges (Téléphone, internet)\" %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_finance_loisir', {'type' : 'depense_communication'}) }}\">
\t\t\t\t\t\t\t\t\t<h1>{{ entry.titre }}</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<h1>{{ entry.titre }}</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-actions\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t<div class=\"statistique-temps\">
\t\t\t\t\t\t\t\t{% set pourcentage = (entry.montant / revenus) * 100 %}
\t\t\t\t\t\t\t\t{% set pourcentage_arrondi = ((pourcentage * 2) | round) / 2 %}
\t\t\t\t\t\t\t\t<div class=\"show-montant-euro\">
\t\t\t\t\t\t\t\t\t<h3>Montant cible /mois :</h3>
\t\t\t\t\t\t\t\t\t<h3 id=\"chiffre_montant\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_modifier_finance_loisir', {'id': entry.id, 'type': entry.type}) }}\">{{ entry.montant }}€
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem;\">({{ pourcentage_arrondi }}% du revenu)<span></a>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t{% endblock %}
", "pages/objectif/finance/liste_finances_loisirs.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/finance/liste_finances_loisirs.html.twig");
    }
}
