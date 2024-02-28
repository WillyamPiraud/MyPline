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

/* pages/objectif/activite/liste_activite_loisirs.html.twig */
class __TwigTemplate_289f0f0650ab73ae4bdb016edb3194fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/activite/liste_activite_loisirs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/activite/liste_activite_loisirs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/activite/liste_activite_loisirs.html.twig", 1);
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

        echo "Waou - Objectifs Activtés Professionnelles
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
\t\t\t\t\tCe travail doit me plaire, avoir du sens et respecter un bon équilibre entre vie personnelle et vie professionnelle.<br>Dans cette page je fixe mes objectifs personnels d’évolution de ma situation professionnelle.
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "SportLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rythme_vital_besoins_vitaux");
        echo "\">Loisirs Physiques<br>& Sportifs
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["countSport"]) || array_key_exists("countSport", $context) ? $context["countSport"] : (function () { throw new RuntimeError('Variable "countSport" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "SportLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "SportLoisir"]);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "CulturelLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Culturels<br>& Artistiques
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["countCulture"]) || array_key_exists("countCulture", $context) ? $context["countCulture"] : (function () { throw new RuntimeError('Variable "countCulture" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "CulturelLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "CulturelLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "AirLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs de Plein Air
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["countPlantation"]) || array_key_exists("countPlantation", $context) ? $context["countPlantation"] : (function () { throw new RuntimeError('Variable "countPlantation" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "AirLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "AirLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "CreatifLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Créatifs
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["countCreatif"]) || array_key_exists("countCreatif", $context) ? $context["countCreatif"] : (function () { throw new RuntimeError('Variable "countCreatif" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "CreatifLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "CreatifLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "EducatifLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Intélectuels & Éducatifs
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["countEducatif"]) || array_key_exists("countEducatif", $context) ? $context["countEducatif"] : (function () { throw new RuntimeError('Variable "countEducatif" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "EducatifLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "EducatifLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "TechnoLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Technologiques
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["countTechno"]) || array_key_exists("countTechno", $context) ? $context["countTechno"] : (function () { throw new RuntimeError('Variable "countTechno" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "TechnoLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "TechnoLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "AnimalierLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Animaliers
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["countAnimalier"]) || array_key_exists("countAnimalier", $context) ? $context["countAnimalier"] : (function () { throw new RuntimeError('Variable "countAnimalier" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "AnimalierLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "AnimalierLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "RelationLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs de relations & bien être
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["countRelation"]) || array_key_exists("countRelation", $context) ? $context["countRelation"] : (function () { throw new RuntimeError('Variable "countRelation" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "RelationLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "RelationLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-voir.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "VacancesLoisir"]);
        echo "\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Vacances - Séjours - Week-Ends
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["countVacances"]) || array_key_exists("countVacances", $context) ? $context["countVacances"] : (function () { throw new RuntimeError('Variable "countVacances" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_form_objectif_add_activite_loisir", ["secteur" => "Activite", "idSecteur" => "VacancesLoisir", "typeActivity" => "Loisir"]), "html", null, true);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-plus.png"), "html", null, true);
        echo "\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectifs_visualiser_activity", ["idSecteur" => "VacancesLoisir"]);
        echo "\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"";
        // line 186
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
        return "pages/objectif/activite/liste_activite_loisirs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 186,  452 => 185,  446 => 182,  442 => 181,  437 => 179,  429 => 174,  419 => 167,  415 => 166,  409 => 163,  405 => 162,  400 => 160,  392 => 155,  382 => 148,  378 => 147,  372 => 144,  368 => 143,  363 => 141,  355 => 136,  345 => 129,  341 => 128,  335 => 125,  331 => 124,  326 => 122,  318 => 117,  308 => 110,  304 => 109,  298 => 106,  294 => 105,  289 => 103,  281 => 98,  271 => 91,  267 => 90,  261 => 87,  257 => 86,  252 => 84,  244 => 79,  234 => 72,  230 => 71,  224 => 68,  220 => 67,  215 => 65,  207 => 60,  197 => 53,  193 => 52,  187 => 49,  183 => 48,  178 => 46,  170 => 41,  160 => 34,  156 => 33,  150 => 30,  146 => 29,  141 => 27,  128 => 19,  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Objectifs Activtés Professionnelles
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
\t\t\t\t\tCe travail doit me plaire, avoir du sens et respecter un bon équilibre entre vie personnelle et vie professionnelle.<br>Dans cette page je fixe mes objectifs personnels d’évolution de ma situation professionnelle.
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'SportLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\" href=\"{{ path('app_rythme_vital_besoins_vitaux') }}\">Loisirs Physiques<br>& Sportifs
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"position: relative; border-radius: 0;\">
\t\t\t\t\t\t<p class=\"title-statistique\">Nombre d'objectifs<br>
\t\t\t\t\t\t\t<span style=\"font-size: 0.8rem\">(en cours)</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3 style=\"position: relative; border-radius: 0;\">{{ countSport }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'SportLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'SportLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'CulturelLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Culturels<br>& Artistiques
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countCulture }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'CulturelLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'CulturelLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'AirLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs de Plein Air
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countPlantation }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'AirLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'AirLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'CreatifLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Créatifs
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countCreatif }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'CreatifLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'CreatifLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'EducatifLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Intélectuels & Éducatifs
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countEducatif }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'EducatifLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'EducatifLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'TechnoLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Technologiques
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countTechno }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'TechnoLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'TechnoLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"container-relative a-objectif\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'AnimalierLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs Animaliers
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countAnimalier }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'AnimalierLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'AnimalierLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'RelationLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Loisirs de relations & bien être
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countRelation }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'RelationLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'RelationLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-principal-body block-rythme\" style=\"margin-bottom: 10%\">
\t\t\t\t<div class=\"col-6 button-menu-icon responsive-top-border\" style=\"border: none;\">
\t\t\t\t\t<a class=\"a-objectif container-relative\" href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'VacancesLoisir'}) }}\" style=\"text-decoration: none; color: #fff; padding: 6%; text-align: center; background: radial-gradient(circle, rgba(85,112,246,1) 0%, rgba(70,231,252,1) 100%); font-size: 1.8rem; border: 2px solid #112D4E; font-family: 'Josefin Sans', sans-serif; width: 80%; border-radius: 15px;\">Vacances - Séjours - Week-Ends
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 container-statistique\">
\t\t\t\t\t<a class=\"button-statistique\" style=\"border-radius: 0;\">
\t\t\t\t\t\t<h3 style=\"position: relative;\">{{ countVacances }}</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_form_objectif_add_activite_loisir', {'secteur' : 'Activite', 'idSecteur': 'VacancesLoisir', 'typeActivity': 'Loisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-plus.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Ajouter</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_objectifs_visualiser_activity', {'idSecteur' : 'VacancesLoisir'}) }}\" class=\"container-relative icon-statistique click\">
\t\t\t\t\t\t<img src=\"{{ asset('img/icon-voir.png') }}\" alt=\"modifier\">
\t\t\t\t\t\t<div class=\"info-bubble\">Visualiser</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/objectif/activite/liste_activite_loisirs.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/activite/liste_activite_loisirs.html.twig");
    }
}
