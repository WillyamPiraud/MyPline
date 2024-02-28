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

/* pages/heureu.html.twig */
class __TwigTemplate_46ad6b473dd46cb45f62a319b575d68b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/heureu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/heureu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/heureu.html.twig", 1);
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

        echo "XXXXXXX - Devenir doublement heureux
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("accueil");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "\t<div class=\"row\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"titre-principal\">
\t\t\t\t<h1>Pour être doublement heureux</h1>
\t\t\t\t<h1>
\t\t\t\t\t<span class=\"other-color\">Je dois avoir</h1>
\t\t\t\t</div>
\t\t\t\t<section style=\"margin-top: 3%; width: 100%; height: auto;\">
\t\t\t\t\t<div class=\"grid-container-wrapper\">
\t\t\t\t\t\t";
        // line 71
        $context["gridContainers"] = [0 => ["image" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/famille_heureuse.jpg"), "title" => "UNE BONNE SANTE", "description" => "Elle est essentielle et d'ailleurs on se la souhaite chaque 1er jour de l'an.", "buttonText" => "Que faites vous pour avoir/conserver votre sante ?", "buttonLink" => "#"], 1 => ["image" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/couple_heureu.jpg"), "title" => "UNE BONNE SITUATION FINANCIÈRE", "description" => "Sans argent pas de projet, sentiment d'une insécurité, de manque de confort.", "buttonText" => "Donnez vous les moyens financiers nécessaires à vos envies ?", "buttonLink" => "#"], 2 => ["image" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/famille_objectif.jpg"), "title" => "UN VERITABLE EPANOUISSEMENT SOCIAL (Famille / Amis)", "description" => "L'Humain n'est, pas nature, pas programmer pour vivre seul.", "buttonText" => "Que faites vous pour...", "buttonLink" => "#"], 3 => ["image" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/couple_heureu.jpg"), "title" => "Quels sont vos...", "description" => "Longue l'ennuie dans notre ??? journée semble sans intêret.", "buttonText" => "Quels sont vos...", "buttonLink" => "#"]];
        // line 101
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gridContainers"]) || array_key_exists("gridContainers", $context) ? $context["gridContainers"] : (function () { throw new RuntimeError('Variable "gridContainers" does not exist.', 101, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["grid"]) {
            // line 102
            echo "\t\t\t\t\t\t\t<div class=\"grid-container";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102) % 2 == 0)) {
                echo " reverse";
            }
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"grid-item image\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid"], "image", [], "any", false, false, false, 104), "html", null, true);
            echo "\" alt=\"Logo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"grid-item text\">
