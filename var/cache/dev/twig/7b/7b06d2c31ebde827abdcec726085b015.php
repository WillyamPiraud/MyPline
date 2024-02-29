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

/* pages/rythme-vital.html.twig */
class __TwigTemplate_aa9d511388377321945cfba8816e93aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme-vital.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme-vital.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme-vital.html.twig", 1);
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
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Dans cette page, je crée MA ROUTINE DE VIE sur les<br>5 grands AXES ESSENTIELS à mon épanouissement personnel.<br>Sur les 24h que comporte chaque jour, quelle part de mon temps je souhaite consacrer à :</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-mes-besoins-vitaux.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\" style=\"background: #F14C4C; font-size: 1.8rem\">Mes besoins
\t\t\t\t\t\t<br>
\t\t\t\t\t\tVitaux ?
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 24
        if (((isset($context["countStatut"]) || array_key_exists("countStatut", $context) ? $context["countStatut"] : (function () { throw new RuntimeError('Variable "countStatut" does not exist.', 24, $this->source); })()) == 0)) {
            // line 25
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } elseif ((        // line 26
(isset($context["countStatut"]) || array_key_exists("countStatut", $context) ? $context["countStatut"] : (function () { throw new RuntimeError('Variable "countStatut" does not exist.', 26, $this->source); })()) == 3)) {
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
        if (((isset($context["countStatut"]) || array_key_exists("countStatut", $context) ? $context["countStatut"] : (function () { throw new RuntimeError('Variable "countStatut" does not exist.', 32, $this->source); })()) == 3)) {
            // line 33
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } elseif ((        // line 34
(isset($context["countStatut"]) || array_key_exists("countStatut", $context) ? $context["countStatut"] : (function () { throw new RuntimeError('Variable "countStatut" does not exist.', 34, $this->source); })()) == 0)) {
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
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["moyennePerDayBesoinVital"]) || array_key_exists("moyennePerDayBesoinVital", $context) ? $context["moyennePerDayBesoinVital"] : (function () { throw new RuntimeError('Variable "moyennePerDayBesoinVital" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["pourcentageBesoinVital"]) || array_key_exists("pourcentageBesoinVital", $context) ? $context["pourcentageBesoinVital"] : (function () { throw new RuntimeError('Variable "pourcentageBesoinVital" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 51
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
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-obligation-domestique.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligations_familiales");
        echo "\" style=\"background: #F1F648; font-size: 1.8rem\">Mes obligations
\t\t\t\t\t\t<br>
\t\t\t\t\t\tFamiliales & Domestiques ?
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tMa vie est ponctuée d'obligations familiales et domestiques que je dois intégrer à mon emploi du temps. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tElles sont variables d'une personne à l'autre selon l'âge, les situations personnelles, les accords familiaux et les choix de chacun mais jamais totalement inexistantes. Dans cette rubrique, j'indique quel temps hebdomadaire je souhaite consacrer à ces obligations
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 73
        if (((isset($context["countObligationFamiliale"]) || array_key_exists("countObligationFamiliale", $context) ? $context["countObligationFamiliale"] : (function () { throw new RuntimeError('Variable "countObligationFamiliale" does not exist.', 73, $this->source); })()) >= 1)) {
            // line 74
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%; z-index: 1;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 79
        if (((isset($context["countObligationFamiliale"]) || array_key_exists("countObligationFamiliale", $context) ? $context["countObligationFamiliale"] : (function () { throw new RuntimeError('Variable "countObligationFamiliale" does not exist.', 79, $this->source); })()) >= 1)) {
            // line 80
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["moyennePerDayObligationFam"]) || array_key_exists("moyennePerDayObligationFam", $context) ? $context["moyennePerDayObligationFam"] : (function () { throw new RuntimeError('Variable "moyennePerDayObligationFam" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["pourcentageObligationFam"]) || array_key_exists("pourcentageObligationFam", $context) ? $context["pourcentageObligationFam"] : (function () { throw new RuntimeError('Variable "pourcentageObligationFam" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_obligations_familiales");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 93
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
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-activite-professionnel-formation.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_professionnel");
        echo "\" style=\"background: #F59F38; font-size: 1.8rem\">Mes activités
\t\t\t\t\t\t<br>
\t\t\t\t\t\tProfessionnelles ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 109
        if (((isset($context["countActiviteProfessionnelle"]) || array_key_exists("countActiviteProfessionnelle", $context) ? $context["countActiviteProfessionnelle"] : (function () { throw new RuntimeError('Variable "countActiviteProfessionnelle" does not exist.', 109, $this->source); })()) >= 1)) {
            // line 110
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 115
        if (((isset($context["countActiviteProfessionnelle"]) || array_key_exists("countActiviteProfessionnelle", $context) ? $context["countActiviteProfessionnelle"] : (function () { throw new RuntimeError('Variable "countActiviteProfessionnelle" does not exist.', 115, $this->source); })()) >= 1)) {
            // line 116
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } else {
            // line 118
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["moyennePerDayActivitePro"]) || array_key_exists("moyennePerDayActivitePro", $context) ? $context["moyennePerDayActivitePro"] : (function () { throw new RuntimeError('Variable "moyennePerDayActivitePro" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["pourcentageActivitePro"]) || array_key_exists("pourcentageActivitePro", $context) ? $context["pourcentageActivitePro"] : (function () { throw new RuntimeError('Variable "pourcentageActivitePro" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_activite_professionnelle");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 129
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
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-loisir-vacance.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs_vacances");
        echo "\" style=\"background: #60F538; font-size: 1.8rem\">Mes loisirs
\t\t\t\t\t\t<br>
\t\t\t\t\t\tou activités ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 145
        if (((isset($context["countMesLoisirs"]) || array_key_exists("countMesLoisirs", $context) ? $context["countMesLoisirs"] : (function () { throw new RuntimeError('Variable "countMesLoisirs" does not exist.', 145, $this->source); })()) >= 1)) {
            // line 146
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 151
        if (((isset($context["countMesLoisirs"]) || array_key_exists("countMesLoisirs", $context) ? $context["countMesLoisirs"] : (function () { throw new RuntimeError('Variable "countMesLoisirs" does not exist.', 151, $this->source); })()) >= 1)) {
            // line 152
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["moyennePerDayMesLoisirs"]) || array_key_exists("moyennePerDayMesLoisirs", $context) ? $context["moyennePerDayMesLoisirs"] : (function () { throw new RuntimeError('Variable "moyennePerDayMesLoisirs" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["pourcentageMesLoisirs"]) || array_key_exists("pourcentageMesLoisirs", $context) ? $context["pourcentageMesLoisirs"] : (function () { throw new RuntimeError('Variable "pourcentageMesLoisirs" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_mes_loisirs");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-modifier.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>12%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-lien-social.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liens_sociaux");
        echo "\" style=\"background: #31E1EA; font-size: 1.8rem\">Mes liens
\t\t\t\t\t\t<br>
\t\t\t\t\t\tSociaux ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t";
        // line 181
        if (((isset($context["countMesLiensSociaux"]) || array_key_exists("countMesLiensSociaux", $context) ? $context["countMesLiensSociaux"] : (function () { throw new RuntimeError('Variable "countMesLiensSociaux" does not exist.', 181, $this->source); })()) >= 1)) {
            // line 182
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-saisit.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        } else {
            // line 184
            echo "\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/picto-a-saisir.png"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t";
        }
        // line 186
        echo "\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t";
        // line 187
        if (((isset($context["countMesLiensSociaux"]) || array_key_exists("countMesLiensSociaux", $context) ? $context["countMesLiensSociaux"] : (function () { throw new RuntimeError('Variable "countMesLiensSociaux" does not exist.', 187, $this->source); })()) >= 1)) {
            // line 188
            echo "\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t";
        } else {
            // line 190
            echo "\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["moyennePerDayLienSocial"]) || array_key_exists("moyennePerDayLienSocial", $context) ? $context["moyennePerDayLienSocial"] : (function () { throw new RuntimeError('Variable "moyennePerDayLienSocial" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p class=\"hour-absolute\">";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["pourcentageLienSocial"]) || array_key_exists("pourcentageLienSocial", $context) ? $context["pourcentageLienSocial"] : (function () { throw new RuntimeError('Variable "pourcentageLienSocial" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_mes_liens_sociaux");
        echo "\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 201
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
        return "pages/rythme-vital.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 201,  491 => 200,  485 => 197,  481 => 196,  475 => 192,  471 => 190,  467 => 188,  465 => 187,  462 => 186,  456 => 184,  450 => 182,  448 => 181,  440 => 176,  436 => 175,  423 => 165,  419 => 164,  413 => 161,  409 => 160,  403 => 156,  399 => 154,  395 => 152,  393 => 151,  390 => 150,  384 => 148,  378 => 146,  376 => 145,  368 => 140,  364 => 139,  351 => 129,  347 => 128,  341 => 125,  337 => 124,  331 => 120,  327 => 118,  323 => 116,  321 => 115,  318 => 114,  312 => 112,  306 => 110,  304 => 109,  296 => 104,  292 => 103,  279 => 93,  275 => 92,  269 => 89,  265 => 88,  259 => 84,  255 => 82,  251 => 80,  249 => 79,  246 => 78,  240 => 76,  234 => 74,  232 => 73,  219 => 63,  215 => 62,  201 => 51,  197 => 50,  191 => 47,  187 => 46,  178 => 39,  174 => 37,  170 => 35,  168 => 34,  165 => 33,  163 => 32,  160 => 31,  154 => 29,  148 => 27,  146 => 26,  141 => 25,  139 => 24,  130 => 18,  126 => 17,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Dans cette page, je crée MA ROUTINE DE VIE sur les<br>5 grands AXES ESSENTIELS à mon épanouissement personnel.<br>Sur les 24h que comporte chaque jour, quelle part de mon temps je souhaite consacrer à :</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-mes-besoins-vitaux.png') }}\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\" style=\"background: #F14C4C; font-size: 1.8rem\">Mes besoins
\t\t\t\t\t\t<br>
\t\t\t\t\t\tVitaux ?
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countStatut == 0 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% elseif countStatut == 3 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/saisit-en-partie.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countStatut == 3 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% elseif countStatut == 0 %}
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
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">{{ moyennePerDayBesoinVital }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageBesoinVital }}%</p>
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
\t\t\t\t\t<a class=\"container-relative button-rythme\" href=\"{{ path('app_obligations_familiales') }}\" style=\"background: #F1F648; font-size: 1.8rem\">Mes obligations
\t\t\t\t\t\t<br>
\t\t\t\t\t\tFamiliales & Domestiques ?
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tMa vie est ponctuée d'obligations familiales et domestiques que je dois intégrer à mon emploi du temps. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tElles sont variables d'une personne à l'autre selon l'âge, les situations personnelles, les accords familiaux et les choix de chacun mais jamais totalement inexistantes. Dans cette rubrique, j'indique quel temps hebdomadaire je souhaite consacrer à ces obligations
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countObligationFamiliale >= 1 %}
\t\t\t\t\t\t<a><img style=\"width: 150%; z-index: 1;\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countObligationFamiliale >= 1 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">{{ moyennePerDayObligationFam }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageObligationFam }}%</p>
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
\t\t\t\t\t<a class=\"button-rythme\" href=\"{{ path('app_activite_professionnel') }}\" style=\"background: #F59F38; font-size: 1.8rem\">Mes activités
\t\t\t\t\t\t<br>
\t\t\t\t\t\tProfessionnelles ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countActiviteProfessionnelle >= 1 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countActiviteProfessionnelle >= 1 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">{{ moyennePerDayActivitePro }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageActivitePro }}%</p>
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
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-loisir-vacance.png') }}\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"{{ path('app_loisirs_vacances') }}\" style=\"background: #60F538; font-size: 1.8rem\">Mes loisirs
\t\t\t\t\t\t<br>
\t\t\t\t\t\tou activités ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countMesLoisirs >= 1 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countMesLoisirs >= 1 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">{{ moyennePerDayMesLoisirs }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageMesLoisirs }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_mes_loisirs') }}\" class=\"container-relative button-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-modifier.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Modifier</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3>12%</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-4 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<img src=\"{{ asset('img/picto-lien-social.png') }}\">
\t\t\t\t\t<a class=\"button-rythme\" href=\"{{ path('app_liens_sociaux') }}\" style=\"background: #31E1EA; font-size: 1.8rem\">Mes liens
\t\t\t\t\t\t<br>
\t\t\t\t\t\tSociaux ?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 plus_moins container-relative\">
\t\t\t\t\t{% if countMesLiensSociaux >= 1 %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-saisit.png') }}\"></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a><img style=\"width: 150%\" src=\"{{ asset('img/picto-a-saisir.png') }}\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"info-bubble\">
\t\t\t\t\t\t{% if countMesLiensSociaux >= 1 %}
\t\t\t\t\t\t\tRubrique complétée
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tRubrique à saisir
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\">
\t\t\t\t\t\t<h3 class=\"container-absolutes\" style=\"position: relative;\">{{ moyennePerDayLienSocial }}
\t\t\t\t\t\t\t<p class=\"hour-absolute\">{{ pourcentageLienSocial }}%</p>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_rythme_vital_mes_liens_sociaux') }}\" class=\"container-relative button-statistique click\">
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
", "pages/rythme-vital.html.twig", "/Users/willyampiraud/Documents/MyPlineV2/templates/pages/rythme-vital.html.twig");
    }
}
