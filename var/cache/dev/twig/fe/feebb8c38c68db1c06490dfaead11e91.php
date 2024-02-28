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

/* pages/rythme_vital/editer_besoin_vital.html.twig */
class __TwigTemplate_37e17abd88a0ed6bb866b6518e5c184a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/editer_besoin_vital.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/rythme_vital/editer_besoin_vital.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/rythme_vital/editer_besoin_vital.html.twig", 1);
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "app_rythme_vital_ajouter_besoin_vital")) ? ("Ajouter") : ("Modifier"));
        echo "
\tun besoin vital
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "intitule", [], "any", false, false, false, 13) == "Manger (Tps de preparation Repas inclus)")) {
            // line 14
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "element-to-scroll mb-5"]]);
            echo "
\t\t<div class=\"row container-principal-form\">
\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1>";
            // line 18
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18) == "app_rythme_vital_ajouter_besoin_vital")) ? ("Ajouter") : ("Modifier"));
            echo "
\t\t\t\t\t\tun besoin vital</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Lundi :</h1>
\t\t\t\t\t";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 23, $this->source); })()), "lundi_petit_dejeuner", [], "any", false, false, false, 23), 'label');
            echo "
\t\t\t\t\t";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 24, $this->source); })()), "lundi_petit_dejeuner", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "copy-petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 25, $this->source); })()), "lundi_petit_dejeuner", [], "any", false, false, false, 25), 'errors');
            echo "
\t\t\t\t\t";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 26, $this->source); })()), "lundi_dejeuner", [], "any", false, false, false, 26), 'label');
            echo "
\t\t\t\t\t";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 27, $this->source); })()), "lundi_dejeuner", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "copy-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 28, $this->source); })()), "lundi_dejeuner", [], "any", false, false, false, 28), 'errors');
            echo "
\t\t\t\t\t";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 29, $this->source); })()), "lundi_dinner", [], "any", false, false, false, 29), 'label');
            echo "
\t\t\t\t\t";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 30, $this->source); })()), "lundi_dinner", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "copy-dinner"]]);
            echo "
\t\t\t\t\t";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 31, $this->source); })()), "lundi_dinner", [], "any", false, false, false, 31), 'errors');
            echo "
\t\t\t\t\t<button type=\"button\" style=\"width: 70%; font-size: 1.8rem; margin-top: 1%;\" onclick=\"copyValuesRepas()\">Mettre les mêmes valeurs pour chaque jours de la semaine</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Mardi :</h1>
\t\t\t\t\t";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 36, $this->source); })()), "mardi_petit_dejeuner", [], "any", false, false, false, 36), 'label');
            echo "
\t\t\t\t\t";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 37, $this->source); })()), "mardi_petit_dejeuner", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 38, $this->source); })()), "mardi_petit_dejeuner", [], "any", false, false, false, 38), 'errors');
            echo "
\t\t\t\t\t";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 39, $this->source); })()), "mardi_dejeuner", [], "any", false, false, false, 39), 'label');
            echo "
\t\t\t\t\t";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 40, $this->source); })()), "mardi_dejeuner", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 41, $this->source); })()), "mardi_dejeuner", [], "any", false, false, false, 41), 'errors');
            echo "
\t\t\t\t\t";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 42, $this->source); })()), "mardi_dinner", [], "any", false, false, false, 42), 'label');
            echo "
\t\t\t\t\t";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 43, $this->source); })()), "mardi_dinner", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "dinner"]]);
            echo "
\t\t\t\t\t";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 44, $this->source); })()), "mardi_dinner", [], "any", false, false, false, 44), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Mercredi :</h1>
\t\t\t\t\t";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 48, $this->source); })()), "mercredi_petit_dejeuner", [], "any", false, false, false, 48), 'label');
            echo "
\t\t\t\t\t";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 49, $this->source); })()), "mercredi_petit_dejeuner", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 50, $this->source); })()), "mercredi_petit_dejeuner", [], "any", false, false, false, 50), 'errors');
            echo "
\t\t\t\t\t";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 51, $this->source); })()), "mercredi_dejeuner", [], "any", false, false, false, 51), 'label');
            echo "
\t\t\t\t\t";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 52, $this->source); })()), "mercredi_dejeuner", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 53, $this->source); })()), "mercredi_dejeuner", [], "any", false, false, false, 53), 'errors');
            echo "
