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

/* pages/objectif/sante/liste_sante.html.twig */
class __TwigTemplate_5f3c7f422013b59bf2b5c1aa51b6873d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/sante/liste_sante.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/sante/liste_sante.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/sante/liste_sante.html.twig", 1);
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

        echo "Waou - Mes Objectifs & Projets
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
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Être en bonne santé et le rester est essentiel à mon bien être et à la réalisation de mes projets de vie.<br>
\t\t\t\t\tCette page m’aide à me fixer mes objectifs personnels de santé en complétant l’une ou plusieurs des rubriques ci-dessous</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Alimentation"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\">Alimentation - Hydratation
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel pour améliorer mon alimentation ?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIl doit être clair, précis et vérifiable. Exemples : Manger au moins un fruit/jour, Faire un jeun intermittent, boire 1 litre d’eau/jour…
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["countAlimentation"]) || array_key_exists("countAlimentation", $context) ? $context["countAlimentation"] : (function () { throw new RuntimeError('Variable "countAlimentation" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Alimentation"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Alimentation"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Sommeil"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Sommeil
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel pour améliorer mon sommeil ? Il doit être clair, précis et vérifiable. Exemples : Aller me coucher à 22H chaque soir, Faire chaque jour une sieste de 30Min après le déjeuner, Ne plus regarder d’ordinateur/tablette/téléphone après  20H le soir…
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["countSommeil"]) || array_key_exists("countSommeil", $context) ? $context["countSommeil"] : (function () { throw new RuntimeError('Variable "countSommeil" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Sommeil"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Sommeil"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Activite"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Activité
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel d’activité nécessaire à ma santé ? Il doit être clair, précis et vérifiable. Exemples : Marcher au moins 1H chaque jour, Faire 10Min de jogging chaque jour, Faire 15 minutes d’étirements chaque jour…
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["countActivite"]) || array_key_exists("countActivite", $context) ? $context["countActivite"] : (function () { throw new RuntimeError('Variable "countActivite" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Activite"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Activite"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "BienEtre"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Bien être & Relaxation
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel d’activité nécessaire à Mon bien être physique, mentale et spirituel ? Il doit être clair, précis et vérifiable. Exemples : Faire une séance de méditation de 15 minutes chaque matin, Lire 30 minutes chaque jour, Faire une séance de yoga par semaine …
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["countBienEtre"]) || array_key_exists("countBienEtre", $context) ? $context["countBienEtre"] : (function () { throw new RuntimeError('Variable "countBienEtre" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "BienEtre"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "BienEtre"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Medical"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Soins & suivis médicaux
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel de soins ou de suivi médical me permettant de prévenir les risques ? Il doit être clair, précis et vérifiable. Exemples : Faire une prise de sang de contrôle tous les ans, Faire un bilan cardio tous les 4 ans, Faire une cure annuelle de propolis chaque mois d’octobre...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["countMedical"]) || array_key_exists("countMedical", $context) ? $context["countMedical"] : (function () { throw new RuntimeError('Variable "countMedical" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Medical"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Medical"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Comportement"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Stopper les comportements<br>
\t\t\t\t\t\tà risques
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuels sont mes habitudes actuelles risquées pour le maintien de ma santé ? Quel est mon objectif pour les réduire/stopper ? Il doit être clair, précis et vérifiable. Exemples : Arrêter complètement de fumer, Réduire ma consommation d'alcool à 2 verres par semaine, Remplacer le beurre dans ma cuisine par de l’huile d’olive...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["countComportement"]) || array_key_exists("countComportement", $context) ? $context["countComportement"] : (function () { throw new RuntimeError('Variable "countComportement" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Comportement"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Comportement"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Autres"]), "html", null, true);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Autres
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel autre objectif personnel pour ma santé ? Il doit être clair, précis et vérifiable.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["countAutres"]) || array_key_exists("countAutres", $context) ? $context["countAutres"] : (function () { throw new RuntimeError('Variable "countAutres" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_activite", ["secteur" => "Sante", "idSecteur" => "Autres"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_objectifs_visualiser_activite", ["idSecteur" => "Autres"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 170
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
        return "pages/objectif/sante/liste_sante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 170,  400 => 169,  394 => 166,  390 => 165,  385 => 163,  374 => 155,  364 => 148,  360 => 147,  354 => 144,  350 => 143,  345 => 141,  333 => 132,  323 => 125,  319 => 124,  313 => 121,  309 => 120,  304 => 118,  293 => 110,  283 => 103,  279 => 102,  273 => 99,  269 => 98,  264 => 96,  253 => 88,  243 => 81,  239 => 80,  233 => 77,  229 => 76,  224 => 74,  213 => 66,  203 => 59,  199 => 58,  193 => 55,  189 => 54,  184 => 52,  173 => 44,  163 => 37,  159 => 36,  153 => 33,  149 => 32,  144 => 30,  127 => 18,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Mes Objectifs & Projets
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('home') }}
{% endblock %}
{% block body %}
\t<section class=\"nav-principal-body nav-body-rythme\">
\t\t<div class=\"row button-principal-body\">
\t\t\t<div class=\"description-menu-button-page col-12\" style=\"margin-bottom: 10%\">
\t\t\t\t<h2 style=\"font-size: 2rem; width: 100%;\">Être en bonne santé et le rester est essentiel à mon bien être et à la réalisation de mes projets de vie.<br>
\t\t\t\t\tCette page m’aide à me fixer mes objectifs personnels de santé en complétant l’une ou plusieurs des rubriques ci-dessous</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Alimentation'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\">Alimentation - Hydratation
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel pour améliorer mon alimentation ?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIl doit être clair, précis et vérifiable. Exemples : Manger au moins un fruit/jour, Faire un jeun intermittent, boire 1 litre d’eau/jour…
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">{{ countAlimentation }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Alimentation'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Alimentation'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Sommeil'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Sommeil
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel pour améliorer mon sommeil ? Il doit être clair, précis et vérifiable. Exemples : Aller me coucher à 22H chaque soir, Faire chaque jour une sieste de 30Min après le déjeuner, Ne plus regarder d’ordinateur/tablette/téléphone après  20H le soir…
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countSommeil }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Sommeil'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Sommeil'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Activite'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Activité
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel d’activité nécessaire à ma santé ? Il doit être clair, précis et vérifiable. Exemples : Marcher au moins 1H chaque jour, Faire 10Min de jogging chaque jour, Faire 15 minutes d’étirements chaque jour…
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countActivite }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Activite'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Activite'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'BienEtre'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Bien être & Relaxation
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel d’activité nécessaire à Mon bien être physique, mentale et spirituel ? Il doit être clair, précis et vérifiable. Exemples : Faire une séance de méditation de 15 minutes chaque matin, Lire 30 minutes chaque jour, Faire une séance de yoga par semaine …
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countBienEtre }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'BienEtre'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'BienEtre'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Medical'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Soins & suivis médicaux
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel est mon objectif personnel de soins ou de suivi médical me permettant de prévenir les risques ? Il doit être clair, précis et vérifiable. Exemples : Faire une prise de sang de contrôle tous les ans, Faire un bilan cardio tous les 4 ans, Faire une cure annuelle de propolis chaque mois d’octobre...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countMedical }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Medical'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Medical'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Comportement'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Stopper les comportements<br>
\t\t\t\t\t\tà risques
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuels sont mes habitudes actuelles risquées pour le maintien de ma santé ? Quel est mon objectif pour les réduire/stopper ? Il doit être clair, précis et vérifiable. Exemples : Arrêter complètement de fumer, Réduire ma consommation d'alcool à 2 verres par semaine, Remplacer le beurre dans ma cuisine par de l’huile d’olive...
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countComportement }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Comportement'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_mes_objectifs_visualiser_activite', {'idSecteur' : 'Comportement'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Autres'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Autres
\t\t\t\t\t\t<div class=\"info-bubble-ob\" style=\"font-size: 1rem\">
\t\t\t\t\t\t\tQuel autre objectif personnel pour ma santé ? Il doit être clair, précis et vérifiable.
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countAutres }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_activite', {'secteur' : 'Sante', 'idSecteur': 'Autres'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
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
", "pages/objectif/sante/liste_sante.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/sante/liste_sante.html.twig");
    }
}
