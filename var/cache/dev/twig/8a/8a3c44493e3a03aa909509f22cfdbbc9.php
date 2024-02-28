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

/* pages/objectif/activite/liste_activite.html.twig */
class __TwigTemplate_d73df1e2c370f0bcdad755d58d8f2b58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/activite/liste_activite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/activite/liste_activite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/activite/liste_activite.html.twig", 1);
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

        echo "Waou - Objectifs Activtés
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
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
        echo "\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Avoir un travail (= une source de revenu) est essentiel à mon bien être et à la réalisation de mes projets de vie.<br>
\t\t\t\t\tCe travail doit me plaire, avoir du sens et respecter un bon équilibre entre vie personnelle et vie professionnelle.
\t\t\t\t\t<br>Dans cette page je fixe mes objectifs personnels d’évolution de ma situation professionnelle.
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_activite_pro");
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\">Activité professionnelle<br>(Mon Métier)
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tDans cette rubrique je liste mes différents objectifs professionnelle
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["countPro"]) || array_key_exists("countPro", $context) ? $context["countPro"] : (function () { throw new RuntimeError('Variable "countPro" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_activite_pro");
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_activite_formation");
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Formation / Étude
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tIci, je renseigne mes différents objectifs dans mes études (Trouver une alternance, Obtenir mon diplome...)
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["countFormation"]) || array_key_exists("countFormation", $context) ? $context["countFormation"] : (function () { throw new RuntimeError('Variable "countFormation" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Sommeil"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_activite_loisir");
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Activtés de loisirs
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tJe saisit ici mes objectifs de loisirs (Progresser dans un sport, se divertir plus souvent...)
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["countLoisir"]) || array_key_exists("countLoisir", $context) ? $context["countLoisir"] : (function () { throw new RuntimeError('Variable "countLoisir" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Autres"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/objectif/activite/liste_activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 70,  210 => 69,  205 => 67,  194 => 59,  184 => 52,  180 => 51,  175 => 49,  164 => 41,  154 => 34,  150 => 33,  145 => 31,  129 => 20,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Objectifs Activtés
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('home') }}
{% endblock %}
{% block body %}
\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Avoir un travail (= une source de revenu) est essentiel à mon bien être et à la réalisation de mes projets de vie.<br>
\t\t\t\t\tCe travail doit me plaire, avoir du sens et respecter un bon équilibre entre vie personnelle et vie professionnelle.
\t\t\t\t\t<br>Dans cette page je fixe mes objectifs personnels d’évolution de ma situation professionnelle.
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_objectifs_activite_pro') }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\">Activité professionnelle<br>(Mon Métier)
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tDans cette rubrique je liste mes différents objectifs professionnelle
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">{{ countPro }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_activite_pro') }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_activite_formation') }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Formation / Étude
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tIci, je renseigne mes différents objectifs dans mes études (Trouver une alternance, Obtenir mon diplome...)
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countFormation }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Sommeil'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_objectifs_activite_loisir') }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Activtés de loisirs
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tJe saisit ici mes objectifs de loisirs (Progresser dans un sport, se divertir plus souvent...)
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countLoisir }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Autres'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/objectif/activite/liste_activite.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/activite/liste_activite.html.twig");
    }
}
