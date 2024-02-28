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

/* pages/rythme_vital/activite_pro_liste.html.twig */
class __TwigTemplate_e083e579fc8814f6a3bb8f3ebc1d92f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/activite_pro_liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/activite_pro_liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/activite_pro_liste.html.twig", 1);
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

        echo "Waou - Activité Professionnelles et formation
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
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Quel temps journalier je consacre à mon travail<br>et/ou à mes études, à ma formation ?</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-mes-besoins-vitaux.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mon_metier", ["type" => "metier"]);
        echo "\" style=\"background: #F14C4C; font-size: 1.8rem\">Métier :
\t\t\t\t\t\t<br>
\t\t\t\t\t\tMon temps de travail
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 24
        if (((isset($context["countStatutMetier"]) || array_key_exists("countStatutMetier", $context) ? $context["countStatutMetier"] : (function () { throw new RuntimeError('Variable "countStatutMetier" does not exist.', 24, $this->source); })()) == 0)) {
            // line 25
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 26
(isset($context["countStatutMetier"]) || array_key_exists("countStatutMetier", $context) ? $context["countStatutMetier"] : (function () { throw new RuntimeError('Variable "countStatutMetier" does not exist.', 26, $this->source); })()) >= 3)) {
            // line 27
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 32
        if (((isset($context["countStatutMetier"]) || array_key_exists("countStatutMetier", $context) ? $context["countStatutMetier"] : (function () { throw new RuntimeError('Variable "countStatutMetier" does not exist.', 32, $this->source); })()) >= 3)) {
            // line 33
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 34
(isset($context["countStatutMetier"]) || array_key_exists("countStatutMetier", $context) ? $context["countStatutMetier"] : (function () { throw new RuntimeError('Variable "countStatutMetier" does not exist.', 34, $this->source); })()) == 0)) {
            // line 35
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Ma routine cible
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(sur 24H)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["moyenneTimeFormattedObligationMetier"]) || array_key_exists("moyenneTimeFormattedObligationMetier", $context) ? $context["moyenneTimeFormattedObligationMetier"] : (function () { throw new RuntimeError('Variable "moyenneTimeFormattedObligationMetier" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["pourcentageObligationMetierArrondi"]) || array_key_exists("pourcentageObligationMetierArrondi", $context) ? $context["pourcentageObligationMetierArrondi"] : (function () { throw new RuntimeError('Variable "pourcentageObligationMetierArrondi" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 52
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
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-obligation-domestique.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mon_metier", ["type" => "etude"]);
        echo "\" style=\"background: #F1F648; font-size: 1.8rem\">Études :
\t\t\t\t\t\t<br>
\t\t\t\t\t\tMon temps de scolarité
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 70
        if (((isset($context["countStatutEtude"]) || array_key_exists("countStatutEtude", $context) ? $context["countStatutEtude"] : (function () { throw new RuntimeError('Variable "countStatutEtude" does not exist.', 70, $this->source); })()) == 0)) {
            // line 71
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 72
(isset($context["countStatutEtude"]) || array_key_exists("countStatutEtude", $context) ? $context["countStatutEtude"] : (function () { throw new RuntimeError('Variable "countStatutEtude" does not exist.', 72, $this->source); })()) >= 3)) {
            // line 73
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 78
        if (((isset($context["countStatutEtude"]) || array_key_exists("countStatutEtude", $context) ? $context["countStatutEtude"] : (function () { throw new RuntimeError('Variable "countStatutEtude" does not exist.', 78, $this->source); })()) >= 3)) {
            // line 79
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 80
(isset($context["countStatutEtude"]) || array_key_exists("countStatutEtude", $context) ? $context["countStatutEtude"] : (function () { throw new RuntimeError('Variable "countStatutEtude" does not exist.', 80, $this->source); })()) == 0)) {
            // line 81
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["moyenneTimeFormattedObligationEtude"]) || array_key_exists("moyenneTimeFormattedObligationEtude", $context) ? $context["moyenneTimeFormattedObligationEtude"] : (function () { throw new RuntimeError('Variable "moyenneTimeFormattedObligationEtude" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["pourcentageObligationEtudeArrondi"]) || array_key_exists("pourcentageObligationEtudeArrondi", $context) ? $context["pourcentageObligationEtudeArrondi"] : (function () { throw new RuntimeError('Variable "pourcentageObligationEtudeArrondi" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_obligations_familiales");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 95
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
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-activite-professionnel-formation.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mon_metier", ["type" => "formation"]);
        echo "\" style=\"background: #F59F38; font-size: 1.8rem\">Ma formation
\t\t\t\t\t\t<br>
\t\t\t\t\t\tPersonnelle</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 111
        if (((isset($context["countStatutFormation"]) || array_key_exists("countStatutFormation", $context) ? $context["countStatutFormation"] : (function () { throw new RuntimeError('Variable "countStatutFormation" does not exist.', 111, $this->source); })()) == 0)) {
            // line 112
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 113
(isset($context["countStatutFormation"]) || array_key_exists("countStatutFormation", $context) ? $context["countStatutFormation"] : (function () { throw new RuntimeError('Variable "countStatutFormation" does not exist.', 113, $this->source); })()) >= 3)) {
            // line 114
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/saisit-en-partie.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 119
        if (((isset($context["countStatutFormation"]) || array_key_exists("countStatutFormation", $context) ? $context["countStatutFormation"] : (function () { throw new RuntimeError('Variable "countStatutFormation" does not exist.', 119, $this->source); })()) >= 3)) {
            // line 120
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 121
(isset($context["countStatutFormation"]) || array_key_exists("countStatutFormation", $context) ? $context["countStatutFormation"] : (function () { throw new RuntimeError('Variable "countStatutFormation" does not exist.', 121, $this->source); })()) == 0)) {
            // line 122
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        } else {
            // line 124
            echo "\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["moyenneTimeFormattedObligationFormation"]) || array_key_exists("moyenneTimeFormattedObligationFormation", $context) ? $context["moyenneTimeFormattedObligationFormation"] : (function () { throw new RuntimeError('Variable "moyenneTimeFormattedObligationFormation" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["pourcentageObligationFormationArrondi"]) || array_key_exists("pourcentageObligationFormationArrondi", $context) ? $context["pourcentageObligationFormationArrondi"] : (function () { throw new RuntimeError('Variable "pourcentageObligationFormationArrondi" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_activite_professionnelle");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>16%</h3>
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
        return "pages/rythme_vital/activite_pro_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 136,  370 => 135,  364 => 132,  360 => 131,  353 => 126,  349 => 124,  345 => 122,  343 => 121,  340 => 120,  338 => 119,  335 => 118,  329 => 116,  323 => 114,  321 => 113,  316 => 112,  314 => 111,  306 => 106,  302 => 105,  289 => 95,  285 => 94,  279 => 91,  275 => 90,  268 => 85,  264 => 83,  260 => 81,  258 => 80,  255 => 79,  253 => 78,  250 => 77,  244 => 75,  238 => 73,  236 => 72,  231 => 71,  229 => 70,  220 => 64,  216 => 63,  202 => 52,  198 => 51,  192 => 48,  188 => 47,  178 => 39,  174 => 37,  170 => 35,  168 => 34,  165 => 33,  163 => 32,  160 => 31,  154 => 29,  148 => 27,  146 => 26,  141 => 25,  139 => 24,  130 => 18,  126 => 17,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Activité Professionnelles et formation
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('home') }}
{% endblock %}
{% block body %}
\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body element-to-scroll\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Quel temps journalier je consacre à mon travail<br>et/ou à mes études, à ma formation ?</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-mes-besoins-vitaux.png') }}\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"{{ path('app_mon_metier', {'type' : \"metier\"}) }}\" style=\"background: #F14C4C; font-size: 1.8rem\">Métier :
\t\t\t\t\t\t<br>
\t\t\t\t\t\tMon temps de travail
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutMetier == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutMetier >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutMetier >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutMetier == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Ma routine cible
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(sur 24H)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTimeFormattedObligationMetier }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageObligationMetierArrondi }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\" class=\"container-relative button-statistique click\">
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
\t\t\t\t\t<img src=\"{{ asset('img/picto-obligation-domestique.png') }}\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_mon_metier', {'type': 'etude'}) }}\" style=\"background: #F1F648; font-size: 1.8rem\">Études :
\t\t\t\t\t\t<br>
\t\t\t\t\t\tMon temps de scolarité
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutEtude == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutEtude >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutEtude >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutEtude == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTimeFormattedObligationEtude }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageObligationEtudeArrondi }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_obligations_familiales') }}\" class=\"container-relative button-statistique click\">
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
\t\t\t\t\t<img src=\"{{ asset('img/picto-activite-professionnel-formation.png') }}\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"{{ path('app_mon_metier', {'type': 'formation'}) }}\" style=\"background: #F59F38; font-size: 1.8rem\">Ma formation
\t\t\t\t\t\t<br>
\t\t\t\t\t\tPersonnelle</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatutFormation == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% elseif countStatutFormation >= 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatutFormation >= 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatutFormation == 0 %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique saisit en partie
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ moyenneTimeFormattedObligationFormation }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageObligationFormationArrondi }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_activite_professionnelle') }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>16%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/rythme_vital/activite_pro_liste.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/activite_pro_liste.html.twig");
    }
}
