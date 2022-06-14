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

/* sortie/sortie.html.twig */
class __TwigTemplate_bf162aadacea18b96f113273a2fa897c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Sortie</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Scss/Sortie.css"), "html", null, true);
        echo "\"/>
<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
<!-- Custom fonts for this template-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/sb_bootstrap/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/sb_bootstrap/css/sb-admin-2.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
<script id=\"applicationScript\" type=\"text/javascript\" src=\"Sscript/Sortie.js\"></script>
</head>
<body>
<div id=\"Sortie\">
\t<img id=\"Calque_1_h\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/Calque_1_h.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/Calque_1_h.png 1x, Simage/Calque_1_h@2x.png 2x"), "html", null, true);
        echo "\">
\t\t
\t<div id=\"Page_sortie_w\">
\t\t<div id=\"menu_x\">
\t\t\t<svg class=\"Rectangle_1_z\">
\t\t\t\t<linearGradient id=\"Rectangle_1_z\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_z\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_baa\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_baa\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/logo4-b_baa.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/logo4-b_baa.png 1x, Simage/logo4-b_baa@2x.png 2x"), "html", null, true);
        echo "\">

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_baa\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VENDEUR")) {
            // line 45
            echo "\t\t\t<a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_liste");
            echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_baa\">
\t\t\t\t<span>Gestion Vente</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t";
        }
        // line 51
        echo "\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTION_STOCK")) {
            // line 52
            echo "\t\t\t<a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
            echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_baa\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_liste");
            echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_baa\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        // line 64
        echo "\t\t\t<svg class=\"Rectangle_Profil_\">
\t\t\t\t<rect id=\"Rectangle_Profil_\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_baa\">
\t\t\t\t";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "prenom", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 72
        echo "\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_bab\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_bab\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>

\t\t\t";
        // line 79
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t<div id=\"Log_out__bac\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>

\t\t</div>
\t\t<div id=\"Sortie_body_bad\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_bae\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_baf\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/Screenshot_2022-05-31_132950_baf.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/Screenshot_2022-05-31_132950_baf.png 1x, Simage/Screenshot_2022-05-31_132950_baf@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_bag\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/Clip_bag.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/Clip_bag.png 1x, Simage/Clip_bag@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_bah\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_baj\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_baj\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_baj\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTION_STOCK")) {
            // line 104
            echo "\t\t\t\t<svg class=\"Rectangle_entree_bak\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_entree_bak\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_bal\">
\t\t\t\t\t<svg class=\"Forme_entree_bam\" viewBox=\"352.999 3791.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_bam\" d=\"M 352.9988098144531 3842.0712890625 C 352.9988098144531 3839.624267578125 352.9988098144531 3796.67578125 352.9988098144531 3794.987548828125 C 352.9988098144531 3792.79833984375 355.4229125976562 3791.16943359375 357.8183898925781 3792.45068359375 C 359.7384948730469 3793.475830078125 398.1080932617188 3814.1748046875 401.3829040527344 3815.9453125 C 403.53369140625 3817.108154296875 403.4974060058594 3819.881591796875 401.3829040527344 3821.045654296875 C 399.0256042480469 3822.343994140625 360.5094909667969 3843.148681640625 357.72021484375 3844.59375 C 355.6777954101562 3845.654296875 352.9988098144531 3844.48291015625 352.9988098144531 3842.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_ban\" viewBox=\"352.999 3791.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_ban\" d=\"M 352.9988098144531 3842.0712890625 C 352.9988098144531 3839.624267578125 352.9988098144531 3796.67578125 352.9988098144531 3794.987548828125 C 352.9988098144531 3792.79833984375 355.4229125976562 3791.16943359375 357.8183898925781 3792.45068359375 C 359.7384948730469 3793.475830078125 398.1080932617188 3814.1748046875 401.3829040527344 3815.9453125 C 403.53369140625 3817.108154296875 403.4974060058594 3819.881591796875 401.3829040527344 3821.045654296875 C 399.0256042480469 3822.343994140625 360.5094909667969 3843.148681640625 357.72021484375 3844.59375 C 355.6777954101562 3845.654296875 352.9988098144531 3844.48291015625 352.9988098144531 3842.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entree_liste");
            echo "\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Entree_bao\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
        }
        // line 125
        echo "\t\t\t\t<img id=\"img_entree_bap\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/img_entree_bap.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/img_entree_bap.png 1x, Simage/img_entree_bap@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t";
        // line 126
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTION_STOCK")) {
            echo "\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_baq\">