\t\t\t\t\t";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 54, $this->source); })()), "mercredi_dinner", [], "any", false, false, false, 54), 'label');
            echo "
\t\t\t\t\t";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 55, $this->source); })()), "mercredi_dinner", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "dinner"]]);
            echo "
\t\t\t\t\t";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 56, $this->source); })()), "mercredi_dinner", [], "any", false, false, false, 56), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Jeudi :</h1>
\t\t\t\t\t";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 60, $this->source); })()), "jeudi_petit_dejeuner", [], "any", false, false, false, 60), 'label');
            echo "
\t\t\t\t\t";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 61, $this->source); })()), "jeudi_petit_dejeuner", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 62, $this->source); })()), "jeudi_petit_dejeuner", [], "any", false, false, false, 62), 'errors');
            echo "
\t\t\t\t\t";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 63, $this->source); })()), "jeudi_dejeuner", [], "any", false, false, false, 63), 'label');
            echo "
\t\t\t\t\t";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 64, $this->source); })()), "jeudi_dejeuner", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 65, $this->source); })()), "jeudi_dejeuner", [], "any", false, false, false, 65), 'errors');
            echo "
\t\t\t\t\t";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 66, $this->source); })()), "jeudi_dinner", [], "any", false, false, false, 66), 'label');
            echo "
\t\t\t\t\t";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 67, $this->source); })()), "jeudi_dinner", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "dinner"]]);
            echo "
\t\t\t\t\t";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 68, $this->source); })()), "jeudi_dinner", [], "any", false, false, false, 68), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Vendredi :</h1>
\t\t\t\t\t";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 72, $this->source); })()), "vendredi_petit_dejeuner", [], "any", false, false, false, 72), 'label');
            echo "
\t\t\t\t\t";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 73, $this->source); })()), "vendredi_petit_dejeuner", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 74, $this->source); })()), "vendredi_petit_dejeuner", [], "any", false, false, false, 74), 'errors');
            echo "
\t\t\t\t\t";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 75, $this->source); })()), "vendredi_dejeuner", [], "any", false, false, false, 75), 'label');
            echo "
\t\t\t\t\t";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 76, $this->source); })()), "vendredi_dejeuner", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 77, $this->source); })()), "vendredi_dejeuner", [], "any", false, false, false, 77), 'errors');
            echo "
\t\t\t\t\t";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 78, $this->source); })()), "vendredi_dinner", [], "any", false, false, false, 78), 'label');
            echo "
\t\t\t\t\t";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 79, $this->source); })()), "vendredi_dinner", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "dinner"]]);
            echo "
\t\t\t\t\t";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 80, $this->source); })()), "vendredi_dinner", [], "any", false, false, false, 80), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Samedi :</h1>
\t\t\t\t\t";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 84, $this->source); })()), "samedi_petit_dejeuner", [], "any", false, false, false, 84), 'label');
            echo "
\t\t\t\t\t";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 85, $this->source); })()), "samedi_petit_dejeuner", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 86, $this->source); })()), "samedi_petit_dejeuner", [], "any", false, false, false, 86), 'errors');
            echo "
\t\t\t\t\t";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 87, $this->source); })()), "samedi_dejeuner", [], "any", false, false, false, 87), 'label');
            echo "
\t\t\t\t\t";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 88, $this->source); })()), "samedi_dejeuner", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 89, $this->source); })()), "samedi_dejeuner", [], "any", false, false, false, 89), 'errors');
            echo "
\t\t\t\t\t";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 90, $this->source); })()), "samedi_dinner", [], "any", false, false, false, 90), 'label');
            echo "
\t\t\t\t\t";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 91, $this->source); })()), "samedi_dinner", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "dinner"]]);
            echo "
\t\t\t\t\t";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 92, $this->source); })()), "samedi_dinner", [], "any", false, false, false, 92), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Dimanche</h1>
\t\t\t\t\t";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 96, $this->source); })()), "dimanche_petit_dejeuner", [], "any", false, false, false, 96), 'label');
            echo "
\t\t\t\t\t";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 97, $this->source); })()), "dimanche_petit_dejeuner", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "petit-dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 98, $this->source); })()), "dimanche_petit_dejeuner", [], "any", false, false, false, 98), 'errors');
            echo "
