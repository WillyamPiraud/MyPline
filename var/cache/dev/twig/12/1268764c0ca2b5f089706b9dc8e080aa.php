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

/* pages/objectif/finance/editer_finance_loisir.html.twig */
class __TwigTemplate_b30423f34b21a3f55dfec0b87f3b9516 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/finance/editer_finance_loisir.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/finance/editer_finance_loisir.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/finance/editer_finance_loisir.html.twig", 1);
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_ajouter_finance_loisir")) ? ("Ajouter") : ("Modifier"));
        echo "
\tune action
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
\t";
        // line 15
        echo "\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18) == "app_ajouter_finance_loisir")) {
            // line 19
            echo "\t\t\t\t\t<h1>Ajouter</h1>
\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t<h1>Modifier le coût ou le titre du loisir</h1>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 30, $this->source); })()), "montant", [], "any", false, false, false, 30), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 31, $this->source); })()), "montant", [], "any", false, false, false, 31), 'widget');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 32, $this->source); })()), "montant", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"submitForms()\" class=\"button-submit btn-sub mb-3\">";
        // line 34
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", [0 => "_route"], "method", false, false, false, 34) == "app_ajouter_finance_loisir")) ? ("Créer") : ("Modifier"));
        echo "</button>
\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_finance_loisir"]) || array_key_exists("form_finance_loisir", $context) ? $context["form_finance_loisir"] : (function () { throw new RuntimeError('Variable "form_finance_loisir" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t";
        // line 39
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autoInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/objectif/finance/editer_finance_loisir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 39,  181 => 35,  177 => 34,  172 => 32,  168 => 31,  164 => 30,  158 => 27,  154 => 26,  150 => 25,  146 => 23,  142 => 21,  138 => 19,  136 => 18,  131 => 15,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_ajouter_finance_loisir' ? 'Ajouter' : 'Modifier') }}
\tune action
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{{ form_start(form_finance_loisir) }}
\t{#{{ form_start(form_obligation_familiale) }}#}
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t{% if app.request.get('_route') == 'app_ajouter_finance_loisir' %}
\t\t\t\t\t<h1>Ajouter</h1>
\t\t\t\t{% else %}
\t\t\t\t\t<h1>Modifier le coût ou le titre du loisir</h1>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_finance_loisir.titre) }}
\t\t\t\t{{ form_widget(form_finance_loisir.titre) }}
\t\t\t\t{{ form_errors(form_finance_loisir.titre) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_finance_loisir.montant) }}
\t\t\t\t{{ form_widget(form_finance_loisir.montant) }}
\t\t\t\t{{ form_errors(form_finance_loisir.montant) }}
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"submitForms()\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_ajouter_finance_loisir' ? 'Créer' : 'Modifier') }}</button>
\t\t\t{{ form_end(form_finance_loisir) }}
\t\t</div>
\t</div>
\t{#{{ form_end(form_obligation_familiale) }}#}
\t<script src=\"{{ asset('js/autoInput.js') }}\"></script>
{% endblock %}
", "pages/objectif/finance/editer_finance_loisir.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/finance/editer_finance_loisir.html.twig");
    }
}
