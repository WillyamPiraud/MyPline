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

/* home/home.html.twig */
class __TwigTemplate_d76e8e44f42a20dcd223a27a5d0bff8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "\t<head>
\t\t<title>
\t\t\t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Waou - Accueil
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("headapp");
        echo "
\t\t\t";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "\t<!--
\t\t\t<nav class=\"nav-home\" style=\"margin-top: 2%;\">
\t\t\t\t<div class=\"row row-header-sup navigation-pages\">
\t\t\t\t\t<div class=\"col-6 col-md-4 div-nav-logo\"><img src=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-sans-bg.png"), "html", null, true);
        echo " alt=\"Logo\"></div>
\t\t\t\t\t<div class=\"col-md-8 div-nav-button\">
\t\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_je_decouvre");
        echo "\" class=\"principal-supp-head-button\">Je Découvre Waou</a>
\t\t\t\t\t\t<a href=\"#\">Essai Gratuit</a>
\t\t\t\t\t\t<a href=\"#\">Mes Vidéos Référence</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t-->

\t<nav class=\"nav-home-inf element-to-scroll\">
\t\t<div class=\"row row-header-inf\">
\t\t\t<div class=\"col-3 col-button-connexion\">
\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "\t\t\t\t\t<a class=\"button-connexion\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "prenom", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\t<a class=\"button-connexion\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t</div>
\t\t\t";
        // line 42
        echo "\t\t\t<div class=\"col-9 liste-rappel\">
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t<span style=\"text-transform: capitalize;\" id=\"date\">01/01/2023</span>
\t\t\t\t\t\t\t\t<span style=\"text-transform: capitalize;\" id=\"heure\">00:00:00</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_journalier");
        echo "\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Mon Journalier</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["countInvalidEntriesRDV"]) || array_key_exists("countInvalidEntriesRDV", $context) ? $context["countInvalidEntriesRDV"] : (function () { throw new RuntimeError('Variable "countInvalidEntriesRDV" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_rdv");
        echo "\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Rendez-vous