\t\t\t\t\t";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 99, $this->source); })()), "dimanche_dejeuner", [], "any", false, false, false, 99), 'label');
            echo "
\t\t\t\t\t";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 100, $this->source); })()), "dimanche_dejeuner", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "dejeuner"]]);
            echo "
\t\t\t\t\t";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 101, $this->source); })()), "dimanche_dejeuner", [], "any", false, false, false, 101), 'errors');
            echo "
\t\t\t\t\t";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 102, $this->source); })()), "dimanche_dinner", [], "any", false, false, false, 102), 'label');
            echo "
\t\t\t\t\t";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 103, $this->source); })()), "dimanche_dinner", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "dinner"]]);
            echo "
\t\t\t\t\t";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 104, $this->source); })()), "dimanche_dinner", [], "any", false, false, false, 104), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">";
            // line 106
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "get", [0 => "_route"], "method", false, false, false, 106) == "app_rythme_vital_ajouter_besoin_vital")) ? ("Créer") : ("Modifier"));
            echo "</button>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 109
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_besoin_repas"]) || array_key_exists("form_besoin_repas", $context) ? $context["form_besoin_repas"] : (function () { throw new RuntimeError('Variable "form_besoin_repas" does not exist.', 109, $this->source); })()), 'form_end');
            echo "
\t";
        } else {
            // line 111
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 111, $this->source); })()), 'form_start', ["attr" => ["class" => "element-to-scroll mb-5"]]);
            echo "
\t\t<div class=\"row container-principal-form\">
\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1>";
            // line 115
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "get", [0 => "_route"], "method", false, false, false, 115) == "app_rythme_vital_ajouter_besoin_vital")) ? ("Ajouter") : ("Modifier"));
            echo "
\t\t\t\t\t\tun besoin vital</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 119, $this->source); })()), "intitule", [], "any", false, false, false, 119), 'label');
            echo "
\t\t\t\t\t";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 120, $this->source); })()), "intitule", [], "any", false, false, false, 120), 'widget');
            echo "
\t\t\t\t\t";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 121, $this->source); })()), "intitule", [], "any", false, false, false, 121), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 124, $this->source); })()), "lundi", [], "any", false, false, false, 124), 'label');
            echo "
\t\t\t\t\t";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 125, $this->source); })()), "lundi", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "copy-value"]]);
            echo "
\t\t\t\t\t";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 126, $this->source); })()), "lundi", [], "any", false, false, false, 126), 'errors');
            echo "
\t\t\t\t\t<button type=\"button\" style=\"width: 70%; font-size: 1.8rem; margin-top: 1%;\" onclick=\"copyValues()\">Mettre les mêmes valeurs pour chaque jours de la semaine</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 130
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 130, $this->source); })()), "mardi", [], "any", false, false, false, 130), 'label');
            echo "
\t\t\t\t\t";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 131, $this->source); })()), "mardi", [], "any", false, false, false, 131), 'widget');
            echo "
\t\t\t\t\t";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 132, $this->source); })()), "mardi", [], "any", false, false, false, 132), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 135
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 135, $this->source); })()), "mercredi", [], "any", false, false, false, 135), 'label');
            echo "
\t\t\t\t\t";
            // line 136
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 136, $this->source); })()), "mercredi", [], "any", false, false, false, 136), 'widget');
            echo "
\t\t\t\t\t";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 137, $this->source); })()), "mercredi", [], "any", false, false, false, 137), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 140
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 140, $this->source); })()), "jeudi", [], "any", false, false, false, 140), 'label');
            echo "
\t\t\t\t\t";
            // line 141
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 141, $this->source); })()), "jeudi", [], "any", false, false, false, 141), 'widget');
            echo "
\t\t\t\t\t";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 142, $this->source); })()), "jeudi", [], "any", false, false, false, 142), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 145, $this->source); })()), "vendredi", [], "any", false, false, false, 145), 'label');
            echo "
\t\t\t\t\t";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 146, $this->source); })()), "vendredi", [], "any", false, false, false, 146), 'widget');
            echo "
\t\t\t\t\t";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 147, $this->source); })()), "vendredi", [], "any", false, false, false, 147), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 150, $this->source); })()), "samedi", [], "any", false, false, false, 150), 'label');
            echo "