\t\t\t\t\t<rect id=\"Rectangle_sortie_baq\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_bar\">
\t\t\t\t\t<svg class=\"Forme_sortie_bas\" viewBox=\"352.999 4095.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_bas\" d=\"M 352.9988098144531 4146.0712890625 C 352.9988098144531 4143.62451171875 352.9988098144531 4100.67578125 352.9988098144531 4098.9873046875 C 352.9988098144531 4096.79833984375 355.4229125976562 4095.169921875 357.8183898925781 4096.4501953125 C 359.7384948730469 4097.4755859375 398.1080932617188 4118.1748046875 401.3829040527344 4119.9453125 C 403.53369140625 4121.1083984375 403.4974060058594 4123.88134765625 401.3829040527344 4125.04541015625 C 399.0256042480469 4126.34375 360.5094909667969 4147.1484375 357.72021484375 4148.59423828125 C 355.6777954101562 4149.65380859375 352.9988098144531 4148.48291015625 352.9988098144531 4146.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_bat\" viewBox=\"352.999 4095.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_bat\" d=\"M 352.9988098144531 4146.0712890625 C 352.9988098144531 4143.62451171875 352.9988098144531 4100.67578125 352.9988098144531 4098.9873046875 C 352.9988098144531 4096.79833984375 355.4229125976562 4095.169921875 357.8183898925781 4096.4501953125 C 359.7384948730469 4097.4755859375 398.1080932617188 4118.1748046875 401.3829040527344 4119.9453125 C 403.53369140625 4121.1083984375 403.4974060058594 4123.88134765625 401.3829040527344 4125.04541015625 C 399.0256042480469 4126.34375 360.5094909667969 4147.1484375 357.72021484375 4148.59423828125 C 355.6777954101562 4149.65380859375 352.9988098144531 4148.48291015625 352.9988098144531 4146.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_liste");
            echo "\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Sortie_bau\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
        }
        // line 148
        echo "\t\t\t\t<img id=\"imd_sortie_bav\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/imd_sortie_bav.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/imd_sortie_bav.png 1x, Simage/imd_sortie_bav@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_baw\">
