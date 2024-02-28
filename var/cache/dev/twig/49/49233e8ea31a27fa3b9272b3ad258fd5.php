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

/* security/login.html.twig */
class __TwigTemplate_1409e6de871e45561b582a98f5dfc4b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Se connecter
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
\t<div id=\"page\" class=\"site\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"login\">
\t\t\t\t\t<div class=\"content-heading\">
\t\t\t\t\t\t<div class=\"y-style\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"#\">Waou</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"welcome\">
\t\t\t\t\t\t\t\t<h2>Bienvenue !</h2>
\t\t\t\t\t\t\t\t<p>Ici, vous allez pouvoir vous connecter</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-form\">
\t\t\t\t\t\t<div class=\"y-style\">
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">E-mail</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Entrez votre E-mail\">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"check\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember\">
\t\t\t\t\t\t\t\t\t<label>Se rappeler de moi</label>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"forgot\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Mot de passe oublier ?</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<button class=\"button-submit btn-sub\" type=\"submit\">Se connecter</button>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"afterform\">
\t\t\t\t\t\t\t\t<p>Vous n'avez pas de compte ?</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"t-signup\">Créer un compte</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!--<form method=\"post\">
\t\t\t\t\t\t\t";
        // line 62
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageKey", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageData", [], "any", false, false, false, 63), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3 txt-log\">
\t\t\t\t\t\t\t\t\tVous êtes connecter sous
\t\t\t\t\t\t\t\t\t<strong>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "userIdentifier", [], "any", false, false, false, 69), "html", null, true);
            echo "</strong>,
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Vous deconnecter</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t<div class=\"row container-principal-form\">
\t\t\t\t\t\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connectez-vous</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">E-mail</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"E-mail\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 99
        echo "\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<button class=\"button-submit btn-sub\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<span>Se connecter</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 99,  219 => 87,  209 => 80,  200 => 73,  194 => 70,  190 => 69,  186 => 67,  184 => 66,  181 => 65,  175 => 63,  173 => 62,  140 => 32,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Se connecter
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('login') }}
{% endblock %}

{% block body %}

\t<div id=\"page\" class=\"site\">
\t\t<div class=\"container\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"login\">
\t\t\t\t\t<div class=\"content-heading\">
\t\t\t\t\t\t<div class=\"y-style\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"#\">Waou</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"welcome\">
\t\t\t\t\t\t\t\t<h2>Bienvenue !</h2>
\t\t\t\t\t\t\t\t<p>Ici, vous allez pouvoir vous connecter</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-form\">
\t\t\t\t\t\t<div class=\"y-style\">
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">E-mail</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Entrez votre E-mail\">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"check\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember\">
\t\t\t\t\t\t\t\t\t<label>Se rappeler de moi</label>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"forgot\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Mot de passe oublier ?</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<button class=\"button-submit btn-sub\" type=\"submit\">Se connecter</button>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"afterform\">
\t\t\t\t\t\t\t\t<p>Vous n'avez pas de compte ?</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"t-signup\">Créer un compte</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!--<form method=\"post\">
\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<div class=\"mb-3 txt-log\">
\t\t\t\t\t\t\t\t\tVous êtes connecter sous
\t\t\t\t\t\t\t\t\t<strong>{{ app.user.userIdentifier }}</strong>,
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Vous deconnecter</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"row container-principal-form\">
\t\t\t\t\t\t\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connectez-vous</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">E-mail</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"E-mail\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{#Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSee https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>#}
\t\t\t\t\t\t\t\t\t<div class=\"col-form\">
\t\t\t\t\t\t\t\t\t\t<button class=\"button-submit btn-sub\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<span>Se connecter</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>-->
{% endblock %}
", "security/login.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/security/login.html.twig");
    }
}
