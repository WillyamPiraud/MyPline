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

/* pages/rythme_vital/routine_travail_add.html.twig */
class __TwigTemplate_f71620b22d0b65d5678c5d585207d6e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/routine_travail_add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/routine_travail_add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/routine_travail_add.html.twig", 1);
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_routine_travail_add")) ? ("Ajouter") : ("Modifier"));
        echo "
\tune routine de travail
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17) == "app_routine_travail_add")) {
            // line 18
            echo "\t\t\t\t\t<h1>Ajouter une routine</h1>
\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t<h1>Modifier une routine</h1>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 24, $this->source); })()), "intitule", [], "any", false, false, false, 24), 'label');
        echo "
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 25, $this->source); })()), "intitule", [], "any", false, false, false, 25), 'widget');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 26, $this->source); })()), "intitule", [], "any", false, false, false, 26), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 29, $this->source); })()), "temps_prevue", [], "any", false, false, false, 29), 'row');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 32, $this->source); })()), "frequence", [], "any", false, false, false, 32), 'label');
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 33, $this->source); })()), "frequence", [], "any", false, false, false, 33), 'widget');
        echo "
\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 34, $this->source); })()), "frequence", [], "any", false, false, false, 34), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 37, $this->source); })()), "nombre_action", [], "any", false, false, false, 37), 'row');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 40, $this->source); })()), "premier_jour", [], "any", false, false, false, 40), 'row');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 43, $this->source); })()), "lieu", [], "any", false, false, false, 43), 'row');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">";
        // line 45
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45) == "app_routine_travail_add")) ? ("Créer") : ("Modifier"));
        echo "</button>
\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_routine"]) || array_key_exists("form_routine", $context) ? $context["form_routine"] : (function () { throw new RuntimeError('Variable "form_routine" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t";
        // line 50
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autoInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/rythme_vital/routine_travail_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 50,  203 => 46,  199 => 45,  194 => 43,  188 => 40,  182 => 37,  176 => 34,  172 => 33,  168 => 32,  162 => 29,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  140 => 20,  136 => 18,  134 => 17,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_routine_travail_add' ? 'Ajouter' : 'Modifier') }}
\tune routine de travail
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{{ form_start(form_routine) }}
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t{% if app.request.get('_route') == 'app_routine_travail_add' %}
\t\t\t\t\t<h1>Ajouter une routine</h1>
\t\t\t\t{% else %}
\t\t\t\t\t<h1>Modifier une routine</h1>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_routine.intitule)}}
\t\t\t\t{{ form_widget(form_routine.intitule)}}
\t\t\t\t{{ form_errors(form_routine.intitule)}}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_row(form_routine.temps_prevue)}}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_routine.frequence) }}
\t\t\t\t{{ form_widget(form_routine.frequence) }}
\t\t\t\t{{ form_errors(form_routine.frequence) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_row(form_routine.nombre_action) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_row(form_routine.premier_jour)}}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_row(form_routine.lieu)}}
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_routine_travail_add' ? 'Créer' : 'Modifier') }}</button>
\t\t\t{{ form_end(form_routine) }}
\t\t</div>
\t</div>
\t{#{{ form_end(form_obligation_familiale) }}#}
\t<script src=\"{{ asset('js/autoInput.js') }}\"></script>
{% endblock %}
", "pages/rythme_vital/routine_travail_add.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/routine_travail_add.html.twig");
    }
}