\t\t\t\t<svg class=\"Rectangle_User_info_bay\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_bay\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_bay\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_baz\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__ba\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__bba\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__bba\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__bba\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_ba\">
\t\t\t\t\t<rect id=\"Rectangle_3_ba\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_ba\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Produits_ba\">
\t\t\t\t\t<span>Gestion des Ventes</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_ba\" viewBox=\"1307.998 3458.994 47.003 45.004\">
\t\t\t\t\t<path id=\"Forme_1_ba\" d=\"M 1354.325805664062 3502.05810546875 C 1353.137329101562 3504.1005859375 1350.773193359375 3504.613525390625 1349.053100585938 3503.197509765625 C 1349.053100585938 3503.197509765625 1333.47705078125 3490.3984375 1333.47705078125 3490.3984375 C 1332.374389648438 3489.495361328125 1331.8037109375 3488.02197265625 1331.846069335938 3486.541748046875 C 1329.839721679688 3489.096435546875 1327.204223632812 3490.812744140625 1324.251953125 3491.450439453125 C 1320.625854492188 3492.235595703125 1316.963745117188 3491.296142578125 1313.941040039062 3488.8125 C 1310.916748046875 3486.32861328125 1308.887084960938 3482.593017578125 1308.226318359375 3478.289306640625 C 1307.565185546875 3473.983642578125 1308.353881835938 3469.63330078125 1310.44775390625 3466.040283203125 C 1314.7724609375 3458.622314453125 1323.37451171875 3456.762451171875 1329.62451171875 3461.89599609375 C 1335.297119140625 3466.559814453125 1337.110107421875 3475.40869140625 1334.161376953125 3482.551513671875 C 1335.3134765625 3481.976318359375 1336.679809570312 3482.089111328125 1337.7880859375 3482.998291015625 C 1337.7880859375 3482.998291015625 1353.368530273438 3495.797119140625 1353.368530273438 3495.797119140625 C 1355.088623046875 3497.21337890625 1355.518676757812 3500.015869140625 1354.325805664062 3502.05810546875 Z M 1331.23388671875 3473.311279296875 C 1330.774169921875 3470.310791015625 1329.35986328125 3467.70556640625 1327.251342773438 3465.973876953125 C 1322.895385742188 3462.39208984375 1316.89501953125 3463.68701171875 1313.876586914062 3468.859619140625 C 1310.862060546875 3474.038330078125 1311.9541015625 3481.160888671875 1316.31103515625 3484.738037109375 C 1320.667358398438 3488.31982421875 1326.666748046875 3487.025146484375 1329.684448242188 3481.85107421875 C 1331.144287109375 3479.346923828125 1331.694702148438 3476.3134765625 1331.23388671875 3473.311279296875 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_ba\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/img_gestion_produit_ba.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/img_gestion_produit_ba.png 1x, Simage/img_gestion_produit_ba@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"table_bbv\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des entrees</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Quantite</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 205, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 206
            echo "\t\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 207), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "produit", [], "any", false, false, false, 208), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "qteS", [], "any", false, false, false, 209), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 210
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "dateS", [], "any", false, false, false, 210), "d/m/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"Formulaire_Produit_bck\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_bcl\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_bcl\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_bcn\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_bcn\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_bcn\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Produit_bco\">
\t\t\t\t\t<span>Formulaire vente</span>
\t\t\t\t</div><br><br>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t";
        // line 241
        if (array_key_exists("error_message", $context)) {
            // line 242
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 242, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), 'form');
        echo "
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_bc\">
\t\t\t<svg class=\"Rectangle_footer_bc\">
\t\t\t\t<rect id=\"Rectangle_footer_bc\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_bc\" viewBox=\"970.087 4217.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_bc\" d=\"M 1068.492431640625 4217.080078125 C 1068.492431640625 4217.080078125 988.50048828125 4217.080078125 988.50048828125 4217.080078125 C 978.3338012695312 4217.080078125 970.08740234375 4223.7568359375 970.08740234375 4232.0244140625 C 970.08740234375 4232.0244140625 970.08740234375 4296.974609375 970.08740234375 4296.974609375 C 970.08740234375 4305.2294921875 978.3338012695312 4311.9189453125 988.50048828125 4311.9189453125 C 988.50048828125 4311.9189453125 1068.492431640625 4311.9189453125 1068.492431640625 4311.9189453125 C 1078.666137695312 4311.9189453125 1086.91259765625 4305.2294921875 1086.91259765625 4296.974609375 C 1086.91259765625 4296.974609375 1086.91259765625 4232.0244140625 1086.91259765625 4232.0244140625 C 1086.91259765625 4223.7568359375 1078.666137695312 4217.080078125 1068.492431640625 4217.080078125 Z M 1026.7373046875 4226.9765625 L 1028.017700195312 4243.3359375 L 1023.366882324219 4244.42578125 L 1021.1298828125 4226.53759765625 L 1026.7373046875 4226.9765625 Z M 1046.7080078125 4301.03271484375 C 1046.7080078125 4301.03271484375 1026.30517578125 4300.6953125 1026.30517578125 4300.6953125 C 992.6038818359375 4271.43310546875 998.0960083007812 4237.3984375 998.0960083007812 4237.3984375 L 1013.446716308594 4226.6875 L 1016.470275878906 4226.6875 L 1018.930908203125 4245.40283203125 L 1012.212890625 4249.0234375 L 1029.391357421875 4285.56298828125 L 1036.125122070312 4283.8212890625 L 1049.038208007812 4299.4423828125 L 1046.7080078125 4301.03271484375 Z M 1053.188354492188 4297.55126953125 L 1039.527221679688 4282.1806640625 L 1044.702514648438 4280.376953125 L 1056.613159179688 4294.77001953125 L 1053.188354492188 4297.55126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_bc\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/whatsapp_bc.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/whatsapp_bc.png 1x, Simage/whatsapp_bc@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_bc\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/messenger_bc.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/messenger_bc.png 1x, Simage/messenger_bc@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_bc\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/insta_bc.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/insta_bc.png 1x, Simage/insta_bc@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_bc\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/youtube_bc.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/youtube_bc.png 1x, Simage/youtube_bc@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_bc\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_bc\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/copyright_bc.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Simage/copyright_bc.png 1x, Simage/copyright_bc@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sortie/sortie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 273,  447 => 268,  440 => 266,  433 => 264,  426 => 262,  404 => 244,  398 => 242,  396 => 241,  366 => 213,  357 => 210,  353 => 209,  349 => 208,  345 => 207,  342 => 206,  338 => 205,  315 => 187,  270 => 148,  261 => 142,  242 => 126,  235 => 125,  226 => 119,  209 => 104,  207 => 103,  189 => 90,  182 => 88,  169 => 79,  161 => 72,  153 => 70,  151 => 69,  144 => 64,  135 => 58,  125 => 52,  122 => 51,  112 => 45,  110 => 44,  102 => 39,  95 => 37,  75 => 22,  67 => 17,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Sortie</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/Scss/Sortie.css') }}\"/>
<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
<!-- Custom fonts for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/css/sb-admin-2.min.css') }}\"rel=\"stylesheet\">
<script id=\"applicationScript\" type=\"text/javascript\" src=\"Sscript/Sortie.js\"></script>
</head>
<body>
<div id=\"Sortie\">
\t<img id=\"Calque_1_h\" src=\"{{ asset('Prototype/Simage/Calque_1_h.png') }}\" srcset=\"{{ asset('Prototype/Simage/Calque_1_h.png 1x, Simage/Calque_1_h@2x.png 2x') }}\">
\t\t
\t<div id=\"Page_sortie_w\">
\t\t<div id=\"menu_x\">
\t\t\t<svg class=\"Rectangle_1_z\">
\t\t\t\t<linearGradient id=\"Rectangle_1_z\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_z\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_baa\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_baa\" src=\"{{ asset('Prototype/Simage/logo4-b_baa.png') }}\" srcset=\"{{ asset('Prototype/Simage/logo4-b_baa.png 1x, Simage/logo4-b_baa@2x.png 2x') }}\">

