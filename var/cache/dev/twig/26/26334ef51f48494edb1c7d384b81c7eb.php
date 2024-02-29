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

/* pages/rythme_vital/liste_obligations_familiales.html.twig */
class __TwigTemplate_820e1fcd0d8de72eb0683d144085c038 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/liste_obligations_familiales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/liste_obligations_familiales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/liste_obligations_familiales.html.twig", 1);
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

        echo "Waou - Rythme Journalier
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
\t\t<div class=\"row button-principal-body element-to-scroll\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 3rem; width: 100%;\">Au regard de ma situation personnelle quelle part<br>de mon temps dois-je consacrer à des obligations<br>Familiales et domestiques ?</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-soin-enfant.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "soin_enfant"]);
        echo "\" style=\"background: #F14C4C; font-size: 1.8rem\">Soins aux enfants
\t\t\t\t\t\t<br>
\t\t\t\t\t\t(Petits enfants)
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à prendre soin des enfants<br>(petits enfants), les aider avec leurs devoirs,<br>
\t\t\t\t\t\t\tles emmener à l'école, aux activités extra-scolaires, etc.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 28
        if (((isset($context["countStatutSoinE"]) || array_key_exists("countStatutSoinE", $context) ? $context["countStatutSoinE"] : (function () { throw new RuntimeError('Variable "countStatutSoinE" does not exist.', 28, $this->source); })()) == 0)) {
            // line 29
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 30
(isset($context["countStatutSoinE"]) || array_key_exists("countStatutSoinE", $context) ? $context["countStatutSoinE"] : (function () { throw new RuntimeError('Variable "countStatutSoinE" does not exist.', 30, $this->source); })()) < 3)) {
            // line 31
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 36
        if (((isset($context["countStatutSoinE"]) || array_key_exists("countStatutSoinE", $context) ? $context["countStatutSoinE"] : (function () { throw new RuntimeError('Variable "countStatutSoinE" does not exist.', 36, $this->source); })()) < 3)) {
            // line 37
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        } elseif ((        // line 38
(isset($context["countStatutSoinE"]) || array_key_exists("countStatutSoinE", $context) ? $context["countStatutSoinE"] : (function () { throw new RuntimeError('Variable "countStatutSoinE" does not exist.', 38, $this->source); })()) == 0)) {
            // line 39
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Ma routine cible
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(sur 24H)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsSoinEnfant"]) || array_key_exists("moyenneTmpsSoinEnfant", $context) ? $context["moyenneTmpsSoinEnfant"] : (function () { throw new RuntimeError('Variable "moyenneTmpsSoinEnfant" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["pourcentageSoinEnfant"]) || array_key_exists("pourcentageSoinEnfant", $context) ? $context["pourcentageSoinEnfant"] : (function () { throw new RuntimeError('Variable "pourcentageSoinEnfant" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "soin_enfant"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Mon temps réel</p>
\t\t\t\t\t\t<h3>50%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-soutien-entourage.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "soutien_entourage"]);
        echo "\" style=\"background: #F1F648; font-size: 1.6rem\">Soutien entourage familiale
