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

/* pages/landing.html.twig */
class __TwigTemplate_2b7eefe3dc040154941066ab96143fc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/landing.html.twig"));

        // line 1
        echo "<!-- =========

\tTemplate Name: Play
\tAuthor: UIdeck
\tAuthor URI: https://uideck.com/
\tSupport: https://uideck.com/support/
\tVersion: 1.1

========== -->

<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<title>Waou | Atteindre t'es objectifs n'a jamais été aussi facile</title>

\t\t<!-- Primary Meta Tags -->
\t\t<meta name=\"title\" content=\"Waou - L'Application Web qui te permet d'atteindre t'es Objectifs\">
\t\t<meta
\t\tname=\"description\" content=\"Découvrez la meilleure plateforme pour atteindre vos objectifs. Notre plateforme vous permet d'integrer dans votre routine journalière, les actions pour atteindre vos objectifs petit à petit.\">

\t\t<!-- ===== All CSS files ===== -->
\t\t";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "\t</head>
\t<body>

\t\t<!-- ====== Hero Start ====== -->
\t\t<section class=\"ud-hero\" id=\"home\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-hero-content wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<h1 class=\"ud-hero-title\">
\t\t\t\t\t\t\t\tOpen-Source Web Template for SaaS, Startup, Apps, and More
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"ud-hero-desc\">
\t\t\t\t\t\t\t\tMultidisciplinary Web Template Built with Your Favourite
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Technology - HTML Bootstrap, Tailwind and React NextJS.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<ul class=\"ud-hero-buttons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://links.uideck.com/play-bootstrap-download\" rel=\"nofollow noopener\" target=\"_blank\" class=\"ud-main-btn ud-white-btn\">
\t\t\t\t\t\t\t\t\t\tDownload Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://github.com/uideck/play-bootstrap\" rel=\"nofollow noopener\" target=\"_blank\" class=\"ud-main-btn ud-link-btn\">
\t\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-hero-brands-wrapper wow fadeInUp\" data-wow-delay=\".3s\">
\t\t\t\t\t\t\t<img src=\"assets/images/hero/brand.svg\" alt=\"brand\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-hero-image wow fadeInUp\" data-wow-delay=\".25s\">
\t\t\t\t\t\t\t<img src=\"assets/images/hero/hero-image.svg\" alt=\"hero-image\"/>
\t\t\t\t\t\t\t<img src=\"assets/images/hero/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t<img src=\"assets/images/hero/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Hero End ====== -->

\t\t<!-- ====== Features Start ====== -->
\t\t<section id=\"features\" class=\"ud-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title\">
\t\t\t\t\t\t\t<span>Features</span>
\t\t\t\t\t\t\t<h2>Main Features of Play</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-gift\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">Free and Open-Source</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-move\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">Multipurpose Template</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-layout\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">High-quality Design</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".25s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-layers\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">All Essential Elements</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Features End ====== -->

\t\t<!-- ====== About Start ====== -->
\t\t<section id=\"about\" class=\"ud-about\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"ud-about-wrapper wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t<div class=\"ud-about-content-wrapper\">
\t\t\t\t\t\t<div class=\"ud-about-content\">
\t\t\t\t\t\t\t<span class=\"tag\">About Us</span>
\t\t\t\t\t\t\t<h2>Brilliant Toolkit to Build Nextgen Website Faster.</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThe main ‘thrust’ is to focus on educating attendees on how to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                best protect highly vulnerable business applications with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                interactive panel discussions and roundtables led by subject
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                matter experts.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThe main ‘thrust’ is to focus on educating attendees on how to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                best protect highly vulnerable business applications with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                interactive panel.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn\">Learn More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ud-about-image\">
\t\t\t\t\t\t<img src=\"assets/images/about/about-image.svg\" alt=\"about-image\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== About End ====== -->

