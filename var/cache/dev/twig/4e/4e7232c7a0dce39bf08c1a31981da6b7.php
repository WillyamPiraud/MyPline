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

/* pages/journalier/report_journalier.html.twig */
class __TwigTemplate_d68d68e6451d087e9395640c15e6e9a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/journalier/report_journalier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/journalier/report_journalier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/journalier/report_journalier.html.twig", 1);
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_lst_calendrier_choses_a_faire_add")) ? ("Ajouter") : ("Modifier"));
        echo "
\tune Choses A Faire
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "element-to-scroll mb-5"]]);
        echo "
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t<h1>Reporter une tâche</h1>
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'label');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'widget');
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 25, $this->source); })()), "date_journalier", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 26, $this->source); })()), "date_journalier", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 27, $this->source); })()), "date_journalier", [], "any", false, false, false, 27), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 30, $this->source); })()), "temps_task", [], "any", false, false, false, 30), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 31, $this->source); })()), "temps_task", [], "any", false, false, false, 31), 'widget');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 32, $this->source); })()), "temps_task", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">Reporter</button>
\t\t</div>
\t</div>
\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_report"]) || array_key_exists("form_report", $context) ? $context["form_report"] : (function () { throw new RuntimeError('Variable "form_report" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/journalier/report_journalier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 37,  173 => 32,  169 => 31,  165 => 30,  159 => 27,  155 => 26,  151 => 25,  145 => 22,  141 => 21,  137 => 20,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_lst_calendrier_choses_a_faire_add' ? 'Ajouter' : 'Modifier') }}
\tune Choses A Faire
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{{ form_start(form_report, {'attr': {'class': 'element-to-scroll mb-5'}}) }}
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t<h1>Reporter une tâche</h1>
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_report.titre) }}
\t\t\t\t{{ form_widget(form_report.titre) }}
\t\t\t\t{{ form_errors(form_report.titre) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_report.date_journalier) }}
\t\t\t\t{{ form_widget(form_report.date_journalier) }}
\t\t\t\t{{ form_errors(form_report.date_journalier) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_report.temps_task) }}
\t\t\t\t{{ form_widget(form_report.temps_task) }}
\t\t\t\t{{ form_errors(form_report.temps_task) }}
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">Reporter</button>
\t\t</div>
\t</div>
\t{{ form_end(form_report) }}
{% endblock %}
", "pages/journalier/report_journalier.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/journalier/report_journalier.html.twig");
    }
}