\t\t\t\t\t\t<br>
\t\t\t\t\t\t(Pers. âgée ou malade)
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à prendre soin des membres de ma famille qui ont besoin d'assistance en raison de l'âge, d'une maladie ou d'un handicap, etc.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 76
        if (((isset($context["countStatutSoutienE"]) || array_key_exists("countStatutSoutienE", $context) ? $context["countStatutSoutienE"] : (function () { throw new RuntimeError('Variable "countStatutSoutienE" does not exist.', 76, $this->source); })()) >= 3)) {
            // line 77
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 78
(isset($context["countStatutSoutienE"]) || array_key_exists("countStatutSoutienE", $context) ? $context["countStatutSoutienE"] : (function () { throw new RuntimeError('Variable "countStatutSoutienE" does not exist.', 78, $this->source); })()) == 0)) {
            // line 79
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 84
        if (((isset($context["countStatutSoutienE"]) || array_key_exists("countStatutSoutienE", $context) ? $context["countStatutSoutienE"] : (function () { throw new RuntimeError('Variable "countStatutSoutienE" does not exist.', 84, $this->source); })()) >= 3)) {
            // line 85
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 86
(isset($context["countStatutSoutienE"]) || array_key_exists("countStatutSoutienE", $context) ? $context["countStatutSoutienE"] : (function () { throw new RuntimeError('Variable "countStatutSoutienE" does not exist.', 86, $this->source); })()) == 0)) {
            // line 87
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 89
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsSoutienEntourage"]) || array_key_exists("moyenneTmpsSoutienEntourage", $context) ? $context["moyenneTmpsSoutienEntourage"] : (function () { throw new RuntimeError('Variable "moyenneTmpsSoutienEntourage" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["pourcentageSoutienEntourage"]) || array_key_exists("pourcentageSoutienEntourage", $context) ? $context["pourcentageSoutienEntourage"] : (function () { throw new RuntimeError('Variable "pourcentageSoutienEntourage" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "soutien_entourage"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>17%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-couple.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "echange_familiale"]);
        echo "\" style=\"background: #F59F38; font-size: 1.8rem\">Échanges familiaux
\t\t\t\t\t\t<br>
\t\t\t\t\t\t(Conjoint)
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à mon conjoint pour le maintient de l'harmonie du couple échanges, communication, convivialité...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 120
        if (((isset($context["countStatutEchanges"]) || array_key_exists("countStatutEchanges", $context) ? $context["countStatutEchanges"] : (function () { throw new RuntimeError('Variable "countStatutEchanges" does not exist.', 120, $this->source); })()) >= 3)) {
            // line 121
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 122
(isset($context["countStatutEchanges"]) || array_key_exists("countStatutEchanges", $context) ? $context["countStatutEchanges"] : (function () { throw new RuntimeError('Variable "countStatutEchanges" does not exist.', 122, $this->source); })()) == 0)) {
            // line 123
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 125
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 128
        if (((isset($context["countStatutEchanges"]) || array_key_exists("countStatutEchanges", $context) ? $context["countStatutEchanges"] : (function () { throw new RuntimeError('Variable "countStatutEchanges" does not exist.', 128, $this->source); })()) >= 3)) {
            // line 129
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 130
(isset($context["countStatutEchanges"]) || array_key_exists("countStatutEchanges", $context) ? $context["countStatutEchanges"] : (function () { throw new RuntimeError('Variable "countStatutEchanges" does not exist.', 130, $this->source); })()) == 0)) {
            // line 131
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 133
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsEchanges"]) || array_key_exists("moyenneTmpsEchanges", $context) ? $context["moyenneTmpsEchanges"] : (function () { throw new RuntimeError('Variable "moyenneTmpsEchanges" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["pourcentageEchanges"]) || array_key_exists("pourcentageEchanges", $context) ? $context["pourcentageEchanges"] : (function () { throw new RuntimeError('Variable "pourcentageEchanges" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "echange_familiale"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>16%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-entretien-foyer.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "entretien_foyer"]);
        echo "\" style=\"background: #60F538; font-size: 1.8rem\">Entretien du
\t\t\t\t\t\t<br>
\t\t\t\t\t\tfoyer
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre au nettoyage de la maison, de la lessive, de la vaisselle, au repasage, au rangement, et l'entretien général de l'espace de vie.....
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 164
        if (((isset($context["countStatutEntretienF"]) || array_key_exists("countStatutEntretienF", $context) ? $context["countStatutEntretienF"] : (function () { throw new RuntimeError('Variable "countStatutEntretienF" does not exist.', 164, $this->source); })()) >= 3)) {
            // line 165
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 166
(isset($context["countStatutEntretienF"]) || array_key_exists("countStatutEntretienF", $context) ? $context["countStatutEntretienF"] : (function () { throw new RuntimeError('Variable "countStatutEntretienF" does not exist.', 166, $this->source); })()) == 0)) {
            // line 167
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 172
        if (((isset($context["countStatutEntretienF"]) || array_key_exists("countStatutEntretienF", $context) ? $context["countStatutEntretienF"] : (function () { throw new RuntimeError('Variable "countStatutEntretienF" does not exist.', 172, $this->source); })()) >= 3)) {
            // line 173
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 174
(isset($context["countStatutEntretienF"]) || array_key_exists("countStatutEntretienF", $context) ? $context["countStatutEntretienF"] : (function () { throw new RuntimeError('Variable "countStatutEntretienF" does not exist.', 174, $this->source); })()) == 0)) {
            // line 175
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 177
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsEntretienF"]) || array_key_exists("moyenneTmpsEntretienF", $context) ? $context["moyenneTmpsEntretienF"] : (function () { throw new RuntimeError('Variable "moyenneTmpsEntretienF" does not exist.', 183, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["pourcentageEntretienF"]) || array_key_exists("pourcentageEntretienF", $context) ? $context["pourcentageEntretienF"] : (function () { throw new RuntimeError('Variable "pourcentageEntretienF" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "entretien_foyer"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>12%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-entretien-reparation.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "entretien_reparation"]);
        echo "\" style=\"background: #31E1EA; font-size: 1.6rem\">Entretiens & création
\t\t\t\t\t\t<br>
\t\t\t\t\t\tRéparations domestiques
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à un projet de création ou de rénovation de mon espace de vie.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 208
        if (((isset($context["countStatutEntretienR"]) || array_key_exists("countStatutEntretienR", $context) ? $context["countStatutEntretienR"] : (function () { throw new RuntimeError('Variable "countStatutEntretienR" does not exist.', 208, $this->source); })()) >= 3)) {
            // line 209
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 210
(isset($context["countStatutEntretienR"]) || array_key_exists("countStatutEntretienR", $context) ? $context["countStatutEntretienR"] : (function () { throw new RuntimeError('Variable "countStatutEntretienR" does not exist.', 210, $this->source); })()) == 0)) {
            // line 211
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 213
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 216
        if (((isset($context["countStatutEntretienR"]) || array_key_exists("countStatutEntretienR", $context) ? $context["countStatutEntretienR"] : (function () { throw new RuntimeError('Variable "countStatutEntretienR" does not exist.', 216, $this->source); })()) >= 3)) {
            // line 217
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 218
(isset($context["countStatutEntretienR"]) || array_key_exists("countStatutEntretienR", $context) ? $context["countStatutEntretienR"] : (function () { throw new RuntimeError('Variable "countStatutEntretienR" does not exist.', 218, $this->source); })()) == 0)) {
            // line 219
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 221
            echo "\t\t\t\t\t\t\tRubrique saisir en partie
\t\t\t\t\t\t";
        }
        // line 223
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsEntretienR"]) || array_key_exists("moyenneTmpsEntretienR", $context) ? $context["moyenneTmpsEntretienR"] : (function () { throw new RuntimeError('Variable "moyenneTmpsEntretienR" does not exist.', 227, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["pourcentageEntretienR"]) || array_key_exists("pourcentageEntretienR", $context) ? $context["pourcentageEntretienR"] : (function () { throw new RuntimeError('Variable "pourcentageEntretienR" does not exist.', 228, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "entretien_reparation"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>5%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-manger.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "preparation_repas"]);
        echo "\" style=\"background: #CF9EF7; font-size: 1.6rem\">Préparation de repas