\t\t<!-- ====== Pricing Start ====== -->
\t\t<section id=\"pricing\" class=\"ud-pricing\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title mx-auto text-center\">
\t\t\t\t\t\t\t<span>Pricing</span>
\t\t\t\t\t\t\t<h2>Our Pricing Plans</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-0 align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-10\">
\t\t\t\t\t\t<div class=\"ud-single-pricing first-item wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-pricing-header\">
\t\t\t\t\t\t\t\t<h3>STARTING FROM</h3>
\t\t\t\t\t\t\t\t<h4>\$ 19.99/mo</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>5 User</li>
\t\t\t\t\t\t\t\t\t<li>All UI components</li>
\t\t\t\t\t\t\t\t\t<li>Lifetime access</li>
\t\t\t\t\t\t\t\t\t<li>Free updates</li>
\t\t\t\t\t\t\t\t\t<li>Use on 1 (one) project</li>
\t\t\t\t\t\t\t\t\t<li>4 Months support</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-footer\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn ud-border-btn\">
\t\t\t\t\t\t\t\t\tPurchase Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-10\">
\t\t\t\t\t\t<div class=\"ud-single-pricing active wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<span class=\"ud-popular-tag\">POPULAR</span>
\t\t\t\t\t\t\t<div class=\"ud-pricing-header\">
\t\t\t\t\t\t\t\t<h3>STARTING FROM</h3>
\t\t\t\t\t\t\t\t<h4>\$ 30.99/mo</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>5 User</li>
\t\t\t\t\t\t\t\t\t<li>All UI components</li>
\t\t\t\t\t\t\t\t\t<li>Lifetime access</li>
\t\t\t\t\t\t\t\t\t<li>Free updates</li>
\t\t\t\t\t\t\t\t\t<li>Use on 1 (one) project</li>
\t\t\t\t\t\t\t\t\t<li>4 Months support</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-footer\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn ud-white-btn\">
\t\t\t\t\t\t\t\t\tPurchase Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-10\">
\t\t\t\t\t\t<div class=\"ud-single-pricing last-item wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-pricing-header\">
\t\t\t\t\t\t\t\t<h3>STARTING FROM</h3>
\t\t\t\t\t\t\t\t<h4>\$ 70.99/mo</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>5 User</li>
\t\t\t\t\t\t\t\t\t<li>All UI components</li>
\t\t\t\t\t\t\t\t\t<li>Lifetime access</li>
\t\t\t\t\t\t\t\t\t<li>Free updates</li>
\t\t\t\t\t\t\t\t\t<li>Use on 1 (one) project</li>
\t\t\t\t\t\t\t\t\t<li>4 Months support</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-footer\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn ud-border-btn\">
\t\t\t\t\t\t\t\t\tPurchase Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Pricing End ====== -->

\t\t<!-- ====== FAQ Start ====== -->
\t\t<section id=\"faq\" class=\"ud-faq\">
\t\t\t<div class=\"shape\">
\t\t\t\t<img src=\"assets/images/faq/shape.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title text-center mx-auto\">
\t\t\t\t\t\t\t<span>FAQ</span>
\t\t\t\t\t\t\t<h2>Any Questions? Answered</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>How to use UIdeck?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>How to download icons from Lineicons?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Is GrayGrids part of UIdeck?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Can I use this template for commercial project?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Do you have plan releasing Play Pro?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseFive\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSix\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Where and how to host this template?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseSix\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== FAQ End ====== -->