\t\t\t\t\t\t\t\t<br>à prendre</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["countInvalidEntriesChoses"]) || array_key_exists("countInvalidEntriesChoses", $context) ? $context["countInvalidEntriesChoses"] : (function () { throw new RuntimeError('Variable "countInvalidEntriesChoses" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_choses_a_faire");
        echo "\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Petites choses à faire</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["countInvalidTel"]) || array_key_exists("countInvalidTel", $context) ? $context["countInvalidTel"] : (function () { throw new RuntimeError('Variable "countInvalidTel" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_tel");
        echo "\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Appels tel<br>
\t\t\t\t\t\t\t\tà donner</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["countInvalidEntriesEvent"]) || array_key_exists("countInvalidEntriesEvent", $context) ? $context["countInvalidEntriesEvent"] : (function () { throw new RuntimeError('Variable "countInvalidEntriesEvent" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_calendrier_evenement");
        echo "\" class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Événements à souhaiter</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>

<section class=\"nav-principal-body\">
\t<div class=\"row button-principal-body\">
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu responsive-top-border\">
\t\t\t\t<img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-agenda.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon responsive-top-border\">
\t\t\t\t<a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital");
        echo "\">Mes Routines</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-post-it.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_it_notes");
        echo "\">Mes Post-it
\t\t\t\t\t<br>&amp; Notes</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-document.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_document");
        echo "\">Mes Listes
\t\t\t\t\t<br>&amp; Documents</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-objectif.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs");
        echo "\">Mes Objectifs
\t\t\t\t\t<br>&amp; Projets</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plan-action.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_plan_action");
        echo "\">Mes Plans d'Actions</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-video.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"#\">Mes Vidéos
\t\t\t\t\t<br>&amp; Photos</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-webbinar.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"#\">Mes Partages
\t\t\t\t\t<br>&amp; Webbinar</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-resultat.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"#\">Mes Résultats</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 315
        echo "<script type=\"text/javascript\">
\t\$(function () {
\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) {
\$(\".navigation-pages\").addClass(\"scrolled\");
\$(\".element-to-scroll\").addClass(\"element-scrolled\");
} else {
\$(\".navigation-pages\").removeClass(\"scrolled\");
\$(\".element-to-scroll\").removeClass(\"element-scrolled\");
}
});
});
</script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/heure.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 328,  429 => 315,  414 => 199,  399 => 187,  384 => 175,  373 => 167,  367 => 164,  355 => 155,  349 => 152,  337 => 143,  331 => 140,  319 => 131,  313 => 128,  302 => 120,  296 => 117,  278 => 102,  272 => 99,  259 => 89,  253 => 86,  241 => 77,  235 => 74,  222 => 64,  216 => 61,  204 => 52,  192 => 42,  189 => 37,  183 => 35,  177 => 33,  175 => 32,  161 => 21,  156 => 19,  151 => 16,  141 => 15,  129 => 10,  124 => 9,  114 => 8,  94 => 5,  82 => 12,  80 => 8,  77 => 7,  75 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head%}
\t<head>
\t\t<title>
\t\t\t{% block title %}Waou - Accueil
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('headapp') }}
\t\t\t{{ encore_entry_link_tags('home') }}
\t\t{% endblock %}
\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t</head>
{% endblock %}
{% block body %}
\t<!--
\t\t\t<nav class=\"nav-home\" style=\"margin-top: 2%;\">
\t\t\t\t<div class=\"row row-header-sup navigation-pages\">
\t\t\t\t\t<div class=\"col-6 col-md-4 div-nav-logo\"><img src={{ asset('img/logo-sans-bg.png') }} alt=\"Logo\"></div>
\t\t\t\t\t<div class=\"col-md-8 div-nav-button\">
\t\t\t\t\t\t<a href=\"{{ path('app_je_decouvre') }}\" class=\"principal-supp-head-button\">Je Découvre Waou</a>
\t\t\t\t\t\t<a href=\"#\">Essai Gratuit</a>
\t\t\t\t\t\t<a href=\"#\">Mes Vidéos Référence</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t-->

\t<nav class=\"nav-home-inf element-to-scroll\">
\t\t<div class=\"row row-header-inf\">
\t\t\t<div class=\"col-3 col-button-connexion\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a class=\"button-connexion\" href=\"#\">{{ app.user.prenom }}</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"button-connexion\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t{#<div class=\"col-4 display-hour-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-transform: capitalize;\" id=\"date\">01/01/2023</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-transform: capitalize;\" id=\"heure\">00:00:00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>#}
\t\t\t<div class=\"col-9 liste-rappel\">
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t<span style=\"text-transform: capitalize;\" id=\"date\">01/01/2023</span>
\t\t\t\t\t\t\t\t<span style=\"text-transform: capitalize;\" id=\"heure\">00:00:00</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"{{ path('app_journalier') }}\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Mon Journalier</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>{{ countInvalidEntriesRDV }}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"{{ path('app_lst_rdv') }}\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Rendez-vous
\t\t\t\t\t\t\t\t<br>à prendre</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>{{ countInvalidEntriesChoses }}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"{{ path('app_lst_calendrier_choses_a_faire') }}\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Petites choses à faire</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>{{ countInvalidTel }}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"a-calendrier\" href=\"{{ path('app_lst_calendrier_tel') }}\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Appels tel<br>
\t\t\t\t\t\t\t\tà donner</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"rappel\">
\t\t\t\t\t<a class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-supp\">
\t\t\t\t\t\t\t<h2>{{ countInvalidEntriesEvent }}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_calendrier_evenement') }}\" class=\"a-calendrier\">
\t\t\t\t\t\t<div class=\"row-inf\">
\t\t\t\t\t\t\t<h3>Événements à souhaiter</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>

<section class=\"nav-principal-body\">
\t<div class=\"row button-principal-body\">
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu responsive-top-border\">
\t\t\t\t<img src=\"{{ asset('img/icon-agenda.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon responsive-top-border\">
\t\t\t\t<a href=\"{{ path('app_rythme_vital') }}\">Mes Routines</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-post-it.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"{{ path('app_post_it_notes') }}\">Mes Post-it
\t\t\t\t\t<br>&amp; Notes</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-document.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"{{ path('app_liste_document') }}\">Mes Listes
\t\t\t\t\t<br>&amp; Documents</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-objectif.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"{{ path('app_mes_objectifs') }}\">Mes Objectifs
\t\t\t\t\t<br>&amp; Projets</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-plan-action.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"{{ path('app_liste_plan_action') }}\">Mes Plans d'Actions</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-video.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"#\">Mes Vidéos
\t\t\t\t\t<br>&amp; Photos</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-webbinar.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"#\">Mes Partages
\t\t\t\t\t<br>&amp; Webbinar</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-principal-body\">
\t\t\t<div class=\"col-2 img-menu\">
\t\t\t\t<img src=\"{{ asset('img/icon-resultat.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-3 button-menu-icon\">
\t\t\t\t<a href=\"#\">Mes Résultats</a>
\t\t\t</div>
\t\t\t<div class=\"col-7 description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

{#      
<section class=\"nav-principal-body\">
\t<div class=\"row row-cols-2\">
\t\t<div class=\"col-5 button-principal-body\">
\t\t\t<div class=\"menu-principal-body\" style=\"border-top: 3px solid #112D4E;\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-agenda.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mon Agenda
\t\t\t\t\t\t<br>&amp; Rendez-vous</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-post-it.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Post-it
\t\t\t\t\t\t<br>&amp; Notes</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-document.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Listes
\t\t\t\t\t\t<br>&amp; Documents</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-objectif.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Objectifs
\t\t\t\t\t\t<br>&amp; Projets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-plan-action.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Plans d'Actions</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-video.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Vidéos
\t\t\t\t\t\t<br>&amp; Photos</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-webbinar.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Partages
\t\t\t\t\t\t<br>&amp; Webbinar</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body\">
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-resultat.png') }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<a href=\"#\">Mes Résultats</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-7 description-menu-button\">
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t\t<div class=\"description-menu-button-page\">
\t\t\t\t<h2>TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</h2>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
#}
<script type=\"text/javascript\">
\t\$(function () {
\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) {
\$(\".navigation-pages\").addClass(\"scrolled\");
\$(\".element-to-scroll\").addClass(\"element-scrolled\");
} else {
\$(\".navigation-pages\").removeClass(\"scrolled\");
\$(\".element-to-scroll\").removeClass(\"element-scrolled\");
}
});
});
</script>
<script src=\"{{ asset('js/heure.js') }}\"></script>{% endblock %}
", "home/home.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/home/home.html.twig");
    }
}
