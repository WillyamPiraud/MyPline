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

/* pages/rythme_vital/editer_loisirs.html.twig */
class __TwigTemplate_c35ba7f13a016b2e9d9d7cd58fd29398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/editer_loisirs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/editer_loisirs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/editer_loisirs.html.twig", 1);
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

        echo "Waou -
\t";
        // line 4
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_ajouter_loisir")) ? ("Ajouter") : ("Modifier"));
        echo "
\tun loisir
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("list_calendrier");
        echo "
\t";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
\t";
        // line 15
        echo "\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18) == "app_ajouter_loisir")) {
            // line 19
            echo "\t\t\t\t\t<h1>Ajouter</h1>
\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, (isset($context["titreObligation"]) || array_key_exists("titreObligation", $context) ? $context["titreObligation"] : (function () { throw new RuntimeError('Variable "titreObligation" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "</h1>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 25, $this->source); })()), "objet", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 26, $this->source); })()), "objet", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 27, $this->source); })()), "objet", [], "any", false, false, false, 27), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 30, $this->source); })()), "temps_prevue", [], "any", false, false, false, 30), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 31, $this->source); })()), "temps_prevue", [], "any", false, false, false, 31), 'widget');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 32, $this->source); })()), "temps_prevue", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 35, $this->source); })()), "frequence", [], "any", false, false, false, 35), 'label');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 36, $this->source); })()), "frequence", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 37, $this->source); })()), "frequence", [], "any", false, false, false, 37), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 40, $this->source); })()), "nombre_action", [], "any", false, false, false, 40), 'label');
        echo "
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 41, $this->source); })()), "nombre_action", [], "any", false, false, false, 41), 'widget');
        echo "
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 42, $this->source); })()), "nombre_action", [], "any", false, false, false, 42), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 45, $this->source); })()), "jour_recurrence", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 46, $this->source); })()), "jour_recurrence", [], "any", false, false, false, 46), 'widget');
        echo "
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 47, $this->source); })()), "jour_recurrence", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 50, $this->source); })()), "lieu", [], "any", false, false, false, 50), 'label');
        echo "
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 51, $this->source); })()), "lieu", [], "any", false, false, false, 51), 'widget');
        echo "
\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 52, $this->source); })()), "lieu", [], "any", false, false, false, 52), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"submitForms()\" class=\"button-submit btn-sub mb-3\">";
        // line 54
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54) == "app_ajouter_obligation_familiale")) ? ("Créer") : ("Modifier"));
        echo "</button>
\t\t\t";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_loisir"]) || array_key_exists("form_loisir", $context) ? $context["form_loisir"] : (function () { throw new RuntimeError('Variable "form_loisir" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t";
        // line 59
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autoInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/rythme_vital/editer_loisirs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 59,  239 => 55,  235 => 54,  230 => 52,  226 => 51,  222 => 50,  216 => 47,  212 => 46,  208 => 45,  202 => 42,  198 => 41,  194 => 40,  188 => 37,  184 => 36,  180 => 35,  174 => 32,  170 => 31,  166 => 30,  160 => 27,  156 => 26,  152 => 25,  148 => 23,  142 => 21,  138 => 19,  136 => 18,  131 => 15,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_ajouter_loisir' ? 'Ajouter' : 'Modifier') }}
\tun loisir
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{{ form_start(form_loisir) }}
\t{#{{ form_start(form_obligation_familiale) }}#}
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t{% if app.request.get('_route') == 'app_ajouter_loisir' %}
\t\t\t\t\t<h1>Ajouter</h1>
\t\t\t\t{% else %}
\t\t\t\t\t<h1>{{ titreObligation }}</h1>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_loisir.objet) }}
\t\t\t\t{{ form_widget(form_loisir.objet) }}
\t\t\t\t{{ form_errors(form_loisir.objet) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_loisir.temps_prevue) }}
\t\t\t\t{{ form_widget(form_loisir.temps_prevue) }}
\t\t\t\t{{ form_errors(form_loisir.temps_prevue) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_loisir.frequence) }}
\t\t\t\t{{ form_widget(form_loisir.frequence) }}
\t\t\t\t{{ form_errors(form_loisir.frequence) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_loisir.nombre_action) }}
\t\t\t\t{{ form_widget(form_loisir.nombre_action) }}
\t\t\t\t{{ form_errors(form_loisir.nombre_action) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_loisir.jour_recurrence) }}
\t\t\t\t{{ form_widget(form_loisir.jour_recurrence) }}
\t\t\t\t{{ form_errors(form_loisir.jour_recurrence) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_loisir.lieu) }}
\t\t\t\t{{ form_widget(form_loisir.lieu) }}
\t\t\t\t{{ form_errors(form_loisir.lieu) }}
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"submitForms()\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_ajouter_obligation_familiale' ? 'Créer' : 'Modifier') }}</button>
\t\t\t{{ form_end(form_loisir) }}
\t\t</div>
\t</div>
\t{#{{ form_end(form_obligation_familiale) }}#}
\t<script src=\"{{ asset('js/autoInput.js') }}\"></script>
{% endblock %}
", "pages/rythme_vital/editer_loisirs.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/editer_loisirs.html.twig");
    }
}