\t\t<!-- ====== Testimonials Start ====== -->
\t\t<section id=\"testimonials\" class=\"ud-testimonials\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title mx-auto text-center\">
\t\t\t\t\t\t\t<span>Testimonials</span>
\t\t\t\t\t\t\t<h2>What our Customers Says</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"ud-single-testimonial wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"ud-testimonial-ratings\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t“Our members are so impressed. It's intuitive. It's clean.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  It's distraction free. If you're building a community.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-info\">
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/author-01.png\" alt=\"author\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-meta\">
\t\t\t\t\t\t\t\t\t<h4>Sabo Masties</h4>
\t\t\t\t\t\t\t\t\t<p>Founder @UIdeck</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"ud-single-testimonial wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-testimonial-ratings\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t“Our members are so impressed. It's intuitive. It's clean.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  It's distraction free. If you're building a community.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-info\">
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/author-02.png\" alt=\"author\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-meta\">
\t\t\t\t\t\t\t\t\t<h4>Margin Gesmu</h4>
\t\t\t\t\t\t\t\t\t<p>Founder @Lineicons</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"ud-single-testimonial wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-testimonial-ratings\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t“Our members are so impressed. It's intuitive. It's clean.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  It's distraction free. If you're building a community.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-info\">
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/author-03.png\" alt=\"author\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-meta\">
\t\t\t\t\t\t\t\t\t<h4>William Smith</h4>
\t\t\t\t\t\t\t\t\t<p>Founder @GrayGrids</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-brands wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-title\">
\t\t\t\t\t\t\t\t<h6>Trusted and Used by</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-brands-logo\">
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/ayroui.svg\" alt=\"ayroui\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/uideck.svg\" alt=\"uideck\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/graygrids.svg\" alt=\"graygrids\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/lineicons.svg\" alt=\"lineicons\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/ecommerce-html.svg\" alt=\"ecommerce-html\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Testimonials End ====== -->

\t\t<!-- ====== Team Start ====== -->
\t\t<section id=\"team\" class=\"ud-team\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title mx-auto text-center\">
\t\t\t\t\t\t\t<span>Our Team</span>
\t\t\t\t\t\t\t<h2>Meet The Team</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-01.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Adveen Desuza</h5>
\t\t\t\t\t\t\t\t<h6>UI Designer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-02.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Jezmin uniya</h5>
\t\t\t\t\t\t\t\t<h6>Product Designer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-03.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Andrieo Gloree</h5>
\t\t\t\t\t\t\t\t<h6>App Developer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".25s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-04.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Jackie Sanders</h5>
\t\t\t\t\t\t\t\t<h6>Content Writer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Team End ====== -->

\t\t<!-- ====== Contact Start ====== -->
\t\t<section id=\"contact\" class=\"ud-contact\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-xl-8 col-lg-7\">
\t\t\t\t\t\t<div class=\"ud-contact-content-wrapper\">
\t\t\t\t\t\t\t<div class=\"ud-contact-title\">
\t\t\t\t\t\t\t\t<span>CONTACT US</span>
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\tLet’s talk about
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\tLove to hear from you!
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-contact-info-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-single-info\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-map-marker\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-meta\">
\t\t\t\t\t\t\t\t\t\t<h5>Our Location</h5>
\t\t\t\t\t\t\t\t\t\t<p>401 Broadway, 24th Floor, Orchard Cloud View, London</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-info\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-envelope\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-meta\">
\t\t\t\t\t\t\t\t\t\t<h5>How Can We Help?</h5>
\t\t\t\t\t\t\t\t\t\t<p>info@yourdomain.com</p>
\t\t\t\t\t\t\t\t\t\t<p>contact@yourdomain.com</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-4 col-lg-5\">
\t\t\t\t\t\t<div class=\"ud-contact-form-wrapper wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<h3 class=\"ud-contact-form-title\">Send us a Message</h3>
\t\t\t\t\t\t\t<form class=\"ud-contact-form\">
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"fullName\">Full Name*</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"fullName\" placeholder=\"Adam Gelius\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email*</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"example@yourmail.com\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phone\">Phone*</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"phone\" placeholder=\"+885 1254 5211 552\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"message\">Message*</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"message\" rows=\"1\" placeholder=\"type your message here\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group mb-0\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"ud-main-btn\">
\t\t\t\t\t\t\t\t\t\tSend Message
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Contact End ====== -->