\t\t\t\t\t";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 151, $this->source); })()), "samedi", [], "any", false, false, false, 151), 'widget');
            echo "
\t\t\t\t\t";
            // line 152
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 152, $this->source); })()), "samedi", [], "any", false, false, false, 152), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 155, $this->source); })()), "dimanche", [], "any", false, false, false, 155), 'label');
            echo "
\t\t\t\t\t";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 156, $this->source); })()), "dimanche", [], "any", false, false, false, 156), 'widget');
            echo "
\t\t\t\t\t";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 157, $this->source); })()), "dimanche", [], "any", false, false, false, 157), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">";
            // line 159
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "request", [], "any", false, false, false, 159), "get", [0 => "_route"], "method", false, false, false, 159) == "app_rythme_vital_ajouter_besoin_vital")) ? ("Créer") : ("Modifier"));
            echo "</button>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 162
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_besoin_vital"]) || array_key_exists("form_besoin_vital", $context) ? $context["form_besoin_vital"] : (function () { throw new RuntimeError('Variable "form_besoin_vital" does not exist.', 162, $this->source); })()), 'form_end');
            echo "
\t";
        }
        // line 164
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autoInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/rythme_vital/editer_besoin_vital.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 164,  561 => 162,  555 => 159,  550 => 157,  546 => 156,  542 => 155,  536 => 152,  532 => 151,  528 => 150,  522 => 147,  518 => 146,  514 => 145,  508 => 142,  504 => 141,  500 => 140,  494 => 137,  490 => 136,  486 => 135,  480 => 132,  476 => 131,  472 => 130,  465 => 126,  461 => 125,  457 => 124,  451 => 121,  447 => 120,  443 => 119,  436 => 115,  428 => 111,  423 => 109,  417 => 106,  412 => 104,  408 => 103,  404 => 102,  400 => 101,  396 => 100,  392 => 99,  388 => 98,  384 => 97,  380 => 96,  373 => 92,  369 => 91,  365 => 90,  361 => 89,  357 => 88,  353 => 87,  349 => 86,  345 => 85,  341 => 84,  334 => 80,  330 => 79,  326 => 78,  322 => 77,  318 => 76,  314 => 75,  310 => 74,  306 => 73,  302 => 72,  295 => 68,  291 => 67,  287 => 66,  283 => 65,  279 => 64,  275 => 63,  271 => 62,  267 => 61,  263 => 60,  256 => 56,  252 => 55,  248 => 54,  244 => 53,  240 => 52,  236 => 51,  232 => 50,  228 => 49,  224 => 48,  217 => 44,  213 => 43,  209 => 42,  205 => 41,  201 => 40,  197 => 39,  193 => 38,  189 => 37,  185 => 36,  177 => 31,  173 => 30,  169 => 29,  165 => 28,  161 => 27,  157 => 26,  153 => 25,  149 => 24,  145 => 23,  137 => 18,  129 => 14,  126 => 13,  116 => 12,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou -
\t{{ (app.request.get('_route') == 'app_rythme_vital_ajouter_besoin_vital' ? 'Ajouter' : 'Modifier') }}
\tun besoin vital
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('list_calendrier') }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}
{% block body %}
\t{% if form_besoin_vital.vars.value.intitule == \"Manger (Tps de preparation Repas inclus)\" %}
\t\t{{ form_start(form_besoin_repas, {'attr': {'class': 'element-to-scroll mb-5'}}) }}
\t\t<div class=\"row container-principal-form\">
\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1>{{ (app.request.get('_route') == 'app_rythme_vital_ajouter_besoin_vital' ? 'Ajouter' : 'Modifier') }}
\t\t\t\t\t\tun besoin vital</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Lundi :</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.lundi_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.lundi_petit_dejeuner, {'attr': {'class': 'copy-petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.lundi_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.lundi_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.lundi_dejeuner, {'attr': {'class': 'copy-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.lundi_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.lundi_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.lundi_dinner, {'attr': {'class': 'copy-dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.lundi_dinner) }}
\t\t\t\t\t<button type=\"button\" style=\"width: 70%; font-size: 1.8rem; margin-top: 1%;\" onclick=\"copyValuesRepas()\">Mettre les mêmes valeurs pour chaque jours de la semaine</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Mardi :</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.mardi_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.mardi_petit_dejeuner, {'attr': {'class': 'petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.mardi_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.mardi_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.mardi_dejeuner, {'attr': {'class': 'dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.mardi_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.mardi_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.mardi_dinner, {'attr': {'class': 'dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.mardi_dinner) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Mercredi :</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.mercredi_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.mercredi_petit_dejeuner, {'attr': {'class': 'petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.mercredi_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.mercredi_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.mercredi_dejeuner, {'attr': {'class': 'dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.mercredi_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.mercredi_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.mercredi_dinner, {'attr': {'class': 'dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.mercredi_dinner) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Jeudi :</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.jeudi_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.jeudi_petit_dejeuner, {'attr': {'class': 'petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.jeudi_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.jeudi_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.jeudi_dejeuner, {'attr': {'class': 'dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.jeudi_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.jeudi_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.jeudi_dinner, {'attr': {'class': 'dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.jeudi_dinner) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Vendredi :</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.vendredi_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.vendredi_petit_dejeuner, {'attr': {'class': 'petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.vendredi_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.vendredi_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.vendredi_dejeuner, {'attr': {'class': 'dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.vendredi_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.vendredi_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.vendredi_dinner, {'attr': {'class': 'dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.vendredi_dinner) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Samedi :</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.samedi_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.samedi_petit_dejeuner, {'attr': {'class': 'petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.samedi_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.samedi_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.samedi_dejeuner, {'attr': {'class': 'dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.samedi_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.samedi_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.samedi_dinner, {'attr': {'class': 'dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.samedi_dinner) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t<h1>Dimanche</h1>
\t\t\t\t\t{{ form_label(form_besoin_repas.dimanche_petit_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.dimanche_petit_dejeuner, {'attr': {'class': 'petit-dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.dimanche_petit_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.dimanche_dejeuner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.dimanche_dejeuner, {'attr': {'class': 'dejeuner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.dimanche_dejeuner) }}
\t\t\t\t\t{{ form_label(form_besoin_repas.dimanche_dinner) }}
\t\t\t\t\t{{ form_widget(form_besoin_repas.dimanche_dinner, {'attr': {'class': 'dinner'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_repas.dimanche_dinner) }}
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_rythme_vital_ajouter_besoin_vital' ? 'Créer' : 'Modifier') }}</button>
\t\t\t</div>
\t\t</div>
\t\t{{ form_end(form_besoin_repas) }}
\t{% else %}
\t\t{{ form_start(form_besoin_vital, {'attr': {'class': 'element-to-scroll mb-5'}}) }}
\t\t<div class=\"row container-principal-form\">
\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t<div class=\"col-form\" style=\"width: 100%;\">
\t\t\t\t\t<h1>{{ (app.request.get('_route') == 'app_rythme_vital_ajouter_besoin_vital' ? 'Ajouter' : 'Modifier') }}
\t\t\t\t\t\tun besoin vital</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.intitule) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.intitule) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.intitule) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.lundi) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.lundi, {'attr': {'class': 'copy-value'}}) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.lundi) }}
\t\t\t\t\t<button type=\"button\" style=\"width: 70%; font-size: 1.8rem; margin-top: 1%;\" onclick=\"copyValues()\">Mettre les mêmes valeurs pour chaque jours de la semaine</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.mardi) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.mardi) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.mardi) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.mercredi) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.mercredi) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.mercredi) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.jeudi) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.jeudi) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.jeudi) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.vendredi) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.vendredi) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.vendredi) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.samedi) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.samedi) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.samedi) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t{{ form_label(form_besoin_vital.dimanche) }}
\t\t\t\t\t{{ form_widget(form_besoin_vital.dimanche) }}
\t\t\t\t\t{{ form_errors(form_besoin_vital.dimanche) }}
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"button-submit btn-sub mb-3\">{{ (app.request.get('_route') == 'app_rythme_vital_ajouter_besoin_vital' ? 'Créer' : 'Modifier') }}</button>
\t\t\t</div>
\t\t</div>
\t\t{{ form_end(form_besoin_vital) }}
\t{% endif %}
\t<script src=\"{{ asset('js/autoInput.js') }}\"></script>
{% endblock %}
", "pages/rythme_vital/editer_besoin_vital.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/rythme_vital/editer_besoin_vital.html.twig");
    }
}