\t\t\t\t\t\t<br>
\t\t\t\t\t\t& courses alimentaires
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à la préparation des repas, aux courses alimentaires...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 252
        if (((isset($context["countStatutPreparationR"]) || array_key_exists("countStatutPreparationR", $context) ? $context["countStatutPreparationR"] : (function () { throw new RuntimeError('Variable "countStatutPreparationR" does not exist.', 252, $this->source); })()) >= 3)) {
            // line 253
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 254
(isset($context["countStatutPreparationR"]) || array_key_exists("countStatutPreparationR", $context) ? $context["countStatutPreparationR"] : (function () { throw new RuntimeError('Variable "countStatutPreparationR" does not exist.', 254, $this->source); })()) == 0)) {
            // line 255
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 257
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 259
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 260
        if (((isset($context["countStatutPreparationR"]) || array_key_exists("countStatutPreparationR", $context) ? $context["countStatutPreparationR"] : (function () { throw new RuntimeError('Variable "countStatutPreparationR" does not exist.', 260, $this->source); })()) >= 3)) {
            // line 261
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 262
(isset($context["countStatutPreparationR"]) || array_key_exists("countStatutPreparationR", $context) ? $context["countStatutPreparationR"] : (function () { throw new RuntimeError('Variable "countStatutPreparationR" does not exist.', 262, $this->source); })()) == 0)) {
            // line 263
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 265
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 267
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsPreparationR"]) || array_key_exists("moyenneTmpsPreparationR", $context) ? $context["moyenneTmpsPreparationR"] : (function () { throw new RuntimeError('Variable "moyenneTmpsPreparationR" does not exist.', 271, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["pourcentagePreparationR"]) || array_key_exists("pourcentagePreparationR", $context) ? $context["pourcentagePreparationR"] : (function () { throw new RuntimeError('Variable "pourcentagePreparationR" does not exist.', 272, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "preparation_repas"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>5%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-gestion-financière.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "gestion_financiere"]);
        echo "\" style=\"background: #1DC1BF; font-size: 1.6rem\">Gestion financière
\t\t\t\t\t\t<br>
\t\t\t\t\t\t& Administratives
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à la gestion de mes finances personnelles et familiales, au paiement des factures, au traitement des démarches administratives, etc...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 296
        if (((isset($context["countStatutGestionF"]) || array_key_exists("countStatutGestionF", $context) ? $context["countStatutGestionF"] : (function () { throw new RuntimeError('Variable "countStatutGestionF" does not exist.', 296, $this->source); })()) >= 1)) {
            // line 297
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 299
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 301
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 302
        if (((isset($context["countStatutGestionF"]) || array_key_exists("countStatutGestionF", $context) ? $context["countStatutGestionF"] : (function () { throw new RuntimeError('Variable "countStatutGestionF" does not exist.', 302, $this->source); })()) >= 1)) {
            // line 303
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } else {
            // line 305
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        }
        // line 307
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["moyenneTmpsGestionF"]) || array_key_exists("moyenneTmpsGestionF", $context) ? $context["moyenneTmpsGestionF"] : (function () { throw new RuntimeError('Variable "moyenneTmpsGestionF" does not exist.', 311, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["pourcentageGestionF"]) || array_key_exists("pourcentageGestionF", $context) ? $context["pourcentageGestionF"] : (function () { throw new RuntimeError('Variable "pourcentageGestionF" does not exist.', 312, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 315
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lst_obligation_familiale", ["type" => "gestion_financiere"]);
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>5%</h3>
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
        return "pages/rythme_vital/liste_obligations_familiales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 316,  718 => 315,  712 => 312,  708 => 311,  702 => 307,  698 => 305,  694 => 303,  692 => 302,  689 => 301,  683 => 299,  677 => 297,  675 => 296,  663 => 287,  659 => 286,  646 => 276,  642 => 275,  636 => 272,  632 => 271,  626 => 267,  622 => 265,  618 => 263,  616 => 262,  613 => 261,  611 => 260,  608 => 259,  602 => 257,  596 => 255,  594 => 254,  589 => 253,  587 => 252,  575 => 243,  571 => 242,  558 => 232,  554 => 231,  548 => 228,  544 => 227,  538 => 223,  534 => 221,  530 => 219,  528 => 218,  525 => 217,  523 => 216,  520 => 215,  514 => 213,  508 => 211,  506 => 210,  501 => 209,  499 => 208,  487 => 199,  483 => 198,  470 => 188,  466 => 187,  460 => 184,  456 => 183,  450 => 179,  446 => 177,  442 => 175,  440 => 174,  437 => 173,  435 => 172,  432 => 171,  426 => 169,  420 => 167,  418 => 166,  413 => 165,  411 => 164,  399 => 155,  395 => 154,  382 => 144,  378 => 143,  372 => 140,  368 => 139,  362 => 135,  358 => 133,  354 => 131,  352 => 130,  349 => 129,  347 => 128,  344 => 127,  338 => 125,  332 => 123,  330 => 122,  325 => 121,  323 => 120,  311 => 111,  307 => 110,  294 => 100,  290 => 99,  284 => 96,  280 => 95,  274 => 91,  270 => 89,  266 => 87,  264 => 86,  261 => 85,  259 => 84,  256 => 83,  250 => 81,  244 => 79,  242 => 78,  237 => 77,  235 => 76,  223 => 67,  219 => 66,  205 => 55,  201 => 54,  195 => 51,  191 => 50,  182 => 43,  178 => 41,  174 => 39,  172 => 38,  169 => 37,  167 => 36,  164 => 35,  158 => 33,  152 => 31,  150 => 30,  145 => 29,  143 => 28,  130 => 18,  126 => 17,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Rythme Journalier
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('home') }}
{% endblock %}
{% block body %}
\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body element-to-scroll\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 3rem; width: 100%;\">Au regard de ma situation personnelle quelle part<br>de mon temps dois-je consacrer à des obligations<br>Familiales et domestiques ?</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-soin-enfant.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'soin_enfant'}) }}\" style=\"background: #F14C4C; font-size: 1.8rem\">Soins aux enfants
\t\t\t\t\t\t<br>
\t\t\t\t\t\t(Petits enfants)
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à prendre soin des enfants<br>(petits enfants), les aider avec leurs devoirs,<br>
\t\t\t\t\t\t\tles emmener à l'école, aux activités extra-scolaires, etc.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutSoinE == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutSoinE < 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutSoinE < 3 %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% elseif countStatutSoinE == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Ma routine cible
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(sur 24H)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsSoinEnfant }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageSoinEnfant }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'soin_enfant'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Mon temps réel</p>
\t\t\t\t\t\t<h3>50%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-soutien-entourage.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'soutien_entourage'}) }}\" style=\"background: #F1F648; font-size: 1.6rem\">Soutien entourage familiale
\t\t\t\t\t\t<br>
\t\t\t\t\t\t(Pers. âgée ou malade)
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à prendre soin des membres de ma famille qui ont besoin d'assistance en raison de l'âge, d'une maladie ou d'un handicap, etc.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutSoutienE >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutSoutienE == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutSoutienE >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutSoutienE == 0  %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsSoutienEntourage }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageSoutienEntourage }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'soutien_entourage'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>17%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-couple.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'echange_familiale'}) }}\" style=\"background: #F59F38; font-size: 1.8rem\">Échanges familiaux
\t\t\t\t\t\t<br>
\t\t\t\t\t\t(Conjoint)
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à mon conjoint pour le maintient de l'harmonie du couple échanges, communication, convivialité...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutEchanges >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutEchanges == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutEchanges >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutEchanges == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsEchanges }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageEchanges }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'echange_familiale'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>16%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-entretien-foyer.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'entretien_foyer'}) }}\" style=\"background: #60F538; font-size: 1.8rem\">Entretien du
\t\t\t\t\t\t<br>
\t\t\t\t\t\tfoyer
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre au nettoyage de la maison, de la lessive, de la vaisselle, au repasage, au rangement, et l'entretien général de l'espace de vie.....
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutEntretienF >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutEntretienF == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutEntretienF >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutEntretienF == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsEntretienF }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageEntretienF }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'entretien_foyer'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>12%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-entretien-reparation.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'entretien_reparation'}) }}\" style=\"background: #31E1EA; font-size: 1.6rem\">Entretiens & création
\t\t\t\t\t\t<br>
\t\t\t\t\t\tRéparations domestiques
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à un projet de création ou de rénovation de mon espace de vie.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutEntretienR >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutEntretienR == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutEntretienR >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutEntretienR == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisir en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsEntretienR }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageEntretienR }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'entretien_reparation'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>5%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-manger.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'preparation_repas'}) }}\" style=\"background: #CF9EF7; font-size: 1.6rem\">Préparation de repas
\t\t\t\t\t\t<br>
\t\t\t\t\t\t& courses alimentaires
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à la préparation des repas, aux courses alimentaires...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutPreparationR >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutPreparationR == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutPreparationR >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutPreparationR == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsPreparationR }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentagePreparationR }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'preparation_repas'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>5%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-gestion-financière.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_lst_obligation_familiale', {'type': 'gestion_financiere'}) }}\" style=\"background: #1DC1BF; font-size: 1.6rem\">Gestion financière
\t\t\t\t\t\t<br>
\t\t\t\t\t\t& Administratives
\t\t\t\t\t\t<div class=\"info-bubble-ob\">
\t\t\t\t\t\t\tQuel temps hebdomadaire je consacre à la gestion de mes finances personnelles et familiales, au paiement des factures, au traitement des démarches administratives, etc...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutGestionF >= 1 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutGestionF >= 1 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTmpsGestionF }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageGestionF }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_lst_obligation_familiale', {'type': 'gestion_financiere'}) }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>5%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/rythme_vital/liste_obligations_familiales.html.twig", "/Users/willyampiraud/Documents/MyPlineV2/templates/pages/rythme_vital/liste_obligations_familiales.html.twig");
    }
}