\t\t<!-- ====== Footer Start ====== -->
\t\t<footer class=\"ud-footer wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t<div class=\"shape shape-1\">
\t\t\t\t<img src=\"assets/images/footer/shape-1.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"shape shape-2\">
\t\t\t\t<img src=\"assets/images/footer/shape-2.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"shape shape-3\">
\t\t\t\t<img src=\"assets/images/footer/shape-3.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"ud-footer-widgets\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"ud-footer-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo/logo.svg\" alt=\"logo\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"ud-widget-desc\">
\t\t\t\t\t\t\t\t\tWe create digital experiences for brands and companies by
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  using technology.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-socials\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-linkedin-original\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">About Us</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Features</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Testimonial</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">Features</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">How it works</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Privacy policy</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Terms of service</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Refund policy</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">Our Products</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://lineicons.com/\" rel=\"nofollow noopner\" target=\"_blank\">Lineicons
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow noopner\" target=\"_blank\">Ecommerce HTML</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ayroui.com/\" rel=\"nofollow noopner\" target=\"_blank\">Ayro UI</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow noopner\" target=\"_blank\">Plain Admin</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-8 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">Partners</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-brands\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ayroui.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/ayroui.svg\" alt=\"ayroui\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/ecommerce-html.svg\" alt=\"ecommerce-html\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/graygrids.svg\" alt=\"graygrids\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://lineicons.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/lineicons.svg\" alt=\"lineicons\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://uideck.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/uideck.svg\" alt=\"uideck\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://tailwindtemplates.co/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/tailwindtemplates.svg\" alt=\"tailwindtemplates\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ud-footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<ul class=\"ud-footer-bottom-left\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Privacy policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Terms of service</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p class=\"ud-footer-bottom-right\">
\t\t\t\t\t\t\t\tDesigned and Developed by
\t\t\t\t\t\t\t\t<a href=\"https://uideck.com\" rel=\"nofollow\">UIdeck</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- ====== Footer End ====== -->

\t\t<!-- ====== Back To Top Start ====== -->
\t\t<a href=\"javascript:void(0)\" class=\"back-to-top\">
\t\t\t<i class=\"lni lni-chevron-up\"></i>
\t\t</a>
\t\t<!-- ====== Back To Top End ====== -->

\t\t<!-- ====== All Javascript Files ====== -->
\t\t<script src=\"";
        // line 954
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 956
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t// ==== for menu scroll
const pageLink = document.querySelectorAll(\".ud-menu-scroll\");

pageLink.forEach((elem) => {
elem.addEventListener(\"click\", (e) => {
e.preventDefault();
document.querySelector(elem.getAttribute(\"href\")).scrollIntoView({
behavior: \"smooth\",
offsetTop: 1 - 60
});
});
});