\t\t\t<a class=\"collapse-item\" href=\"{{ path('accueil')}}\">\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_baa\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t{% if is_granted('ROLE_VENDEUR') %}
\t\t\t<a class=\"collapse-item\" href=\"{{ path('sortie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_baa\">
\t\t\t\t<span>Gestion Vente</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t{% endif %}
\t\t{% if is_granted('ROLE_GESTION_STOCK') %}
\t\t\t<a class=\"collapse-item\" href=\"{{ path('produit_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_baa\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"{{ path('categorie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_baa\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t{% endif %}
\t\t\t<svg class=\"Rectangle_Profil_\">
\t\t\t\t<rect id=\"Rectangle_Profil_\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_baa\">
\t\t\t\t{% if app.user %}
\t\t\t\t<span>{{ app.user.nom }}<br>{{ app.user.prenom }}</span>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_bab\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_bab\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>

\t\t\t{# button Logout #}
\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t<div id=\"Log_out__bac\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>

\t\t</div>
\t\t<div id=\"Sortie_body_bad\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_bae\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_baf\" src=\"{{ asset('Prototype/Simage/Screenshot_2022-05-31_132950_baf.png') }}\" srcset=\"{{ asset('Prototype/Simage/Screenshot_2022-05-31_132950_baf.png 1x, Simage/Screenshot_2022-05-31_132950_baf@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_bag\" src=\"{{ asset('Prototype/Simage/Clip_bag.png') }}\" srcset=\"{{ asset('Prototype/Simage/Clip_bag.png 1x, Simage/Clip_bag@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_bah\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_baj\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_baj\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_baj\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t{% if is_granted('ROLE_GESTION_STOCK') %}
\t\t\t\t<svg class=\"Rectangle_entree_bak\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_entree_bak\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_bal\">
\t\t\t\t\t<svg class=\"Forme_entree_bam\" viewBox=\"352.999 3791.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_bam\" d=\"M 352.9988098144531 3842.0712890625 C 352.9988098144531 3839.624267578125 352.9988098144531 3796.67578125 352.9988098144531 3794.987548828125 C 352.9988098144531 3792.79833984375 355.4229125976562 3791.16943359375 357.8183898925781 3792.45068359375 C 359.7384948730469 3793.475830078125 398.1080932617188 3814.1748046875 401.3829040527344 3815.9453125 C 403.53369140625 3817.108154296875 403.4974060058594 3819.881591796875 401.3829040527344 3821.045654296875 C 399.0256042480469 3822.343994140625 360.5094909667969 3843.148681640625 357.72021484375 3844.59375 C 355.6777954101562 3845.654296875 352.9988098144531 3844.48291015625 352.9988098144531 3842.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_ban\" viewBox=\"352.999 3791.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_ban\" d=\"M 352.9988098144531 3842.0712890625 C 352.9988098144531 3839.624267578125 352.9988098144531 3796.67578125 352.9988098144531 3794.987548828125 C 352.9988098144531 3792.79833984375 355.4229125976562 3791.16943359375 357.8183898925781 3792.45068359375 C 359.7384948730469 3793.475830078125 398.1080932617188 3814.1748046875 401.3829040527344 3815.9453125 C 403.53369140625 3817.108154296875 403.4974060058594 3819.881591796875 401.3829040527344 3821.045654296875 C 399.0256042480469 3822.343994140625 360.5094909667969 3843.148681640625 357.72021484375 3844.59375 C 355.6777954101562 3845.654296875 352.9988098144531 3844.48291015625 352.9988098144531 3842.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('entree_liste')}}\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Entree_bao\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t\t<img id=\"img_entree_bap\" src=\"{{ asset('Prototype/Simage/img_entree_bap.png') }}\" srcset=\"{{ asset('Prototype/Simage/img_entree_bap.png 1x, Simage/img_entree_bap@2x.png 2x') }}\">
\t\t\t{% if is_granted('ROLE_GESTION_STOCK') %}\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_baq\">
\t\t\t\t\t<rect id=\"Rectangle_sortie_baq\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_bar\">
\t\t\t\t\t<svg class=\"Forme_sortie_bas\" viewBox=\"352.999 4095.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_bas\" d=\"M 352.9988098144531 4146.0712890625 C 352.9988098144531 4143.62451171875 352.9988098144531 4100.67578125 352.9988098144531 4098.9873046875 C 352.9988098144531 4096.79833984375 355.4229125976562 4095.169921875 357.8183898925781 4096.4501953125 C 359.7384948730469 4097.4755859375 398.1080932617188 4118.1748046875 401.3829040527344 4119.9453125 C 403.53369140625 4121.1083984375 403.4974060058594 4123.88134765625 401.3829040527344 4125.04541015625 C 399.0256042480469 4126.34375 360.5094909667969 4147.1484375 357.72021484375 4148.59423828125 C 355.6777954101562 4149.65380859375 352.9988098144531 4148.48291015625 352.9988098144531 4146.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_bat\" viewBox=\"352.999 4095.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_bat\" d=\"M 352.9988098144531 4146.0712890625 C 352.9988098144531 4143.62451171875 352.9988098144531 4100.67578125 352.9988098144531 4098.9873046875 C 352.9988098144531 4096.79833984375 355.4229125976562 4095.169921875 357.8183898925781 4096.4501953125 C 359.7384948730469 4097.4755859375 398.1080932617188 4118.1748046875 401.3829040527344 4119.9453125 C 403.53369140625 4121.1083984375 403.4974060058594 4123.88134765625 401.3829040527344 4125.04541015625 C 399.0256042480469 4126.34375 360.5094909667969 4147.1484375 357.72021484375 4148.59423828125 C 355.6777954101562 4149.65380859375 352.9988098144531 4148.48291015625 352.9988098144531 4146.0712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('sortie_liste')}}\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Sortie_bau\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t\t<img id=\"imd_sortie_bav\" src=\"{{ asset('Prototype/Simage/imd_sortie_bav.png') }}\" srcset=\"{{ asset('Prototype/Simage/imd_sortie_bav.png 1x, Simage/imd_sortie_bav@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_baw\">
\t\t\t\t<svg class=\"Rectangle_User_info_bay\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_bay\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_bay\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_baz\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__ba\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__bba\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__bba\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__bba\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_ba\">
\t\t\t\t\t<rect id=\"Rectangle_3_ba\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_ba\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Produits_ba\">
\t\t\t\t\t<span>Gestion des Ventes</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_ba\" viewBox=\"1307.998 3458.994 47.003 45.004\">
\t\t\t\t\t<path id=\"Forme_1_ba\" d=\"M 1354.325805664062 3502.05810546875 C 1353.137329101562 3504.1005859375 1350.773193359375 3504.613525390625 1349.053100585938 3503.197509765625 C 1349.053100585938 3503.197509765625 1333.47705078125 3490.3984375 1333.47705078125 3490.3984375 C 1332.374389648438 3489.495361328125 1331.8037109375 3488.02197265625 1331.846069335938 3486.541748046875 C 1329.839721679688 3489.096435546875 1327.204223632812 3490.812744140625 1324.251953125 3491.450439453125 C 1320.625854492188 3492.235595703125 1316.963745117188 3491.296142578125 1313.941040039062 3488.8125 C 1310.916748046875 3486.32861328125 1308.887084960938 3482.593017578125 1308.226318359375 3478.289306640625 C 1307.565185546875 3473.983642578125 1308.353881835938 3469.63330078125 1310.44775390625 3466.040283203125 C 1314.7724609375 3458.622314453125 1323.37451171875 3456.762451171875 1329.62451171875 3461.89599609375 C 1335.297119140625 3466.559814453125 1337.110107421875 3475.40869140625 1334.161376953125 3482.551513671875 C 1335.3134765625 3481.976318359375 1336.679809570312 3482.089111328125 1337.7880859375 3482.998291015625 C 1337.7880859375 3482.998291015625 1353.368530273438 3495.797119140625 1353.368530273438 3495.797119140625 C 1355.088623046875 3497.21337890625 1355.518676757812 3500.015869140625 1354.325805664062 3502.05810546875 Z M 1331.23388671875 3473.311279296875 C 1330.774169921875 3470.310791015625 1329.35986328125 3467.70556640625 1327.251342773438 3465.973876953125 C 1322.895385742188 3462.39208984375 1316.89501953125 3463.68701171875 1313.876586914062 3468.859619140625 C 1310.862060546875 3474.038330078125 1311.9541015625 3481.160888671875 1316.31103515625 3484.738037109375 C 1320.667358398438 3488.31982421875 1326.666748046875 3487.025146484375 1329.684448242188 3481.85107421875 C 1331.144287109375 3479.346923828125 1331.694702148438 3476.3134765625 1331.23388671875 3473.311279296875 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_ba\" src=\"{{ asset('Prototype/Simage/img_gestion_produit_ba.png') }}\" srcset=\"{{ asset('Prototype/Simage/img_gestion_produit_ba.png 1x, Simage/img_gestion_produit_ba@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"table_bbv\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des entrees</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Quantite</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t{% for s in sorties %}
\t\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ s.id }}</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ s.produit }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ s.qteS }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ s.dateS|date('d/m/y') }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"Formulaire_Produit_bck\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_bcl\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_bcl\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_bcn\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_bcn\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_bcn\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Produit_bco\">
\t\t\t\t\t<span>Formulaire vente</span>
\t\t\t\t</div><br><br>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t{% if error_message is defined %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error_message }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{{ form(form) }}
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_bc\">
\t\t\t<svg class=\"Rectangle_footer_bc\">
\t\t\t\t<rect id=\"Rectangle_footer_bc\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_bc\" viewBox=\"970.087 4217.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_bc\" d=\"M 1068.492431640625 4217.080078125 C 1068.492431640625 4217.080078125 988.50048828125 4217.080078125 988.50048828125 4217.080078125 C 978.3338012695312 4217.080078125 970.08740234375 4223.7568359375 970.08740234375 4232.0244140625 C 970.08740234375 4232.0244140625 970.08740234375 4296.974609375 970.08740234375 4296.974609375 C 970.08740234375 4305.2294921875 978.3338012695312 4311.9189453125 988.50048828125 4311.9189453125 C 988.50048828125 4311.9189453125 1068.492431640625 4311.9189453125 1068.492431640625 4311.9189453125 C 1078.666137695312 4311.9189453125 1086.91259765625 4305.2294921875 1086.91259765625 4296.974609375 C 1086.91259765625 4296.974609375 1086.91259765625 4232.0244140625 1086.91259765625 4232.0244140625 C 1086.91259765625 4223.7568359375 1078.666137695312 4217.080078125 1068.492431640625 4217.080078125 Z M 1026.7373046875 4226.9765625 L 1028.017700195312 4243.3359375 L 1023.366882324219 4244.42578125 L 1021.1298828125 4226.53759765625 L 1026.7373046875 4226.9765625 Z M 1046.7080078125 4301.03271484375 C 1046.7080078125 4301.03271484375 1026.30517578125 4300.6953125 1026.30517578125 4300.6953125 C 992.6038818359375 4271.43310546875 998.0960083007812 4237.3984375 998.0960083007812 4237.3984375 L 1013.446716308594 4226.6875 L 1016.470275878906 4226.6875 L 1018.930908203125 4245.40283203125 L 1012.212890625 4249.0234375 L 1029.391357421875 4285.56298828125 L 1036.125122070312 4283.8212890625 L 1049.038208007812 4299.4423828125 L 1046.7080078125 4301.03271484375 Z M 1053.188354492188 4297.55126953125 L 1039.527221679688 4282.1806640625 L 1044.702514648438 4280.376953125 L 1056.613159179688 4294.77001953125 L 1053.188354492188 4297.55126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_bc\" src=\"{{ asset('Prototype/Simage/whatsapp_bc.png') }}\" srcset=\"{{ asset('Prototype/Simage/whatsapp_bc.png 1x, Simage/whatsapp_bc@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_bc\" src=\"{{ asset('Prototype/Simage/messenger_bc.png') }}\" srcset=\"{{ asset('Prototype/Simage/messenger_bc.png 1x, Simage/messenger_bc@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_bc\" src=\"{{ asset('Prototype/Simage/insta_bc.png') }}\" srcset=\"{{ asset('Prototype/Simage/insta_bc.png 1x, Simage/insta_bc@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_bc\" src=\"{{ asset('Prototype/Simage/youtube_bc.png') }}\" srcset=\"{{ asset('Prototype/Simage/youtube_bc.png 1x, Simage/youtube_bc@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_bc\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_bc\" src=\"{{ asset('Prototype/Simage/copyright_bc.png') }}\" srcset=\"{{ asset('Prototype/Simage/copyright_bc.png 1x, Simage/copyright_bc@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>", "sortie/sortie.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\sortie\\sortie.html.twig");
    }
}
