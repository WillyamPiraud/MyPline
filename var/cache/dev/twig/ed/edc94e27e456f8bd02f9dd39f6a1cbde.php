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

/* pages/je-decouvre.html.twig */
class __TwigTemplate_bc7153a7bc963ce82b631af4f2e08685 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/je-decouvre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/je-decouvre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/je-decouvre.html.twig", 1);
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

        echo "Waou - Je Découvre
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("je_decouvre");
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
        echo "\t<section class=\"presentation element-to-scroll\">
\t\t<div class=\"presentation-waou element-to-scroll\">
\t\t\t<div class=\"col-3\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-sans-bg.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-9\">
\t\t\t\t<h2 class=\"text-presentation-waou\">Waou est une application qui te permet d'organiser et de gérer au quotidien ta vie personnelle sans stress.<br>Utilise Waou et réalise tes grands Projets / Rêves !</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row presentation-youtube\">
\t\t\t<div class=\"row-supp-youtube\">
\t\t\t\t<div class=\"col-5 border-youtube\">
\t\t\t\t\t<h1>Pourquoi M'inscrire
\t\t\t\t\t\t<br>sur Waou ?</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Regarde ces vidéos et deviens toi aussi
\t\t\t\t\t\t<br>\"WaouMan\" ou \"WaouGirl\" !</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-inf-youtube\">
\t\t\t\t<div class=\"col-5 img-principal-youtube border-image\">
\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-objectif.png"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 presentation-youtube-order\">
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-essaye-moi\">
\t\t\t<div class=\"row row-essaye-moi\">
\t\t\t\t<div class=\"col-5 sizing-col\">
\t\t\t\t\t<a style=\"color: white;\">Essaie Waou
\t\t\t\t\t\t<span>➪</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Écris tes projets,<br>Réalise les au quotidien<br>Et deviens HEUREUX</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row presentation-youtube\">
\t\t\t<div class=\"row-supp-youtube\">
\t\t\t\t<div class=\"col-5 border-youtube\">
\t\t\t\t\t<h1>Comment utiliser
\t\t\t\t\t\t<br>Waou ?</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Découvre les fonctionnalités de Waou
\t\t\t\t\t\t<br>grâce à ces tutos !</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-inf-youtube\">
\t\t\t\t<div class=\"col-5 img-principal-youtube border-image\">
\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-document.png"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 presentation-youtube-order\">
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-essaye-moi\">
\t\t\t<div class=\"row row-essaye-moi\">
\t\t\t\t<div class=\"col-5 sizing-col\">
\t\t\t\t\t<a style=\"color: white;\">Essaie Waou
\t\t\t\t\t\t<span>➪</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Écris tes projets,<br>Réalise les au quotidien<br>Et deviens HEUREUX</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row presentation-youtube\">
\t\t\t<div class=\"row-supp-youtube\">
\t\t\t\t<div class=\"col-5 border-youtube\">
\t\t\t\t\t<h1>Combien ça coûte
\t\t\t\t\t\t<br>Waou ?</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Découvre les fonctionnalités de Waou
\t\t\t\t\t\t<br>grâce à ces tutos !</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-inf-youtube\">
\t\t\t\t<div class=\"col-5 img-principal-youtube border-image\">
\t\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-bonhomme-blanc-euro.png"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 presentation-youtube-order\">
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-essaye-moi\">
\t\t\t<div class=\"row row-essaye-moi\">
\t\t\t\t<div class=\"col-5 sizing-col\">
\t\t\t\t\t<a style=\"color: white;\">Essaie Waou
\t\t\t\t\t\t<span>➪</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Écris tes projets,<br>Réalise les au quotidien<br>Et deviens HEUREUX</h2>
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
        return "pages/je-decouvre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 143,  290 => 140,  282 => 135,  276 => 132,  268 => 127,  234 => 96,  228 => 93,  220 => 88,  214 => 85,  206 => 80,  172 => 49,  166 => 46,  158 => 41,  152 => 38,  144 => 33,  122 => 14,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Je Découvre
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('je_decouvre') }}
{% endblock %}

{% block body %}
\t<section class=\"presentation element-to-scroll\">
\t\t<div class=\"presentation-waou element-to-scroll\">
\t\t\t<div class=\"col-3\">
\t\t\t\t<img src=\"{{ asset('img/logo-sans-bg.png') }}\">
\t\t\t</div>
\t\t\t<div class=\"col-9\">
\t\t\t\t<h2 class=\"text-presentation-waou\">Waou est une application qui te permet d'organiser et de gérer au quotidien ta vie personnelle sans stress.<br>Utilise Waou et réalise tes grands Projets / Rêves !</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row presentation-youtube\">
\t\t\t<div class=\"row-supp-youtube\">
\t\t\t\t<div class=\"col-5 border-youtube\">
\t\t\t\t\t<h1>Pourquoi M'inscrire
\t\t\t\t\t\t<br>sur Waou ?</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Regarde ces vidéos et deviens toi aussi
\t\t\t\t\t\t<br>\"WaouMan\" ou \"WaouGirl\" !</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-inf-youtube\">
\t\t\t\t<div class=\"col-5 img-principal-youtube border-image\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-objectif.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 presentation-youtube-order\">
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-essaye-moi\">
\t\t\t<div class=\"row row-essaye-moi\">
\t\t\t\t<div class=\"col-5 sizing-col\">
\t\t\t\t\t<a style=\"color: white;\">Essaie Waou
\t\t\t\t\t\t<span>➪</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Écris tes projets,<br>Réalise les au quotidien<br>Et deviens HEUREUX</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row presentation-youtube\">
\t\t\t<div class=\"row-supp-youtube\">
\t\t\t\t<div class=\"col-5 border-youtube\">
\t\t\t\t\t<h1>Comment utiliser
\t\t\t\t\t\t<br>Waou ?</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Découvre les fonctionnalités de Waou
\t\t\t\t\t\t<br>grâce à ces tutos !</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-inf-youtube\">
\t\t\t\t<div class=\"col-5 img-principal-youtube border-image\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-document.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 presentation-youtube-order\">
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-essaye-moi\">
\t\t\t<div class=\"row row-essaye-moi\">
\t\t\t\t<div class=\"col-5 sizing-col\">
\t\t\t\t\t<a style=\"color: white;\">Essaie Waou
\t\t\t\t\t\t<span>➪</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Écris tes projets,<br>Réalise les au quotidien<br>Et deviens HEUREUX</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row presentation-youtube\">
\t\t\t<div class=\"row-supp-youtube\">
\t\t\t\t<div class=\"col-5 border-youtube\">
\t\t\t\t\t<h1>Combien ça coûte
\t\t\t\t\t\t<br>Waou ?</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Découvre les fonctionnalités de Waou
\t\t\t\t\t\t<br>grâce à ces tutos !</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-inf-youtube\">
\t\t\t\t<div class=\"col-5 img-principal-youtube border-image\">
\t\t\t\t\t<img src=\"{{ asset('img/icon-bonhomme-blanc-euro.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 presentation-youtube-order\">
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row img-principal-youtube\">
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 button-a-youtube\">
\t\t\t\t\t\t\t<a><img src=\"{{ asset('img/icon-youtube.png')}}\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-essaye-moi\">
\t\t\t<div class=\"row row-essaye-moi\">
\t\t\t\t<div class=\"col-5 sizing-col\">
\t\t\t\t\t<a style=\"color: white;\">Essaie Waou
\t\t\t\t\t\t<span>➪</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h2>Écris tes projets,<br>Réalise les au quotidien<br>Et deviens HEUREUX</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "pages/je-decouvre.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/je-decouvre.html.twig");
    }
}