// section menu active
function onScroll(event) {
const sections = document.querySelectorAll(\".ud-menu-scroll\");
const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

for (let i = 0; i < sections.length; i++) {
const currLink = sections[i];
const val = currLink.getAttribute(\"href\");
const refElement = document.querySelector(val);
const scrollTopMinus = scrollPos + 73;
if (refElement.offsetTop<= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight>scrollTopMinus) {
document.querySelector(\".ud-menu-scroll\").classList.remove(\"active\");
currLink.classList.add(\"active\");
} else {
currLink.classList.remove(\"active\");
}
}
}

window.document.addEventListener(\"scroll\", onScroll);
\t\t</script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("landing");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 26,  1058 => 25,  1008 => 956,  1004 => 955,  1000 => 954,  72 => 28,  70 => 25,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- =========

\tTemplate Name: Play
\tAuthor: UIdeck
\tAuthor URI: https://uideck.com/
\tSupport: https://uideck.com/support/
\tVersion: 1.1

========== -->

<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<title>Waou | Atteindre t'es objectifs n'a jamais été aussi facile</title>

\t\t<!-- Primary Meta Tags -->
\t\t<meta name=\"title\" content=\"Waou - L'Application Web qui te permet d'atteindre t'es Objectifs\">
\t\t<meta
\t\tname=\"description\" content=\"Découvrez la meilleure plateforme pour atteindre vos objectifs. Notre plateforme vous permet d'integrer dans votre routine journalière, les actions pour atteindre vos objectifs petit à petit.\">

\t\t<!-- ===== All CSS files ===== -->
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('landing') }}
\t\t{% endblock %}
\t</head>
\t<body>

\t\t<!-- ====== Hero Start ====== -->
\t\t<section class=\"ud-hero\" id=\"home\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-hero-content wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<h1 class=\"ud-hero-title\">
\t\t\t\t\t\t\t\tOpen-Source Web Template for SaaS, Startup, Apps, and More
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"ud-hero-desc\">
\t\t\t\t\t\t\t\tMultidisciplinary Web Template Built with Your Favourite
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Technology - HTML Bootstrap, Tailwind and React NextJS.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<ul class=\"ud-hero-buttons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://links.uideck.com/play-bootstrap-download\" rel=\"nofollow noopener\" target=\"_blank\" class=\"ud-main-btn ud-white-btn\">
\t\t\t\t\t\t\t\t\t\tDownload Now
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://github.com/uideck/play-bootstrap\" rel=\"nofollow noopener\" target=\"_blank\" class=\"ud-main-btn ud-link-btn\">
\t\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-hero-brands-wrapper wow fadeInUp\" data-wow-delay=\".3s\">
\t\t\t\t\t\t\t<img src=\"assets/images/hero/brand.svg\" alt=\"brand\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-hero-image wow fadeInUp\" data-wow-delay=\".25s\">
\t\t\t\t\t\t\t<img src=\"assets/images/hero/hero-image.svg\" alt=\"hero-image\"/>
\t\t\t\t\t\t\t<img src=\"assets/images/hero/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t<img src=\"assets/images/hero/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Hero End ====== -->

\t\t<!-- ====== Features Start ====== -->
\t\t<section id=\"features\" class=\"ud-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title\">
\t\t\t\t\t\t\t<span>Features</span>
\t\t\t\t\t\t\t<h2>Main Features of Play</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-gift\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">Free and Open-Source</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-move\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">Multipurpose Template</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-layout\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">High-quality Design</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-feature wow fadeInUp\" data-wow-delay=\".25s\">
\t\t\t\t\t\t\t<div class=\"ud-feature-icon\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-layers\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-feature-content\">
\t\t\t\t\t\t\t\t<h3 class=\"ud-feature-title\">All Essential Elements</h3>
\t\t\t\t\t\t\t\t<p class=\"ud-feature-desc\">
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-feature-link\">
\t\t\t\t\t\t\t\t\tLearn More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Features End ====== -->

\t\t<!-- ====== About Start ====== -->
\t\t<section id=\"about\" class=\"ud-about\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"ud-about-wrapper wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t<div class=\"ud-about-content-wrapper\">
\t\t\t\t\t\t<div class=\"ud-about-content\">
\t\t\t\t\t\t\t<span class=\"tag\">About Us</span>
\t\t\t\t\t\t\t<h2>Brilliant Toolkit to Build Nextgen Website Faster.</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThe main ‘thrust’ is to focus on educating attendees on how to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                best protect highly vulnerable business applications with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                interactive panel discussions and roundtables led by subject
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                matter experts.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThe main ‘thrust’ is to focus on educating attendees on how to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                best protect highly vulnerable business applications with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                interactive panel.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn\">Learn More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ud-about-image\">
\t\t\t\t\t\t<img src=\"assets/images/about/about-image.svg\" alt=\"about-image\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== About End ====== -->

\t\t<!-- ====== Pricing Start ====== -->
\t\t<section id=\"pricing\" class=\"ud-pricing\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title mx-auto text-center\">
\t\t\t\t\t\t\t<span>Pricing</span>
\t\t\t\t\t\t\t<h2>Our Pricing Plans</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-0 align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-10\">
\t\t\t\t\t\t<div class=\"ud-single-pricing first-item wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-pricing-header\">
\t\t\t\t\t\t\t\t<h3>STARTING FROM</h3>
\t\t\t\t\t\t\t\t<h4>\$ 19.99/mo</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>5 User</li>
\t\t\t\t\t\t\t\t\t<li>All UI components</li>
\t\t\t\t\t\t\t\t\t<li>Lifetime access</li>
\t\t\t\t\t\t\t\t\t<li>Free updates</li>
\t\t\t\t\t\t\t\t\t<li>Use on 1 (one) project</li>
\t\t\t\t\t\t\t\t\t<li>4 Months support</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-footer\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn ud-border-btn\">
\t\t\t\t\t\t\t\t\tPurchase Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-10\">
\t\t\t\t\t\t<div class=\"ud-single-pricing active wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<span class=\"ud-popular-tag\">POPULAR</span>
\t\t\t\t\t\t\t<div class=\"ud-pricing-header\">
\t\t\t\t\t\t\t\t<h3>STARTING FROM</h3>
\t\t\t\t\t\t\t\t<h4>\$ 30.99/mo</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>5 User</li>
\t\t\t\t\t\t\t\t\t<li>All UI components</li>
\t\t\t\t\t\t\t\t\t<li>Lifetime access</li>
\t\t\t\t\t\t\t\t\t<li>Free updates</li>
\t\t\t\t\t\t\t\t\t<li>Use on 1 (one) project</li>
\t\t\t\t\t\t\t\t\t<li>4 Months support</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-footer\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn ud-white-btn\">
\t\t\t\t\t\t\t\t\tPurchase Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-10\">
\t\t\t\t\t\t<div class=\"ud-single-pricing last-item wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-pricing-header\">
\t\t\t\t\t\t\t\t<h3>STARTING FROM</h3>
\t\t\t\t\t\t\t\t<h4>\$ 70.99/mo</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>5 User</li>
\t\t\t\t\t\t\t\t\t<li>All UI components</li>
\t\t\t\t\t\t\t\t\t<li>Lifetime access</li>
\t\t\t\t\t\t\t\t\t<li>Free updates</li>
\t\t\t\t\t\t\t\t\t<li>Use on 1 (one) project</li>
\t\t\t\t\t\t\t\t\t<li>4 Months support</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-pricing-footer\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"ud-main-btn ud-border-btn\">
\t\t\t\t\t\t\t\t\tPurchase Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Pricing End ====== -->

\t\t<!-- ====== FAQ Start ====== -->
\t\t<section id=\"faq\" class=\"ud-faq\">
\t\t\t<div class=\"shape\">
\t\t\t\t<img src=\"assets/images/faq/shape.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title text-center mx-auto\">
\t\t\t\t\t\t\t<span>FAQ</span>
\t\t\t\t\t\t\t<h2>Any Questions? Answered</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>How to use UIdeck?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>How to download icons from Lineicons?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Is GrayGrids part of UIdeck?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Can I use this template for commercial project?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Do you have plan releasing Play Pro?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseFive\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ud-single-faq wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t\t<button class=\"ud-faq-btn collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSix\">
\t\t\t\t\t\t\t\t\t<span class=\"icon flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Where and how to host this template?</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"collapseSix\" class=\"accordion-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-faq-body\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    typesetting industry. Lorem Ipsum has been the industry's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    standard dummy text ever since the 1500s, when an unknown
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    printer took a galley of type and scrambled it to make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    type specimen book.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== FAQ End ====== -->

\t\t<!-- ====== Testimonials Start ====== -->
\t\t<section id=\"testimonials\" class=\"ud-testimonials\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title mx-auto text-center\">
\t\t\t\t\t\t\t<span>Testimonials</span>
\t\t\t\t\t\t\t<h2>What our Customers Says</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"ud-single-testimonial wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"ud-testimonial-ratings\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t“Our members are so impressed. It's intuitive. It's clean.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  It's distraction free. If you're building a community.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-info\">
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/author-01.png\" alt=\"author\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-meta\">
\t\t\t\t\t\t\t\t\t<h4>Sabo Masties</h4>
\t\t\t\t\t\t\t\t\t<p>Founder @UIdeck</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"ud-single-testimonial wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-testimonial-ratings\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t“Our members are so impressed. It's intuitive. It's clean.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  It's distraction free. If you're building a community.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-info\">
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/author-02.png\" alt=\"author\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-meta\">
\t\t\t\t\t\t\t\t\t<h4>Margin Gesmu</h4>
\t\t\t\t\t\t\t\t\t<p>Founder @Lineicons</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"ud-single-testimonial wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-testimonial-ratings\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t\t<i class=\"lni lni-star-filled\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t“Our members are so impressed. It's intuitive. It's clean.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  It's distraction free. If you're building a community.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-testimonial-info\">
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/author-03.png\" alt=\"author\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-testimonial-meta\">
\t\t\t\t\t\t\t\t\t<h4>William Smith</h4>
\t\t\t\t\t\t\t\t\t<p>Founder @GrayGrids</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-brands wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-title\">
\t\t\t\t\t\t\t\t<h6>Trusted and Used by</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-brands-logo\">
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/ayroui.svg\" alt=\"ayroui\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/uideck.svg\" alt=\"uideck\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/graygrids.svg\" alt=\"graygrids\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/lineicons.svg\" alt=\"lineicons\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/brands/ecommerce-html.svg\" alt=\"ecommerce-html\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Testimonials End ====== -->

\t\t<!-- ====== Team Start ====== -->
\t\t<section id=\"team\" class=\"ud-team\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"ud-section-title mx-auto text-center\">
\t\t\t\t\t\t\t<span>Our Team</span>
\t\t\t\t\t\t\t<h2>Meet The Team</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                but the majority have suffered alteration in some form.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-01.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Adveen Desuza</h5>
\t\t\t\t\t\t\t\t<h6>UI Designer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-02.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Jezmin uniya</h5>
\t\t\t\t\t\t\t\t<h6>Product Designer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-03.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Andrieo Gloree</h5>
\t\t\t\t\t\t\t\t<h6>App Developer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ud-single-team wow fadeInUp\" data-wow-delay=\".25s\">
\t\t\t\t\t\t\t<div class=\"ud-team-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-team-image\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/team/team-04.png\" alt=\"team\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<img src=\"assets/images/team/dotted-shape.svg\" alt=\"shape\" class=\"shape shape-1\"/>
\t\t\t\t\t\t\t\t<img src=\"assets/images/team/shape-2.svg\" alt=\"shape\" class=\"shape shape-2\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-team-info\">
\t\t\t\t\t\t\t\t<h5>Jackie Sanders</h5>
\t\t\t\t\t\t\t\t<h6>Content Writer</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"ud-team-socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Team End ====== -->

\t\t<!-- ====== Contact Start ====== -->
\t\t<section id=\"contact\" class=\"ud-contact\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-xl-8 col-lg-7\">
\t\t\t\t\t\t<div class=\"ud-contact-content-wrapper\">
\t\t\t\t\t\t\t<div class=\"ud-contact-title\">
\t\t\t\t\t\t\t\t<span>CONTACT US</span>
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\tLet’s talk about
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\tLove to hear from you!
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ud-contact-info-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"ud-single-info\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-map-marker\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-meta\">
\t\t\t\t\t\t\t\t\t\t<h5>Our Location</h5>
\t\t\t\t\t\t\t\t\t\t<p>401 Broadway, 24th Floor, Orchard Cloud View, London</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-single-info\">
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-envelope\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ud-info-meta\">
\t\t\t\t\t\t\t\t\t\t<h5>How Can We Help?</h5>
\t\t\t\t\t\t\t\t\t\t<p>info@yourdomain.com</p>
\t\t\t\t\t\t\t\t\t\t<p>contact@yourdomain.com</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-4 col-lg-5\">
\t\t\t\t\t\t<div class=\"ud-contact-form-wrapper wow fadeInUp\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<h3 class=\"ud-contact-form-title\">Send us a Message</h3>
\t\t\t\t\t\t\t<form class=\"ud-contact-form\">
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"fullName\">Full Name*</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"fullName\" placeholder=\"Adam Gelius\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email*</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"example@yourmail.com\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phone\">Phone*</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"phone\" placeholder=\"+885 1254 5211 552\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"message\">Message*</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"message\" rows=\"1\" placeholder=\"type your message here\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ud-form-group mb-0\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"ud-main-btn\">
\t\t\t\t\t\t\t\t\t\tSend Message
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ====== Contact End ====== -->

\t\t<!-- ====== Footer Start ====== -->
\t\t<footer class=\"ud-footer wow fadeInUp\" data-wow-delay=\".15s\">
\t\t\t<div class=\"shape shape-1\">
\t\t\t\t<img src=\"assets/images/footer/shape-1.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"shape shape-2\">
\t\t\t\t<img src=\"assets/images/footer/shape-2.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"shape shape-3\">
\t\t\t\t<img src=\"assets/images/footer/shape-3.svg\" alt=\"shape\"/>
\t\t\t</div>
\t\t\t<div class=\"ud-footer-widgets\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"ud-footer-logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo/logo.svg\" alt=\"logo\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"ud-widget-desc\">
\t\t\t\t\t\t\t\t\tWe create digital experiences for brands and companies by
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  using technology.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-socials\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-twitter-filled\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-filled\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/MusharofChy\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-linkedin-original\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">About Us</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Features</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Testimonial</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">Features</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">How it works</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Privacy policy</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Terms of service</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Refund policy</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">Our Products</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-links\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://lineicons.com/\" rel=\"nofollow noopner\" target=\"_blank\">Lineicons
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow noopner\" target=\"_blank\">Ecommerce HTML</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ayroui.com/\" rel=\"nofollow noopner\" target=\"_blank\">Ayro UI</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow noopner\" target=\"_blank\">Plain Admin</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-8 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"ud-widget\">
\t\t\t\t\t\t\t\t<h5 class=\"ud-widget-title\">Partners</h5>
\t\t\t\t\t\t\t\t<ul class=\"ud-widget-brands\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ayroui.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/ayroui.svg\" alt=\"ayroui\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/ecommerce-html.svg\" alt=\"ecommerce-html\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/graygrids.svg\" alt=\"graygrids\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://lineicons.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/lineicons.svg\" alt=\"lineicons\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://uideck.com/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/uideck.svg\" alt=\"uideck\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://tailwindtemplates.co/\" rel=\"nofollow noopner\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/brands/tailwindtemplates.svg\" alt=\"tailwindtemplates\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ud-footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<ul class=\"ud-footer-bottom-left\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Privacy policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Terms of service</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p class=\"ud-footer-bottom-right\">
\t\t\t\t\t\t\t\tDesigned and Developed by
\t\t\t\t\t\t\t\t<a href=\"https://uideck.com\" rel=\"nofollow\">UIdeck</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- ====== Footer End ====== -->

\t\t<!-- ====== Back To Top Start ====== -->
\t\t<a href=\"javascript:void(0)\" class=\"back-to-top\">
\t\t\t<i class=\"lni lni-chevron-up\"></i>
\t\t</a>
\t\t<!-- ====== Back To Top End ====== -->

\t\t<!-- ====== All Javascript Files ====== -->
\t\t<script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/wow.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/main.js') }}\"></script>
\t\t<script>
\t\t\t// ==== for menu scroll
const pageLink = document.querySelectorAll(\".ud-menu-scroll\");

pageLink.forEach((elem) => {
elem.addEventListener(\"click\", (e) => {
e.preventDefault();
document.querySelector(elem.getAttribute(\"href\")).scrollIntoView({
behavior: \"smooth\",
offsetTop: 1 - 60
});
});
});

// section menu active
function onScroll(event) {
const sections = document.querySelectorAll(\".ud-menu-scroll\");
const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

for (let i = 0; i < sections.length; i++) {
const currLink = sections[i];
const val = currLink.getAttribute(\"href\");
const refElement = document.querySelector(val);
const scrollTopMinus = scrollPos + 73;
if (refElement.offsetTop<= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight>scrollTopMinus) {
document.querySelector(\".ud-menu-scroll\").classList.remove(\"active\");
currLink.classList.add(\"active\");
} else {
currLink.classList.remove(\"active\");
}
}
}

window.document.addEventListener(\"scroll\", onScroll);
\t\t</script>
\t</body>
</html>
", "pages/landing.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/landing.html.twig");
    }
}
