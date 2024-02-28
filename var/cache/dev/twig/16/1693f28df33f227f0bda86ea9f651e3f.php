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

/* pages/objectif/editer_pda.html.twig */
class __TwigTemplate_e6a56488b37aa412e3667aae11ae6c52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/editer_pda.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/objectif/editer_pda.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/objectif/editer_pda.html.twig", 1);
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_ajouter_pda")) ? ("Ajouter") : ("Modifier"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
\t";
        // line 15
        echo "\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18) == "app_ajouter_pda")) {
            // line 19
            echo "\t\t\t\t\t<h1>Ajouter</h1>
\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\tModifier
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 35, $this->source); })()), "temps_prevu", [], "any", false, false, false, 35), 'label');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 36, $this->source); })()), "temps_prevu", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 37, $this->source); })()), "temps_prevu", [], "any", false, false, false, 37), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 40, $this->source); })()), "date_realisation", [], "any", false, false, false, 40), 'label');
        echo "
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 41, $this->source); })()), "date_realisation", [], "any", false, false, false, 41), 'widget');
        echo "
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 42, $this->source); })()), "date_realisation", [], "any", false, false, false, 42), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 45, $this->source); })()), "frequence", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 46, $this->source); })()), "frequence", [], "any", false, false, false, 46), 'widget');
        echo "
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 47, $this->source); })()), "frequence", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"submitForms()\" class=\"button-submit btn-sub mb-3\">";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49) == "app_ajouter_pda")) ? ("Créer") : ("Modifier"));
        echo "</button>
\t\t\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pda"]) || array_key_exists("form_pda", $context) ? $context["form_pda"] : (function () { throw new RuntimeError('Variable "form_pda" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t";
        // line 54
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autoInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/objectif/editer_pda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 54,  223 => 50,  219 => 49,  214 => 47,  210 => 46,  206 => 45,  200 => 42,  196 => 41,  192 => 40,  186 => 37,  182 => 36,  178 => 35,  172 => 32,  168 => 31,  164 => 30,  158 => 27,  154 => 26,  150 => 25,  146 => 23,  142 => 21,  138 => 19,  136 => 18,  131 => 15,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_ajouter_pda' ? 'Ajouter' : 'Modifier') }}
\tune action
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{{ form_start(form_pda) }}
\t{#{{ form_start(form_obligation_familiale) }}#}
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t{% if app.request.get('_route') == 'app_ajouter_pda' %}
\t\t\t\t\t<h1>Ajouter</h1>
\t\t\t\t{% else %}
\t\t\t\t\tModifier
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_pda.titre) }}
\t\t\t\t{{ form_widget(form_pda.titre) }}
\t\t\t\t{{ form_errors(form_pda.titre) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_pda.description) }}
\t\t\t\t{{ form_widget(form_pda.description) }}
\t\t\t\t{{ form_errors(form_pda.description) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_pda.temps_prevu) }}
\t\t\t\t{{ form_widget(form_pda.temps_prevu) }}
\t\t\t\t{{ form_errors(form_pda.temps_prevu) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_pda.date_realisation) }}
\t\t\t\t{{ form_widget(form_pda.date_realisation) }}
\t\t\t\t{{ form_errors(form_pda.date_realisation) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_pda.frequence) }}
\t\t\t\t{{ form_widget(form_pda.frequence) }}
\t\t\t\t{{ form_errors(form_pda.frequence) }}
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"submitForms()\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_ajouter_pda' ? 'Créer' : 'Modifier') }}</button>
\t\t\t{{ form_end(form_pda) }}
\t\t</div>
\t</div>
\t{#{{ form_end(form_obligation_familiale) }}#}
\t<script src=\"{{ asset('js/autoInput.js') }}\"></script>
{% endblock %}
", "pages/objectif/editer_pda.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/objectif/editer_pda.html.twig");
    }
}