\t\t\t\t\t\t\t\t\t<h1>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid"], "title", [], "any", false, false, false, 107), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t\t<p>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid"], "description", [], "any", false, false, false, 108), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid"], "buttonLink", [], "any", false, false, false, 109), "html", null, true);
            echo "\" class=\"button-home\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid"], "buttonText", [], "any", false, false, false, 109), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/heureu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 113,  170 => 109,  166 => 108,  162 => 107,  156 => 104,  148 => 102,  130 => 101,  128 => 71,  117 => 62,  107 => 61,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}XXXXXXX - Devenir doublement heureux
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('accueil') }}
{% endblock %}
{#}
{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"titre-principal\">
\t\t\t\t<h1>DÉCOUV<spa class=\"other-color\">REZ</span>
\t\t\t\t</h1>
\t\t\t\t<h1>
\t\t\t\t\t<span class=\"other-color\">XXXXXX</span>XXXX</h1>
\t\t\t</div>
\t\t\t<div class=\"texte-intro\">
\t\t\t\t<p>
\t\t\t\t\tSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<section style=\"margin-top: 3%; width: 100%; height: auto;\">
\t\t\t\t<div class=\"grid-container-wrapper\">
\t\t\t\t\t<div class=\"grid-container\">
\t\t\t\t\t\t<div class=\"grid-item image\">
\t\t\t\t\t\t\t<img src=\"{{ asset('img/famille_heureuse.jpg') }}\" alt=\"Logo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-item text\">
\t\t\t\t\t\t\t<h1>XXXXXX, c'est quoi ?</h1>
\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et sd</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"grid-container\">
\t\t\t\t\t\t<div class=\"grid-item text\">
\t\t\t\t\t\t\t<h1>La méthode XXXXX</h1>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ipsum nec sapien lacinia tincidunt. Donec id nunc rutrum, eleifend lacus sit amet, efficitur magna.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-item image\">
\t\t\t\t\t\t\t<img src=\"{{ asset('img/couple_heureu.jpg') }}\" alt=\"Logo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"grid-container\">
\t\t\t\t\t\t<div class=\"grid-item image\">
\t\t\t\t\t\t\t<img src=\"{{ asset('img/famille_objectif.jpg') }}\" alt=\"Logo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-item text\">
\t\t\t\t\t\t\t<h1>À chacun ses objectifs</h1>
\t\t\t\t\t\t\t<p>Aliquam erat volutpat. In interdum sapien id sem vulputate, eget interdum arcu auctor. Fusce feugiat varius tortor sed aliquet.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>
{% endblock %}
{#}
{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col-8 mx-auto container-intro\">
\t\t\t<div class=\"titre-principal\">
\t\t\t\t<h1>Pour être doublement heureux</h1>
\t\t\t\t<h1>
\t\t\t\t\t<span class=\"other-color\">Je dois avoir</h1>
\t\t\t\t</div>
\t\t\t\t<section style=\"margin-top: 3%; width: 100%; height: auto;\">
\t\t\t\t\t<div class=\"grid-container-wrapper\">
\t\t\t\t\t\t{% set gridContainers = [
                        {
                            'image': asset('img/famille_heureuse.jpg'),
                            'title': 'UNE BONNE SANTE',
                            'description': \"Elle est essentielle et d'ailleurs on se la souhaite chaque 1er jour de l'an.\",
\t\t\t\t\t\t\t'buttonText': 'Que faites vous pour avoir/conserver votre sante ?',
                            'buttonLink': '#'
                        },
                        {
                            'image': asset('img/couple_heureu.jpg'),
                            'title': 'UNE BONNE SITUATION FINANCIÈRE',
                            'description': 'Sans argent pas de projet, sentiment d\\'une insécurité, de manque de confort.',
\t\t\t\t\t\t\t'buttonText': 'Donnez vous les moyens financiers nécessaires à vos envies ?',
                            'buttonLink': '#'
                        },
                        {
                            'image': asset('img/famille_objectif.jpg'),
                            'title': 'UN VERITABLE EPANOUISSEMENT SOCIAL (Famille / Amis)',
                            'description': 'L\\'Humain n\\'est, pas nature, pas programmer pour vivre seul.',
\t\t\t\t\t\t\t'buttonText': 'Que faites vous pour...',
                            'buttonLink': '#'
                        },
                        {
                            'image': asset('img/couple_heureu.jpg'),
                            'title': 'Quels sont vos...',
                            'description': 'Longue l\\'ennuie dans notre ??? journée semble sans intêret.',
\t\t\t\t\t\t\t'buttonText': 'Quels sont vos...',
                            'buttonLink': '#'
                        },
                    ] %}
\t\t\t\t\t\t{% for grid in gridContainers %}
\t\t\t\t\t\t\t<div class=\"grid-container{% if loop.index is even %} reverse{% endif %}\">
\t\t\t\t\t\t\t\t<div class=\"grid-item image\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ grid.image }}\" alt=\"Logo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"grid-item text\">
\t\t\t\t\t\t\t\t\t<h1>{{ grid.title }}</h1>
\t\t\t\t\t\t\t\t\t<p>{{ grid.description }}</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ grid.buttonLink }}\" class=\"button-home\">{{ grid.buttonText }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t{% endblock %}
", "pages/heureu.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/heureu.html.twig");
    }
}
