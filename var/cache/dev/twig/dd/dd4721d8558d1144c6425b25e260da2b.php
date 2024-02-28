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

/* pages/mentions_legales.html.twig */
class __TwigTemplate_ff468f5b5aefc0e73ad57c786b9ffbc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/mentions_legales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/mentions_legales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/mentions_legales.html.twig", 1);
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

        echo "Waou - Mentions Légales
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("journalier");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<section class=\"section-legal\">
\t\t<h1 class=\"head-title\">Mentions Légales :</h1>
\t\t<div class=\"container-txt\">
\t\t\t<p>Waou est une marque déposée et exploitée par la société WAOU care SAS.</p>
\t\t\t<p>
\t\t\t\t<strong>Copyright WAOU care SAS, tous droits d’auteur des textes et œuvres réservés.</strong>
\t\t\t</p>
\t\t\t<p>Conformément aux dispositions des articles 6 III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique (LCEN), il est porté à la connaissance des utilisateurs et des visiteurs du site WAOU accessible à l’adresse suivante https://www.waou.fr les présentes mentions légales.</p>
\t\t\t<p>L’accès et l’utilisation du site sont soumis aux Mentions légales détaillées ci-après ainsi qu’aux lois et/ou règlements applicables.</p>
\t\t\t<p>La connexion, l’utilisation et l’accès à ce site impliquent l’acceptation intégrale et sans réserve de l’internaute de toutes les stipulations des présentes Mentions légales. Ces dernières sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du Site sont donc invités à les consulter de manière régulière.</p>
\t\t\t<h3>Article 1 – Informations légales</h3>
\t\t\t<p>En vertu de l’article 6 de la Loi LCEN visée ci-dessus, il est précisé ci-dessous l’identité des différents intervenant dans le cadre de sa réalisation et de son suivi.</p>
\t\t\t<p>
\t\t\t\t<strong>Editeur du Site :</strong>
\t\t\t\tWaou, Société par Actions Simplifiée au capital de 2 500€
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<strong>Siège social :</strong>
\t\t\t\t9, chemin du cret – 42800 Saint Joseph
\t\t\t\t<strong>N° Siren :</strong>
\t\t\t\t818 146 573 R.C.S LYON
\t\t\t\t<strong>TVA Intracommunautaire :</strong>
\t\t\t\tTVA FR37818146573
\t\t\t\t<strong>Code NAF :</strong>
\t\t\t\t6420Z
\t\t\t\t<strong>Contact :</strong>
\t\t\t\twaou@waou.fr</p>
\t\t\t<p>
\t\t\t\t<strong>Directeur de la publication :</strong>
\t\t\t\tMonsieur TRAEN Philippe
\t\t\t\t<strong>Téléphone :</strong>
\t\t\t\t+33 (0)6 10 86 61 27
\t\t\t\t<strong>Adresse e-mail :</strong>
\t\t\t\twaou@waou.fr</p>
\t\t\t<p>Sont considérés comme des utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le Site, ci-après les « Utilisateurs ».</p>
\t\t\t<h3>Article 2 – Accès au Site et gestion</h3>
\t\t\t<p>Le Site est accessible à tout moment sauf en cas de force majeure, interruption programmée ou non et pouvant découler d’une nécessité de maintenance.</p>
\t\t\t<p>En cas de modification, interruption ou suspension des services, le Site ne saurait être tenu responsable.</p>
\t\t\t<p>L’accès au Site et son utilisation sont réservés à un usage strictement personnel. Les utilisateurs s’engagent à ne pas utiliser le site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaire ou pour toute forme de sollicitation commerciale.</p>
\t\t\t<p>Pour la bonne gestion du Site, l’Editeur pourra à tout moment :</p>
\t\t\t<ul>
\t\t\t\t<li>Suspendre, interrompre ou limiter l’accès à tout ou partie du Site, réserver l’accès au Site ou à certaines parties du Site à une catégorie d’internautes déterminée</li>
\t\t\t\t<li>Supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales et internationales</li>
\t\t\t\t<li>Suspendre le Site afin de procéder à des mises à jour</li>
\t\t\t</ul>
\t\t\t<h3>Article 3 – Droits de propriété intellectuelle</h3>
\t\t\t<p>Toutes les marques, logos, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce Site et plus généralement tous les éléments reproduits ou utilisés sur le Site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.</p>
\t\t\t<p>Ils sont la propriété quasimenent pleine de l’Editeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l’accord préalable et écrit de l’Editeur, sont strictement interdites. Le fait pour l’Editeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.</p>
\t\t\t<h3>Article 4 Liens hypertextes et cookies</h3>
\t\t\t<h3>4.1 Etablissements de liens vers le Site</h3>
\t\t\t<p>L’Editeur peut autoriser la mise en place d’un lien hypertexte vers son Site pour tous les sites Internet de son choix, à l’exclusion notamment de ceux diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une plus large mesure, porter atteinte à la sensibilité du plus grand nombre.</p>
\t\t\t<p>Le lien doit aboutir à la page d’accueil du Site (home page) et le doit apparaître dans une nouvelle fenêtre. Les pages du Site ne doivent en aucun cas être intégrées à l’intérieur des pages d’un autre site (Frame). Sauf autorisation spécifique qui pourrait être accordée par l’Editeur, au cas par cas, un lien direct vers une page interne au Site est interdit.</p>
\t\t\t<p>La demande d’établissement de lien hypertexte à partir du Site doit être faite par courrier LR avec AR à l’adresse postale de l’Editeur mentionnée en tête des présentes.</p>
\t\t\t<p>L’Editeur se réserve le droit de refuser le lien, sans avoir à le justifier, et/ou à demander la suppression immédiate d’un lien.</p>
\t\t\t<h3>4.2 Liens vers des sites tiers depuis le Site</h3>
\t\t\t<p>Les liens hypertextes contenus sur le Site en direction d’autres sites et/ou de pages personnelles et d’une manière générale vers toutes ressources existantes sur internet ne sauraient engager la responsabilité de l’Editeur quant à leur contenu, aux liens qu’ils contiennent ou aux changements ou mises à jour qui leur sont apportés.</p>
\t\t\t<h3>4.3 Cookies</h3>
\t\t\t<p>La navigation sur le Site est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’Utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’Utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le Site, et ont également vocation à permettre diverses mesures de fréquentation. Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services.</p>
\t\t\t<h3>Article 5 – Responsabilités</h3>
\t\t\t<p>L’Editeur met tout en œuvre pour offrir aux Utilisateurs de ce Site des informations fiables et vérifiées. Cependant, malgré tous les soins apportés, le Site peut comporter des inexactitudes, des défauts de mise à jour ou des erreurs. L’Editeur ne pourra être tenu responsable des omissions, des inexactitudes et des carences dans la mise à jour de ces informations, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
\t\t\t<p>La responsabilité de l’Editeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement empêchant l’accès au Site ou à une de ses fonctionnalités. Le matériel de connexion au Site utilisé par les Utilisateurs est sous leur entière responsabilité. En tout état de cause, ce matériel doit être récent, à jour et ne doit pas contenir de virus.</p>
\t\t\t<p>Les Utilisateurs doivent prendre toutes les mesures appropriées pour protéger leur matériel et leurs propres données. Les Utilisateurs sont, par ailleurs, seuls responsables des sites et données qu’ils consultent et des téléchargements qu’ils opèrent.</p>
\t\t\t<p>L’Editeur ne pourra être tenu responsable, en cas de poursuites judiciaires, du fait du non- respect, par les Utilisateurs, des présentes mentions légales.</p>
\t\t\t<p>L’Editeur n’est pas responsable des dommages directs et/ou indirects causés aux utilisateurs, à des tiers et/ou aux équipements des Utilisateurs du fait de leur connexion ou de leur utilisation du Site. De ce fait, les Utilisateurs renoncent à toute action contre l’Editeur du Site.</p>
\t\t\t<p>L’Editeur se réserve le droit de mettre en cause la responsabilité civile et/ou pénale de l’Utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
\t\t\t<p>Si l’Editeur venait à faire l’objet d’une procédure amiable ou judiciaire en raison de l’utilisation du Site par les Utilisateurs, il pourra se retourner contre eux pour obtenir l’indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.</p>
\t\t\t<h3>Article 6 – Protection des données personnelles</h3>
\t\t\t<h3>6.1 Données collectées et traitées</h3>
\t\t\t<p>La collecte et le traitement des données des Utilisateurs du Site par l’Editeur sont réalisés conformément à l’article 5 du Règlement européen 2016/679 du 27 avril 2016 relatif à la protection des personnes physiques à l’égard du traitement des données à caractère personnel.</p>
\t\t\t<p>En outre, afin d’être licite, et ce conformément aux exigences de l’article 6 du règlement européen précité, la collecte et le traitement des données à caractère personnel ne pourront intervenir que s’ils respectent au moins l’une des conditions ci-après énumérées :</p>
\t\t\t<ul>
\t\t\t\t<li>L’Utilisateur a expressément consenti au traitement</li>
\t\t\t\t<li>Le traitement est nécessaire à la bonne exécution d’un contrat</li>
\t\t\t\t<li>Le traitement répond à une obligation légale</li>
\t\t\t\t<li>Le traitement s’explique par une nécessité liée à la sauvegarde des intérêts vitaux de la personne concernée ou d’une autre personne physique</li>
\t\t\t\t<li>Le traitement peut s’expliquer par une nécessité liée à l’exécution d’une mission d’intérêt public ou qui relève de l’exercice de l’autorité publique ou autre</li>
\t\t\t\t<li>Le traitement et la collecte des données à caractère personnel sont nécessaires aux fins des intérêts légitimes et privés poursuivis par le responsable du traitement ou par un tiers.</li>
\t\t\t</ul>
\t\t\t<p>Les données à caractère personnel collectées sur le Site sont les suivantes : nom, prenom, mail, téléphone, et autres éléments porter sur la vie personnel et quotidienne de l'utilisateur.</p>
\t\t\t<p>Ces données sont collectées lorsque l’Utilisateur effectue l’une des opérations suivantes sur le Site : une demande d’information sur la page « contact » du Site.</p>
\t\t\t<p>Le responsable du traitement conservera dans ses systèmes informatiques du Site et dans des conditions raisonnables de sécurité l’ensemble des données collectées pour une durée minimale de 3 ans (36 mois).</p>
\t\t\t<h3>6.2 Droits des Utilisateurs
\t\t\t</h3>
\t\t\t<p>En application de la réglementation applicable aux données à caractère personnel, les Utilisateurs disposent des droits suivants :</p>
\t\t\t<ul>
\t\t\t\t<li>Le droit d’accès : les Utilisateurs peuvent exercer leur droit d’accès pour connaître les données personnelles les concernant.</li>
\t\t\t\t<li>Le droit de rectification : si les données personnelles détenues sont inexactes, les Utilisateurs peuvent demander la mise à jour des informations.</li>
\t\t\t\t<li>Le droit de suppression des données : les Utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données.</li>
\t\t\t\t<li>Le droit à la limitation du traitement : les Utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux dispositions du RGPD.</li>
\t\t\t\t<li>Le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux hypothèses prévues par le RGPD.</li>
\t\t\t\t<li>Le droit à la portabilité : les Utilisateurs peuvent réclamer que l’éditeur leur remette les données personnelles qu’ils ont fournies pour les transmettre à un autre Editeur.</li>
\t\t\t</ul>
\t\t\t<p>Les Utilisateurs peuvent exercer ces droits en contactant l’Editeur du Site à l’adresse mail ou postale (courrier LR avec AR) mentionnées en tête des présentes mentions légales. Toute demande doit être accompagnée de la photocopie d’un titre d’identité en cours de validité signé et faire mention de l’adresse à laquelle l’Editeur pourra contacter le demandeur.</p>
\t\t\t<!--<p>Il est porté à la connaissance de la Famille que dans le cadre de la protection du consommateur, celle-ci a la possibilité de s’inscrire sur la liste d’opposition au démarchage téléphonique, conformément à l’article L 223-2 du Code de la consommation, sur le site bloctel.gouv.fr. ou par courrier à Société Worldline – Service Bloctel, CS 61311, 41013 Blois Cedex.</p>-->
\t\t\t<p>
\t\t\t\t<strong>Article 7 – Contact</strong>
\t\t\t\tPour toute question, information concernant les prestations de l’Editeur, ou concernant le Site- lui-même, les Utilisateurs peuvent laisser un message à l’adresse mail renseignée ci-dessus ou par courrier recommandé avec AR à l’adresse postale également renseignée ci-dessus.</p>
\t\t\t<h3>Article 8 – Droit applicable – Litiges</h3>
\t\t\t<p>Les présentes mentions légales sont soumises au droit français.</p>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/mentions_legales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 10,  107 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Waou - Mentions Légales
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('journalier') }}
{% endblock %}
{% block body %}
\t<section class=\"section-legal\">
\t\t<h1 class=\"head-title\">Mentions Légales :</h1>
\t\t<div class=\"container-txt\">
\t\t\t<p>Waou est une marque déposée et exploitée par la société WAOU care SAS.</p>
\t\t\t<p>
\t\t\t\t<strong>Copyright WAOU care SAS, tous droits d’auteur des textes et œuvres réservés.</strong>
\t\t\t</p>
\t\t\t<p>Conformément aux dispositions des articles 6 III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique (LCEN), il est porté à la connaissance des utilisateurs et des visiteurs du site WAOU accessible à l’adresse suivante https://www.waou.fr les présentes mentions légales.</p>
\t\t\t<p>L’accès et l’utilisation du site sont soumis aux Mentions légales détaillées ci-après ainsi qu’aux lois et/ou règlements applicables.</p>
\t\t\t<p>La connexion, l’utilisation et l’accès à ce site impliquent l’acceptation intégrale et sans réserve de l’internaute de toutes les stipulations des présentes Mentions légales. Ces dernières sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du Site sont donc invités à les consulter de manière régulière.</p>
\t\t\t<h3>Article 1 – Informations légales</h3>
\t\t\t<p>En vertu de l’article 6 de la Loi LCEN visée ci-dessus, il est précisé ci-dessous l’identité des différents intervenant dans le cadre de sa réalisation et de son suivi.</p>
\t\t\t<p>
\t\t\t\t<strong>Editeur du Site :</strong>
\t\t\t\tWaou, Société par Actions Simplifiée au capital de 2 500€
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<strong>Siège social :</strong>
\t\t\t\t9, chemin du cret – 42800 Saint Joseph
\t\t\t\t<strong>N° Siren :</strong>
\t\t\t\t818 146 573 R.C.S LYON
\t\t\t\t<strong>TVA Intracommunautaire :</strong>
\t\t\t\tTVA FR37818146573
\t\t\t\t<strong>Code NAF :</strong>
\t\t\t\t6420Z
\t\t\t\t<strong>Contact :</strong>
\t\t\t\twaou@waou.fr</p>
\t\t\t<p>
\t\t\t\t<strong>Directeur de la publication :</strong>
\t\t\t\tMonsieur TRAEN Philippe
\t\t\t\t<strong>Téléphone :</strong>
\t\t\t\t+33 (0)6 10 86 61 27
\t\t\t\t<strong>Adresse e-mail :</strong>
\t\t\t\twaou@waou.fr</p>
\t\t\t<p>Sont considérés comme des utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le Site, ci-après les « Utilisateurs ».</p>
\t\t\t<h3>Article 2 – Accès au Site et gestion</h3>
\t\t\t<p>Le Site est accessible à tout moment sauf en cas de force majeure, interruption programmée ou non et pouvant découler d’une nécessité de maintenance.</p>
\t\t\t<p>En cas de modification, interruption ou suspension des services, le Site ne saurait être tenu responsable.</p>
\t\t\t<p>L’accès au Site et son utilisation sont réservés à un usage strictement personnel. Les utilisateurs s’engagent à ne pas utiliser le site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaire ou pour toute forme de sollicitation commerciale.</p>
\t\t\t<p>Pour la bonne gestion du Site, l’Editeur pourra à tout moment :</p>
\t\t\t<ul>
\t\t\t\t<li>Suspendre, interrompre ou limiter l’accès à tout ou partie du Site, réserver l’accès au Site ou à certaines parties du Site à une catégorie d’internautes déterminée</li>
\t\t\t\t<li>Supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales et internationales</li>
\t\t\t\t<li>Suspendre le Site afin de procéder à des mises à jour</li>
\t\t\t</ul>
\t\t\t<h3>Article 3 – Droits de propriété intellectuelle</h3>
\t\t\t<p>Toutes les marques, logos, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce Site et plus généralement tous les éléments reproduits ou utilisés sur le Site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.</p>
\t\t\t<p>Ils sont la propriété quasimenent pleine de l’Editeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l’accord préalable et écrit de l’Editeur, sont strictement interdites. Le fait pour l’Editeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.</p>
\t\t\t<h3>Article 4 Liens hypertextes et cookies</h3>
\t\t\t<h3>4.1 Etablissements de liens vers le Site</h3>
\t\t\t<p>L’Editeur peut autoriser la mise en place d’un lien hypertexte vers son Site pour tous les sites Internet de son choix, à l’exclusion notamment de ceux diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une plus large mesure, porter atteinte à la sensibilité du plus grand nombre.</p>
\t\t\t<p>Le lien doit aboutir à la page d’accueil du Site (home page) et le doit apparaître dans une nouvelle fenêtre. Les pages du Site ne doivent en aucun cas être intégrées à l’intérieur des pages d’un autre site (Frame). Sauf autorisation spécifique qui pourrait être accordée par l’Editeur, au cas par cas, un lien direct vers une page interne au Site est interdit.</p>
\t\t\t<p>La demande d’établissement de lien hypertexte à partir du Site doit être faite par courrier LR avec AR à l’adresse postale de l’Editeur mentionnée en tête des présentes.</p>
\t\t\t<p>L’Editeur se réserve le droit de refuser le lien, sans avoir à le justifier, et/ou à demander la suppression immédiate d’un lien.</p>
\t\t\t<h3>4.2 Liens vers des sites tiers depuis le Site</h3>
\t\t\t<p>Les liens hypertextes contenus sur le Site en direction d’autres sites et/ou de pages personnelles et d’une manière générale vers toutes ressources existantes sur internet ne sauraient engager la responsabilité de l’Editeur quant à leur contenu, aux liens qu’ils contiennent ou aux changements ou mises à jour qui leur sont apportés.</p>
\t\t\t<h3>4.3 Cookies</h3>
\t\t\t<p>La navigation sur le Site est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’Utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’Utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le Site, et ont également vocation à permettre diverses mesures de fréquentation. Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services.</p>
\t\t\t<h3>Article 5 – Responsabilités</h3>
\t\t\t<p>L’Editeur met tout en œuvre pour offrir aux Utilisateurs de ce Site des informations fiables et vérifiées. Cependant, malgré tous les soins apportés, le Site peut comporter des inexactitudes, des défauts de mise à jour ou des erreurs. L’Editeur ne pourra être tenu responsable des omissions, des inexactitudes et des carences dans la mise à jour de ces informations, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
\t\t\t<p>La responsabilité de l’Editeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement empêchant l’accès au Site ou à une de ses fonctionnalités. Le matériel de connexion au Site utilisé par les Utilisateurs est sous leur entière responsabilité. En tout état de cause, ce matériel doit être récent, à jour et ne doit pas contenir de virus.</p>
\t\t\t<p>Les Utilisateurs doivent prendre toutes les mesures appropriées pour protéger leur matériel et leurs propres données. Les Utilisateurs sont, par ailleurs, seuls responsables des sites et données qu’ils consultent et des téléchargements qu’ils opèrent.</p>
\t\t\t<p>L’Editeur ne pourra être tenu responsable, en cas de poursuites judiciaires, du fait du non- respect, par les Utilisateurs, des présentes mentions légales.</p>
\t\t\t<p>L’Editeur n’est pas responsable des dommages directs et/ou indirects causés aux utilisateurs, à des tiers et/ou aux équipements des Utilisateurs du fait de leur connexion ou de leur utilisation du Site. De ce fait, les Utilisateurs renoncent à toute action contre l’Editeur du Site.</p>
\t\t\t<p>L’Editeur se réserve le droit de mettre en cause la responsabilité civile et/ou pénale de l’Utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
\t\t\t<p>Si l’Editeur venait à faire l’objet d’une procédure amiable ou judiciaire en raison de l’utilisation du Site par les Utilisateurs, il pourra se retourner contre eux pour obtenir l’indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.</p>
\t\t\t<h3>Article 6 – Protection des données personnelles</h3>
\t\t\t<h3>6.1 Données collectées et traitées</h3>
\t\t\t<p>La collecte et le traitement des données des Utilisateurs du Site par l’Editeur sont réalisés conformément à l’article 5 du Règlement européen 2016/679 du 27 avril 2016 relatif à la protection des personnes physiques à l’égard du traitement des données à caractère personnel.</p>
\t\t\t<p>En outre, afin d’être licite, et ce conformément aux exigences de l’article 6 du règlement européen précité, la collecte et le traitement des données à caractère personnel ne pourront intervenir que s’ils respectent au moins l’une des conditions ci-après énumérées :</p>
\t\t\t<ul>
\t\t\t\t<li>L’Utilisateur a expressément consenti au traitement</li>
\t\t\t\t<li>Le traitement est nécessaire à la bonne exécution d’un contrat</li>
\t\t\t\t<li>Le traitement répond à une obligation légale</li>
\t\t\t\t<li>Le traitement s’explique par une nécessité liée à la sauvegarde des intérêts vitaux de la personne concernée ou d’une autre personne physique</li>
\t\t\t\t<li>Le traitement peut s’expliquer par une nécessité liée à l’exécution d’une mission d’intérêt public ou qui relève de l’exercice de l’autorité publique ou autre</li>
\t\t\t\t<li>Le traitement et la collecte des données à caractère personnel sont nécessaires aux fins des intérêts légitimes et privés poursuivis par le responsable du traitement ou par un tiers.</li>
\t\t\t</ul>
\t\t\t<p>Les données à caractère personnel collectées sur le Site sont les suivantes : nom, prenom, mail, téléphone, et autres éléments porter sur la vie personnel et quotidienne de l'utilisateur.</p>
\t\t\t<p>Ces données sont collectées lorsque l’Utilisateur effectue l’une des opérations suivantes sur le Site : une demande d’information sur la page « contact » du Site.</p>
\t\t\t<p>Le responsable du traitement conservera dans ses systèmes informatiques du Site et dans des conditions raisonnables de sécurité l’ensemble des données collectées pour une durée minimale de 3 ans (36 mois).</p>
\t\t\t<h3>6.2 Droits des Utilisateurs
\t\t\t</h3>
\t\t\t<p>En application de la réglementation applicable aux données à caractère personnel, les Utilisateurs disposent des droits suivants :</p>
\t\t\t<ul>
\t\t\t\t<li>Le droit d’accès : les Utilisateurs peuvent exercer leur droit d’accès pour connaître les données personnelles les concernant.</li>
\t\t\t\t<li>Le droit de rectification : si les données personnelles détenues sont inexactes, les Utilisateurs peuvent demander la mise à jour des informations.</li>
\t\t\t\t<li>Le droit de suppression des données : les Utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données.</li>
\t\t\t\t<li>Le droit à la limitation du traitement : les Utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux dispositions du RGPD.</li>
\t\t\t\t<li>Le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux hypothèses prévues par le RGPD.</li>
\t\t\t\t<li>Le droit à la portabilité : les Utilisateurs peuvent réclamer que l’éditeur leur remette les données personnelles qu’ils ont fournies pour les transmettre à un autre Editeur.</li>
\t\t\t</ul>
\t\t\t<p>Les Utilisateurs peuvent exercer ces droits en contactant l’Editeur du Site à l’adresse mail ou postale (courrier LR avec AR) mentionnées en tête des présentes mentions légales. Toute demande doit être accompagnée de la photocopie d’un titre d’identité en cours de validité signé et faire mention de l’adresse à laquelle l’Editeur pourra contacter le demandeur.</p>
\t\t\t<!--<p>Il est porté à la connaissance de la Famille que dans le cadre de la protection du consommateur, celle-ci a la possibilité de s’inscrire sur la liste d’opposition au démarchage téléphonique, conformément à l’article L 223-2 du Code de la consommation, sur le site bloctel.gouv.fr. ou par courrier à Société Worldline – Service Bloctel, CS 61311, 41013 Blois Cedex.</p>-->
\t\t\t<p>
\t\t\t\t<strong>Article 7 – Contact</strong>
\t\t\t\tPour toute question, information concernant les prestations de l’Editeur, ou concernant le Site- lui-même, les Utilisateurs peuvent laisser un message à l’adresse mail renseignée ci-dessus ou par courrier recommandé avec AR à l’adresse postale également renseignée ci-dessus.</p>
\t\t\t<h3>Article 8 – Droit applicable – Litiges</h3>
\t\t\t<p>Les présentes mentions légales sont soumises au droit français.</p>
\t\t</div>
\t</section>
{% endblock %}
", "pages/mentions_legales.html.twig", "/Users/willyampiraud/Documents/Waou29janv/templates/pages/mentions_legales.html.twig");
    }
}
