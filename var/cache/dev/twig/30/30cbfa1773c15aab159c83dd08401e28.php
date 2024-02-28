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

/* pages/liste_calendrier/lst_calendrier_tel_add.html.twig */
class __TwigTemplate_3d60b2934b9e922518dc5b688ce24664 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_tel_add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/liste_calendrier/lst_calendrier_tel_add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/liste_calendrier/lst_calendrier_tel_add.html.twig", 1);
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_lst_calendrier_tel_add")) ? ("Créer") : ("Modifier"));
        echo "
\tun Appel Téléphonique À Donner
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "element-to-scroll mb-5"]]);
        echo "
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t<h1>";
        // line 17
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17) == "app_lst_calendrier_tel_add")) ? ("Créer") : ("Modifier"));
        echo "
\t\t\t\t\tun Rappel</h1>
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 21, $this->source); })()), "objet", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 22, $this->source); })()), "objet", [], "any", false, false, false, 22), 'widget');
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 23, $this->source); })()), "objet", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 26, $this->source); })()), "personne", [], "any", false, false, false, 26), 'label');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 27, $this->source); })()), "personne", [], "any", false, false, false, 27), 'widget');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 28, $this->source); })()), "personne", [], "any", false, false, false, 28), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), 'label');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 'widget');
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">";
        // line 35
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35) == "app_lst_calendrier_tel_add")) ? ("Créer") : ("Modifier"));
        echo "</button>
\t\t</div>
\t</div>
\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_calendrier_tel"]) || array_key_exists("form_calendrier_tel", $context) ? $context["form_calendrier_tel"] : (function () { throw new RuntimeError('Variable "form_calendrier_tel" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/liste_calendrier/lst_calendrier_tel_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 38,  182 => 35,  177 => 33,  173 => 32,  169 => 31,  163 => 28,  159 => 27,  155 => 26,  149 => 23,  145 => 22,  141 => 21,  134 => 17,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_lst_calendrier_tel_add' ? 'Créer' : 'Modifier') }}
\tun Appel Téléphonique À Donner
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{{ form_start(form_calendrier_tel, {'attr': {'class': 'element-to-scroll mb-5'}}) }}
\t<div class=\"row container-principal-form\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t<h1>{{ (app.request.get('_route') == 'app_lst_calendrier_tel_add' ? 'Créer' : 'Modifier') }}
\t\t\t\t\tun Rappel</h1>
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_calendrier_tel.objet) }}
\t\t\t\t{{ form_widget(form_calendrier_tel.objet) }}
\t\t\t\t{{ form_errors(form_calendrier_tel.objet) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_calendrier_tel.personne) }}
\t\t\t\t{{ form_widget(form_calendrier_tel.personne) }}
\t\t\t\t{{ form_errors(form_calendrier_tel.personne) }}
\t\t\t</div>
\t\t\t<div class=\"col-form\">
\t\t\t\t{{ form_label(form_calendrier_tel.telephone) }}
\t\t\t\t{{ form_widget(form_calendrier_tel.telephone) }}
\t\t\t\t{{ form_errors(form_calendrier_tel.telephone) }}
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_lst_calendrier_tel_add' ? 'Créer' : 'Modifier') }}</button>
\t\t</div>
\t</div>
\t{{ form_end(form_calendrier_tel) }}
{% endblock %}
", "pages/liste_calendrier/lst_calendrier_tel_add.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/liste_calendrier/lst_calendrier_tel_add.html.twig");
    }
}
